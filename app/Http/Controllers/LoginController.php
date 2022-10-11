<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    function login()
    {
        
        if (Auth::check()) {
           
            if (request()->user()->hasRole(['Admin']) == 1) {
                return redirect()->intended('dashboard');
            } else if (request()->user()->hasRole(['productmanager']) == 1) {
                return redirect()->intended('product-sale');
            } else if (request()->user()->hasRole(['salesmanager']) == 1) {
                return redirect()->intended('productinput');
            } else {
            }
        }
        return view('welcome');
    }
    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (request()->user()->hasRole(['Admin'])) {

                return redirect()->intended('dashboard')
                    ->withSuccess('You have Successfully loggedin');
            } elseif (request()->user()->hasRole(['productmanager'])) {
                return redirect()->intended('product-sale')
                    ->withSuccess('You have Successfully loggedin');
            } else {
                return redirect()->intended('productinput')
                    ->withSuccess('You have Successfully loggedin');
            }
        }

        return redirect("/")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
