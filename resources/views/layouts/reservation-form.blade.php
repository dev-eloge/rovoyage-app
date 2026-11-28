@php
    $today = now()->toDateString();
    $field = function (string $name) use ($errors) {
        return $errors->has($name)
            ? 'aria-invalid=true aria-describedby='.$name.'-error'
            : '';
    };
@endphp
<section id="reservation" class="py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20 lg:px-8">
        <div>
            <div data-slide="left">
                <p class="eyebrow">Réservation</p>
                <h2 class="h2 mt-3">Demandez votre devis en 2 minutes</h2>
                <p class="mt-5 max-w-prose text-muted">Aucun paiement en ligne : vous validez seulement après avoir reçu notre proposition.</p>
            </div>

            <ol class="mt-10 space-y-6">
                @foreach ([
                    ['Vous envoyez votre demande', 'Destination, dates et coordonnées.'],
                    ['Un conseiller vous recontacte', 'Par téléphone ou WhatsApp, avec les meilleures options.'],
                    ['Vous validez, nous réservons', "Billet, visa et hôtel : on s'occupe des démarches."],
                ] as $i => [$title, $text])
                    <li class="flex gap-4" data-slide="left" style="--slide-delay: {{ 350 + $i * 200 }}ms">
                        <span class="grid size-9 shrink-0 place-items-center rounded-full border border-brand/20 font-serif text-lg font-semibold text-brand tabular-nums">{{ $i + 1 }}</span>
                        <div>
                            <p class="font-medium text-ink">{{ $title }}</p>
                            <p class="text-[0.9375rem] text-muted">{{ $text }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>

        <div class="rounded-2xl border border-line bg-white p-6 shadow-sm sm:p-8" data-slide="right" style="--slide-delay: 250ms">
            @if (session('success'))
                <div role="status" class="mb-8 flex gap-3 rounded-xl border border-green-200 bg-green-50 p-4 text-green-800">
                    <x-icon name="check-circle" class="mt-0.5 size-5" />
                    <div>
                        <p class="font-medium">{{ session('success') }}</p>
                        <p class="mt-1 text-[0.9375rem]">Un conseiller vous recontacte au numéro indiqué. Pour une urgence : <a href="tel:{{ preg_replace('/\s+/', '', config('rovoyage.phone')) }}" class="font-medium underline underline-offset-4">{{ config('rovoyage.phone') }}</a>.</p>
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div role="alert" class="mb-8 flex gap-3 rounded-xl border border-red-200 bg-red-50 p-4 text-red-800">
                    <x-icon name="alert" class="mt-0.5 size-5" />
                    <p class="font-medium">Certains champs sont à corriger. Vos informations ont été conservées.</p>
                </div>
            @endif

            <form action="{{ route('reservation.store') }}" method="POST" class="space-y-8" data-reservation-form>
                @csrf

                <fieldset>
                    <legend class="mb-5 font-serif text-xl font-semibold text-ink">Vos coordonnées</legend>
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <label for="name" class="field-label">Nom et prénom</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" autocomplete="name" required maxlength="255" placeholder="Ex. Jean Koffi" class="field" {!! $field('name') !!}>
                            @error('name')<p id="name-error" class="field-error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="phone" class="field-label">Téléphone ou WhatsApp</label>
                            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" autocomplete="tel" inputmode="tel" required maxlength="20" placeholder="+228 90 00 00 00" class="field" {!! $field('phone') !!}>
                            @error('phone')<p id="phone-error" class="field-error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="email" class="field-label">E-mail</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" required maxlength="255" placeholder="vous@exemple.com" class="field" {!! $field('email') !!}>
                            @error('email')<p id="email-error" class="field-error">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="mb-5 font-serif text-xl font-semibold text-ink">Votre voyage</legend>
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="lieu_depart" class="field-label">Ville de départ</label>
                            <input id="lieu_depart" type="text" name="lieu_depart" value="{{ old('lieu_depart', 'Lomé') }}" autocomplete="address-level2" required maxlength="255" class="field" {!! $field('lieu_depart') !!}>
                            @error('lieu_depart')<p id="lieu_depart-error" class="field-error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="lieu_arrive" class="field-label">Destination</label>
                            <input id="lieu_arrive" type="text" name="lieu_arrive" value="{{ old('lieu_arrive') }}" required maxlength="255" placeholder="Ex. Dubaï, Paris, Montréal" class="field" {!! $field('lieu_arrive') !!}>
                            @error('lieu_arrive')<p id="lieu_arrive-error" class="field-error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="date_aller" class="field-label">Date aller</label>
                            <input id="date_aller" type="date" name="date_aller" value="{{ old('date_aller') }}" min="{{ $today }}" required class="field cursor-pointer" {!! $field('date_aller') !!}>
                            @error('date_aller')<p id="date_aller-error" class="field-error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="date_retour" class="field-label">Date retour</label>
                            <input id="date_retour" type="date" name="date_retour" value="{{ old('date_retour') }}" min="{{ old('date_aller', $today) }}" required class="field cursor-pointer" {!! $field('date_retour') !!}>
                            @error('date_retour')<p id="date_retour-error" class="field-error">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </fieldset>

                <div>
                    <button type="submit" class="btn btn-primary w-full sm:w-auto sm:px-8" data-submit>
                        <svg class="hidden size-5 animate-spin" data-spinner viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-opacity=".25" stroke-width="3"/><path d="M21 12a9 9 0 0 0-9-9" stroke="currentColor" stroke-width="3" stroke-linecap="round"/></svg>
                        <span data-label>Envoyer ma demande</span>
                    </button>
                    <p class="mt-4 text-sm text-muted">Vos coordonnées servent uniquement à vous recontacter pour ce voyage.</p>
                </div>
            </form>
        </div>
    </div>
</section>
