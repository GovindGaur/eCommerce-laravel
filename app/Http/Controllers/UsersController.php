<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function login(Request $req)
    {
        $user =  User::where(['email' => $req->email])->first();

        // return $user->password;
        if (!$user || !Hash::check($req->password, $user->password)) {
            return redirect('/login');
        } else {
            //     $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}