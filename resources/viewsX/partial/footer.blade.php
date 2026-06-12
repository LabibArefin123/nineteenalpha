<div id="contact" class="bg-neutral-900 text-gray-200 px-6 md:px-20 py-2 ">
    <div class="grid md:grid-cols-4 gap-12 mt-12">
        <div>
            <img src="{{ asset('images/logo2.png') }}" alt="Nineteen Alpha" class="h-28 mb-4">

            <p class="mb-6">Empowering Defense, Defending Future</p>
            <div class="flex gap-4">
                <!-- Facebook -->
                <a href="https://facebook.com" target="_blank"
                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow hover:scale-105 transition">
                    <img src="{{ asset('images/social/facebook.png') }}" alt="Facebook" class="w-5 h-5">
                </a>

                <!-- Twitter -->
                <a href="https://twitter.com" target="_blank"
                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow hover:scale-105 transition">
                    <img src="{{ asset('images/social/x.png') }}" alt="Twitter" class="w-5 h-5">
                </a>

                <!-- LinkedIn -->
                <a href="https://linkedin.com" target="_blank"
                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow hover:scale-105 transition">
                    <img src="{{ asset('images/social/linkedin.png') }}" alt="LinkedIn" class="w-5 h-5">
                </a>
            </div>


        </div>
        <div>
            <div class="font-bold mb-4">Quick Links</div>
            <div class="mb-2"><a href="{{ route('home') }}" class="hover:text-red-400">Home</a></div>
            <div class="mb-2"><a href="{{ route('about') }}" class="hover:text-red-400">About Us</a></div>
            <div class="mb-2"><a href="{{ route('products.index') }}" class="hover:text-red-400">Products</a></div>
            <div class="mb-2"><a href="{{ route('capabilities') }}" class="hover:text-red-400">Capabilities</a></div>
            <div class="mb-2"><a href="{{ route('home') }}" class="hover:text-red-400">Contact Us</a></div>
        </div>

        <div>
            <div class="font-bold mb-4">Products</div>
            @foreach (['Aerospace', 'Land', 'Marine', 'Weapons'] as $prod)
                <div class="mb-2">{{ $prod }}</div>
            @endforeach
        </div>
        <div>
            <div class="font-bold mb-4">Contact Info</div>

            <div class="mb-2">
                📞
                <a href="tel:+8801711190343" class="text-blue-600 hover:underline" target="_blank"
                    rel="noopener noreferrer">
                    +880-171-119-0343
                </a>
            </div>

            <div class="mb-2">
                📧
                <a href="mailto:info@nineteenalpha.com" class="text-blue-600 hover:underline" target="_blank"
                    rel="noopener noreferrer">
                    info@nineteenalpha.com
                </a>
            </div>

            <div class="mb-2">
                📍
                <a href="https://www.google.com/maps/search/?api=1&query=House+01,+Road+01,+Pallabi,+Mirpur-2,+Dhaka-1216,+Bangladesh"
                    class="text-blue-600 hover:underline" target="_blank" rel="noopener noreferrer">
                    House - 908, Road - 12 (west), Mirpur DOHS, Mirpur 1216, Bangladesh
                </a>
            </div>

            <div>
                🌐
                <a href="https://www.nineteenalpha.com" class="text-blue-600 hover:underline" target="_blank"
                    rel="noopener noreferrer">
                    www.nineteenalpha.com
                </a>
            </div>

        </div>
    </div>
    <div class="border-t border-gray-800 mt-5 pt-1 text-center text-sm">
        © <span id="year"></span> Nineteen Alpha. All rights reserved.
    </div>
</div>

<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
