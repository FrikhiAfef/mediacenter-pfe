<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\digital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedialabController extends Controller
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
        $listemedia = digital ::all();

        return view('superadmin.medialab.medialab',['medias' => $listemedia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.medialab.create');

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
            'description'=>'required',
            'image'=>'required',
            'video'=>'required',
        ]);

        //creation de noveau model d'emission
        $media = new digital;

        //affectation de les valeurs
        $media->titre = $request->input('titre');
        $media->description = $request->input('description');
        $media -> image = $request->input('image');
        /* if($request->hasFile('image'))
         {

             $media>image=$request->image->store('image');
         }*/



        //enregistrement de le nouveau model dans la base
        $media -> video = $request->input('video');
        $media->save();

        session()->flash('success','Ajouter avec succes ');
        return redirect(route('medialab.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media =digital::find($id);
        return view('superadmin.medialab.show',['medias' => $media]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media =digital::find($id);
        return view('superadmin.medialab.edit',['medias' => $media]);
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
            'description'=>'required',
            'image'=>'required',
            'video'=>'required',
        ]);

        $media =digital::find($id);
        $media->titre = $request->input('titre');
        $media->description = $request->input('description');
        //$media -> image = $request->input('image');
        //$media -> video = $request->input('video');
        $media->save();
        session()->flash('success','Le membre à été bien modifier ');
        //apres le modification
        return redirect(route('medialab.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media =digital::find($id);
        $media->delete();
        return redirect(route('medialab.index'));
    }
}
