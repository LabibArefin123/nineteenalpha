@extends('layouts.app')

@section('content')
    @include('partial.header', ['title' => 'Product Items'])
    <div class="max-w-7xl mx-auto px-4 pt-8">
        {{-- Header --}}
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-2xl font-bold">Items for: {{ $product->name }}</h1>
                <p class="text-sm text-gray-500">{{ $items->total() }} total {{ Str::plural('item', $items->total()) }}</p>
            </div>

            <div class="flex space-x-3">
                {{-- Go Back --}}
                <a href="{{ route('products.index') }}"
                    class="inline-flex items-center px-5 py-2 rounded-full bg-gray-200 text-gray-800 font-semibold shadow hover:bg-gray-300 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    Go Back
                </a>

                {{-- Add Item --}}
                <a href="{{ route('products.items.create', $product) }}"
                    class="inline-flex items-center px-5 py-2 rounded-full bg-gradient-to-r
                  from-indigo-600 to-purple-600 text-white font-semibold shadow-lg
                  hover:scale-105 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Item
                </a>
            </div>
        </div>

        {{-- Item Cards Grid --}}
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse ($items as $item)
                <div class="bg-white rounded-lg shadow group hover:shadow-xl transition overflow-hidden">
                    {{-- Image --}}
                    <div class="h-40 bg-gray-100">
                        @if ($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400">
                                No Image
                            </div>
                        @endif
                    </div>

                    {{-- Info --}}
                    <div class="p-4 space-y-1 text-sm">
                        <h2 class="font-bold text-lg truncate">{{ $item->name }}</h2>
                        <p class="text-gray-500">{{ $item->category ?? 'Uncategorised' }}</p>
                        <p class="text-gray-600 line-clamp-2">{{ Str::limit($item->description, 100) }}</p>
                        <p class="text-xs text-gray-400">Status: {{ $item->status ? ucfirst($item->status) : 'N/A' }}</p>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500 py-10">
                    No items found for this product.
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if ($items->hasPages())
            <div class="mt-8 flex justify-center">
                {{ $items->links() }}
            </div>
        @endif
    </div>

    {{-- Footer --}}
    @include('partial.footer')
@endsection
