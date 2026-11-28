@include('layouts.head')
@php
    $whatsapp = config('rovoyage.whatsapp');
    $waLink = $whatsapp ? 'https://wa.me/'.$whatsapp.'?text='.rawurlencode("Bonjour ROVOYAGE, je souhaite des informations pour un voyage.") : null;
@endphp
<body>
    @include('layouts.intro')

    <a href="#contenu" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-[60] focus:rounded-full focus:bg-brand focus:px-4 focus:py-2 focus:text-white">Aller au contenu</a>

    @include('layouts.header')

    <main id="contenu">
        {{-- ============ HERO ============ --}}
        <section id="accueil" class="bg-cream pt-24 pb-16 lg:pt-32 lg:pb-24">
            <div class="mx-auto grid max-w-6xl items-center gap-12 px-5 lg:grid-cols-[1.1fr_0.9fr] lg:gap-16 lg:px-8">
                <div>
                    <p class="eyebrow">Agence de voyage à Lomé, Togo</p>
                    <h1 class="mt-4 font-serif text-4xl leading-[1.1] font-semibold text-ink sm:text-5xl lg:text-6xl">
                        Partez l'esprit léger,
                        <em class="text-brand">on s'occupe du reste.</em>
                    </h1>
                    <p class="mt-6 max-w-xl text-lg text-muted">
                        Billets d'avion, dossier de visa, hôtel sur place : dites-nous où vous voulez aller,
                        un conseiller prépare votre voyage et vous accompagne jusqu'au départ.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="#reservation" class="btn btn-primary">
                            Demander un devis
                            <x-icon name="arrow-right" class="size-[1.125rem]" />
                        </a>
                        @if ($waLink)
                            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="btn btn-secondary">
                                <x-icon name="chat" class="size-[1.125rem]" />
                                Écrire sur WhatsApp
                            </a>
                        @endif
                    </div>

                    <ul class="mt-10 flex flex-wrap gap-x-6 gap-y-3 text-[0.9375rem] text-muted">
                        @foreach (['Billetterie', 'Visas', 'Hôtels', 'Formation'] as $tag)
                            <li class="flex items-center gap-2">
                                <x-icon name="check" class="size-4 text-brand" />
                                {{ $tag }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="relative mx-auto w-full max-w-md lg:max-w-none">
                    <img
                        src="{{ asset('assets/hero-ciel-720.webp') }}"
                        srcset="{{ asset('assets/hero-ciel-720.webp') }} 720w, {{ asset('assets/hero-ciel-1200.webp') }} 1200w"
                        sizes="(min-width: 1024px) 40vw, 100vw"
                        width="720" height="900"
                        fetchpriority="high"
                        alt="Aile d'avion au-dessus des nuages au coucher du soleil"
                        style="background: url({{ config('lqip.hero-ciel-720') }}) center / cover"
                        class="aspect-[4/5] w-full rounded-2xl object-cover shadow-md">

                    {{-- Petite carte destination, inspirée des références --}}
                    <a href="#destinations" class="group absolute -bottom-6 left-4 flex items-center gap-3 rounded-2xl bg-white p-2.5 pr-5 shadow-md transition-transform duration-200 ease-out hover:-translate-y-0.5 sm:left-6 lg:-left-8">
                        <img src="{{ asset('assets/dubai-thumb.webp') }}" alt="" width="56" height="56" decoding="async" class="size-14 rounded-xl object-cover">
                        <span>
                            <span class="block text-sm text-muted">Destination phare</span>
                            <span class="flex items-center gap-1.5 font-medium text-ink">
                                Dubaï
                                <x-icon name="arrow-right" class="size-4 text-brand transition-transform duration-200 group-hover:translate-x-0.5" />
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        {{-- ============ RÉSERVATION ============ --}}
        @include('layouts.reservation-form')

        {{-- ============ SERVICES ============ --}}
        <section id="services" class="py-20 lg:py-28">
            <div class="mx-auto grid max-w-6xl gap-12 px-5 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20 lg:px-8">
                <div class="lg:sticky lg:top-28 lg:self-start">
                    <p class="eyebrow">Nos services</p>
                    <h2 class="h2 mt-3">Un seul interlocuteur, du billet jusqu'à l'hôtel</h2>
                    <p class="mt-5 max-w-prose text-muted">
                        Plus besoin de jongler entre compagnies, ambassades et sites de réservation.
                        Nous centralisons tout et vous tenons informé à chaque étape.
                    </p>
                </div>

                @php
                    $services = [
                        ['icon' => 'plane', 'title' => 'Billetterie avion', 'text' => "Vols nationaux et internationaux sur toutes les compagnies. Nous comparons les tarifs et les horaires pour vous.", 'href' => '#reservation', 'cta' => 'Demander un billet'],
                        ['icon' => 'passport', 'title' => 'Visas et assistance', 'text' => "Constitution du dossier, rendez-vous et suivi de la demande pour le Canada, l'Europe, les États-Unis et Dubaï.", 'href' => '#reservation', 'cta' => 'Préparer mon visa'],
                        ['icon' => 'bed', 'title' => 'Hôtels et séjours', 'text' => "Hôtels choisis selon votre budget et séjours organisés : vol, visa et hébergement réunis dans une seule demande.", 'href' => '#reservation', 'cta' => 'Organiser un séjour'],
                        ['icon' => 'graduation', 'title' => 'Formation aux métiers du voyage', 'text' => "Hôtesse de l'air, steward et agent de comptoir : une formation pour démarrer dans l'aérien.", 'href' => '#formation', 'cta' => 'Voir la formation'],
                    ];
                @endphp
                <ul class="border-t border-line">
                    @foreach ($services as $service)
                        <li>
                            <a href="{{ $service['href'] }}" class="group grid grid-cols-[auto_1fr] gap-x-5 gap-y-1 border-b border-line py-7 transition-colors duration-150 hover:bg-cream/60 sm:grid-cols-[auto_1fr_auto] sm:items-center sm:px-4">
                                <span class="row-span-2 grid size-12 place-items-center rounded-full bg-cream text-brand transition-colors duration-150 group-hover:bg-brand group-hover:text-white sm:row-span-1">
                                    <x-icon :name="$service['icon']" class="size-[1.375rem]" />
                                </span>
                                <div>
                                    <h3 class="text-xl font-medium text-ink">{{ $service['title'] }}</h3>
                                    <p class="mt-1.5 text-muted">{{ $service['text'] }}</p>
                                </div>
                                <span class="col-start-2 mt-3 inline-flex items-center gap-1.5 text-[0.9375rem] font-medium text-brand sm:col-start-3 sm:mt-0">
                                    <span class="sm:sr-only">{{ $service['cta'] }}</span>
                                    <x-icon name="arrow-right" class="size-5 transition-transform duration-200 group-hover:translate-x-1" />
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        {{-- ============ DESTINATIONS ============ --}}
        @php
            $destinations = [
                ['name' => 'Dubaï', 'country' => 'Émirats arabes unis', 'text' => 'Vol, visa et hôtel en une seule demande', 'img' => 'dubai-564.webp', 'lqip' => 'dubai-564', 'w' => 564, 'h' => 752, 'alt' => 'La marina de Dubaï illuminée à la tombée de la nuit'],
                ['name' => 'Paris', 'country' => 'France', 'text' => 'Séjours touristiques et études', 'img' => 'paris-600.webp', 'lqip' => 'paris-600', 'w' => 600, 'h' => 800, 'alt' => 'La tour Eiffel et la Seine au crépuscule'],
                ['name' => 'Canada', 'country' => 'Toronto, Montréal…', 'text' => 'Accompagnement visa et immigration', 'img' => 'canada-600.webp', 'lqip' => 'canada-600', 'w' => 600, 'h' => 800, 'alt' => 'Vue aérienne de Toronto au lever du soleil'],
            ];
        @endphp
        <section id="destinations" class="bg-cream py-20 lg:py-28">
            <div class="mx-auto max-w-6xl px-5 lg:px-8">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="eyebrow">Destinations</p>
                        <h2 class="h2 mt-3">Les voyages que l'on nous demande le plus</h2>
                    </div>
                    <p class="max-w-sm text-muted">Votre destination n'y est pas ? Indiquez-la dans le formulaire, nous partons de partout.</p>
                </div>

                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($destinations as $i => $dest)
                        <a href="#reservation" data-destination="{{ $dest['name'] }}"
                           class="group relative block overflow-hidden rounded-2xl bg-slate-200 {{ $i === 0 ? 'sm:col-span-2 lg:col-span-1' : '' }}"
                           style="background: url({{ config('lqip.'.$dest['lqip']) }}) center / cover">
                            <img src="{{ asset('assets/'.$dest['img']) }}" alt="{{ $dest['alt'] }}" width="{{ $dest['w'] }}" height="{{ $dest['h'] }}" loading="lazy" decoding="async"
                                 class="aspect-[4/5] w-full object-cover transition-transform duration-300 ease-out group-hover:scale-[1.04] {{ $i === 0 ? 'sm:aspect-[16/10] lg:aspect-[4/5]' : '' }}">
                            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/75 via-black/35 to-transparent p-5 pt-20 text-white">
                                <p class="text-sm text-white/85">{{ $dest['country'] }}</p>
                                <div class="mt-1 flex items-end justify-between gap-4">
                                    <div>
                                        <h3 class="font-serif text-2xl font-semibold">{{ $dest['name'] }}</h3>
                                        <p class="mt-1 text-[0.9375rem] text-white/90">{{ $dest['text'] }}</p>
                                    </div>
                                    <span class="grid size-11 shrink-0 place-items-center rounded-full bg-white text-brand transition-transform duration-200 group-hover:-rotate-45" aria-hidden="true">
                                        <x-icon name="arrow-right" class="size-5" />
                                    </span>
                                </div>
                            </div>
                            <span class="sr-only">Demander un devis pour {{ $dest['name'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ============ FORMATION ============ --}}
        <section id="formation" class="py-20 lg:py-28">
            <div class="mx-auto grid max-w-6xl items-center gap-12 px-5 lg:grid-cols-2 lg:gap-20 lg:px-8">
                <img src="{{ asset('assets/formation-cabine-720.webp') }}" alt="Allée d'une cabine d'avion avec des passagers installés" width="720" height="900" loading="lazy" decoding="async"
                     style="background: url({{ config('lqip.formation-cabine-720') }}) center / cover"
                     class="aspect-[4/5] w-full max-w-md rounded-2xl object-cover lg:max-w-none">

                <div>
                    <p class="eyebrow">Formation</p>
                    <h2 class="h2 mt-3">Faites de l'aérien <em class="text-brand">votre métier</em></h2>
                    <p class="mt-5 max-w-prose text-muted">
                        ROVOYAGE forme aux métiers du transport aérien et du voyage.
                        Une formation concrète, assurée par une agence qui pratique ces métiers au quotidien.
                    </p>
                    <ul class="mt-8 space-y-4">
                        @foreach (["Hôtesse de l'air et steward", 'Agent de comptoir et billetterie', 'Accueil et service client'] as $item)
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-cream text-brand">
                                    <x-icon name="check" class="size-3.5" />
                                </span>
                                <span class="text-ink">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                        @if ($waLink)
                            <a href="{{ 'https://wa.me/'.$whatsapp.'?text='.rawurlencode("Bonjour ROVOYAGE, je souhaite des informations sur la formation hôtesse de l'air / steward.") }}" target="_blank" rel="noopener" class="btn btn-primary">
                                Se renseigner sur WhatsApp
                                <x-icon name="arrow-right" class="size-[1.125rem]" />
                            </a>
                        @else
                            <a href="#contact" class="btn btn-primary">Nous contacter</a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        {{-- ============ CONTACT / AGENCE ============ --}}
        <section id="contact" class="bg-cream py-20 lg:py-28">
            <div class="mx-auto max-w-6xl px-5 lg:px-8">
                <div class="grid gap-10 rounded-2xl bg-brand p-8 text-white sm:p-12 lg:grid-cols-[1.2fr_1fr] lg:items-center lg:gap-16">
                    <div>
                        <h2 class="font-serif text-3xl leading-tight font-semibold lg:text-4xl">Passez nous voir à l'agence</h2>
                        <p class="mt-4 max-w-prose text-white/85">
                            Vous préférez en parler de vive voix ? Notre équipe vous reçoit à Lomé
                            et répond aussi par téléphone et WhatsApp.
                        </p>
                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                            @if ($waLink)
                                <a href="{{ $waLink }}" target="_blank" rel="noopener" class="btn bg-white text-brand hover:bg-cream">
                                    <x-icon name="chat" class="size-[1.125rem]" />
                                    Écrire sur WhatsApp
                                </a>
                            @endif
                            <a href="tel:{{ preg_replace('/\s+/', '', config('rovoyage.phone')) }}" class="btn border border-white/30 text-white hover:border-white/60 hover:bg-white/10">
                                <x-icon name="phone" class="size-[1.125rem]" />
                                Appeler
                            </a>
                        </div>
                    </div>

                    <dl class="space-y-6 border-t border-white/15 pt-8 lg:border-t-0 lg:border-l lg:pt-0 lg:pl-12">
                        <div class="flex gap-4">
                            <dt class="mt-0.5"><x-icon name="map-pin" class="size-5 text-gold" /><span class="sr-only">Adresse</span></dt>
                            <dd>
                                {{ config('rovoyage.address.line1') }}<br>{{ config('rovoyage.address.line2') }}
                                <a href="{{ config('rovoyage.maps_url') }}" target="_blank" rel="noopener" class="mt-1 inline-flex items-center gap-1 text-[0.9375rem] text-gold-soft underline underline-offset-4 hover:text-white">
                                    Ouvrir dans Google Maps <x-icon name="arrow-up-right" class="size-4" />
                                </a>
                            </dd>
                        </div>
                        <div class="flex gap-4">
                            <dt class="mt-0.5"><x-icon name="phone" class="size-5 text-gold" /><span class="sr-only">Téléphone</span></dt>
                            <dd><a href="tel:{{ preg_replace('/\s+/', '', config('rovoyage.phone')) }}" class="link-underline tabular-nums hover:text-gold-soft">{{ config('rovoyage.phone') }}</a></dd>
                        </div>
                        <div class="flex gap-4">
                            <dt class="mt-0.5"><x-icon name="mail" class="size-5 text-gold" /><span class="sr-only">E-mail</span></dt>
                            <dd><a href="mailto:{{ config('rovoyage.email') }}" class="link-underline hover:text-gold-soft">{{ config('rovoyage.email') }}</a></dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')

    {{-- Bouton WhatsApp flottant (mobile) --}}
    @if ($waLink)
        <a href="{{ $waLink }}" target="_blank" rel="noopener" aria-label="Écrire à ROVOYAGE sur WhatsApp"
           class="fixed right-4 bottom-[max(1rem,env(safe-area-inset-bottom))] z-40 grid size-14 place-items-center rounded-full bg-[#1f7a4d] text-white shadow-md transition-[background-color,transform] duration-150 hover:bg-[#186440] active:scale-95 md:hidden">
            <x-icon name="chat" class="size-6" />
        </a>
    @endif
</body>
</html>
