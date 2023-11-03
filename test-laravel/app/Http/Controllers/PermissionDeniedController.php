<?php

namespace App\Http\Controllers;

class PermissionDeniedController extends Controller
{
    public function index()
    {
        return view('permission-denied');
    }
}
