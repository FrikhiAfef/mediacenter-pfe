<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\evenement;
use App\Notifications\AddEvent;
use App\Notifications\AddMail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvenementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administrateur');
    }
    public function index()
    {
        $listeven = evenement::all();
        return view('superadmin.evenements.evenement',['evenements' => $listeven]);
    }


    public function create()
    {
        return view('superadmin.evenements.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'nomEven'=>'required',
            'description'=>'required',
            'date'=>'required',
            'image'=>'required',
            'afficheimage'=>'required',

        ]);


        $even = new evenement();

        $even->nomEven = $request->input('nomEven');
        $even->date = $request->input('date');
        $even->image = $request->input('image');
        $even->afficheimage = $request->input('afficheimage');

        if ($request->hasFile('image')&&($request->hasFile('afficheimage'))){
            $even->image = $request->file('image');
            $even->image=$request->image->store('evenement');
            $even->afficheimage = $request->file('afficheimage');
            $even->afficheimage=$request->afficheimage->store('evenement');
        }

        $even->save();
        auth()->user()->notify(new AddEvent($even));
        session()->flash('success','L"evenement à été bien ajouté ');
        return redirect(route('evenement.index'));

    }


    public function show($id)
    {
        $evenement = evenement::find($id);
        return view('superadmin.evenements.show',['evenements' =>$evenement]);
    }


    public function edit($id)
    {
        $evenement = evenement::find($id);
        return view('superadmin.evenements.edit',['evenements' =>$evenement]);


    }


    public function update(Request $request, $id)
    {
        $even = evenement::find($id);
        $even->nomEven = $request->input('nomEven');
        $even->date = $request->input('date');
        $even -> image = $request->input('image');
        $even->afficheimage = $request->input('afficheimage');
        if ($request->hasFile('image')&&($request->hasFile('afficheimage'))){
            $even->image = $request->file('image');
            $even->image=$request->image->store('evenement');
            $even->afficheimage = $request->file('afficheimage');
            $even->afficheimage=$request->afficheimage->store('evenement');
        }
        $even->save();

        //une seul  session pour afiicher le message de success
        session()->flash('success','L"evenement a été bien modifier ');
        //apres le modification
        return redirect(route('evenement.index'));
    }


    public function destroy($id)
    {

        $even = evenement::find($id);
        $even->delete();
        return redirect(route('evenement.index'));
        return redirect(route('evenement.index'));

        //une seul  session pour afiicher le message de success
        session()->flash('delete','L"evenement a été bien supprimer ');
    }
}
