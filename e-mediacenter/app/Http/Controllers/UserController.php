<?php

namespace App\Http\Controllers;

use App\Model\admin\entreprise;
use App\Model\admin\investisseur;
use App\Model\admin\porteur;
use Illuminate\Http\Request;
use Auth;
use Image;


class UserController extends Controller
{
    public function profileP(){

        return view ('porteure.profile',['user'=>Auth::user()]);
        view('porteure.layouts.sidebar',['user'=>Auth::user()]);

    }
    public function profileinv(){

        return view ('investisseur.profile',['user'=>Auth::user()]);
        view('investisseur.layouts.sidebar',['user'=>Auth::user()]);

    }
    public function profileEnt(){

        return view ('entreprise.profile',['user'=>Auth::user()]);
        view('entreprise.layouts.sidebar',['user'=>Auth::user()]);

    }
    /*  public  function  update_imageE(Request $request)
      {
          if ($request->hasFile('image'))
          {
              $img=$request->file('image');
              $filename=time().'.'.$img->getClientOriginalExtension();
              Image::make($img)->resize(300,300)->save(public_path('/uploads/image/'.$filename));
              $user=Auth::user();
              $user->image=$filename;
              $user->save();
          }
          return view ('entreprise.profile',['user'=>Auth::user()]);
      }*/


    public function editE()
    {

        return view('entreprise.editE',['user'=>Auth::user()]);
    }


    public function editI()
    {

        return view('investisseur.editI',['user'=>Auth::user()]);
    }
    public function editP()
    {

        return view('porteure.editP',['user'=>Auth::user()]);
    }


    public function updateE(Request $request)

    {
        $user = Auth::user();

        $user->name =$request->nom;
        $user->email =$request->email;
        $user->tel = $request->tel;
        $user->domaine =$request->domaine ;
        $user->demande= $request->demande;
        $user->image = $request->input('image');
        $user->save();
        $ent=entreprise::all();
        for ($i=0;$i<count($ent);$i++)
        {
            if($user->clé==$ent[$i]->id)
            {
                $ent[$i]->nom=$user->name;
                $ent[$i]->email=$user->email;
                $ent[$i]->tel=$user->tel;
                $ent[$i]->domaine=$user->domaine;
                $ent[$i]->demande=$user->demande;
                $ent[$i]->logo=$user->image;
                $ent[$i]->save();
            }
        }
        //une seul  session pour afiicher le message de success
        session()->flash('success','Les cordonnées ont été bien modifier ');
        //apres le modification
        return redirect(route('profilE'));

    }

    public function updateI(Request $request)

    {


        $user = Auth::user();

        $user->name =$request->nom;
        $user->email =$request->email;
        $user->tel = $request->tel;
        $user->domaine =$request->domaine ;
        $user->demande= $request->demande;
        $user->image = $request->input('image');

        $user->save();
        $inv=investisseur::all();
        for ($i=0;$i<count($inv);$i++)
        {
            if($user->clé==$inv[$i]->id)
            {
                $inv[$i]->nom=$user->name;
                $inv[$i]->email=$user->email;
                $inv[$i]->tel=$user->tel;
                $inv[$i]->domaine=$user->domaine;
                $inv[$i]->demande=$user->demande;
                $inv[$i]->save();
            }
        }

        //une seul  session pour afiicher le message de success
        session()->flash('success','Les cordonnées ont été bien modifier ');
        //apres le modification
        return redirect(route('profilI'));

    }



    public function updatePorteur(Request $request)

    {
        $user = Auth::user();
        $user->name =$request->nom;
        $user->email =$request->email;
        $user->tel = $request->tel;
        $user->domaine =$request->domaine ;
        $user->demande= $request->demande;
        $user->save();
        $porteur=porteur::all();
        for ($i=0;$i<count($porteur);$i++)
        {
            if($user->clé==$porteur[$i]->id)
            {
                $porteur[$i]->nom=$user->name;
                $porteur[$i]->email=$user->email;
                $porteur[$i]->tel=$user->tel;
                $porteur[$i]->domaine=$user->domaine;
                $porteur[$i]->demande=$user->demande;
                $porteur[$i]->save();
            }
        }

        //une seul  session pour afiicher le message de success
        session()->flash('success','Les cordonnées ont été bien modifier ');
        //apres le modification
        return redirect(route('profilP'));

    }
}
