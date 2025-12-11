
<nav class="fixed w-full z-50 glass-nav transition-all duration-300 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center gap-3 cursor-pointer">
                    <!-- Placeholder pour ton logo image -->
                    <!-- Remplace src par le chemin de ton logo -->
                    <div class="w-12 h-12  flex items-center justify-center overflow-hidden relative group">
                         <img src="{{ asset('assets/faviconrovoyage.png') }}" alt="Logo" class="w-full h-full object-cover"> 
                    </div>
                    <span class="font-extrabold text-2xl tracking-tight text-brand-maroon font-serif">
                        RO<span class="text-brand-gold">VOYAGE</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#accueil" class="font-medium text-slate-600 hover:text-brand-maroon transition-colors relative group">
                        Accueil
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-brand-gold transition-all group-hover:w-full"></span>
                    </a>
                    <a href="#services" class="font-medium text-slate-600 hover:text-brand-maroon transition-colors relative group">
                        Services
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-brand-gold transition-all group-hover:w-full"></span>
                    </a>
                    <a href="#formations" class="font-medium text-slate-600 hover:text-brand-maroon transition-colors relative group">
                        Formations
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-brand-gold transition-all group-hover:w-full"></span>
                    </a>
                    <a href="https://facebook.com" class="px-6 py-2.5 rounded-full bg-gradient-to-r from-brand-maroon to-red-800 text-white font-bold text-sm shadow-lg shadow-red-900/20 hover:shadow-red-900/40 hover:-translate-y-0.5 transition-all">
                        Contactez-nous
                    </a>
                </div>
                
                <!-- Mobile menu btn -->
                <button id="mobile-menu-btn" class="md:hidden text-brand-maroon text-3xl transition-transform duration-300 hover:scale-110">
                    <i id="menu-icon" class="ph ph-list"></i>
                </button>
            </div>

            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu" class="hidden md:hidden overflow-hidden transition-all duration-300 max-h-0">
                <div class="px-4 py-4 space-y-3 bg-white/80 backdrop-blur border-t border-slate-200">
                    <a href="#accueil" class="block px-4 py-2 rounded-lg text-slate-600 hover:bg-brand-gold/10 hover:text-brand-maroon transition-colors font-medium">
                        Accueil
                    </a>
                    <a href="#services" class="block px-4 py-2 rounded-lg text-slate-600 hover:bg-brand-gold/10 hover:text-brand-maroon transition-colors font-medium">
                        Services
                    </a>
                    <a href="#formations" class="block px-4 py-2 rounded-lg text-slate-600 hover:bg-brand-gold/10 hover:text-brand-maroon transition-colors font-medium">
                        Formations
                    </a>
                    <a href="https://facebook.com" class="block px-6 py-2.5 rounded-full bg-gradient-to-r from-brand-maroon to-red-800 text-white font-bold text-sm text-center shadow-lg shadow-red-900/20 hover:shadow-red-900/40 transition-all">
                        Contactez-nous
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');

            mobileMenuBtn.addEventListener('click', () => {
                const isOpen = mobileMenu.classList.contains('open');

                if (!isOpen) {
                    // Ouvrir le menu
                    mobileMenu.classList.remove('hidden');
                    mobileMenu.classList.add('open');
                    mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                    
                    // Basculer l'icône
                    menuIcon.className = 'ph ph-x animate-spin-fast';
                } else {
                    // Fermer le menu
                    mobileMenu.style.maxHeight = '0';
                    
                    // Basculer l'icône
                    menuIcon.className = 'ph ph-list';
                    
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                        mobileMenu.classList.remove('open');
                    }, 300);
                }
            });

            // Fermer le menu quand on clique sur un lien
            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('open');
                    mobileMenu.style.maxHeight = '0';
                    menuIcon.className = 'ph ph-list';
                });
            });
        });
    </script>

    <style>
        @keyframes spin-fast {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(180deg);
            }
        }

        .animate-spin-fast {
            animation: spin-fast 0.3s ease-in-out forwards;
        }
    </style>