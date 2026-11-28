{{-- Écran d'intro : le logo-globe au centre, un avion en orbite autour. Masqué si JS désactivé. --}}
<div class="intro" aria-hidden="true">
    <div class="intro-stage">
        <div class="intro-ring"></div>
        <div class="intro-globe">
            <img src="{{ asset('assets/logo-256.webp') }}" alt="" width="256" height="249" decoding="sync">
        </div>
        <div class="intro-orbit">
            <div class="intro-trail"></div>
            <span class="intro-plane">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
                </svg>
            </span>
        </div>
    </div>
    <p class="intro-name">ROVOYAGE</p>
</div>
