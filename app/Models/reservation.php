<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $fillable = [
        'name',
        'lieu_depart',
        'lieu_arrive',
        'date_aller',
        'date_retour',
        'email',
        'phone',
    ];


}
