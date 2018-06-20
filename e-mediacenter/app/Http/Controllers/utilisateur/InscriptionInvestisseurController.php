<?php

namespace App\Http\Controllers\utilisateur;
use App\Model\admin\investisseur;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InscriptionInvestisseurController extends Controller
{
    public function index()
    {

        return view('utilisateur.inscriptionInvestisseur');
    }

    public function desactiver(){

        $investisseur = DB::table('investisseurs')
            ->whereNotNull('deleted_at')
            ->get();
        return view('superadmin.investisseur.desactiver', ['investisseur' => $investisseur]);

    }

    public function valider()
    {


        $liste = investisseur::all();

        return view('superadmin.investisseur.valider', ['investisseur' => $liste]);



    }
    /*
    function idee ()
    {
        $liste = porteur::all();


        return view('entreprise.lidée', ['porteur' => $liste]);
    }*/
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required|min:3',
            'prenom'=>'required|min:3',
            'image'=>'required',
            'tel'=>'required|numeric',
            'domaine'=>'required',
            'demande'=>'required',
            'email'=>'required|email',
            'password'=>'required',


        ]);
        //creation de noveau model d'emission
        $inv = new investisseur();

        //affectation de les valeurs
        $inv->nom = $request->input('nom');
        $inv->prenom = $request->input('prenom');
        $inv->tel = $request->input('tel');
        $inv->image = $request->input('image');
        if ($request->hasFile('image')){
            $inv->image = $request->file('image');
            $inv->image=$request->image->store('investisseur');
        }
        $inv->domaine = $request->input('domaine');
        $inv->demande = $request->input('demande');
        $inv->email = $request->input('email');
        $inv->password =bcrypt( $request->input('password'));
        $inv->statut = 0 ;
        $inv->save();
        session()->flash('success','votre inscription a été bien enregistré,attendez une  confirmation par email');
        return redirect ('inscriptionInvestisseur');

    }

}
