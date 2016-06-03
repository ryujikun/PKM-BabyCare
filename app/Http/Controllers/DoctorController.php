<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Requests;

class DoctorController extends Controller
{
    private $modelView = 'pages.doctor.';

    public function index(Request $request){
        if($request->isMethod('get')){
            $data['items'] = Question::all();
            $data['content_title'] = 'Daftar Pertanyaan';
            $data['items'] = Question::simplePaginate(15);
            return view($this->modelView.'question', $data);
        }

    }

    public function landing(){

    }
}
