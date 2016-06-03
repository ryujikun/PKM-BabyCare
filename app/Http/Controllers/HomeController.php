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
            if(Auth::user()->isMommy()) return redirect('/motherzone');
            elseif(Auth::user()->isDoctor()) return redirect('/question');
            elseif(Auth::user()->isKader()) return redirect('/kader');
        }
        else return view('pages.landing');
    }


}
