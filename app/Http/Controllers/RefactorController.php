<?php
/**
 * Created by PhpStorm.
 * User: Anwar Rosyidi
 * Date: 08-Nov-16
 * Time: 12:09 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RefactorController extends Controller
{
    public function uploadPhoto($photoInput, $baby, $request)
    {
        $file = $photoInput;
        $validator = $this->imageValidator($request->only('image'));

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        $path_picture = 'baby-' . $baby->id . '.'. $file->getClientOriginalExtension();
        $returnData['file'] = $file;
        $returnData['path_picture'] = $path_picture;
        return $returnData;
    }

    public function imageValidator($data){
        return Validator::make($data, [
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

    }
}