@include('layouts.head')

<body class="bg-brand-cream text-slate-800 antialiased overflow-x-hidden font-sans">

    <!-- Background Décoratif (Blobs animés chauds) -->
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-orange-200/40 rounded-full blur-3xl opacity-50 animate-blob mix-blend-multiply"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-red-200/30 rounded-full blur-3xl opacity-50 animate-blob animation-delay-2000 mix-blend-multiply"></div>
        <div class="absolute top-1/2 left-1/2 w-[500px] h-[500px] bg-yellow-100/40 rounded-full blur-3xl opacity-50 animate-blob animation-delay-4000 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-pattern opacity-60"></div>
    </div>

    <!-- Navigation -->
    @include('layouts.header')
    <!-- Hero Section -->
    <section id="accueil" class="relative pt-32 pb-10 lg:pt-40 lg:pb-16 px-4">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Colonne Gauche: Texte (Reveal Animation) -->
            <div class="space-y-6 text-center lg:text-left z-10 reveal active">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-brand-gold/30 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-maroon">Agence N°1 au Togo</span>
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-serif font-bold leading-tight text-slate-900">
                    Explorez le monde <br> 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-maroon via-red-600 to-brand-gold">
                        Sans Limites.
                    </span>
                </h1>
                
                <p class="text-lg text-slate-600 leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Billetterie, Visas, Hôtels et Formations. Avec ROVOYAGE, vos rêves d'évasion deviennent réalité avec professionnalisme et passion.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                    <button class="px-8 py-4 rounded-full bg-brand-gold text-brand-maroon font-bold shadow-lg shadow-orange-500/20 hover:shadow-orange-500/40 hover:-translate-y-1 transition-all flex items-center justify-center gap-2">
                        Voir les destinations
                        <i class="ph-bold ph-airplane-tilt"></i>
                    </button>
                    <button class="px-8 py-4 rounded-full bg-white text-brand-maroon font-bold border border-brand-maroon/10 shadow hover:bg-red-50 transition-colors flex items-center justify-center gap-2">
                        <i class="ph-fill ph-play-circle text-xl text-brand-maroon"></i> 
                        Notre Agence
                    </button>
                </div>
            </div>

            <!-- Colonne Droite: Visuel (Visible sur Mobile maintenant) -->
            <div class="relative h-[400px] lg:h-[550px] w-full perspective-1000 mt-8 lg:mt-0 reveal delay-200">
                <!-- Main Image Card -->
                <div class="absolute inset-0 z-10 glass p-3 rounded-[2rem] transform rotate-3 hover:rotate-0 transition-all duration-700 animate-float shadow-2xl">
                    <div class="w-full h-full rounded-[1.5rem] overflow-hidden relative">
                        <img src="{{ asset('assets/hero-asset.jpeg') }}" alt="Voyage Togo" class="w-full h-full object-cover hover:scale-105 transition-transform duration-1000">
                        
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-maroon/90 via-transparent to-transparent flex items-end p-8">
                            <div>
                                <h3 class="text-3xl font-serif font-bold text-white">Dubaï</h3>
                                <div class="flex text-brand-gold text-sm mt-1 gap-1">
                                    <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Badge 1 (Nature) -->
                <div class="absolute -left-4 lg:-left-8 top-10 lg:top-20 z-20 glass p-4 rounded-2xl flex items-center gap-3 animate-float-delayed">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center shadow-inner text-green-700">
                        <i class="ph-fill ph-tree-palm text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-semibold">Nature</p>
                        
                    </div>
                </div>

                <!-- Floating Badge 2 (Climat) -->
                <div class="absolute -right-2 lg:-right-4 bottom-24 lg:bottom-32 z-20 glass p-4 rounded-2xl flex items-center gap-3 animate-float">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center shadow-inner text-brand-gold">
                        <i class="ph-fill ph-sun text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-semibold">Climat</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION FORMULAIRE (Glassmorphism & Colors) -->
   @include('layouts.reservation-form')

    <!-- Services Grid -->
    <section id="services" class="py-16 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="text-brand-gold font-bold tracking-wider uppercase text-xs">Nos Expertises</span>
                <h2 class="text-4xl font-serif font-bold text-brand-maroon mt-2">Voyagez l'esprit tranquille</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-brand-maroon to-brand-gold rounded-full mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="glass-card p-8 rounded-3xl text-center group cursor-pointer reveal delay-100">
                    <div class="w-16 h-16 mx-auto bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 text-3xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-blue-500/30 group-hover:rotate-6">
                        <i class="ph-fill ph-ticket"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3 text-brand-maroon">Billetterie</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Vols nationaux et internationaux sur toutes les compagnies. Comparateur de prix en temps réel.</p>
                </div>
                <!-- Card 2 -->
                <div class="glass-card p-8 rounded-3xl text-center group cursor-pointer reveal delay-200 border-b-4 border-brand-gold">
                    <div class="w-16 h-16 mx-auto bg-orange-50 rounded-2xl flex items-center justify-center text-brand-gold text-3xl mb-6 group-hover:bg-brand-gold group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-orange-500/30 group-hover:rotate-6">
                        <img src="{{ asset('assets/passport.png') }}" alt="" class="w-8 h-8">
                    </div>
                    <h3 class="font-bold text-xl mb-3 text-brand-maroon">Visas & Assistance</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Accompagnement complet pour vos dossiers de visa (Canada, Europe, USA, Dubaï).</p>
                </div>
                <!-- Card 3 -->
                <div class="glass-card p-8 rounded-3xl text-center group cursor-pointer reveal delay-300">
                    <div class="w-16 h-16 mx-auto bg-red-50 rounded-2xl flex items-center justify-center text-brand-maroon text-3xl mb-6 group-hover:bg-brand-maroon group-hover:text-white transition-all duration-500 shadow-sm group-hover:shadow-red-900/30 group-hover:rotate-6">
                        <i class="ph-fill ph-student"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-3 text-brand-maroon">Formations</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Devenez professionnel du voyage : Formation Hôtesse de l'air, Steward, et Agent de comptoir.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations -->
    <section id="destinations" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6 reveal">
                <div>
                    <span class="text-brand-gold font-bold uppercase text-sm tracking-wider">Évadez-vous</span>
                    <h2 class="text-4xl font-serif font-bold mt-2 text-brand-maroon">Destinations Populaires</h2>
            </div>
                <a href="#" class="group flex items-center gap-2 text-brand-maroon font-bold hover:text-brand-gold transition-colors">
                    Voir tout 
                    <i class="ph-bold ph-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Dubai -->
                <div class="group relative h-96 rounded-3xl overflow-hidden glass-card cursor-pointer reveal">
                    <img src="{{ asset('assets/dubai.jpeg') }}" alt="Dubai" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-maroon/90 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="bg-brand-gold text-white text-xs font-bold px-2 py-1 rounded mb-2 inline-block">Top Vente</span>
                        <h3 class="text-2xl font-bold text-white font-serif">Dubaï</h3>
                        <p class="text-sm text-slate-200 mt-1 flex items-center gap-1"><i class="ph-fill ph-check-circle text-brand-gold"></i> Visa + Hôtel + Vol</p>
                    </div>
                </div>

                <!-- Paris -->
                <div class="group relative h-96 rounded-3xl overflow-hidden glass-card cursor-pointer reveal delay-100">
                    <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?q=80&w=800&auto=format&fit=crop" alt="Paris" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-maroon/90 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-2xl font-bold text-white font-serif">Paris</h3>
                        <p class="text-sm text-slate-200 mt-1">Séjours touristiques & Études</p>
                    </div>
                </div>

                <!-- Canada -->
                <div class="group relative h-96 rounded-3xl overflow-hidden glass-card cursor-pointer reveal delay-200">
                    <img src="https://images.unsplash.com/photo-1517935706615-2717063c2225?q=80&w=800&auto=format&fit=crop" alt="Canada" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-maroon/90 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-2xl font-bold text-white font-serif">Canada</h3>
                        <p class="text-sm text-slate-200 mt-1">Assistance Immigration</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Localisation & Carte -->
    <section id="localisation" class="py-20 relative bg-white/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Info Agence -->
                <div class="space-y-8 order-2 lg:order-1 reveal">
                    <div>
                        <h2 class="text-3xl font-serif font-bold text-brand-maroon">Visitez notre Agence</h2>
                        <div class="w-16 h-1 bg-brand-gold mt-2 rounded-full"></div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex gap-4 p-5 bg-white rounded-2xl shadow-sm border border-slate-100 items-center hover:border-brand-gold transition-colors">
                            <div class="w-12 h-12 bg-red-50 rounded-full flex items-center justify-center text-brand-maroon text-xl shrink-0">
                                <i class="ph-fill ph-map-pin"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Adresse</h4>
                                <p class="text-sm text-slate-500">Près de la pharmacie des gratials<br>
