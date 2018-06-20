<?php

namespace App\Http\Controllers\utilisateur;

use App\Model\responsable\radio\evenement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvenementController extends Controller
{
    public function evenement(evenement $evenement){
        $evenements= $evenement::all();
        return view('utilisateur.evenement',compact('evenements'));
        return view('utilisateur.evenement',compact('evenement'));
    }
}
