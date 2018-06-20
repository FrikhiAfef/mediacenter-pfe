<?php

namespace App\Http\Controllers\utilisateur;

use App\Model\responsable\radio\emission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmissionController extends Controller
{
    public function emission( emission $emission){
        $emissions= $emission::all();
        return view('utilisateur.emission',compact('emissions'));
        return view('utilisateur.emission',compact('emission'));
    }
}
