<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('LandingPage');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lieu_depart' => 'required|string|max:255',
            'lieu_arrive' => 'required|string|max:255',
            'date_aller' => 'required|date|after_or_equal:today',
            'date_retour' => 'required|date|after_or_equal:date_aller',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ], [
            'required' => 'Ce champ est obligatoire.',
            'email' => 'Saisissez une adresse e-mail valide, par exemple nom@exemple.com.',
            'date' => 'Choisissez une date dans le calendrier.',
            'date_aller.after_or_equal' => "La date aller doit être aujourd'hui ou plus tard.",
            'date_retour.after_or_equal' => 'La date retour doit être le même jour ou après la date aller.',
            'max' => 'Ce texte est trop long, raccourcissez-le.',
        ]);

        Reservation::create($validated);

        return redirect()
            ->to(url('/').'#reservation')
            ->with('success', 'Merci, votre demande a bien été envoyée.');
    }
}
