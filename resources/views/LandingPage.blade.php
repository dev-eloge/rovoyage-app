<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROVOYAGE - Agence de Voyage Togo</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- Config Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        happy: {
                            blue: '#0EA5E9',   // Bleu Ciel
                            darkBlue: '#0f172a',
                            orange: '#F59E0B', // Orange Soleil
                            teal: '#14B8A6',   // Turquoise Eau
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 3s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* White Glassmorphism Theme */
        .glass {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 8px 32px rgba(14, 165, 233, 0.1);
        }
        
        /* Version un peu plus transparente pour les badges flottants */
        .glass-badge {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(229, 231, 235, 0.5);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -5px rgba(14, 165, 233, 0.15);
            border-color: #0EA5E9;
        }

        .input-happy {
            background: rgba(255, 255, 255, 0.6);
            border: 1px solid #cbd5e1;
            color: #334155;
            transition: all 0.3s;
        }
        .input-happy:focus {
            outline: none;
            border-color: #0EA5E9;
            background: white;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.1);
        }
        
        .bg-pattern {
            background-color: #f8fafc;
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 30px 30px;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden font-sans">

    <!-- Background Décoratif -->
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-200/40 rounded-full blur-3xl opacity-60 translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-orange-200/40 rounded-full blur-3xl opacity-60 -translate-x-1/3 translate-y-1/3"></div>
        <div class="absolute inset-0 bg-pattern opacity-40"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-2 cursor-pointer">
                    <div class="w-10 h-10 bg-gradient-to-tr from-happy-blue to-cyan-400 rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-200">
                        <i class="ph-fill ph-paper-plane-tilt text-2xl"></i>
                    </div>
                    <span class="font-extrabold text-2xl tracking-tight text-slate-800">RO<span class="text-happy-blue">VOYAGE</span></span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#accueil" class="font-medium text-slate-600 hover:text-happy-blue transition-colors">Accueil</a>
                    <a href="#services" class="font-medium text-slate-600 hover:text-happy-blue transition-colors">Services</a>
                    <a href="#formations" class="font-medium text-slate-600 hover:text-happy-blue transition-colors">Formations</a>
                    <a href="https://facebook.com" class="px-5 py-2 rounded-full bg-blue-600 text-white font-bold text-sm shadow-lg hover:bg-blue-700 transition-all">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Split Layout) -->
    <section id="accueil" class="relative pt-32 pb-10 lg:pt-40 lg:pb-16 px-4">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Colonne Gauche: Texte -->
            <div class="space-y-6 text-center lg:text-left z-10">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-blue-100 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-happy-orange animate-pulse"></span>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-600">Agence N°1 au Togo</span>
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-serif font-bold leading-tight text-slate-900">
                    Partez à la dercouverte<br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-happy-blue to-cyan-500">du Monde.</span>
                </h1>
                
                <p class="text-lg text-slate-600 leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Billetterie, Visas, Hôtels et Formations. ROVOYAGE simplifie vos aventures avec une touche de sourire et de professionnalisme.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                    <button class="px-8 py-3 rounded-full bg-happy-blue text-white font-bold shadow-lg shadow-blue-200 hover:-translate-y-1 transition-transform">
                        Voir les destinations
                    </button>
                    <button class="px-8 py-3 rounded-full bg-white text-slate-700 font-bold border border-slate-200 shadow hover:bg-slate-50 transition-colors flex items-center justify-center gap-2">
                        <i class="ph-fill ph-play-circle text-xl text-happy-orange"></i> Notre Agence
                    </button>
                </div>
            </div>

            <!-- Colonne Droite: Le CODE VISUEL demandé (Adapté) -->
            <div class="relative h-[500px] w-full hidden lg:block perspective-1000">
                <!-- Main Image Card -->
                <div class="absolute inset-0 z-10 glass p-3 rounded-[2rem] transform rotate-3 hover:rotate-0 transition-all duration-700 animate-float">
                    <div class="w-full h-full rounded-[1.5rem] overflow-hidden relative shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?q=80&w=800&auto=format&fit=crop" alt="Paysage Africain" class="w-full h-full object-cover">
                        <!-- Gradient sombre en bas de l'image pour lisibilité texte blanc -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-8">
                            <div>
                                <h3 class="text-3xl font-serif font-bold text-white">Kpalimé</h3>
                                <div class="flex text-amber-400 text-sm mt-1">
                                    <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Badge 1 (Nature) -->
                <div class="absolute -left-8 top-20 z-20 glass-badge p-4 rounded-2xl flex items-center gap-3 animate-float-delayed">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center shadow-inner">
                        <i class="ph-fill ph-tree-palm text-green-600 text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-semibold">Nature</p>
                        <p class="font-bold text-slate-800">100% Écotourisme</p>
                    </div>
                </div>

                <!-- Floating Badge 2 (Climat) -->
                <div class="absolute -right-4 bottom-32 z-20 glass-badge p-4 rounded-2xl flex items-center gap-3 animate-float">
                    <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center shadow-inner">
                        <i class="ph-fill ph-sun text-amber-600 text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-semibold">Climat</p>
                        <p class="font-bold text-slate-800">Tropical</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION FORMULAIRE (Nouvelle ligne complète) -->
    <section class="relative z-30 px-4 mt-10 lg:mt-20 mb-20">
        <div class="max-w-5xl mx-auto">
            <div class="glass rounded-[2rem] p-8 shadow-[0_20px_60px_-15px_rgba(14,165,233,0.3)] border-t border-white">
                
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-slate-800 flex items-center justify-center gap-2">
                        <i class="ph-fill ph-airplane-tilt text-happy-blue"></i>
                        Réservez votre prochain vol
                    </h2>
                    <p class="text-slate-500 text-sm">Remplissez le formulaire, nous vous trouvons le meilleur prix.</p>
                </div>

                <form class="space-y-6" action="{{ route('reservation.store') }}" method="POST">
                    @csrf
                    <!-- Ligne 1: Infos Personnelles -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Nom & Prénom</label>
                            <div class="relative">
                                <i class="ph-bold ph-user absolute left-4 top-3.5 text-slate-400 text-lg"></i>
                                <input type="text" name="name" placeholder="Ex: Jean Koffi" class="w-full input-happy rounded-xl py-3 pl-12 pr-4 font-medium">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Téléphone / WhatsApp</label>
                            <div class="relative">
                                <i class="ph-bold ph-whatsapp-logo absolute left-4 top-3.5 text-green-500 text-lg"></i>
                                <input type="tel" name="phone" placeholder="+228..." class="w-full input-happy rounded-xl py-3 pl-12 pr-4 font-medium">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Email </label>
                            <div class="relative">
                                <i class="ph-bold ph-envelope absolute left-4 top-3.5 text-slate-400 text-lg"></i>
                                <input type="email" name="email" placeholder="contact@email.com" class="w-full input-happy rounded-xl py-3 pl-12 pr-4 font-medium">
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-px bg-slate-200"></div>

                    <!-- Ligne 2: Infos Voyage -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Départ</label>
                            <input type="text" name="lieu_depart" placeholder="Lomé (LFW)" class="w-full input-happy rounded-xl py-3 px-4 font-medium">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Destination</label>
                            <input type="text" name="lieu_arrive" placeholder="Paris, Dubaï..." class="w-full input-happy rounded-xl py-3 px-4 font-medium">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Date Aller</label>
                            <input type="date" name="date_aller" class="w-full input-happy rounded-xl py-3 px-4 font-medium text-slate-600">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Date Retour</label>
                            <input type="date" name="date_retour" class="w-full input-happy rounded-xl py-3 px-4 font-medium text-slate-600">
                        </div>
                    </div>

                    <!-- Bouton Action -->
                    <div class="pt-2">
                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-happy-blue to-blue-600 text-white font-bold text-lg shadow-xl shadow-blue-500/30 hover:shadow-blue-500/50 hover:scale-[1.01] active:scale-[0.98] transition-all duration-300 flex items-center justify-center gap-3">
                            <span>Envoyer ma demande de réservation</span>
                            <i class="ph-bold ph-paper-plane-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services" class="py-16 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-happy-blue font-bold tracking-wider uppercase text-xs">Nos Services</span>
                <h2 class="text-3xl font-serif font-bold text-slate-900 mt-2">Voyagez l'esprit tranquille</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="glass-card p-8 rounded-2xl text-center group">
                    <div class="w-14 h-14 mx-auto bg-blue-50 rounded-full flex items-center justify-center text-happy-blue text-2xl mb-4 group-hover:bg-happy-blue group-hover:text-white transition-colors">
                        <i class="ph-fill ph-ticket"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Billetterie</h3>
                    <p class="text-slate-500 text-sm">Vols nationaux et internationaux. Nous comparons pour vous.</p>
                </div>
                <!-- Card 2 -->
                <div class="glass-card p-8 rounded-2xl text-center group">
                    <div class="w-14 h-14 mx-auto bg-orange-50 rounded-full flex items-center justify-center text-happy-orange text-2xl mb-4 group-hover:bg-happy-orange group-hover:text-white transition-colors">
                        <i class="ph-fill ph-passport"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Visas & Assistance</h3>
                    <p class="text-slate-500 text-sm">Accompagnement administratif complet pour vos dossiers.</p>
                </div>
                <!-- Card 3 -->
                <div class="glass-card p-8 rounded-2xl text-center group">
                    <div class="w-14 h-14 mx-auto bg-teal-50 rounded-full flex items-center justify-center text-happy-teal text-2xl mb-4 group-hover:bg-happy-teal group-hover:text-white transition-colors">
                        <i class="ph-fill ph-student"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Formations</h3>
                    <p class="text-slate-500 text-sm">Devenez professionnel du voyage (Hôtesse, Agent de comptoir).</p>
                </div>
            </div>
        </div>
    </section>

