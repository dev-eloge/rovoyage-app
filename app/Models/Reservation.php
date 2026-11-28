<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    // La migration crée la table au singulier ("reservation")
    protected $table = 'reservation';

    protected $fillable = [
        'name',
        'lieu_depart',
        'lieu_arrive',
        'date_aller',
        'date_retour',
        'email',
        'phone',
    ];

    protected function casts(): array
    {
        return [
            'date_aller' => 'date',
            'date_retour' => 'date',
        ];
    }
}
