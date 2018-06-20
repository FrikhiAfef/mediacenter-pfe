<?php

namespace App\Http\Controllers\admin;
use App\Model\admin\investisseur;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvestisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:administrateur');
    }
    public function index()
    {
        //
        $liste = investisseur ::all();



        /*  for ($i=0;$i<count($liste);$i++)
           {
               $investisseur =$liste[$i];
               if ($investisseur->statut ==1)
               {
                   $user=new User();
                   $user->name=$investisseur->nom;
                   $user->email=$investisseur->email;
                   $user->password=$investisseur->password;
                   $user->role='investisseur';
                   $user->idee='null';
                   $user->domaine=$investisseur->domaine;
                   $user->demande=$investisseur->demande;
                    $user->tel=$investisseur->tel;

                   $user->save();
               }

           }*/

        return view('superadmin.investisseur.investisseur',['investisseurs' => $liste]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('superadmin.investisseur.valider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $liste = investisseur ::all();



        for ($i=0;$i<count($liste);$i++)
        {
            $investisseur =$liste[$i];
            if ($investisseur->statut ==1)
            {
                $user=new User();
                $user->name=$investisseur->nom;
                $user->email=$investisseur->email;
                $user->password=$investisseur->password;
                $user->role='investisseur';

                $user->save();
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*  //


          $porteur =porteur::find($id);
          if(($porteur->statut!=0))
          {

              return view('superadmin.porteur.affecter',['porteur' => $porteur]);
          }


          /*return view('entreprise.lidée',['idées' => $por]);*/
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investisseur=investisseur::find($id);
        $investisseur->statut=1;
        $investisseur->save();

        $user=new User();
        $user->clé= $investisseur->id;
        $user->name=$investisseur->nom;
        $user->email=$investisseur->email;
        $user->password=$investisseur->password;
        $user->role='investisseur';
        $user->image=$investisseur->image;
        $user->idee='null';
        $user->domaine=$investisseur->domaine;
        $user->demande=$investisseur->demande;
        $user->tel=$investisseur->tel;
        $user->save();
        Mail::to($user->email)->send(new ConfirmationMail($user) );
        return redirect(route('investisseur.index'));

    }

    public function destroy($id)
    {
        $inv = investisseur::find($id);
        $inv->delete();
        $user=User::all();
        for ($i=0;$i<count($user);$i++)
        {
            if(($user[$i]->clé ==$inv->id)&&($user[$i]->email.equalTo($inv->email)))
            {
                $user[$i]->delete();
            }
        }
        return redirect(route('investisseur.index'));
    }
}
