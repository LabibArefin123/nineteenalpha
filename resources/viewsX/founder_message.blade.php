@extends('layouts.app')

@section('content')
    @include('partial.header', ['title' => 'Founder Message'])

    <section id="founder-message" class="max-w-6xl mx-auto px-4 py-16 founder-section bg-[#f4f9fd] rounded-xl shadow-xl">
        <div class="flex flex-col md:flex-row items-center gap-10">
            <!-- Left: Message Content -->
            <div class="md:w-2/3">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">A Message from The Founder</h2>

                <article class="text-justify text-lg leading-relaxed space-y-6 text-gray-700">
                    <p>
                        At <strong>Nineteen Alpha</strong>, our journey began with a vision to serve the defense sector
                        with experience, discipline, and innovation. After a fulfilling career in the Bangladesh Armed
                        Forces, I founded this company in 2022 to offer practical, reliable solutions that support our
                        nation's defense readiness.
                    </p>

                    <p>
                        From supplying world-class military equipment to promoting indigenous arms development and immersive
                        training solutions, Nineteen Alpha is committed to delivering excellence built on real-world
                        expertise.
                    </p>

                    <p>
                        We focus on supporting our defense ecosystem through thoughtful procurement, strategic
                        partnerships, and a strong commitment to quality. Our mission is rooted in service, integrity, and
                        continuous improvement.
                    </p>

                    <p>
                        I am deeply grateful to every client, partner, and team member who shares our commitment. Together,
                        we are building a stronger, smarter future for defense in Bangladesh.
                    </p>

                    <footer class="pt-6 border-t border-gray-300">
                        <p class="italic text-left text-base">
                            Thank you,<br>
                            <span class="not-italic font-semibold text-lg text-blue-600">Colonel Syed Mahfuzur Rahman, SPP
                                (Retd)</span><br>
                            <span class="text-sm text-gray-500">B.Sc & M.Sc Engg (Elec) BUET, FIEB</span><br>
                            <span class="text-sm text-gray-500">
                                Founder, Nineteen Alpha
                            </span>
                        </p>
                        <a href="{{ route('home') }}"
                            class="mt-2 inline-block px-4 py-1 text-sm font-semibold text-blue-600 bg-white border border-blue-600 rounded-full shadow hover:bg-blue-50 hover:scale-105 transition transform duration-200">
                            Contact Us
                        </a>
                    </footer>
                </article>
            </div>

            <!-- Right: Founder Image with Decorative Stripes -->
            <div class="md:w-1/3 flex justify-center relative">
                <!-- Outer Frame (larger ring) -->
                <div
                    class="relative w-72 h-72 rounded-full p-2 bg-gradient-to-tr from-blue-500 via-white to-blue-500 flex items-center justify-center">
                    <!-- Inner Circle with ash background and proper fit -->
                    <div
                        class="w-64 h-64 rounded-full overflow-hidden bg-[#EBE7E6] shadow-xl flex items-center justify-center">
                        <img src="{{ asset('images/owner.jpg') }}" alt="Founder of Nineteen Alpha"
                            class="max-h-full max-w-full object-contain rounded-full" />
                    </div>
                </div>
            </div>



        </div>

        <!-- Contact Info: Icons left-aligned and stacked -->
        <div class="mt-12 text-left text-sm text-gray-600 space-y-2">
            <div class="max-w-md ml-0 space-y-2">
                <div class="flex items-center gap-2">
                    <span>📞</span>
                    <a href="tel:+8801711190343" class="hover:text-blue-600">+8801711190343</a>
                </div>
                <div class="flex items-center gap-2">
                    <span>✉️</span>
                    <a href="mailto:info@nineteenalpha.com" class="hover:text-blue-600">info@nineteenalpha.com</a>
                </div>
                <div class="flex items-center gap-2">
                    <span>✉️</span>
                    <a href="mailto:mahfuz@nineteenalpha.com" class="hover:text-blue-600">mahfuz@nineteenalpha.com</a>
                </div>
                <div class="flex items-center gap-2">
                    <span>🌐</span>
                    <a href="https://nineteenalpha.com" target="_blank"
                        class="hover:text-blue-600">www.nineteenalpha.com</a>
                </div>
            </div>
        </div>

        <style>
            @keyframes rotateStripe {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }



            @media (max-width: 768px) {
                .text-left {
                    text-align: center;
                }

                .stripe-ring {
                    margin: 0 auto;
                }
            }
        </style>
    </section>
    <br>
    @include('partial.footer')
@endsection
