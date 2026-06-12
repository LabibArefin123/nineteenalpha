@csrf

<!-- Product Name -->
<div class="mb-5">
    <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
    <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}"
           class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
</div>

<!-- Description -->
<div class="mb-5">
    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
    <textarea name="description" id="description" rows="5"
              class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<!-- Category (optional) -->
<div class="mb-5">
    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
    <input type="text" name="category" id="category" value="{{ old('category', $product->category ?? '') }}"
           class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
</div>

<!-- Image Upload -->
<div class="mb-5">
    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
    <input type="file" name="image" id="image"
           class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
    @if (!empty($product) && $product->image && Storage::disk('public')->exists($product->image))
        <div class="mt-3">
            <img src="{{ asset('storage/' . $product->image) }}" alt="Current Image" class="w-32 h-32 object-cover rounded-lg shadow">
        </div>
    @endif
</div>

<!-- Submit Button -->
<div class="flex justify-end mt-6">
    <button type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 shadow">
        💾 Save Product
    </button>
</div>
