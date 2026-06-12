@extends('layouts.app')
@section('content')

@include('partial.header', ['title' => 'Contact Us'])

<!-- Hero Section -->
<section class="relative bg-cover bg-center h-[500px] flex items-center justify-center text-white" style="background-image: url('{{ asset('images/contacts.png') }}')">
    <div class="absolute inset-0  bg-opacity-80"></div>
    <div class="relative z-10 text-center">
        <h1 class="text-5xl font-extrabold uppercase tracking-widest">Contact Us</h1>
       
    </div>
</section>

<!-- Contact Form and Map Card Layout -->
<section class="bg-gray-100 py-20 px-6 md:px-20">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10">
        <!-- Contact Form Card -->
        <div class="bg-white shadow-2xl rounded-3xl p-10 border border-gray-200">
            <h2 class="text-3xl font-bold text-center text-red-600 mb-6">Get In Touch</h2>

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
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500"
                        required></textarea>
                </div>

                <button type="submit"
                    class="w-full mt-4 bg-red-600 text-white font-semibold py-3 rounded-xl hover:bg-red-700 hover:scale-[1.02] transition-all duration-300">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Map Card -->
        <div class="rounded-3xl overflow-hidden shadow-2xl border border-gray-200">
            <iframe class="w-full h-full min-h-[500px]"
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3649.431855759888!2d90.365487!3d23.838794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDUwJzE5LjciTiA5MMKwMjEnNTUuOCJF!5e0!3m2!1sen!2sbd!4v1749968786842!5m2!1sen!2sbd"
                frameborder="0" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
    
        </div>
    </div>
</section>

@include('partial.footer')
@endsection
