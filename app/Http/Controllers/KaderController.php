<?php

namespace App\Http\Controllers;

use App\Baby;
use Illuminate\Http\Request;

use App\Http\Requests;

class KaderController extends Controller
{
    private $viewModel = 'pages.kader.';
    public function index(){
        $data['items'] = Baby::all();
        $data['filled'] = Baby::where('document_index',null)->count();
        return view($this->viewModel.'list', $data);
    }
}
