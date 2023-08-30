<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function register(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'position'=>'required',
            'password'=>'required|min:6',
        ]);
        $data=$request->all();
        $this->create($data);
        return redirect('/admin')->with('message','Successfully Reqistered! PLease Login');
    }

    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
    }


    public function login(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:6'
        ]);
        $data=$request->only('email','password');
        if(Auth::attempt($data)){
        return redirect('/admin')->with('message',"logged in successfully");
        }    
           
    }



    public function logout(){
        session::flush();
        Auth::logout();
        return redirect('/');
    }

}


