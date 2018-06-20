<?php

namespace App\Http\Controllers\admin;

use App\Model\admin\partenaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartenaireController extends Controller
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
        $listepart = partenaire::all();
        return view('superadmin.partenaire.partenaire',['partenaires' => $listepart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.partenaire.create');
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
            'logo'=>'required',
        ]);


        $part = new partenaire();
        $part->nom = $request->input('nom');
        $part-> logo = $request->input('logo');
        if ($request->hasFile('logo')){
            $part->logo = $request->file('logo');
            $part->logo=$request->logo->store('partenaire');
        }

        $part->save();
        session()->flash("delete","Le partenaire à été bien ajouté ");

        return redirect(route('partenaire.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partenaire = partenaire::find($id);
        return view('superadmin.partenaire.show',['partenaires' => $partenaire]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partenaire = partenaire::find($id);
        return view('superadmin.partenaire.edit', ['partenaires' => $partenaire]);
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
            'logo'=>'required',
        ]);

        $part = partenaire::find($id);
        $part->nom = $request->input('nom');

        $part -> logo = $request->input('logo');
        if ($request->hasFile('logo')){
            $part->logo = $request->file('logo');
            $part->logo=$request->logo->store('partenaire');
        }

        $part->save();
        //une seul  session pour afiicher le message de success
        session()->flash('success','Le publicite à été bien modifier ');
        //apres le modification
        return redirect(route('publicite.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $part = partenaire::find($id);
        $part->delete();
        return redirect(route('partenaire.index'));
        //une seul  session pour afiicher le message de success
        session()->flash("delete", "Le partenaire à été bien supprimer ");
    }
}