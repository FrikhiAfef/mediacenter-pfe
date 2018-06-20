<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    //
    public function index()
    {
        $users=User::all();
     return view('superadmin.conversation.index',['users'=>$users]);
    }
    public function  show(User $user)
    {
        $users=User::all();
        return view('superadmin.conversation.index',compact('users','user'));

    }
}
