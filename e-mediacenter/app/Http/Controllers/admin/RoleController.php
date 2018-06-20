<?php

namespace App\Http\Controllers\admin;

use App\Model\admin\permission;
use App\Model\admin\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
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
        $roles= role::all();
        return view('superadmin.role.role',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions= permission::all();
        return view('superadmin.role.create',compact('permissions'));
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
            'nomR' =>'required|max:50|unique:roles'
        ]);

        $role = new role;
        $role->nomR = $request->nomR;
        $role->save();
        $role->permissions()->sync($request->permission);
        return redirect(route('role.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* $role =role::find($id);
         return view('superadmin.role.show',['roles' => $role]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions= permission::all();
        $role =role::find($id);
        return view('superadmin.role.edit',['roles' => $role],compact('permissions'));
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
        $role =role::find($id);
        $role->nomR = $request->input('nomR');

        $role->save();
        $role->permissions()->sync($request->permission);
        session()->flash('success','Le role à été bien modifier ');
        //apres le modification
        return redirect(route('role.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = role::find($id);
        $role->delete();
        return redirect(route('role.index'));
    }
}