<!-- Destinations Internationales -->
    <section id="destinations" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <span class="text-teal-400 font-bold uppercase text-sm tracking-wider">Évadez-vous</span>
                    <h2 class="text-3xl font-serif font-bold mt-2">Destinations Populaires</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Dubai -->
                <div class="group relative h-80 rounded-2xl overflow-hidden glass-card cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1512453979798-5ea932a88401?q=80&w=800&auto=format&fit=crop" alt="Dubai" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <h3 class="text-xl font-bold text-white">Dubaï</h3>
                        <p class="text-sm text-slate-300">Visa + Hôtel + Vol</p>
                    </div>
                </div>

                <!-- Paris -->
                <div class="group relative h-80 rounded-2xl overflow-hidden glass-card cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?q=80&w=800&auto=format&fit=crop" alt="Paris" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <h3 class="text-xl font-bold text-white">Paris</h3>
                        <p class="text-sm text-slate-300">Séjours touristiques & Études</p>
                    </div>
                </div>

                <!-- Canada -->
                <div class="group relative h-80 rounded-2xl overflow-hidden glass-card cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1517935706615-2717063c2225?q=80&w=800&auto=format&fit=crop" alt="Canada" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <h3 class="text-xl font-bold text-white">Canada</h3>
                        <p class="text-sm text-slate-300">Assistance Immigration</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Localisation & Carte -->
    <section id="localisation" class="py-20 relative bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Info Agence -->
                <div class="space-y-8 order-2 lg:order-1">
                    <div>
                        <h2 class="text-3xl font-serif font-bold text-slate-900">Notre Agence à Lomé</h2>
                        <div class="w-16 h-1 bg-happy-blue mt-2 rounded-full"></div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex gap-4 p-5 bg-white rounded-2xl shadow-sm border border-slate-100 items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-happy-blue text-xl shrink-0">
                                <i class="ph-fill ph-map-pin"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Adresse</h4>
                                <p class="text-sm text-slate-500">Boulevard du 13 Janvier, Lomé<br>(En face de la station Total)</p>
                            </div>
                        </div>
                        <div class="flex gap-4 p-5 bg-white rounded-2xl shadow-sm border border-slate-100 items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 text-xl shrink-0">
                                <i class="ph-fill ph-whatsapp-logo"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Contact Rapide</h4>
                                <p class="text-sm text-slate-500">+228 90 00 00 00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carte Google Maps Style -->
                <div class="order-1 lg:order-2 h-[400px] relative">
                    <div class="glass w-full h-full rounded-[2rem] p-2 relative z-10 shadow-xl overflow-hidden border-2 border-white">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d1.215829314769039!3d6.123539995566085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e1c113185419%3A0x3226619a831e078a!2sLom%C3%A9%2C%20Togo!5e0!3m2!1sen!2sfr!4v1623345678901!5m2!1sen!2sfr" 
                            width="100%" height="100%" style="border:0; border-radius: 1.5rem;" 
                            allowfullscreen="" loading="lazy" class="grayscale hover:grayscale-0 transition-all duration-700"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER COMPLET -->
    <footer class="bg-happy-darkBlue text-slate-300 pt-16 pb-8 border-t-4 border-happy-blue">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div class="space-y-4">
                    <div class="flex items-center gap-2 text-white">
                        <i class="ph-fill ph-paper-plane-tilt text-2xl text-happy-blue"></i>
                        <span class="font-bold text-xl">RO<span class="text-happy-blue">VOYAGE</span></span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-400">
                        Votre agence de confiance au Togo. Nous rendons vos voyages simples et vos formations professionnelles.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4 border-l-4 border-happy-orange pl-3">Liens Rapides</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-happy-blue transition-colors">Accueil</a></li>
                        <li><a href="#services" class="hover:text-happy-blue transition-colors">Nos Services</a></li>
                        <li><a href="#formations" class="hover:text-happy-blue transition-colors">Formation Hôtesse</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4 border-l-4 border-happy-teal pl-3">Nos Services</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-happy-teal transition-colors">Billetterie Avion</a></li>
                        <li><a href="#" class="hover:text-happy-teal transition-colors">Assistance Visa Canada</a></li>
                        <li><a href="#" class="hover:text-happy-teal transition-colors">Voyage à Dubaï</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4 border-l-4 border-blue-500 pl-3">Nous Contacter</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="ph-fill ph-map-pin text-happy-blue mt-0.5"></i>
                            <span>Bd du 13 Janvier, Lomé,<br>Togo (Réf: Total)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="ph-fill ph-phone text-happy-blue"></i>
                            <span>+228 90 00 00 00</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="ph-fill ph-envelope text-happy-blue"></i>
                            <span>contact@rovoyage.tg</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
                <p>&copy; 2024 ROVOYAGE. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

</body>
</html>