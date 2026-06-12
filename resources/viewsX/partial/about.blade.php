{{-- ABOUT – Nineteen Alpha --}}
<div id="about"
     class="py-24 bg-white px-6 md:px-20"
     data-aos="fade-up"
     x-data="{ open:false }">

    <div class="max-w-6xl mx-auto text-center">
        {{-- Heading --}}
        <div class="text-3xl font-bold mb-6">Who We Are</div>

        {{-- Two-line summary --}}
        <div class="text-lg text-gray-700 leading-relaxed mb-6">
            <strong>Nineteen Alpha: Empowering Defence, Depending Future</strong><br><br>
            A veteran-led Bangladeshi defense enterprise delivering advanced military solutions and training since 2022,
            built on expertise and integrity to support national and regional security.
        </div>

        {{-- Toggle button --}}
        <button
            class="inline-block border border-gray-800 px-6 py-2 rounded hover:bg-black hover:text-white transition"
            @click="open = !open">
            <span x-text="open ? 'Show Less' : 'Show More'"></span>
        </button>

        {{-- Detail cards --}}
        <div class="grid md:grid-cols-3 gap-8 mt-12 justify-center items-stretch"
             x-show="open"
             x-transition.opacity.duration.300ms>
            <!-- Mission -->
            <div class="flex flex-col bg-white rounded-2xl shadow-lg p-8 text-justify">
                <h3 class="font-bold text-2xl mb-4 text-center">Our Mission</h3>
                <p class="text-gray-700 leading-relaxed flex-grow">
                    At Nineteen Alpha, our mission is to strengthen defense capabilities through high-quality military
                    equipment, reliable training systems, and innovative arms development. We aim to contribute to
                    Bangladesh’s vision of self-reliance in defense manufacturing while fostering regional security
                    and stability.
                </p>
            </div>

            <!-- Vision -->
            <div class="flex flex-col bg-white rounded-2xl shadow-lg p-8 text-justify">
                <h3 class="font-bold text-2xl mb-4 text-center">Our Vision</h3>
                <p class="text-gray-700 leading-relaxed flex-grow">
                    To become a trusted leader in the defense industry, delivering state-of-the-art solutions that
                    empower military and security forces to protect and serve with confidence.
                </p>
            </div>

            <!-- Leadership -->
            <div class="flex flex-col bg-white rounded-2xl shadow-lg p-8 text-justify">
                <h3 class="font-bold text-2xl mb-4 text-center">Our Leadership</h3>
                <p class="text-gray-700 leading-relaxed flex-grow">
                    Founded by a retired colonel of the Bangladesh Armed Forces, Nineteen Alpha combines decades of
                    military expertise with a forward-thinking approach to defense innovation. Our leadership’s
                    firsthand operational and strategic experience ensures every product and service meets the real-
                    world demands of modern defense.
                </p>
            </div>
        </div>
    </div>
</div>
