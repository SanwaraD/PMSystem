<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function viewform(){
        return view('register');
    }

    public function userregister(Request $req){
        $req->validate([
            'fname'=>'required|string',
            'lname'=>'required|string',
            'email'=>'required|email|unique:users',
            'phone'=>'required|max:10',
            'password'=>'required|max:8|confirmed',
        ]);


        $data['fname']=$req->fname;
        $data['lname']=$req->lname;
        $data['email']=$req->email;
        $data['phone']=$req->phone;
        $data['password']=$req->password;

        $newuser=users::create($data);

        if($newuser){
            return redirect('/register')->with('status','register Successful');
        }else{
            return redirect('/register')->with('status','register failed');
        }
    }

    public function viewlogin(){
        return view('login');
    }

    public function userlogin(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $creadentials=$req->only('email','password');

        if(Auth::attempt($creadentials)){
            return redirect()->route('dashboard');
        }else{
            return redirect('/')->with('status','login Unsuccessful check your email and password');
        }
    }
}
