<div id="capabilities" class="py-5 bg-white px-6 text-center relative">

    <h2 class="text-3xl font-bold mb-12 text-gray-900 dark:text-white">
        Our Capabilities
    </h2>

    <div class="flex flex-wrap justify-center gap-10 relative z-10">
        @foreach ([
            [
                'name' => 'Innovation of Military Hardware',
                'icon' => 'cpu',
                'desc' => 'Cutting-edge prototyping and integration of next-generation military electronics and platforms.',
            ],
            [
                'name' => 'Weapon & Ammunition Engineering',
                'icon' => 'crosshair',
                'desc' => 'Design, testing, and life-cycle support for small-arms, crew-served weapons, and precision munitions.',
            ],
            [
                'name' => 'Military Radio Sets & Power Systems',
                'icon' => 'radio',
                'desc' => 'Robust tactical radios, smart batteries, and resilient energy solutions for field operations.',
            ],
            [
                'name' => 'Drone Solutions',
                'icon' => 'airplay',
                'desc' => 'ISR, logistics, and loitering-munition UAVs engineered for austere environments.',
            ],
            [
                'name' => 'Anti-Drone Measures',
                'icon' => 'shield-off',
                'desc' => 'Detect, track, and neutralize hostile UAVs with layered counter-UAS technologies.',
            ],
            [
                'name' => 'Jamming & EW',
                'icon' => 'wifi-off',
                'desc' => 'Electronic-attack systems that disrupt adversary comms, GNSS, and data links.',
            ],
            [
                'name' => 'Robotics & UGVs',
                'icon' => 'bot',
                'desc' => 'Autonomous and tele-operated ground robots for EOD, surveillance, and force-multiplication roles.',
            ],
        ] as $index => $capability)
            <div
                class="w-40 h-40 flex flex-col items-center justify-center text-center font-semibold text-sm p-4 transition duration-300 cursor-pointer relative"
                onmouseenter="showDescription({{ $index }})"
                onmouseleave="hideDescription({{ $index }})"
                onclick="toggleDescription({{ $index }})">

                <div class="w-20 h-20 mb-3 rounded-full bg-sky-100 dark:bg-sky-900 flex items-center justify-center">
                    <i data-lucide="{{ $capability['icon'] }}"
                       class="w-6 h-6 text-sky-600 dark:text-sky-300"></i>
                </div>

                {{ $capability['name'] }}

                <div id="desc-{{ $index }}"
                     class="capability-desc absolute top-full mt-2 text-xs text-gray-700 dark:text-gray-300 bg-white dark:bg-neutral-900 border border-gray-200 dark:border-gray-700 rounded p-3 shadow-md hidden w-60 z-20">
                    {{ $capability['desc'] }}
                </div>
            </div>
        @endforeach
    </div>

    <style>
        /* Fade-in/out animation for the pop-ups */
        .capability-desc { transition: opacity .2s ease; }
    </style>

    <script>
        /* Re-use the simple show/hide logic you already had */
        const activeStates = {};

        function showDescription(i) {
            const box = document.getElementById(`desc-${i}`);
            if (!activeStates[i]) box.classList.remove('hidden');
        }
        function hideDescription(i) {
            const box = document.getElementById(`desc-${i}`);
            if (!activeStates[i]) box.classList.add('hidden');
        }
        function toggleDescription(i) {
            const box = document.getElementById(`desc-${i}`);
            activeStates[i] = !activeStates[i];
            box.classList.toggle('hidden', !activeStates[i]);
        }
    </script>

</div>
