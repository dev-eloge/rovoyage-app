<?php

/*
 * Coordonnées de l'agence affichées sur le site.
 * Modifiables sans toucher au code via les variables d'environnement (Render > Environment).
 * Un lien vide (ex. FACEBOOK) n'est pas affiché.
 */
return [
    'phone' => env('ROVOYAGE_PHONE', '+228 91 77 55 47'),

    // Numéro WhatsApp au format international, chiffres uniquement (ex. 22891775547)
    'whatsapp' => env('ROVOYAGE_WHATSAPP', '22891775547'),

    'email' => env('ROVOYAGE_EMAIL', 'contact@rovoyage.tg'),

    'address' => [
        'line1' => env('ROVOYAGE_ADDRESS_LINE1', 'Près de la pharmacie des Gratials'),
        'line2' => env('ROVOYAGE_ADDRESS_LINE2', 'Kégué, 12 BP 421, Lomé, Togo'),
    ],

    'maps_url' => env(
        'ROVOYAGE_MAPS_URL',
        'https://www.google.com/maps/search/?api=1&query=ROVOYAGE+agence+de+voyage+Lom%C3%A9'
    ),

    'facebook' => env('ROVOYAGE_FACEBOOK'),
    'instagram' => env('ROVOYAGE_INSTAGRAM'),
];
