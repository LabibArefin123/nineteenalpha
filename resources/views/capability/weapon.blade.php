@extends('layouts.app')

@section('content')
    @include('partial.header')

    <!-- HERO -->
    <div class="relative w-full h-[80vh] sm:h-[60vh] xs:h-[50vh] overflow-hidden">
        <img src="{{ asset('images/capabilities/weapon/weapon.jpg') }}" alt="NineteenAlpha Weapons" class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center px-4">
            <!-- Transparent Glass Card -->
            <div class="backdrop-blur-md bg-white/10 border border-white/30 rounded-xl px-8 py-6 max-w-4xl text-white text-center shadow-lg">
                <h1 class="text-5xl font-extrabold tracking-widest mb-4">WEAPON</h1>
                <p class="text-lg sm:text-xl font-light">
                    NineteenAlpha delivers advanced weapon systems and smart armaments designed for strategic advantage in air, land, and sea domains.
                </p>
            </div>
        </div>
    </div>

    <!-- SYSTEM CAPABILITIES -->
    <section class="bg-gray-100 py-16 px-4 sm:px-8 lg:px-16">
        <h2 class="text-2xl sm:text-4xl font-bold text-center text-gray-700 tracking-widest mb-4">
            SYSTEM CAPABILITIES
        </h2>

        <p class="text-center text-gray-600 text-sm sm:text-lg max-w-2xl mx-auto mb-10">
            Precision-guided munitions, missile integration, and multi-platform weapon deployment systems ensuring battlefield supremacy.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8 max-w-6xl mx-auto">
            <!-- CARD 1 -->
            <div class="bg-white rounded-xl shadow-md p-4 sm:p-6 hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/capabilities/weapon/weapon1.JPG') }}" alt="Weapon System 1" class="w-full h-48 sm:h-56 object-cover rounded-md">
                <div class="pt-4 sm:pt-6 px-2 sm:px-4">
                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2">
                        <li class="flex items-start"><span class="text-green-500 font-bold mr-2">✓</span> High-precision remote weapon stations</li>
                        <li class="flex items-start"><span class="text-green-500 font-bold mr-2">✓</span> Multi-caliber compatibility and modular design</li>
                        <li class="flex items-start"><span class="text-green-500 font-bold mr-2">✓</span> Target tracking and auto-lock system</li>
                    </ul>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-xl shadow-md p-4 sm:p-6 hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/capabilities/weapon/weapon2.JPG') }}" alt="Weapon System 2" class="w-full h-48 sm:h-56 object-cover rounded-md">
                <div class="pt-4 sm:pt-6 px-2 sm:px-4">
                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2">
                        <li class="flex items-start"><span class="text-green-500 font-bold mr-2">✓</span> Advanced fire control systems for integrated missions</li>
                        <li class="flex items-start"><span class="text-green-500 font-bold mr-2">✓</span> Compatibility with naval and ground vehicles</li>
                        <li class="flex items-start"><span class="text-green-500 font-bold mr-2">✓</span> Low recoil smart launchers</li>
                    </ul>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="bg-white rounded-xl shadow-md p-4 sm:p-6 hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/capabilities/weapon/weapon3.jpeg') }}" alt="Weapon System 3" class="w-full h-48 sm:h-56 object-cover rounded-md">
                <div class="pt-4 sm:pt-6 px-2 sm:px-4">
                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2">
                        <li class="flex items-start"><span class="text-green-500 font-bold mr-2">✓</span> Real-time command and control integration</li>
                        <li class="flex items-start"><span class="text-green-500 font-bold mr-2">✓</span> Autonomous target engagement capability</li>
                        <li class="flex items-start"><span class="text-green-500 font-bold mr-2">✓</span> Interoperability with NATO-standard systems</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('partial.footer')
@endsection
