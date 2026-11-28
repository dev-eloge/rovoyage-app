<footer class="bg-brand-darker text-white/80">
    <div class="mx-auto grid max-w-6xl gap-10 px-5 py-14 sm:grid-cols-2 lg:grid-cols-[1.4fr_1fr_1fr] lg:px-8">
        <div>
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2.5 rounded-lg">
                <span class="grid size-11 place-items-center rounded-full bg-white">
                    <img src="{{ asset('assets/logo-256.webp') }}" alt="" width="32" height="31" loading="lazy" class="size-8">
                </span>
                <span class="font-serif text-xl font-semibold text-white">ROVOYAGE</span>
            </a>
            <p class="mt-4 max-w-xs text-[0.9375rem]">Agence de voyage à Lomé : billetterie, visas, hôtels et formation aux métiers de l'aérien.</p>

            @if (config('rovoyage.facebook') || config('rovoyage.instagram'))
                <div class="mt-6 flex gap-3">
                    @foreach (['facebook' => 'Facebook', 'instagram' => 'Instagram'] as $key => $label)
                        @if (config("rovoyage.$key"))
                            <a href="{{ config("rovoyage.$key") }}" target="_blank" rel="noopener" aria-label="ROVOYAGE sur {{ $label }}"
                               class="grid size-11 place-items-center rounded-full border border-white/20 text-white transition-colors duration-150 hover:border-gold hover:text-gold">
                                <x-icon :name="$key" class="size-5" />
                            </a>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>

        <nav aria-label="Liens du pied de page">
            <h2 class="text-sm font-medium tracking-wide text-white">Services</h2>
            <ul class="mt-4 space-y-2.5 text-[0.9375rem]">
                <li><a href="#services" class="link-underline hover:text-white">Billetterie avion</a></li>
                <li><a href="#services" class="link-underline hover:text-white">Visas et assistance</a></li>
                <li><a href="#destinations" class="link-underline hover:text-white">Destinations</a></li>
                <li><a href="#formation" class="link-underline hover:text-white">Formation hôtesse de l'air</a></li>
            </ul>
        </nav>

        <div>
            <h2 class="text-sm font-medium tracking-wide text-white">Contact</h2>
            <ul class="mt-4 space-y-2.5 text-[0.9375rem]">
                <li>{{ config('rovoyage.address.line1') }}, {{ config('rovoyage.address.line2') }}</li>
                <li><a href="tel:{{ preg_replace('/\s+/', '', config('rovoyage.phone')) }}" class="link-underline tabular-nums hover:text-white">{{ config('rovoyage.phone') }}</a></li>
                <li><a href="mailto:{{ config('rovoyage.email') }}" class="link-underline hover:text-white">{{ config('rovoyage.email') }}</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10">
        <p class="mx-auto max-w-6xl px-5 py-6 text-sm text-white/60 lg:px-8">&copy; {{ date('Y') }} ROVOYAGE. Tous droits réservés.</p>
    </div>
</footer>
