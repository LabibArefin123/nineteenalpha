@extends('layouts.app')

@section('content')
    @include('partial.header')

    <!-- HERO -->
    <div class="relative w-full h-[80vh] overflow-hidden">
        <img src="{{ asset('images/bgland.jpg') }}" alt="NineteenAlpha Land" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center text-center text-white px-4">
            <h1 class="text-5xl font-extrabold tracking-widest mb-4">LAND</h1>
            <p class="max-w-4xl text-lg sm:text-xl font-light">
                NineteenAlpha’s Land systems are designed for operational superiority across diverse terrain, offering integrated
                command and control, unmanned ground systems, and armoured mobility solutions.
            </p>
        </div>
    </div>

    <!-- SYSTEM CAPABILITIES -->
    <section class="bg-gray-100 py-20 px-4 sm:px-8 lg:px-16">
        <h2 class="text-4xl font-bold text-center text-gray-700 tracking-widest mb-4">
            SYSTEM CAPABILITIES
        </h2>

        <p class="text-center text-gray-600 text-base sm:text-lg max-w-3xl mx-auto mb-12">
            Land-based ISR solutions developed by NineteenAlpha combine state-of-the-art mobility platforms with electronic warfare
            and AI-assisted targeting technologies.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-8xl mx-auto">
            <!-- CARD 1 -->
            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition transform duration-300">
                <img src="{{ asset('images/land1.png') }}" alt="Subsystem 1" class="w-full h-56 object-cover">
                
            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition transform duration-300">
                <img src="{{ asset('images/land2.png') }}" alt="Subsystem 1" class="w-full h-56 object-cover">
                
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition transform duration-300">
                <img src="{{ asset('images/land3.png') }}" alt="Subsystem 1" class="w-full h-56 object-cover">
                
            </div>
        </div>
    </section>

    @include('partial.footer')
@endsection
