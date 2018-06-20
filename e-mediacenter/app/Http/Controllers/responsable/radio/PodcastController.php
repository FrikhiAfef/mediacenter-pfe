<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\podcast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PodcastController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administrateur');
    }
    public function index()
    {
        $listepod = podcast::all();
        return view('superadmin.podcasts.podcast',['podcasts' => $listepod]);
    }


    public function create()
    {
        return view('superadmin.podcasts.create');

    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'titre'=>'required',
            'image'=>'required',

            'description'=>'required',
        ]);

        $podcast = new podcast;

        $podcast->titre = $request->input('titre');
        $podcast -> image = $request->input('image');
        $podcast->audio = $request->input('audio');
        if ($request->hasFile('audio')&& ($request->hasFile('image'))){
            $podcast->image = $request->file('image');
            $podcast->image=$request->image->store('podcast');
            $podcast->audio = $request->file('audio');
            $podcast->audio=$request->audio->store('podcast');
        }
        $podcast->description = $request->input('description');

        $podcast->save();
        session()->flash("delete","L'enregistrement à été bien ajouté ");

        return redirect(route('podcast.index'));

    }


    public function show($id)
    {
        $podcast = podcast::find($id);
        return view('superadmin.podcasts.show',['podcasts' => $podcast]);

    }


    public function edit($id)
    {
        $podcast = podcast::find($id);
        return view('superadmin.podcasts.edit',['podcasts' => $podcast]);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'titre'=>'required',
            'image'=>'required',

            'description'=>'required',
        ]);


        $podcast = podcast::find($id);
        $podcast->titre = $request->input('titre');
        $podcast -> image = $request->input('image');
        $podcast->audio = $request->input('audio');
        if ($request->hasFile('audio')&& ($request->hasFile('image'))){
            $podcast->image = $request->file('image');
            $podcast->image=$request->image->store('podcast');
            $podcast->audio = $request->file('audio');
            $podcast->audio=$request->audio->store('podcast');
        }

        $podcast->description = $request->input('description');


        $podcast->save();

        //une seul  session pour afiicher le message de success
        session()->flash('success','Le podcast à été bien modifier ');
        //apres le modification
        return redirect(route('podcast.index'));
    }


    public function destroy($id)
    {
        $podcast = podcast::find($id);
        $podcast->delete();
        return redirect(route('podcast.index'));

        //une seul  session pour afiicher le message de success
        session()->flash("delete","L'enregistrement à été bien supprimer ");
    }
}
