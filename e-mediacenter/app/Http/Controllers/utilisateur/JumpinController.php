<?php

namespace App\Http\Controllers\utilisateur;

use App\Model\responsable\radio\jump;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JumpinController extends Controller
{
    public function jump(jump $jump){
        $jumps= $jump::all();
        return view('utilisateur.jumpin',compact('jumps'));
        return view('utilisateur.jumpin',compact('jump'));
    }

}
