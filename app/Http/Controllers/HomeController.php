<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    private function imageValidator($data){
        return Validator::make($data, [
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

    }
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

        $formInput = $request->only('name','birth_date','address','phone');
        $formInput['birth_date'] = Carbon::parse(date('Y/m/d', strtotime($_POST["birth_date"])));

        if($user->update($formInput)){
            if($request->only('image')){
                $file = $request->file('image');
                $validator = $this->imageValidator($request->only('image'));

                if ($validator->fails()) {
                    $this->throwValidationException($request, $validator);
                }

                $path_picture = 'user-' . $user->id . '.'. $file->getClientOriginalExtension();

                if ($file->move(base_path() . '/public/images/web/' , $path_picture))
                {
                    $user->path_picture = $path_picture;
                    $user->save();
                }
            }

            return redirect('profil');
        }

        return redirect('/profil');
    }


}
