<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\galerie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleriesController extends Controller
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
        $listegalerie = galerie ::all();

        return view('superadmin.galeries.galerie',['galeries' => $listegalerie]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.galeries.create');
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
        ]);

        //creation de noveau model d'emission
        $galerie = new galerie();

        //affectation de les valeurs
        $galerie->titre = $request->input('titre');
        $galerie -> image = $request->input('image');
        if ($request->hasFile('image')){
            $galerie->image= $request->file('image');
            $galerie->image=$request->image->store('galerie');
        }
        /* if($request->hasFile('image'))
         {

             $galerie>image=$request->image->store('image');
         }*/

        //enregistrement de le nouveau model dans la base
        $galerie->save();

        session()->flash('success','L"a propos à été bien ajouté ');
        return redirect(route('galerie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galerie = galerie::find($id);
        return view('superadmin.galeries.show',['galeries' => $galerie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galerie = galerie::find($id);
        return view('superadmin.galeries.edit',['galeries' => $galerie]);
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
            'titre'=>'required',
            'image'=>'required',

        ]);

        $galerie = galerie::find($id);
        $galerie->titre = $request->input('titre');

        $galerie -> image = $request->input('image');
        if ($request->hasFile('image')){
            $galerie->image= $request->file('image');
            $galerie->image=$request->image->store('galerie');
        }
        $galerie->save();

        //une seul  session pour afiicher le message de success
        session()->flash('success','L"image à été bien modifier ');
        //apres le modification
        return redirect(route('galerie.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galerie = galerie::find($id);
        $galerie->delete();
        return redirect(route('galerie.index'));

        //une seul  session pour afiicher le message de success
        session()->flash("delete","L'image à été bien supprimer ");
    }
}
