@extends('layouts.app')

@section('content')
    @include('partial.header')

    <!-- ──────────────  HERO  ────────────── -->
    <div class="relative w-full h-[80vh] overflow-hidden">
        <img src="{{ asset('images/air.jpg') }}" alt="NineteenAlpha Air" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center text-center text-white px-4">
            <h1 class="text-5xl font-extrabold tracking-widest mb-4">AIR</h1>
            <p class="max-w-4xl text-lg sm:text-xl font-light">
                NineteenAlpha’s Air platform presents a cutting-edge solution to meet the growing demand for intelligence,
                surveillance and reconnaissance (ISR) capabilities.
            </p>
        </div>
    </div>

    <!-- ──────────  SYSTEM CAPABILITIES  ────────── -->
    <section class="bg-gray-100 py-20 px-4 sm:px-8 lg:px-16">
        <h2 class="text-4xl font-bold text-center text-gray-700 tracking-widest mb-4">
            SYSTEM CAPABILITIES
        </h2>

        <p class="text-center text-gray-600 text-base sm:text-lg max-w-3xl mx-auto mb-12">
            NineteenAlpha has sourced the system to specifically support the integration of the
            following subsystems into its ISR (Intelligence, Surveillance & Reconnaissance) capabilities:
        </p>

        <!-- 3 × 1 CARD ROW -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- CARD 1 -->
            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition transform duration-300">
                <img src="{{ asset('images/air1.jpg') }}" alt="Subsystem 1" class="w-full h-56 object-cover">
                <div class="py-6 px-4">

                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2">
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> ISR, COMINT and SIGINT Payload Integration
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Mission System and Sensor Fusion
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Communications and Networking Systems
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Computing Solutions
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Simulators
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition transform duration-300">
                <img src="{{ asset('images/air2.jpg') }}" alt="Subsystem 1" class="w-full h-56 object-cover">
                <div class="py-6 px-4">

                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2">
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Mission Payload Control
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Manual and Full Autonomous flight Capability
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Manual and Full Autonomous
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span>Line of Sight Communications (LOSCom)
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span>Satellite Communications (SatCom)
                        </li>
                    </ul>
                </div>
            </div>

             <div class="bg-white rounded-xl shadow-md p-6 hover:scale-105 transition transform duration-300">
                <img src="{{ asset('images/air3.png') }}" alt="Subsystem 1" class="w-full h-56 object-cover">
                <div class="py-6 px-4">
       
                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2">
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Synthetic Aperture Radar (SAR)
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Inverse Synthetic Aperture Radar (ISAR)
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> EO/IR Gimble
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Optional Integration of Customer Intelligence Payloads
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 font-bold mr-2">✓</span> Brake assisted for ground control
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('partial.footer')
@endsection
