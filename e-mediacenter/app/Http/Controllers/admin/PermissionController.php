<?php

namespace App\Http\Controllers\admin;

use App\Model\admin\permission;
use App\Model\admin\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:administrateur');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions=permission::all();
        return view('superadmin.permission.permission',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.permission.create');
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
            'nomP' =>'required|max:50|unique:permissions',
            'type' =>'required'

        ]);

        $permission = new permission();
        $permission->nomP = $request->nomP;
        $permission->type = $request->type;
        $permission->save();
        return redirect(route('permission.index'));
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
        $permission =permission::find($id);
        return view('superadmin.permission.edit',['permissions' => $permission]);
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
            'nomP' =>'required|max:50|unique:permissions',
            'type' =>'required'
        ]);

        $permission =permission::find($id);

        $permission->nomP = $request->input('nomP');
        $permission->type = $request->input('type');
        $permission->save();
        session()->flash('success','La permission à été bien modifier ');
        //apres le modification
        return redirect(route('permission.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
        permission::where('id',$permission->id)->delete();
        return redirect(route('permission.index'));
    }
}
