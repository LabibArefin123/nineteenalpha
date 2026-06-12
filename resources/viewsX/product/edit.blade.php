@extends('layouts.app')
@section('title', 'Edit Product')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 mt-10 rounded-2xl shadow">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">🛠️ Edit Product</h1>

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('product.form')
    </form>

    <div class="mt-4">
        <a href="{{ route('products.show', $product) }}" class="text-blue-600 hover:underline">← Back to Product Details</a>
    </div>
</div>
@endsection
