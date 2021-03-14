<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function dashboard(){
      if(Auth::check()){
        return view('restricted.Painel');
      }

      return redirect()->route('login.home');
    }

    public function showLoginForm(){
      return view('home');
    }

    public function login(Request $request){
      $credentials = [
        'email'     => $request->email,
        'password'  => $request->senha
      ];

      if(Auth::attempt($credentials)){
        return redirect()->route('dashboard');
      }

      return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem!']);
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('login.home');
    }
}
