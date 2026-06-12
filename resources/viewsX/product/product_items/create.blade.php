@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    {{-- back link --}}
    <a href="{{ route('products.items.index', $product) }}" class="text-indigo-600 hover:underline text-sm">
        ← back to items
    </a>

    <h1 class="text-2xl font-bold mb-6">Add Item to {{ $product->name }}</h1>

    {{-- form --}}
    <form action="{{ route('products.items.store', $product) }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-6">
        @csrf

        {{-- grid two-column layout --}}
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Name -->
            <div>
                <label class="font-semibold">Name <span class="text-red-600">*</span></label>
                <input name="name" value="{{ old('name') }}" required
                       class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">
                @error('name') <p class="text-red-600 text-xs">{{ $message }}</p> @enderror
            </div>

            <!-- Category -->
            <div>
                <label class="font-semibold">Category</label>
                <input name="category" value="{{ old('category') }}"
                       class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">
            </div>

            <!-- Model Number -->
            <div>
                <label class="font-semibold">Model Number / Code Name</label>
                <input name="model_number" value="{{ old('model_number') }}"
                       class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">
            </div>

            <!-- Manufacturer -->
            <div>
                <label class="font-semibold">Manufacturer</label>
                <input name="manufacturer" value="{{ old('manufacturer') }}"
                       class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">
            </div>

            <!-- Manufacture Date -->
            <div>
                <label class="font-semibold">Date of Manufacture</label>
                <input name="manufacture_date" type="date" value="{{ old('manufacture_date') }}"
                       class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">
            </div>

            <!-- Status -->
            <div>
                <label class="font-semibold">Status</label>
                <select name="status"
                        class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">
                    <option value="active" {{ old('status')=='active' ? 'selected' : '' }}>Active</option>
                    <option value="retired" {{ old('status')=='retired' ? 'selected' : '' }}>Retired</option>
                    <option value="maintenance" {{ old('status')=='maintenance' ? 'selected' : '' }}>Maintenance</option>
                </select>
            </div>
        </div>

        <!-- Image -->
        <div>
            <label class="font-semibold">Image</label>
            <input type="file" name="image" accept="image/*"
                   class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">
            @error('image') <p class="text-red-600 text-xs">{{ $message }}</p> @enderror
        </div>

        <!-- Description -->
        <div>
            <label class="font-semibold">Description</label>
            <textarea name="description" rows="3"
                      class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">{{ old('description') }}</textarea>
        </div>

        <!-- Specifications -->
        <div>
            <label class="font-semibold">Specifications</label>
            <textarea name="specifications" rows="3"
                      class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">{{ old('specifications') }}</textarea>
        </div>

        <!-- Notes -->
        <div>
            <label class="font-semibold">Notes / Comments</label>
            <textarea name="notes" rows="3"
                      class="w-full mt-1 border rounded px-3 py-2 focus:ring-indigo-500">{{ old('notes') }}</textarea>
        </div>

        <button class="w-full md:w-auto bg-indigo-600 hover:bg-indigo-700 text-white font-semibold
                       px-6 py-2 rounded shadow">
            Save Item
        </button>
    </form>
</div>
@endsection
