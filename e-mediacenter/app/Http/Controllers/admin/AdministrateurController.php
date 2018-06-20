<?php

namespace App\Http\Controllers\admin;

use App\Model\admin\Administrateur;
use App\Model\admin\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministrateurController extends Controller
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
        $users=Administrateur::all();
        return view('superadmin.administrateur.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=role::all();

        return view('superadmin.administrateur.create',compact('roles'));
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
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:administrateurs',
            'password' => 'required|string|min:6|confirmed',
            'tel' => 'required|numeric',
        ]);
        $request['password'] = bcrypt($request->password);
        $user = Administrateur::create($request->all());
        $user->roles()->sync($request->role);
        return redirect(route('administrateur.index'));

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Administrateur::find($id);
        $roles = role::all();
        return view('superadmin.administrateur.edit',compact('user','roles'));

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
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'tel' => 'required|numeric',
        ]);
        $request->statut? : $request['statut']=0;
        $user = Administrateur::where('id',$id)->update($request->except('_token','_method','role'));
        Administrateur::find($id)->roles()->sync($request->role);
        return redirect(route('administrateur.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function destroy(Administrateur $administrateur)
    {
        Administrateur::where('id',$administrateur->id)->delete();
        return redirect(route('administrateur.index'));
    }

}
