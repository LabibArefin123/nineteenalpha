<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;   // <-- add this at top

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withCount('items')->paginate(50); // or chunk like before
        return view('product.index', compact('products'));
    }

    public function headerImage(Request $request)
    {
        $relativePath = 'header/product-header.jpg';

        // DELETE header
        if ($request->isMethod('delete')) {
            Storage::disk('public')->delete($relativePath);

            return response()->json([
                'message' => 'Header image removed.',
            ]);
        }

        // UPLOAD header
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        // Delete old image
        Storage::disk('public')->delete($relativePath);

        // Store new image with fixed name in 'header' folder on public disk
        $request->file('image')->storeAs('header', 'product-header.jpg', 'public');

        // Return new URL with cache-buster
        $url = asset('storage/' . $relativePath) . '?' . time();

        return response()->json([
            'message' => 'Header image updated.',
            'url'     => $url,
        ]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('image')->store('product', 'public');

        Product::create([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function showX($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($product->image) {
                \Storage::disk('public')->delete($product->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store('product', 'public');
        }

        $product->update($data);

        return response()->json(['message' => 'Product updated successfully.']);
    }



    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }

        $product->delete();

        return response()->json(['message' => 'Product deleted successfully.']);
    }
}
