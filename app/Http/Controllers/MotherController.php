<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MotherController extends Controller
{
    public $viewPrefix = 'pages.mother.';
    public function dokterpeduli(){
        return view($this->viewPrefix.'dokterpeduli');

    }

    public function explore(){
        return view($this->viewPrefix.'explore');

    }


    public function babyzone(){
        return view($this->viewPrefix.'babyzone');

    }

    public function motherzone(Request $request){
        if($request->isMethod('get')){
            return view($this->viewPrefix.'motherzone');

        }
        elseif($request->isMethod('post')){
//            posting tips & trik
            return view($this->viewPrefix.'motherzone');

        }
    }

    public function pertumbuhanku(){
        return view($this->viewPrefix.'pertumbuhanku');

    }

    public function jadwal(){
        return view($this->viewPrefix.'jadwal');

    }
    public function ibusiaga(){
        return view($this->viewPrefix.'ibusiaga');

    }
}
