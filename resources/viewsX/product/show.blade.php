@extends('layouts.app') {{-- Or your layout file --}}
@section('title', $product->name)

@section('content')
<div class="bg-white shadow rounded-2xl p-6 max-w-5xl mx-auto mt-10">
    <!-- Header with actions -->
    <div class="flex flex-col md:flex-row md:justify-between md:items-center border-b pb-4 mb-6">
        <h1 class="text-3xl font-bold text-gray-800">{{ $product->name }}</h1>
        <div class="mt-4 md:mt-0 flex gap-2">
            <a href="{{ route('products.edit', $product) }}"
               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition">
                ✏️ Edit
            </a>
            <form action="{{ route('products.destroy', $product) }}" method="POST"
                  onsubmit="return confirm('Are you sure you want to delete this product?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-semibold rounded-lg hover:bg-red-700 transition">
                    🗑️ Delete
                </button>
            </form>
        </div>
    </div>

    <!-- Image + Info -->
    <div class="grid md:grid-cols-2 gap-6">
        <!-- Image -->
        <div>
            @if ($product->image && Storage::disk('public')->exists($product->image))
                <img src="{{ asset('storage/' . $product->image) }}"
                     alt="{{ $product->name }}"
                     class="rounded-xl w-full object-cover shadow">
            @else
                <div class="flex items-center justify-center h-64 bg-gray-100 text-gray-500 rounded-xl">
                    No Image Available
                </div>
            @endif
        </div>

        <!-- Details -->
        <div class="space-y-4">
            <div>
                <h2 class="text-xl font-semibold text-gray-700">Description</h2>
                <p class="text-gray-600">{{ $product->description ?? 'No description provided.' }}</p>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-gray-700">Additional Info</h2>
                <ul class="list-disc list-inside text-gray-600">
                    <li><strong>Category:</strong> {{ $product->category ?? 'Uncategorized' }}</li>
                    <li><strong>Created:</strong> {{ $product->created_at->format('M d, Y') }}</li>
                    <li><strong>Updated:</strong> {{ $product->updated_at->format('M d, Y') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Back Link -->
    <div class="mt-10">
        <a href="{{ route('products.index') }}"
           class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300 transition">
            ⬅ Back to Products
        </a>
    </div>
</div>
@endsection
