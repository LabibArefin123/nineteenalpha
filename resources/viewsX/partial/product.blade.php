<div id="products" class="bg-white py-16 px-6 md:px-20 relative">
    <!-- Header -->
    <div class="relative flex items-center mb-8 flex-wrap">

        <!-- Left placeholder for balance -->
        <div class="w-24 md:w-32" aria-hidden="true"></div>

        <!-- Centered heading -->
        <h2
            class="absolute left-1/2 transform -translate-x-1/2 text-3xl md:text-4xl font-bold text-gray-900 whitespace-nowrap">
            Our Products
        </h2>

        <!-- Button on the right -->
        <div class="ml-auto">
            <a href="{{ route('products.index') }}"
                class="btn btn-primary rounded-full px-4 py-2 text-sm font-semibold shadow hover:bg-blue-600">
                📋 All Products
            </a>
        </div>

    </div>


    <!-- Product Pages -->
    <div id="productPages" class="space-y-8">
        <div class="product-page grid grid-cols-1 sm:grid-cols-2 gap-6">

            <!-- Product 1 -->
            <a href="#"
               class="relative group overflow-hidden rounded-lg block h-80">
                <img src="{{ asset('images/products/drone/Autel-EVO-II-drone.jpeg') }}" alt="Product 1"
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 group-hover:bg-opacity-60 transition duration-300"></div>
                <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/60 to-transparent">
                    <div class="text-white text-lg font-bold">Drone</div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center px-4 opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="text-white text-center text-sm bg-black/50 px-4 py-2 rounded-lg backdrop-blur-sm">
                        A drone is an unmanned aerial vehicle (UAV) that is operated remotely or autonomously using software-controlled flight plans. Drones are commonly used for aerial photography, surveillance, delivery services, agriculture, and recreational purposes.
                    </div>
                </div>
            </a>

            <!-- Product 2 -->
            <a href="#"
               class="relative group overflow-hidden rounded-lg block h-80">
                <img src="{{ asset('images/products/antidrone/Oerlikon Skyshield.jpg') }}" alt="Product 2"
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 group-hover:bg-opacity-60 transition duration-300"></div>
                <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/60 to-transparent">
                    <div class="text-white text-lg font-bold">Anti-Drone</div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center px-4 opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="text-white text-center text-sm bg-black/50 px-4 py-2 rounded-lg backdrop-blur-sm">
                        An anti-drone system is a technology designed to detect, track, and neutralize unauthorized or hostile drones. These systems use methods like radar, radio frequency (RF) sensors, jamming signals, or even physical interceptors to prevent drones from entering restricted or sensitive areas.
                    </div>
                </div>
            </a>

            <!-- Product 3 -->
            <a href="#"
               class="relative group overflow-hidden rounded-lg block h-80">
                <img src="{{ asset('images/products/military equipment/TRG-300 Tiger.JPG') }}" alt="Product 3"
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 group-hover:bg-opacity-60 transition duration-300"></div>
                <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/60 to-transparent">
                    <div class="text-white text-lg font-bold">Multiple Launch Rocket System</div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center px-4 opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="text-white text-center text-sm bg-black/50 px-4 py-2 rounded-lg backdrop-blur-sm">
                        A Multiple Launch Rocket System (MLRS) is a rocket artillery system that can fire multiple rockets in quick succession from a single vehicle-mounted launcher. It is used to deliver heavy firepower over a wide area, making it effective against enemy troops, vehicles, and fortifications.
                    </div>
                </div>
            </a>

            <!-- Product 4 -->
            <a href="#"
               class="relative group overflow-hidden rounded-lg block h-80">
                <img src="{{ asset('images/products/jammer/1km-Jammer-1.jpg') }}" alt="Product 4"
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-30 group-hover:bg-opacity-60 transition duration-300"></div>
                <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/60 to-transparent">
                    <div class="text-white text-lg font-bold">Jammer</div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center px-4 opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="text-white text-center text-sm bg-black/50 px-4 py-2 rounded-lg backdrop-blur-sm">
                        A jammer is a device that blocks or interferes with wireless signals like GPS, radio, or mobile networks. It is used to disrupt communication between devices, often for security, military, or anti-drone purposes.
                    </div>
                </div>
            </a>

        </div>
    </div>

    {{--    <div id="productPages" class="space-y-8">--}}
{{--        @foreach ($products->chunk(4) as $pageIndex => $chunk)--}}
{{--            <div class="product-page grid grid-cols-1 sm:grid-cols-2 gap-6 {{ $pageIndex > 0 ? 'hidden' : '' }}">--}}
{{--                @foreach ($chunk as $product)--}}
{{--                    <a href="{{ route('products.items.index', $product) }}"--}}
{{--                        class="relative group overflow-hidden rounded-lg block h-80">--}}
{{--                        @if ($product->image && Storage::disk('public')->exists($product->image))--}}
{{--                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"--}}
{{--                                class="w-full h-full object-cover">--}}
{{--                        @else--}}
{{--                            <div class="flex items-center justify-center h-full text-gray-500 bg-gray-100">--}}
{{--                                No Image--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        <!-- Overlay on Hover -->--}}
{{--                        <div--}}
{{--                            class="absolute inset-0 bg-black bg-opacity-30 group-hover:bg-opacity-60 transition duration-300">--}}
{{--                        </div>--}}

{{--                        <!-- Product Name -->--}}
{{--                        <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/60 to-transparent">--}}
{{--                            <div class="text-white text-lg font-bold">{{ $product->name }}</div>--}}
{{--                        </div>--}}

{{--                        <!-- Description on Hover -->--}}
{{--                        <div--}}
{{--                            class="absolute inset-0 flex items-center justify-center px-4 opacity-0 group-hover:opacity-100 transition duration-300">--}}
{{--                            <div--}}
{{--                                class="text-white text-center text-sm bg-black/50 px-4 py-2 rounded-lg backdrop-blur-sm">--}}
{{--                                {{ Str::limit($product->description ?? 'Product description here', 80) }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

    <!-- Arrows + Pagination Dots -->
{{--    @if ($products->count() > 4)--}}
{{--        <div class="flex justify-center items-center gap-3 mt-6">--}}
{{--            <button onclick="prevProductPage()" id="prevArrow"--}}
{{--                class="text-xl px-3 py-1 rounded-full bg-gray-200 hover:bg-gray-300 disabled:opacity-40">--}}
{{--                ◀--}}
{{--            </button>--}}

{{--            @for ($i = 0; $i < ceil($products->count() / 4); $i++)--}}
{{--                <button onclick="showProductPage({{ $i }})"--}}
{{--                    class="w-3 h-3 rounded-full transition bg-gray-300" id="dot-{{ $i }}"></button>--}}
{{--            @endfor--}}

{{--            <button onclick="nextProductPage()" id="nextArrow"--}}
{{--                class="text-xl px-3 py-1 rounded-full bg-gray-200 hover:bg-gray-300 disabled:opacity-40">--}}
{{--                ▶--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    @endif--}}

    <!-- Script -->
    <script>
        let currentPage = 0;
        const totalPages = {{ ceil($products->count() / 4) }};

        function showProductPage(index) {
            currentPage = index;

            document.querySelectorAll('.product-page').forEach((page, i) => {
                page.classList.toggle('hidden', i !== index);
            });

            document.querySelectorAll('[id^="dot-"]').forEach(dot => {
                dot.classList.remove('bg-blue-500');
                dot.classList.add('bg-gray-300');
            });

            const activeDot = document.getElementById(`dot-${index}`);
            if (activeDot) {
                activeDot.classList.add('bg-blue-500');
                activeDot.classList.remove('bg-gray-300');
            }

            updateArrowStates();
        }

        function prevProductPage() {
            if (currentPage > 0) {
                showProductPage(currentPage - 1);
            }
        }

        function nextProductPage() {
            if (currentPage < totalPages - 1) {
                showProductPage(currentPage + 1);
            }
        }

        function updateArrowStates() {
            document.getElementById('prevArrow').disabled = currentPage === 0;
            document.getElementById('nextArrow').disabled = currentPage === totalPages - 1;
        }

        document.addEventListener('DOMContentLoaded', () => {
            showProductPage(0);
        });
    </script>
</div>
