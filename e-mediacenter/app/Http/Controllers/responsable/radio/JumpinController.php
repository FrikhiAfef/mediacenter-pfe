<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\jump;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JumpinController extends Controller
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
        $listejump = jump::all();
        return view('superadmin.jumpin.jumpin',['jumps' => $listejump]);
    }


    public function create()
    {
        return view('superadmin.jumpin.create');

    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'titre'=>'required',
            'description'=>'required',
        ]);


        $jump = new jump();


        $jump->titre = $request->input('titre');
        $jump->description = $request->input('description');
        $jump->save();
        session()->flash("delete","Jump à été bien ajouté ");

        return redirect(route('jumpin.index'));
    }


    public function show($id)
    {
        $listejump = jump::find($id);
        return view('superadmin.jumpin.show',['jumps' => $listejump]);
    }


    public function edit($id)
    {
        $listejump = jump::find($id);
        return view('superadmin.jumpin.edit',['jumps' => $listejump]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'titre'=>'required',
            'description'=>'required',
        ]);

        $listejump = jump::find($id);
        $listejump->titre = $request->input('titre');
        $listejump->description = $request->input('description');

        $listejump->save();

        //une seul  session pour afiicher le message de success
        session()->flash('success','Jump à été bien modifier ');
        //apres le modification
        return redirect(route('jumpin.index'));
    }


    public function destroy($id)
    {
        $listejump = jump::find($id);
        $listejump->delete();
        return redirect(route('jumpin.index'));
        //une seul  session pour afiicher le message de success
        session()->flash("delete","L'emission à été bien supprimer ");
    }
}
