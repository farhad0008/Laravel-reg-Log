<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\register;

class UserController extends Controller
{
    //

    function register(Request $req){
        $data = $req->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        $users = new register();
        $users->name = $req->name;
        $users->email = $req->email;
        $users->password = $req->password;
        $res = $users->save();
        if($res){
            return redirect("/login");
        }else{
            return redirect("/");
        }

        // return $req;
    }

    function login(Request $req){

        $email = $req->email;
        $password = $req->password;

        $data = $req->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        $user = register::where('email', $email)
                        ->where('password', $password)
                        ->first();

        if($user){
            // session(['user'=>$email]);
            $req->session()->put('user', $email);
            return redirect("/profile");
        }else{
            echo "invalid data";
        }
        // return $req;
        // return view("/login");
        // return "login function";
    }

    function profile(){
        if(!session()->has('user')){
            return redirect("/login");
        }
        $user = session('user');
        // return view("/profile", compact('user'));
        return view("/profile");
        // return "profile function";
    }

    // function logout(Request $req){
    //     $req->session()->flush();
    //     return redirect("/login");
    // }

    function logout(){
       session()->pull('user'); 
       return redirect("/login");
    }
}
