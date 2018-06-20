<?php

namespace App\Http\Controllers\utilisateur;
use App\Model\admin\porteur;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InscriptionporteurController extends Controller
{
    public function index()
    {

        return view('utilisateur.inscriptionP');
    }



    public function affecter()
    {


        $liste = porteur::all();


        return view('superadmin.porteur.affecter', ['porteur' => $liste]);



    }
    function idee ()
    {
        $liste = porteur::all();


        return view('entreprise.lidée', ['porteur' => $liste]);
    }
    function ideeinv ()
    {
        $liste = porteur::all();


        return view('investisseur.lidée', ['porteur' => $liste]);
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'nom'=>'required|min:3',
            'prenom'=>'required|min:3',
            'image'=>'required',
            'tel'=>'required|numeric',
            'description'=>'required',
            'domaine'=>'required',
            'demande'=>'required',
            'cv'=>'required',
            'email'=>'required|email',
            'password'=>'required',


        ]);

        $port = new porteur();

        //affectation de les valeurs
        $port->nom = $request->input('nom');
        $port->prenom = $request->input('prenom');
        $port->image = $request->input('image');
        $port->curriculumVitae = $request->input('cv');
        if ($request->hasFile('image')&& ($request->hasFile('cv'))){
            $port->image = $request->file('image');
            $port->image=$request->image->store('porteur');
            $port->curriculumVitae= $request->file('cv');
            $port->curriculumVitae=$request->cv->store('porteur');
        }
        $port->tel = $request->input('tel');
        $port->idee = $request->input('description');
        $port->domaine = $request->input('domaine');
        $port->demande = $request->input('demande');
        $port->statut = 0 ;
        $port->email = $request->input('email');
        $port->password =bcrypt( $request->input('password'));
        $port->save();

        $user=new User();
        $user->clé=$port->id;
        $user->name=$port->nom;
        $user->email=$port->email;
        $user->password=$port->password;
        $user->role='porteur';
        $user->image=$port->image;
        $user->idee=$port->idee;
        $user->domaine=$port->domaine;
        $user->demande=$port->demande;
        $user->tel=$port->tel;
        $user->save();
        return redirect (route('login'));
    }

}
