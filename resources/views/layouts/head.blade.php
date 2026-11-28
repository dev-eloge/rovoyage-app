<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <title>ROVOYAGE · Agence de voyage à Lomé : billets d'avion, visas, hôtels</title>
    <meta name="description" content="ROVOYAGE, agence de voyage à Lomé (Togo) : billets d'avion toutes destinations, accompagnement visa (Canada, Europe, USA, Dubaï), réservation d'hôtels et formation hôtesse de l'air.">
    <meta name="theme-color" content="#fffbeb">
    <link rel="icon" type="image/png" href="{{ asset('favicon-64.png') }}">

    {{-- Intro : styles critiques inline pour s'afficher avant le reste de la page --}}
    <style>
        html,body{overflow-x:clip;max-width:100%;touch-action:pan-y}
        .intro{display:none}
        html.has-intro body{overflow:hidden}
        html.has-intro .intro{position:fixed;inset:0;z-index:100;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:clamp(1.25rem,5vmin,2rem);background:#fffbeb;transition:opacity .4s ease-in,visibility .4s ease-in}
        html.intro-done .intro{opacity:0;visibility:hidden}
        .intro-stage{--globe:clamp(7rem,32vmin,10.5rem);--orbit:calc(var(--globe)*1.6);position:relative;display:grid;place-items:center;width:var(--orbit);height:var(--orbit)}
        .intro-ring{position:absolute;inset:0;border-radius:50%;border:1.5px dashed rgba(93,25,25,.2)}
        .intro-globe{display:grid;place-items:center;width:var(--globe);height:var(--globe);border-radius:50%;background:#fff;box-shadow:0 12px 32px -14px rgba(93,25,25,.4);animation:intro-in .5s ease-out both}
        .intro-globe img{width:80%;height:auto}
        .intro-orbit{position:absolute;inset:0;animation:intro-orbit 2s linear infinite;will-change:transform}
        .intro-trail{position:absolute;inset:-1px;border-radius:50%;background:conic-gradient(transparent 0 72%,rgba(245,158,11,.9));-webkit-mask:radial-gradient(farthest-side,transparent calc(100% - 3px),#000 calc(100% - 2.5px));mask:radial-gradient(farthest-side,transparent calc(100% - 3px),#000 calc(100% - 2.5px))}
        .intro-plane{position:absolute;top:0;left:50%;display:grid;place-items:center;width:clamp(2.25rem,9vmin,2.75rem);height:clamp(2.25rem,9vmin,2.75rem);border-radius:50%;background:#fffbeb;color:#5d1919;transform:translate(-50%,-50%)}
        .intro-plane svg{width:70%;height:70%;transform:rotate(90deg)}
        .intro-name{margin:0;font:500 .8125rem/1 system-ui,sans-serif;letter-spacing:.32em;color:#5d1919;animation:intro-in .5s .15s ease-out both}
        @keyframes intro-orbit{to{transform:rotate(360deg)}}
        @keyframes intro-in{from{opacity:0;transform:scale(.92)}}
        @media (prefers-reduced-motion:reduce){.intro-orbit,.intro-globe,.intro-name{animation:none}}
    </style>
    {{-- Indique que JS est actif (les animations d'entrée ne masquent rien sans JS) --}}
    <script>document.documentElement.classList.add('js')</script>
    @unless (session('success') || $errors->any())
    <script>
        // Intro affichée à chaque chargement de la page
        // (sauf au retour du formulaire, pour ne pas cacher le message de confirmation ou d'erreur)
        (function () {
            var root = document.documentElement;
            root.classList.add('has-intro');
            var start = Date.now();
            var min = matchMedia('(prefers-reduced-motion: reduce)').matches ? 600 : 2000;
            var finished = false;
            function finish() {
                if (finished) return;
                finished = true;
                setTimeout(function () {
                    root.classList.add('intro-done');
                    setTimeout(function () { root.classList.remove('has-intro', 'intro-done'); }, 450);
                }, Math.max(0, min - (Date.now() - start)));
            }
            addEventListener('load', finish, { once: true });
            setTimeout(finish, 5000); // filet de sécurité si une ressource tarde
        })();
    </script>
    @endunless

    <link rel="preload" as="image" href="{{ asset('assets/logo-256.webp') }}" type="image/webp">
    <link rel="preload" as="image" type="image/webp"
          imagesrcset="{{ asset('assets/hero-ciel-720.webp') }} 720w, {{ asset('assets/hero-ciel-1200.webp') }} 1200w"
          imagesizes="(min-width: 1024px) 40vw, 100vw" fetchpriority="high">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
