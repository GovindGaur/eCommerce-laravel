<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function login(Request $req)
    {
       $user= User::where(['email' => $req->email])->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return redirect('/login');
        } else {
                $req->session()->put('user', $user);
            return redirect('/');
        }
    }
    public function register(Request $req){
    //   return $req->input();
            $user = new User;
            $user->name = $req->name;    
            $user->email = $req->email;    
            $user->password = Hash::make($req->password);   
            $user->save();
            return redirect('/login'); 
    
    }
}