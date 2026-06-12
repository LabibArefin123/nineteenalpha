@extends('layouts.app')

@section('content')
    @include('partial.header')

    <!-- HERO -->
    <div class="relative w-full h-[80vh] overflow-hidden">
        <img src="{{ asset('images/capabilities/sea/sea.jpeg') }}" alt="NineteenAlpha Sea" class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center px-4">
            <!-- Transparent Glass Card -->
            <div class="backdrop-blur-md bg-white/10 border border-white/30 rounded-xl px-8 py-6 max-w-4xl text-white text-center shadow-lg">
                <h1 class="text-5xl font-extrabold tracking-widest mb-4">SEA</h1>
                <p class="text-lg sm:text-xl font-light">
                    NineteenAlpha’s maritime solutions ensure superior coastal defense and deep-water ISR capabilities through advanced
                    patrol vessels and autonomous surface vehicles.
                </p>
            </div>
        </div>
    </div>


    <!-- SYSTEM CAPABILITIES -->
    <section class="bg-gray-100 py-20 px-4 sm:px-8 lg:px-16">
        <h2 class="text-4xl font-bold text-center text-gray-700 tracking-widest mb-4">
            SYSTEM CAPABILITIES
        </h2>

        <p class="text-center text-gray-600 text-base sm:text-lg max-w-3xl mx-auto mb-12">
            Naval platforms and autonomous sea-based systems integrated with long-range sensors and real-time mission
            support.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- CARD 1 -->
            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition transform duration-300">
                <img src="{{ asset('images/capabilities/sea/sea1.png') }}" alt="Subsystem 1" class="w-full h-56 object-cover">
                <div class="py-6 px-4">

                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2">
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Uniquely designed hydrofoil-assisted
                            catamaran to enhance high-speed patrol and interception
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Lightweight fibre composite structure
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Enhanced stealth architecture
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition transform duration-300">
                <img src="{{ asset('images/capabilities/sea/sea2.png') }}" alt="Subsystem 1" class="w-full h-56 object-cover">
                <div class="py-6 px-4">

                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2">
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Multiple mounting points for remote
                            controlled and manned weapon stations
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Enhanced troop safety with ballistic
                            protected cabin
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> High Back shock mitigating seats for shock
                            mitigation and operational comfortability
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span>Hot – bunks for long endurance missions
                        </li>

                    </ul>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition transform duration-300">
                <img src="{{ asset('images/capabilities/sea/sea3.JPG') }}" alt="Subsystem 1" class="w-full h-56 object-cover">
                <div class="py-6 px-4">

                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2">
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span>

                            Fully equipped control bridge inside cabin

                            Open design aft deck

                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Open design aft deck
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> State-of-the-art navigations systems
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Sensor and surveillance payload customisability
                            Intelligence Payloads
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('partial.footer')
@endsection
