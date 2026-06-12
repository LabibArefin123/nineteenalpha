@extends('layouts.app')

@section('content')
    @include('partial.header', ['title' => 'About Us'])

    {{-- About Section --}}
    <section id="about" class="py-20 px-6 md:px-20 bg-white">
        <div class="max-w-5xl mx-auto">
            {{-- Title --}}
            <h2 class="text-4xl font-bold mb-10 text-gray-900 text-center">Who We Are</h2>

            {{-- Introduction --}}
            <div class="bg-gray-50 p-6 rounded-xl shadow mb-12">
                <p class="text-lg leading-relaxed text-gray-800 text-justify">
                    <strong>Nineteen Alpha: Empowering Defence, Defending Future.</strong><br><br>
                    Founded in 2022, Nineteen Alpha is a veteran-led defense enterprise based in Bangladesh.
                    We are dedicated to delivering advanced military solutions, strategic training systems,
                    and long-term defense support. Our foundation is built on operational expertise, national service,
                    and an unwavering commitment to national and regional security.
                </p>
            </div>

            {{-- Mission Section --}}
            <div class="bg-white flex flex-col md:flex-row items-center md:items-start mb-16">
                {{-- Image right --}}
                <div class="md:w-1/3 md:pl-8 mb-6 md:mb-0 order-1 md:order-2">
                    <div class="relative w-full h-48 overflow-hidden transform -skew-x-6 rounded-xl shadow-md">
                        <img src="{{ asset('images/about/our_mission.jpg') }}" alt="Our Mission" class="absolute w-full h-full object-cover skew-x-6" />
                    </div>
                </div>
                {{-- Text left --}}
                <div class="md:w-2/3 order-2 md:order-1">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-900">Our Mission</h3>
                    <p class="text-base leading-relaxed text-gray-700 text-justify">
                        Our mission is to enhance defense readiness and independence through precision-engineered
                        military equipment, high-reliability training infrastructure, and forward-looking arms development.
                        Nineteen Alpha actively supports Bangladesh's national vision of achieving self-reliance in
                        defense manufacturing, while contributing to a secure and stable South Asian region.
                    </p>
                </div>
            </div>

            {{-- Vision Section --}}
            <div class="bg-gray-50 flex flex-col md:flex-row items-center md:items-start mb-16 p-6 rounded-xl shadow">
                {{-- Image left --}}
                <div class="md:w-1/3 md:pr-8 mb-6 md:mb-0">
                    <div class="relative w-full h-48 overflow-hidden transform skew-x-6 rounded-xl shadow-md">
                        <img src="{{ asset('images/about/our_vision.jpg') }}" alt="Our Vision" class="absolute w-full h-full object-cover -skew-x-6" />
                    </div>
                </div>
                {{-- Text right --}}
                <div class="md:w-2/3">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-900">Our Vision</h3>
                    <p class="text-base leading-relaxed text-gray-700 text-justify">
                        We envision Nineteen Alpha as a trusted and respected defense partner—one that delivers
                        innovative, effective, and dependable solutions tailored to the evolving needs of military
                        and security forces. Our work empowers these forces to act with confidence, readiness,
                        and strategic capability.
                    </p>
                </div>
            </div>

            {{-- Leadership Section --}}
            <div class="bg-white flex flex-col md:flex-row items-center md:items-start mb-16">
                {{-- Image right --}}
                <div class="md:w-1/3 md:pl-8 mb-6 md:mb-0 order-1 md:order-2">
                    <div class="relative w-full h-48 overflow-hidden transform -skew-x-6 rounded-xl shadow-md">
                        <img src="{{ asset('images/about/leadership.png') }}" alt="Our Leadership" class="absolute w-full h-full object-cover skew-x-6" />
                    </div>
                </div>
                {{-- Text left --}}
                <div class="md:w-2/3 order-2 md:order-1">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-900">Our Leadership</h3>
                    <p class="text-base leading-relaxed text-gray-700 text-justify">
                        At the heart of Nineteen Alpha is our founder, Colonel Syed Mahfuzur Rahman (Retd),
                        a highly experienced officer of the Bangladesh Armed Forces. His leadership ensures
                        that every product and initiative we deliver is shaped by real-world defense understanding,
                        strategic foresight, and national commitment. Our team blends military precision with
                        innovative thinking to serve national interests.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('partial.footer')
@endsection
