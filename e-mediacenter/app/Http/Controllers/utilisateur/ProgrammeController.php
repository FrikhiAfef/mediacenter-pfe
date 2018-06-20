<?php

namespace App\Http\Controllers\utilisateur;

use App\Model\responsable\radio\programme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgrammeController extends Controller
{
    public function programme(programme $programme){
        $programmes= $programme::all();
        return view('utilisateur.programmes',compact('programmes'));
        return view('utilisateur.programmes',compact('programme'));
    }
}
