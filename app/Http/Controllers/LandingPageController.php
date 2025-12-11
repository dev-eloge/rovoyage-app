<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class LandingPageController extends Controller
{
   public function index(){
    return view('LandingPage');
   }


   public function store(Request $request){
    // Interaction avec la base de données pour enregistrer une réservation
    // valider et traiter les données du formulaire

    $validate = $request -> validate([
        'name' => 'required|string|max:255',
        'lieu_depart' => 'required|string|max:255',
        'lieu_arrive' => 'required|string|max:255',
        'date_aller' => 'required|date',
        'date_retour' => 'required|date',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
    ]);
    // créer une nouvelle réservation
    reservation::create($validate);

    return redirect()->back()->with('success', 'Réservation effectuée avec succès!');

   }

}