Kégué - 12BP 421 ,Lomé - Togo</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-5 bg-white rounded-2xl shadow-sm border border-slate-100 items-center hover:border-brand-gold transition-colors">
                            <div class="w-12 h-12 bg-green-50 rounded-full flex items-center justify-center text-green-600 text-xl shrink-0">
                                <i class="ph-fill ph-whatsapp-logo"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Contact Rapide</h4>
                                <p class="text-sm text-slate-500">+228 91 77 55 47</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carte -->
                <div class="order-1 lg:order-2 h-[400px] relative reveal delay-200">
                    <div class="glass w-full h-full rounded-[2rem] p-3 relative z-10 shadow-xl overflow-hidden border border-white">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.2051912638853!2d1.2086596752586342!3d6.201708395489451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106c06fbf4f7b2fb%3A0x6d2e0f6b8e4e4e0!2sROVOYAGE%20AGENCE%20DE%20VOYAGE!5e0!3m2!1sfr!2stg!4v1702234567890!5m2!1sfr!2stg" 
                            width="100%" height="100%" style="border:0; border-radius: 1.5rem;" 
                            allowfullscreen="" loading="lazy" class="grayscale hover:grayscale-0 transition-all duration-700"></iframe>
                    </div>
                    <!-- Decor -->
                    <div class="absolute -bottom-5 -right-5 w-32 h-32 bg-brand-gold rounded-full opacity-20 blur-xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER COMPLET -->
    @include('layouts.footer')
    <!-- Script pour l'animation au défilement (Scroll Reveal) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const reveals = document.querySelectorAll('.reveal');

            const revealOnScroll = () => {
                const windowHeight = window.innerHeight;
                const elementVisible = 150;

                reveals.forEach((reveal) => {
                    const elementTop = reveal.getBoundingClientRect().top;
                    if (elementTop < windowHeight - elementVisible) {
                        reveal.classList.add('active');
                    }
                });
            }

            window.addEventListener('scroll', revealOnScroll);
            // Déclencher une fois au chargement
            revealOnScroll();
        });
    </script>
</body>
</html>