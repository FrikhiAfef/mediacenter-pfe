<?php

namespace App\Http\Controllers\utilisateur;

use App\Model\responsable\radio\actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActualiteController extends Controller
{
    public function actualite(actualite $actualite ){
        $actualites= $actualite::all();
        return view('utilisateur.actualite',compact('actualites'));
        return view('utilisateur.actualite',compact('actualite'));
    }
}
