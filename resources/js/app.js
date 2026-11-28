// ROVOYAGE : interactions de la page d'accueil (aucune dépendance)

const header = document.getElementById('site-header');
const menuButton = document.getElementById('menu-button');
const mobileMenu = document.getElementById('mobile-menu');

/* ---------- Header : bordure + ombre une fois la page défilée ---------- */
if (header) {
    const sentinel = document.createElement('div');
    sentinel.setAttribute('aria-hidden', 'true');
    sentinel.style.cssText = 'position:absolute;top:0;height:8px;width:1px;';
    document.body.prepend(sentinel);
    new IntersectionObserver(([entry]) => {
        header.toggleAttribute('data-scrolled', !entry.isIntersecting);
    }).observe(sentinel);
}

/* ---------- Menu mobile ---------- */
if (menuButton && mobileMenu) {
    const iconOpen = menuButton.querySelector('[data-icon-open]');
    const iconClose = menuButton.querySelector('[data-icon-close]');

    const setOpen = (open, { returnFocus = false } = {}) => {
        menuButton.setAttribute('aria-expanded', String(open));
        menuButton.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
        mobileMenu.toggleAttribute('data-open', open);
        mobileMenu.inert = !open;
        iconOpen?.classList.toggle('hidden', open);
        iconClose?.classList.toggle('hidden', !open);
        document.documentElement.style.overflow = open ? 'hidden' : '';
        if (open) mobileMenu.querySelector('a')?.focus({ preventScroll: true });
        if (!open && returnFocus) menuButton.focus();
    };

    const isOpen = () => menuButton.getAttribute('aria-expanded') === 'true';

    menuButton.addEventListener('click', () => setOpen(!isOpen()));
    mobileMenu.querySelectorAll('[data-menu-link]').forEach((link) =>
        link.addEventListener('click', () => setOpen(false)),
    );
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && isOpen()) setOpen(false, { returnFocus: true });
    });
    document.addEventListener('click', (event) => {
        if (isOpen() && !header.contains(event.target)) setOpen(false);
    });
    matchMedia('(min-width: 768px)').addEventListener('change', (e) => e.matches && setOpen(false));
}

/* ---------- Destinations : pré-remplir le formulaire ---------- */
const destinationInput = document.getElementById('lieu_arrive');
document.querySelectorAll('[data-destination]').forEach((card) => {
    card.addEventListener('click', () => {
        if (!destinationInput) return;
        destinationInput.value = card.dataset.destination;
        // Après le défilement doux, on place le curseur sur le premier champ vide
        setTimeout(() => {
            const firstEmpty = [...document.querySelectorAll('[data-reservation-form] .field')].find((f) => !f.value);
            firstEmpty?.focus({ preventScroll: true });
        }, 500);
    });
});

/* ---------- Formulaire : dates cohérentes + état d'envoi ---------- */
const form = document.querySelector('[data-reservation-form]');
if (form) {
    const dateAller = form.querySelector('#date_aller');
    const dateRetour = form.querySelector('#date_retour');

    dateAller?.addEventListener('change', () => {
        dateRetour.min = dateAller.value;
        if (dateRetour.value && dateRetour.value < dateAller.value) dateRetour.value = dateAller.value;
    });

    form.addEventListener('submit', () => {
        const button = form.querySelector('[data-submit]');
        button.disabled = true;
        button.setAttribute('aria-busy', 'true');
        button.querySelector('[data-spinner]')?.classList.remove('hidden');
        button.querySelector('[data-label]').textContent = 'Envoi en cours…';
    });
}

// Retour arrière (cache du navigateur) : réactiver le bouton d'envoi
addEventListener('pageshow', (event) => {
    if (!event.persisted) return;
    const button = document.querySelector('[data-submit]');
    if (!button) return;
    button.disabled = false;
    button.removeAttribute('aria-busy');
    button.querySelector('[data-spinner]')?.classList.add('hidden');
    button.querySelector('[data-label]').textContent = 'Envoyer ma demande';
});

/* ---------- Entrée latérale des blocs [data-slide] ---------- */
// Attend la fin de l'écran d'intro pour que l'animation ne se joue pas derrière lui
const whenIntroDone = (callback) => {
    const root = document.documentElement;
    if (!root.classList.contains('has-intro')) return callback();
    const observer = new MutationObserver(() => {
        if (!root.classList.contains('has-intro')) {
            observer.disconnect();
            callback();
        }
    });
    observer.observe(root, { attributes: true, attributeFilter: ['class'] });
};

const slideBlocks = document.querySelectorAll('[data-slide]');
if (slideBlocks.length) {
    whenIntroDone(() => {
        const reveal = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('is-in');
                    reveal.unobserve(entry.target); // une seule fois
                });
            },
            { threshold: 0.15, rootMargin: '0px 0px -8% 0px' },
        );
        slideBlocks.forEach((block) => reveal.observe(block));
    });
}
