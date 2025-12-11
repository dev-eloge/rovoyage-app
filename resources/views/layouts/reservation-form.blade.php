 <section class="relative z-30 px-4 -mt-6 lg:-mt-10 mb-20 reveal">
        <div class="max-w-5xl mx-auto">
            <div class="glass rounded-[2.5rem] p-8 md:p-10 shadow-[0_20px_60px_-15px_rgba(93,25,25,0.15)] border-t border-white relative overflow-hidden group">
                
                <!-- Glow effect background -->
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-3/4 h-2 bg-gradient-to-r from-transparent via-brand-gold to-transparent opacity-50 blur-md"></div>

                <div class="text-center mb-8">
                    <span class="text-brand-gold font-bold uppercase text-xs tracking-widest">Planifiez maintenant</span>
                    <h2 class="text-2xl font-serif font-bold text-brand-maroon flex items-center justify-center gap-2 mt-2">
                        Réservez votre prochain voyage
                    </h2>
                </div>

                <form class="space-y-6" action="{{ route('reservation.store') }}" method="POST">
                    @csrf
                    <!-- Ligne 1: Infos Personnelles -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Nom & Prénom</label>
                            <div class="relative group/input">
                                <i class="ph-bold ph-user absolute left-4 top-3.5 text-brand-gold text-lg transition-colors group-hover/input:text-brand-maroon"></i>
                                <input type="text" name="name" placeholder="Ex: Jean Koffi" class="w-full input-theme rounded-xl py-3 pl-12 pr-4 font-medium">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Téléphone / WhatsApp</label>
                            <div class="relative group/input">
                                <i class="ph-bold ph-whatsapp-logo absolute left-4 top-3.5 text-green-600 text-lg transition-colors group-hover/input:text-green-700"></i>
                                <input type="tel" name="phone" placeholder="+228..." class="w-full input-theme rounded-xl py-3 pl-12 pr-4 font-medium">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Email</label>
                            <div class="relative group/input">
                                <i class="ph-bold ph-envelope absolute left-4 top-3.5 text-brand-gold text-lg transition-colors group-hover/input:text-brand-maroon"></i>
                                <input type="email" name="email" placeholder="contact@email.com" class="w-full input-theme rounded-xl py-3 pl-12 pr-4 font-medium">
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-px bg-gradient-to-r from-transparent via-brand-maroon/20 to-transparent"></div>

                    <!-- Ligne 2: Infos Voyage -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Départ</label>
                            <input type="text" name="lieu_depart" placeholder="Lomé (LFW)" class="w-full input-theme rounded-xl py-3 px-4 font-medium">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Destination</label>
                            <input type="text" name="lieu_arrive" placeholder="Paris, Dubaï..." class="w-full input-theme rounded-xl py-3 px-4 font-medium">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Date Aller</label>
                            <input type="date" name="date_aller" class="w-full input-theme rounded-xl py-3 px-4 font-medium text-slate-600 cursor-pointer">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase ml-1">Date Retour</label>
                            <input type="date" name="date_retour" class="w-full input-theme rounded-xl py-3 px-4 font-medium text-slate-600 cursor-pointer">
                        </div>
                    </div>

                    <!-- Bouton Action -->
                    <div class="pt-4">
                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-brand-maroon to-red-800 text-white font-bold text-lg shadow-xl shadow-brand-maroon/30 hover:shadow-brand-maroon/50 hover:scale-[1.01] active:scale-[0.98] transition-all duration-300 flex items-center justify-center gap-3 relative overflow-hidden">
                            <div class="absolute inset-0 bg-white/20 translate-y-full hover:translate-y-0 transition-transform duration-500"></div>
                            <span class="relative">Envoyer ma demande</span>
                            <i class="ph-bold ph-paper-plane-right relative"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>