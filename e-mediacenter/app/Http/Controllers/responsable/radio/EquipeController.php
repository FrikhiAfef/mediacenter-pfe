<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\equipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EquipeController extends Controller
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
        $listeequi = equipe ::all();

        return view('superadmin.equipe.equipe',['equipes' => $listeequi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.equipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom'=>'required',
            'prenom'=>'required',
            'poste'=>'required',
            'image'=>'required',
        ]);

        //creation de noveau model d'emission
        $equipe = new equipe();

        //affectation de les valeurs
        $equipe->nom = $request->input('nom');
        $equipe->prenom = $request->input('prenom');
        $equipe->poste = $request->input('poste');
        $equipe -> image = $request->input('image');
        if ($request->hasFile('image')){
            $equipe->image = $request->file('image');
            $equipe->image=$request->image->store('equipe');
        }
        //enregistrement de le nouveau model dans la base
        $equipe->save();

        session()->flash('success','Le membre à été bien ajouté ');
        return redirect(route('equipe.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipe =equipe::find($id);
        return view('superadmin.equipe.show',['equipes' => $equipe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipe =equipe::find($id);
        return view('superadmin.equipe.edit',['equipes' => $equipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'nom'=>'required',
        'prenom'=>'required',
        'poste'=>'required',
        'image'=>'required',
    ]);
        $equipe =equipe::find($id);
        $equipe->nom = $request->input('nom');
        $equipe->prenom = $request->input('prenom');
        $equipe->poste = $request->input('poste');
        $equipe -> image = $request->input('image');
        if ($request->hasFile('image'))
        {
            $equipe->image = $request->file('image');
            $equipe->image=$request->image->store('equipe');
        }
        $equipe->save();
        session()->flash('success','Le membre à été bien modifier ');
        //apres le modification
        return redirect(route('equipe.index'));
    }


    public function destroy($id)
    {
        $equipe =equipe::find($id);
        $equipe->delete();
        return redirect(route('equipe.index'));
    }
}
