<style>
    /* Parallelogram background on hover */
    .parallelogram-hover {
        position: relative;
        display: inline-block;
        padding: 0.25rem 0.75rem;
        overflow: visible;
        transition: color 0.3s ease;
    }

    .parallelogram-hover::before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #7dd3fc;
        /* Tailwind sky-400 */
        transform: skew(-20deg);
        z-index: -1;
        transition: opacity 0.3s ease;
        opacity: 0;
    }

    .parallelogram-hover:hover::before {
        opacity: 1;
    }
</style>

<div
    class="flex items-center justify-between px-6 md:px-20 py-6 bg-white dark:bg-neutral-900 sticky top-0 z-50 text-gray-800 dark:text-gray-100">

    <div>
        <img src="{{ asset('images/logo2.png') }}" alt="NineteenAlpha" class="h-10">
    </div>

    @php
        $navItems = [
            'home' => 'Home',
            'about' => 'About',
            'founder_message' => 'Founder Message',
            'products' => 'Products',
            'capabilities' => 'Capabilities',
            'contact' => 'Contact Us',
        ];

        $isHomePage = request()->is('/');
    @endphp

    <div class="flex flex-wrap gap-4 md:gap-6 font-semibold text-sm tracking-wide">
        @foreach ($navItems as $anchor => $label)
            @php
                $slug = Str::slug($anchor);
                $isSpecialRoute = in_array($anchor, ['founder_message', 'products']);
            @endphp

            @if ($anchor === 'home')
                <a href="{{ $isHomePage ? '#' : url('/') }}"
                    onclick="{{ $isHomePage ? 'event.preventDefault(); window.scrollTo({ top: 0, behavior: \'smooth\' });' : '' }}"
                    class="parallelogram-hover text-gray-700 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200">
                    {{ $label }}
                </a>
            @elseif ($anchor === 'founder_message')
                <a href="{{ route('founder_message') }}"
                    class="parallelogram-hover text-gray-700 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200">
                    {{ $label }}
                </a>
            @elseif ($anchor === 'about')
                <a href="{{ route('about') }}"
                    class="parallelogram-hover text-gray-700 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200">
                    {{ $label }}
                </a>
            @elseif ($anchor === 'products')
                <a href="{{ route('products.index') }}"
                    class="parallelogram-hover text-gray-700 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200">
                    {{ $label }}
                </a>
            @elseif ($anchor === 'capabilities')
                <a href="{{ route('capabilities') }}"
                    class="parallelogram-hover text-gray-700 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200">
                    {{ $label }}
                </a>
            @elseif ($anchor === 'contact')
                <a href="{{ route('contact.index') }}"
                    class="parallelogram-hover text-gray-700 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200">
                    {{ $label }}
                </a>
            @else
                <a href="{{ $isHomePage ? '#' . $slug : url('/') . '#' . $slug }}"
                    class="parallelogram-hover text-gray-700 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200">
                    {{ $label }}
                </a>
            @endif
        @endforeach
    </div>
</div>
