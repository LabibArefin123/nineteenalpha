<div class="header header_style_01" style="background-color: #fff; border-bottom: 1px solid #ddd;">
    <div class="container-fluid" style="padding: 10px 20px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap;">

        {{-- ─── Logo ───────────────────────────────────────────── --}}
        <div style="flex: 1 1 auto;">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/nine.png') }}" alt="Nineteen Alpha" style="width: 120px; height: auto;">
            </a>
        </div>

        {{-- ─── Hamburger for mobile ───────────────────────────── --}}
        <div class="mobile-toggle" style="display: none; cursor: pointer;" onclick="document.getElementById('naNavbar').classList.toggle('show')">
            <div style="width: 25px; height: 3px; background: #333; margin: 4px 0;"></div>
            <div style="width: 25px; height: 3px; background: #333; margin: 4px 0;"></div>
            <div style="width: 25px; height: 3px; background: #333; margin: 4px 0;"></div>
        </div>

        {{-- ─── Menu Items ─────────────────────────────────────── --}}
        <div id="naNavbar" class="nav-links" style="display: flex; flex: 2 1 auto; justify-content: flex-end; gap: 25px; flex-wrap: wrap;">
            <div><a href="{{ url('/') }}" class="parallelogram-hover" style="text-decoration: none; color: #333; font-weight: 500;">Home</a></div>
            <div><a href="{{ route('about') }}" class="parallelogram-hover" style="text-decoration: none; color: #333; font-weight: 500;">About</a></div>
            <div><a href="{{ route('founder_message') }}" class="parallelogram-hover" style="text-decoration: none; color: #333; font-weight: 500;">Founder Message</a></div>
            <div><a href="{{ route('products.index') }}" class="parallelogram-hover" style="text-decoration: none; color: #333; font-weight: 500;">Products</a></div>
            <div><a href="{{ route('capabilities') }}" class="parallelogram-hover" style="text-decoration: none; color: #333; font-weight: 500;">Capabilities</a></div>
            <div><a href="{{ route('contact.index') }}" class="parallelogram-hover" style="text-decoration: none; color: #333; font-weight: 500;">Contact Us</a></div>
        </div>
    </div>
</div>

{{-- ─── Responsive Script ───────────────────────────────────── --}}
<style>
    @media (max-width: 768px) {
        .mobile-toggle {
            display: block !important;
        }

        .nav-links {
            display: none !important;
            flex-direction: column;
            width: 100%;
            margin-top: 10px;
        }

        .nav-links.show {
            display: flex !important;
        }

        .nav-links div {
            margin-bottom: 10px;
        }
    }
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
</style>
