@extends('layouts.app')
@section('content')
@include('partial.header', ['title' => 'Contact Us'])

<!-- Hero Section -->
<section class="relative bg-cover bg-center h-[400px] flex items-center justify-center text-white" style="background-image: url('{{ asset('images/contact.jpg') }}')">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 text-center">
        <h1 class="text-5xl font-extrabold uppercase tracking-widest">Contact Us</h1>
        <p class="mt-4 text-lg text-gray-300">Strength. Precision. Response.</p>
    </div>
</section>

<!-- Contact Information & Form -->
<section id="contact-us" class="bg-white py-20 px-6 md:px-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 shadow-2xl rounded-3xl overflow-hidden border border-neutral-800">
        <!-- Contact Info -->
        <div class="bg-neutral-900 text-gray-100 p-10 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-red-500 mb-8 uppercase">HQ Communication</h2>

            <div class="space-y-5">
                <div>
                    <span class="text-red-400 font-semibold">Phone:</span>
                    <div>+8801711190343</div>
                </div>

                <div>
                    <span class="text-red-400 font-semibold">Emails:</span>
                    <div>mahfuz@nineteenalpha.com</div>
                    <div>info@nineteenalpha.com</div>
                </div>

                <div>
                    <span class="text-red-400 font-semibold">Address:</span>
                    <p>House 908, Road 12 (west), Mirpur DOHS, Mirpur 1216, Bangladesh</p>
                </div>

                <div>
                    <span class="text-red-400 font-semibold">Command ID:</span>
                    <img src="{{ asset('images/barcode.JPG') }}" alt="Colonel Mahfuzur Rahman" class="mt-2 w-28 h-28 object-cover rounded shadow-md">
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="p-10 bg-white flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Engage with Us</h2>

            @if (session('success'))
                <div class="mb-4 p-4 text-green-700 bg-green-100 rounded-xl border border-green-300">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-4 text-red-700 bg-red-100 rounded-xl border border-red-300">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-5">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 font-semibold mb-1">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500"
                        required />
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500"
                        required />
                </div>

                <div>
                    <label for="address" class="block text-gray-700 font-semibold mb-1">Message</label>
                    <textarea name="address" id="address" rows="4" placeholder="Type your message"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                </div>

                <button type="submit"
                    class="w-full mt-4 bg-red-600 text-white font-semibold py-3 rounded-xl hover:bg-red-700 transition duration-300">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Embedded Map -->
<section class="bg-gray-100 py-16 px-6 md:px-20">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10 uppercase">Headquarters Map</h2>
    <div class="w-full h-[400px] rounded-xl overflow-hidden shadow-xl border border-gray-300">
        <iframe class="w-full h-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7042039392226!2d90.35735687432636!3d23.793152687244896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74bb0000001%3A0x12a927cf1129731f!2sMirpur%20DOHS!5e0!3m2!1sen!2sbd!4v1684939184873"
            frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<!-- Quick Contact Options -->
{{--<section class="py-16 bg-neutral-900 text-white">--}}
{{--    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-10 text-center">--}}
{{--        <div>--}}
{{--            <svg class="mx-auto mb-4 w-10 h-10 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11.5a2.5 2.5 0 10-5 0v2.658a2.032 2.032 0 01-.595 1.437L11 17h4z" />--}}
{{--            </svg>--}}
{{--            <h3 class="text-xl font-bold">Secure Calls</h3>--}}
{{--            <p class="mt-2 text-gray-400">Classified communication lines available 24/7.</p>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <svg class="mx-auto mb-4 w-10 h-10 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.556 0 8.25-3.694 8.25-8.25S16.556 3.75 12 3.75 3.75 7.444 3.75 12s3.694 8.25 8.25 8.25z" />--}}
{{--            </svg>--}}
{{--            <h3 class="text-xl font-bold">Global Coverage</h3>--}}
{{--            <p class="mt-2 text-gray-400">We respond from any geo-point worldwide.</p>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <svg class="mx-auto mb-4 w-10 h-10 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 12a3.75 3.75 0 007.5 0V8.25a3.75 3.75 0 00-7.5 0V12z" />--}}
{{--            </svg>--}}
{{--            <h3 class="text-xl font-bold">Encrypted Messaging</h3>--}}
{{--            <p class="mt-2 text-gray-400">Data is protected with military-grade encryption.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
@include('partial.footer')
@endsection
