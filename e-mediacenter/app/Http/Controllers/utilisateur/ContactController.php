<?php

namespace App\Http\Controllers\utilisateur;
use App\Http\Controllers\Controller;
use App\Model\Administrateur;
use App\Model\responsable\radio\contact;
use App\Http\Requests\contactRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\contactmail;


class ContactController extends Controller
{
    public function index()
    {
        return view('utilisateur.contact');
    }


    public function store(contactRequest $request)
    {

        $this->validate($request,[
            'nom'=>'required|min:3',
            'prenom'=>'required|min:3',
            'email'=>'required|email',
            'msg'=>'required|min:5',
        ]);
        $contact= new contact();
        $contact ->prenomC=$request->input('prenom');
        $contact ->nomC=$request->input('nom');
        $contact ->email=$request->input('email');
        $contact ->message=$request->input('msg');

        $contact-> save();

        Mail::to(env('MAIL_USERNAME'))->send(new contactmail($contact) );
        session()->flash('success','votre message de contact a été bien envoyé');
      return view('utilisateur.contact');
    }




}