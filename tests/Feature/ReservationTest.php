<?php

use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function reservationData(array $override = []): array
{
    return array_merge([
        'name' => 'Jean Koffi',
        'lieu_depart' => 'Lomé',
        'lieu_arrive' => 'Dubaï',
        'date_aller' => now()->addDays(5)->toDateString(),
        'date_retour' => now()->addDays(12)->toDateString(),
        'email' => 'jean@example.com',
        'phone' => '+22890000000',
    ], $override);
}

test('une réservation valide est enregistrée', function () {
    $this->post('/', reservationData())
        ->assertRedirect()
        ->assertSessionHas('success');

    expect(Reservation::count())->toBe(1);
    $this->get('/')->assertSee('votre demande a bien été envoyée');
});

test('la date retour doit être après la date aller', function () {
    $this->post('/', reservationData([
        'date_aller' => now()->addDays(10)->toDateString(),
        'date_retour' => now()->addDays(2)->toDateString(),
    ]))->assertSessionHasErrors('date_retour');

    expect(Reservation::count())->toBe(0);
});

test('les champs obligatoires sont vérifiés', function () {
    $this->post('/', [])->assertSessionHasErrors(['name', 'email', 'phone', 'lieu_depart', 'lieu_arrive', 'date_aller', 'date_retour']);
});
