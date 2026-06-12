@extends('layouts.app')

@section('content')
    @include('partial.header')

    <div class="bg-gray-100 py-16 px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center text-red-700 mb-12 tracking-wide">SYSTEM CAPABILITIES</h2>

        <!-- Force 2x2 Layout on All Screens -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 max-w-6xl mx-auto">
            @php
                $capabilities = [
                    ['name' => 'LAND', 'route' => 'capability.land', 'image' => 'images/capabilities/bgland.jpg'],
                    ['name' => 'AIR', 'route' => 'capability.air', 'image' => 'images/capabilities/bgair.JPG'],
                    ['name' => 'SEA', 'route' => 'capability.sea', 'image' => 'images/capabilities/sea.jpg'],
                    ['name' => 'WEAPONS', 'route' => 'capability.weapons', 'image' => 'images/capabilities/bgweapon.jpg'],
                ];
            @endphp

            @foreach ($capabilities as $cap)
                <a href="{{ route($cap['route']) }}">
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden text-center hover:scale-105 transition transform duration-300">
                        <!-- Increased Image Height -->
                        <div class="w-full h-80">
                            <img src="{{ asset($cap['image']) }}" alt="{{ $cap['name'] }}"
                                class="w-full h-full object-cover opacity-70">
                        </div>
                        <div class="py-6 text-2xl font-bold text-gray-800 tracking-wide">{{ $cap['name'] }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    @include('partial.footer')
@endsection
