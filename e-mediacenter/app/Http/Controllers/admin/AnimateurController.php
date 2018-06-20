<?php

namespace App\Http\Controllers\admin;

use App\Model\admin\animateur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnimateurController extends Controller
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
        $listeanim = animateur ::all();

        return view('superadmin.animateur.animateur',['animateurs' => $listeanim]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.animateur.create');
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
            'nomPrenom'=>'required',
            'tel'=>'required',
        ]);

        //creation de noveau model d'emission
        $animateur = new animateur();

        //affectation de les valeurs
        $animateur->nomAnim = $request->input('nomPrenom');
        $animateur->tel = $request->input('tel');

        //enregistrement de le nouveau model dans la base
        $animateur->save();

        session()->flash('success','L"animateur à été bien ajouté ');
        return redirect(route('animateur.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animateur =animateur::find($id);
        return view('superadmin.animateur.show',['animateurs' => $animateur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animateur =animateur::find($id);
        return view('superadmin.animateur.edit',['animateurs' => $animateur]);
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
            'nomPrenom'=>'required',
            'tel'=>'required',

        ]);

        $animateur =animateur::find($id);
        $animateur->nomAnim = $request->input('nomPrenom');
        $animateur->tel = $request->input('tel');
        $animateur->save();
        session()->flash('success','L"animateur à été bien modifier ');
        //apres le modification
        return redirect(route('animateur.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animateur =animateur::find($id);
        $animateur->delete();
        return redirect(route('animateur.index'));
    }
}