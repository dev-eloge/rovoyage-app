@php
    $nav = [
        ['href' => '#services', 'label' => 'Services'],
        ['href' => '#destinations', 'label' => 'Destinations'],
        ['href' => '#formation', 'label' => 'Formation'],
        ['href' => '#contact', 'label' => 'Contact'],
    ];
@endphp
<header id="site-header" class="fixed inset-x-0 top-0 z-50 border-b border-transparent bg-white/95 transition-[border-color,box-shadow] duration-200 data-[scrolled]:border-line data-[scrolled]:shadow-sm">
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-5 lg:h-20 lg:px-8">
        <a href="{{ url('/') }}" class="flex items-center gap-2.5 rounded-lg" aria-label="ROVOYAGE, retour à l'accueil">
            <img src="{{ asset('assets/logo-256.webp') }}" alt="" width="40" height="39" class="size-9 lg:size-10">
            <span class="font-serif text-xl font-semibold tracking-tight text-brand">ROVOYAGE</span>
        </a>

        <nav aria-label="Navigation principale" class="hidden items-center gap-8 md:flex">
            @foreach ($nav as $item)
                <a href="{{ $item['href'] }}" class="link-underline text-[0.9375rem] font-medium text-muted hover:text-brand">{{ $item['label'] }}</a>
            @endforeach
            <a href="#reservation" class="btn btn-primary min-h-11 px-5 text-[0.9375rem]">Réserver</a>
        </nav>

        <button id="menu-button" type="button" class="-mr-2 grid size-11 cursor-pointer place-items-center rounded-full text-brand transition-colors duration-150 hover:bg-cream md:hidden"
                aria-expanded="false" aria-controls="mobile-menu" aria-label="Ouvrir le menu">
            <x-icon name="menu" class="size-6" data-icon-open />
            <x-icon name="x" class="hidden size-6" data-icon-close />
        </button>
    </div>

    {{-- Menu mobile --}}
    <div id="mobile-menu" class="pointer-events-none absolute inset-x-0 top-full -translate-y-2 border-b border-line bg-white opacity-0 shadow-md transition-[opacity,transform] duration-200 ease-out data-[open]:pointer-events-auto data-[open]:translate-y-0 data-[open]:opacity-100 md:hidden" inert>
        <nav aria-label="Navigation mobile" class="mx-auto flex max-w-6xl flex-col px-5 pt-2 pb-6">
            @foreach ($nav as $item)
                <a href="{{ $item['href'] }}" class="flex min-h-12 items-center justify-between border-b border-line text-lg font-medium text-ink transition-colors duration-150 hover:text-brand" data-menu-link>
                    {{ $item['label'] }}
                    <x-icon name="arrow-right" class="size-5 text-slate-400" />
                </a>
            @endforeach
            <a href="#reservation" class="btn btn-primary mt-6 w-full" data-menu-link>Réserver mon voyage</a>
        </nav>
    </div>
</header>
