<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->isMommy()) redirect('/mother');
            elseif(Auth::user()->isDoctor()) redirect('/doctor');
            elseif(Auth::user()->isKader()) redirect('/kader');
        }
        else return view('pages.landing');
    }


}
