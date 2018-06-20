<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActualiteController extends Controller
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
        $listeact = actualite ::all();

        return view('superadmin.actualites.actualite',['actualites' => $listeact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.actualites.create');

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
            'titre'=>'required',
            'image'=>'required',
            'description'=>'required',


        ]);

        //creation de noveau model d'emission
        $act = new actualite();

        //affectation de les valeurs
        $act->titre = $request->input('titre');
        $act -> image = $request->input('image');
        if ($request->hasFile('image')){
            $act->image = $request->file('image');
            $act->image=$request->image->store('actualite');
        }
        $act->description = $request->input('description');
        $act->date = $request->input('date');
        //enregistrement de le nouveau model dans la base
        $act->save();

        session()->flash('success','L"actualiteé à été bien ajouté ');
        return redirect(route('actualite.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $act =actualite::find($id);
        return view('superadmin.actualites.show',['actualites' => $act]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $act =actualite::find($id);
        return view('superadmin.actualites.edit',['actualites' => $act]);
    }


    public function update(Request $request, $id)
    {
        $act =actualite::find($id);
        //affectation de les valeurs
        $act->titre = $request->input('titre');
        $act -> image = $request->input('image');
        if ($request->hasFile('image')){
            $act->image = $request->file('image');
            $act->image=$request->image->store('actualite');
        }
        $act->description = $request->input('description');
        $act->date = $request->input('date');
        $act->save();
        session()->flash('success','Le membre à été bien modifier ');
        //apres le modification
        return redirect(route('actualite.index'));
    }


    public function destroy($id)
    {
        $act = actualite::find($id);
        $act->delete();
        return redirect(route('actualite.index'));
    }
}