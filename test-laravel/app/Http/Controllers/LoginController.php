<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginAsSimpleUser(Request $request)
    {
        $request->session()->put('simple_user', true);
        return redirect('/home');
    }

    public function loginAsAdmin(Request $request)
    {
        $request->session()->put('admin_user', true);
        return redirect('/home');
    }

    public function logOut(Request $request) {
        $request->session()->forget('simple_user');
        $request->session()->forget('admin_user');

        return redirect('/home');
    }
}
