<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
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
        else return view('pages.landing2');
    }

    public function profil(){
        $id = Auth::user()->id;

        $data['item'] = User::find($id);
        return view('pages.ubahprofil', $data);
    }

    public function profilPost(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);

        $request = $request->only('name','birth_date','address','phone');

        $user->updateOrCreate($request);

        $data['item'] = User::find($id);
        return view('pages.ubahprofil', $data);
    }


}
