<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        if ($request->user()->hasRole('user')) {
            return view('home');
        }

        if ($request->user()->hasRole('admin')) {
            return redirect('/board/admin/dashboard');
        }
    }
}
