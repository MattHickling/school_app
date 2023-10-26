<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('main'); 
 
    }
    public function showLoginForm()
    {
    return view('auth.login'); 
    }

}
