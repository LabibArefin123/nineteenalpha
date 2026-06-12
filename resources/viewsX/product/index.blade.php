@extends('layouts.app')

@section('content')
    <!-- Header Section -->
    @include('partial.header', ['title' => 'Products & Services'])



    <div id="headerSection" class="relative group h-[500px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image:url('{{ asset('images/gun_wallpaper.jpg') }}')">

        {{-- dark overlay --}}
        <div class="absolute inset-0 "></div>

        {{-- title --}}
        <h2 class="relative z-10 text-4xl font-bold">Products&nbsp;&amp;&nbsp;Services</h2>

        {{-- hidden file input --}}
        <input id="headerImageInput" type="file" accept="image/*" class="hidden">
    </div>




    <!-- Add Button -->
{{--    <div class="flex justify-end max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 space-x-4">--}}
{{--        <a href="{{ route('home') }}"--}}
{{--            class="inline-flex items-center px-5 py-2 rounded-full bg-gray-300 text-gray-700 font-semibold shadow hover:bg-gray-400 transition-colors duration-300">--}}
{{--            <!-- Back arrow icon -->--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"--}}
{{--                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                <path d="M15 19l-7-7 7-7" />--}}
{{--            </svg>--}}
{{--            Back--}}
{{--        </a>--}}

{{--        <a href="{{ route('products.create') }}"--}}
{{--            class="inline-flex items-center px-5 py-2 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-semibold shadow-lg hover:scale-105 transition-transform duration-300">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"--}}
{{--                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                <path d="M12 4v16m8-8H4" />--}}
{{--            </svg>--}}
{{--            Add Product--}}
{{--        </a>--}}
{{--    </div>--}}


    <!-- Product Grid -->
    <div class="bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
{{--            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 mt-8">--}}
{{--                @forelse ($products as $product)--}}
{{--                    <!-- card -->--}}
{{--                    <a href="{{ route('products.items.index', $product) }}"--}}
{{--                        class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">--}}

{{--                        <!-- item-count badge -->--}}
{{--                        <span--}}
{{--                            class="absolute top-3 left-3 bg-indigo-600 text-white text-xs font-semibold rounded-full px-3 py-1 z-20 shadow">--}}
{{--                            {{ $product->items_count }} {{ Str::plural('item', $product->items_count) }}--}}
{{--                        </span>--}}

{{--                        <!-- action buttons -->--}}
{{--                        <div--}}
{{--                            class="absolute top-3 right-3 flex space-x-2 z-20 opacity-0 group-hover:opacity-100 transition-opacity">--}}
{{--                            <button type="button" onclick="event.preventDefault(); editProduct({{ $product->id }});"--}}
{{--                                class="bg-white text-gray-600 hover:text-blue-500 rounded-full p-1 shadow" title="Edit">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"--}}
{{--                                    stroke="currentColor" stroke-width="2">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5" />--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                            <button type="button" onclick="event.preventDefault(); deleteProduct({{ $product->id }});"--}}
{{--                                class="bg-white text-gray-600 hover:text-red-500 rounded-full p-1 shadow" title="Delete">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"--}}
{{--                                    stroke="currentColor" stroke-width="2">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </div>--}}

{{--                        <!-- product image -->--}}
{{--                        <div class="h-60 overflow-hidden">--}}
{{--                            @if ($product->image)--}}
{{--                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"--}}
{{--                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">--}}
{{--                            @else--}}
{{--                                <div--}}
{{--                                    class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400 text-xl">--}}
{{--                                    No Image--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                        <!-- product info -->--}}
{{--                        <div--}}
{{--                            class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">--}}
{{--                            <h2 class="text-lg font-bold mb-2">{{ $product->name }}</h2>--}}
{{--                            <p class="text-sm leading-relaxed">{{ $product->description ?? 'No description provided.' }}--}}
{{--                            </p>--}}
{{--                            <span class="mt-2 text-indigo-300 text-sm underline">View items</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @empty--}}
{{--                    <div class="col-span-full text-center text-gray-500 text-lg">--}}
{{--                        No products available.--}}
{{--                    </div>--}}
{{--                @endforelse--}}
{{--            </div>--}}


            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 mt-8">
                <!-- Product Card 1 -->
                <a href="#"
                   class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">

                    <div class="h-60 overflow-hidden">
                        <img src="{{ asset('images/products/drone/Autel-EVO-II-drone.jpeg') }}" alt="Product 1"
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                        <h2 class="text-lg font-bold mb-2">Drone</h2>
                        <p class="text-sm leading-relaxed">A drone is an unmanned aerial vehicle (UAV) that is operated remotely or autonomously using software-controlled flight plans. Drones are commonly used for aerial photography, surveillance, delivery services, agriculture, and recreational purposes.</p>
                    </div>
                </a>

                <!-- Product Card 2 -->
                <a href="#"
                   class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">

                    <div class="h-60 overflow-hidden">
                        <img src="{{ asset('images/products/antidrone/Oerlikon Skyshield.jpg') }}" alt="Product 2"
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                        <h2 class="text-lg font-bold mb-2">Anti-Drone</h2>
                        <p class="text-sm leading-relaxed">An anti-drone system is a technology designed to detect, track, and neutralize unauthorized or hostile drones. These systems use methods like radar, RF sensors, jamming signals, physical interceptors to prevent drones from entering restricted, sensitive areas.</p>
                    </div>
                </a>

                <!-- Product Card 3 -->
                <a href="#"
                   class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">

                    <div class="h-60 overflow-hidden">
                        <img src="{{ asset('images/products/military equipment/TRG-300 Tiger.JPG') }}" alt="Product 2"
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                        <h2 class="text-lg font-bold mb-2">Multiple Launch Rocket System</h2>
                        <p class="text-sm leading-relaxed">ChatGPT said:
                            A Multiple Launch Rocket System (MLRS) is a mobile artillery system that fires multiple rockets in rapid succession. It is used to deliver powerful, long-range attacks against enemy positions.</p>
                    </div>
                </a>

                <!-- Product Card 4 -->
                <a href="#"
                   class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">

                    <div class="h-60 overflow-hidden">
                        <img src="{{ asset('images/products/jammer/1km-Jammer-1.jpg') }}" alt="Product 2"
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                        <h2 class="text-lg font-bold mb-2">Jammer</h2>
                        <p class="text-sm leading-relaxed">A jammer is a device that blocks or interferes with wireless signals like GPS, radio, or mobile networks. It is used to disrupt communication between devices, often for security, military, or anti-drone purposes.</p>
                    </div>
                </a>

                <!-- Product Card 5 -->
                <a href="#"
                   class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">

                    <div class="h-60 overflow-hidden">
                        <img src="{{ asset('images/products/land1.png') }}" alt="Product 2"
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                        <h2 class="text-lg font-bold mb-2">Armed Vehicles</h2>
                        <p class="text-sm leading-relaxed">Armed vehicles are military or security vehicles equipped with weapons like guns or missiles. They are used for combat, patrol, and protection in conflict zones.</p>
                    </div>
                </a>

                <!-- Product Card 6 -->
                <a href="#"
                   class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">

                    <div class="h-60 overflow-hidden">
                        <img src="{{ asset('images/products/aerospace.jpg') }}" alt="Product 2"
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                        <h2 class="text-lg font-bold mb-2">Fighter Aircraft</h2>
                        <p class="text-sm leading-relaxed">A fighter aircraft is a military airplane designed for air-to-air combat against other aircraft. It is fast, agile, and equipped with advanced weapons and radar systems. Fighter jets are used to defend airspace, attack enemy targets, and maintain air superiority during conflicts.</p>
                    </div>
                </a>

                <!-- Product Card 7 -->
                <a href="#"
                   class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">

                    <div class="h-60 overflow-hidden">
                        <img src="{{ asset('images/products/tank/Type 62 Light Tanks.jpg') }}" alt="Product 2"
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                        <h2 class="text-lg font-bold mb-2">Tank</h2>
                        <p class="text-sm leading-relaxed">A tank is a heavily armored combat vehicle equipped with a large cannon and machine guns, designed for front-line ground warfare.

                        </p>
                    </div>
                </a>

                <!-- Product Card 8 -->
                <a href="#"
                   class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">

                    <div class="h-60 overflow-hidden">
                        <img src="{{ asset('images/products/helicopter/Bell 407 GXi.jpg') }}" alt="Product 2"
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                        <h2 class="text-lg font-bold mb-2">Helicopter</h2>
                        <p class="text-sm leading-relaxed">A helicopter is a type of aircraft that uses rotating blades (rotors) to take off, hover, and used for transport, rescue missions, surveillance, and military operations.</p>
                    </div>
                </a>

                <!-- Product Card 9 -->
                <a href="#"
                   class="relative group bg-white shadow-md rounded-md overflow-hidden hover:shadow-lg transition duration-300">

                    <div class="h-60 overflow-hidden">
                        <img src="{{ asset('images/products/ship/BNS Padma.jpg') }}" alt="Product 2"
                             class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="bg-black text-white p-4 h-48 flex flex-col justify-center items-center text-center overflow-y-auto">
                        <h2 class="text-lg font-bold mb-2">Ship</h2>
                        <p class="text-sm leading-relaxed">A ship is a large watercraft designed to transport people or goods across seas and oceans, it is used for commercial trade, military operations, travel, and exploration.</p>
                    </div>
                </a>
            </div>



            <!-- pagination -->
            <div class="mt-10 flex justify-center">


                <!-- Floating Edit Modal -->


                <!-- JavaScript -->

            </div>
        </div>
    </div>
    @include('partial.footer')
@endsection
