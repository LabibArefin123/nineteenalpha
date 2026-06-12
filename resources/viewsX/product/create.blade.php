@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 max-w-md">
    <h2 class="text-3xl font-bold mb-6">Add New Product</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Product Name" required
               class="w-full border rounded px-3 py-2" value="{{ old('name') }}">

        <input type="file" name="image" accept="image/*" required
               class="w-full border rounded px-3 py-2">

        <div class="flex justify-between">
            <a href="{{ route('products.index') }}" class="btn btn-outline px-4 py-2 rounded">Cancel</a>
            <button type="submit" class="btn btn-primary px-4 py-2 rounded">Save</button>
        </div>
    </form>
</div>
@endsection
