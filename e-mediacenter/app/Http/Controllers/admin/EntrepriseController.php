<?php

namespace App\Http\Controllers\admin;

use App\Mail\ConfirmationMail;
use App\Model\admin\entreprise;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EntrepriseController extends Controller
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
        $liste = entreprise ::all();

        /* for ($i=0;$i<count($liste);$i++)
              {
                  $entreprise =$liste[$i];
                  if ($entreprise->statut ==1)
                  {
                      $user=new User();
                      $user->name=$entreprise->nom;
                      $user->email=$entreprise->email;
                      $user->password=$entreprise->password;
                      $user->role='entreprise';

                      $user->save();
                  }

              }*/

        return view('superadmin.entreprise.entreprise',['entreprises' => $liste]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('superadmin.entreprise.valider');
    }


    public function store(Request $request)
    {
        //
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
        $Entrep=entreprise::find($id);
        $Entrep->statut=1;
        $Entrep->save();
        $user=new User();
        $user->clé= $Entrep->id;
        $user->name= $Entrep->nom;
        $user->email=$Entrep->email;
        $user->password=$Entrep->password;
        $user->role='entreprise';
        $user->image=$Entrep->logo;
        $user->idee='null';
        $user->domaine=$Entrep->domaine;
        $user->demande=$Entrep->demande;
        $user->tel=$Entrep->tel;
        $user->save();
       Mail::to($user->email)->send(new ConfirmationMail($user) );
        return redirect(route('entreprise.index'));
    }


    public function destroy($id)
    {
        $Ent = entreprise::find($id);
        $Ent->delete();
        $user=User::all();
        for ($i=0;$i<count($user);$i++)
        {
            if(($user[$i]->clé ==$Ent->id)&&($user[$i]->email.equalTo($Ent->email)))
            {
                $user[$i]->delete();
            }
        }
        return redirect(route('entreprise.index'));
    }
}
