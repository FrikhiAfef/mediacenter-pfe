<?php


namespace App\Http\Controllers\admin;

use App\Model\admin\porteur;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PorteurController extends Controller
{

    public function index()
    {
        //
        $liste = porteur ::all();





     for ($i=0;$i<count($liste);$i++)
        {
            $porteur =$liste[$i];
            $user=new User();
            $user->name=$porteur->nom;
            $user->email=$porteur->email;
            $user->password=$porteur->password;
            $user->idee=$porteur->idee;
            $user->domaine=$porteur->domaine;
            $user->demande=$porteur->demande;
            $user->save();

        }

        return view('superadmin.porteur.porteur',['porteurs' => $liste]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('superadmin.porteur.affecter');
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
        //


          $porteur =porteur::find($id);
          if(($porteur->statut!=0))
          {

              return view('superadmin.porteur.affecter',['porteur' => $porteur]);
          }


         return view('entreprise.lidée',['idées' => $porteur]);
    }

    public function edit($id)
    {
        $port=porteur::find($id);
        return view('superadmin.porteur.edit', ['porteurs'=>$port]);
    }


    public function update(Request $request, $id)
    {
        $port=porteur::find($id);

        $port->statut=$request->input('statut');
        $port->save();
        return redirect(route('porteur.index'));
    }



    public function destroy($id)
    {
        $port = porteur::find($id);
        $port->delete();
        return redirect(route('porteur.index'));
    }
}
