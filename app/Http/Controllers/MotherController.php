<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MotherController extends Controller
{
    public $viewPrefix = 'pages.mother.';
    public function dokterpeduli(){
        return view($viewPrefix.'dokterpeduli');

    }

    public function explore(){
        return view($viewPrefix.'explore');

    }
    public function motherzone(Request $request){
        if($request->isMethod('get')){
            return view($viewPrefix.'motherzone');

        }
        elseif($request->isMethod('post')){
//            posting tips & trik
            return view($viewPrefix.'motherzone');

        }
    }

    public function pertumbuhanku(){
        return view($viewPrefix.'pertumbuhanku');

    }

    public function jadwal(){
        return view($viewPrefix.'jadwal');

    }
    public function ibusiaga(){
        return view($viewPrefix.'ibusiaga');

    }
}
