<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\apropo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AproposController extends Controller
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
        $listeap = apropo ::all();

        return view('superadmin.apropos.apropo',['apropos' => $listeap]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.apropos.create');

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
            'image'=>'image',
            'description'=>'required',
        ]);

        //creation de noveau model d'emission
        $apropo = new apropo();

        //affectation de les valeurs
        $apropo->titre = $request->input('titre');

        $apropo -> image = $request->input('image');
        if ($request->hasFile('image')){
            $apropo->image = $request->file('image');
            $apropo->image=$request->image->store('apropos');
        }

        $apropo->description = $request->input('description');


        //enregistrement de le nouveau model dans la base
        $apropo->save();

        session()->flash('success','L"a propos à été bien ajouté ');
        return redirect(route('apropo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apropo =apropo::find($id);
        return view('superadmin.apropos.show',['apropos' => $apropo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apropo =apropo::find($id);
        return view('superadmin.apropos.edit',['apropos' => $apropo]);
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
            'image'=>'image',
            'description'=>'required',

        ]);
        $apropo =apropo::find($id);
        $apropo->titre = $request->input('titre');

        $apropo -> image = $request->input('image');
        if ($request->hasFile('image')){
            $apropo->image = $request->file('image');
            $apropo->image=$request->image->store('apropos');
        }
        $apropo->description = $request->input('description');
        $apropo->save();
        session()->flash('success','Le membre à été bien modifier ');
        //apres le modification
        return redirect(route('apropo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apropo =apropo::find($id);
        $apropo->delete();
        return redirect(route('apropo.index'));
    }
}