<?php

namespace App\Http\Controllers;

use App\Baby;
use Illuminate\Http\Request;

use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;

class AjaxController extends Controller
{

    private function getFileName($id){
        return Baby::find($id)->document_index;
    }

    public function getJson($baby_id){

        $file = $this->getFileName($baby_id);

        if($file==null){
            return null;
        }
        else{
            $lala = Excel::load('public/file/'.$file, function($reader) {

                // Getting all results
                $results = $reader->get();

                // ->all() is a wrapper for ->get() and will work the same
                $results = $reader->all();

            })->get();
            return json_encode($lala);
        }

    }
}
