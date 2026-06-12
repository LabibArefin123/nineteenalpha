<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductItemController extends Controller
{
    public function index(Product $product)
    {
        $items = $product->items()->latest()->paginate(20);
        return view('product.product_items.index', compact('product', 'items'));
    }

    public function create(Product $product)
    {
        return view('product.product_items.create', compact('product'));
    }

    public function store(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'model_number' => 'nullable|string|max:100',
            'manufacturer' => 'nullable|string|max:255',
            'manufacture_date' => 'nullable|date',
            'specifications' => 'nullable|string',
            'status' => 'nullable|string|max:100',
            'notes' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('product/product_items', 'public');
        }

        $product->items()->create($validated);

        return redirect()
            ->route('products.items.index', $product)
            ->with('success', 'Item added successfully.');
    }

    public function edit(Product $product, ProductItem $item)
    {
        return view('product.product_item.edit', compact('product', 'item'));
    }

    public function update(Request $request, Product $product, ProductItem $item)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'model_number' => 'nullable|string|max:100',
            'manufacturer' => 'nullable|string|max:255',
            'manufacture_date' => 'nullable|date',
            'specifications' => 'nullable|string',
            'status' => 'nullable|string|max:100',
            'notes' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            // delete old image
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }

            $validated['image'] = $request->file('image')->store('product/product_items', 'public');
        }

        $item->update($validated);

        return redirect()
            ->route('products.items.index', $product)
            ->with('success', 'Item updated successfully.');
    }

    public function destroy(Product $product, ProductItem $item)
    {
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }

        $item->delete();

        return redirect()
            ->route('products.items.index', $product)
            ->with('success', 'Item deleted successfully.');
    }
}
