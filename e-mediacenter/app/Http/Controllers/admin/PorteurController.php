<?php


namespace App\Http\Controllers\admin;

use App\Model\admin\porteur;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PorteurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administrateur');
    }
    public function index()
    {
        //
        $liste = porteur ::all();


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
        /*  //


          $porteur =porteur::find($id);
          if(($porteur->statut!=0))
          {

              return view('superadmin.porteur.affecter',['porteur' => $porteur]);
          }


          /*return view('entreprise.lidée',['idées' => $por]);*/
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
