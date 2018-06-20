<?php

namespace App\Http\Controllers;
use App\publicite;
use Illuminate\Http\Request;

class PubliciteController extends Controller
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
        $listepub = publicite::all();
        return view('superadmin.publicite.publicite',['publicites' => $listepub]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.publicite.create');
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
            'nomSociete'=>'required',
            'image'=>'required',
        ]);


        $pub = new publicite();
        $pub->nomSociete = $request->input('nomSociete');
        $pub -> image = $request->input('image');
        if ($request->hasFile('image')){
            $pub->image = $request->file('image');
            $pub->image=$request->image->store('pub');
        }

        $pub->save();
        session()->flash("delete","La publicite à été bien ajouté ");

        return redirect(route('publicite.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicite = publicite::find($id);
        return view('superadmin.publicite.show',['publicites' => $publicite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicite = publicite::find($id);
        return view('superadmin.publicite.edit', ['publicites' => $publicite]);
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
            'nomSociete'=>'required',
            'image'=>'required',
        ]);

        $pub = publicite::find($id);
        $pub->nomSociete = $request->input('nomSociete');
        $pub -> image = $request->input('image');
        if ($request->hasFile('image')){
            $pub->image = $request->file('image');
            $pub->image=$request->image->store('pub');
        }
        $pub->save();
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
        $pub = publicite::find($id);
        $pub->delete();
        return redirect(route('publicite.index'));

        //une seul  session pour afiicher le message de success
        session()->flash("delete", "La publicite à été bien supprimer ");
    }
}