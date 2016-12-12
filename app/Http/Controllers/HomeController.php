<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\RefactorController;
use Input;
use App\UserRole;

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

        $formInput = $request->only('name','birth_date','address','phone');
        $formInput['birth_date'] = Carbon::parse(date('Y/m/d', strtotime($_POST["birth_date"])));

        if($user->update($formInput)){
            if($request->only('image')){
                $file = $request->file('image');
                $valid = new RefactorController();
                $validator = $valid->imageValidator($request->only('image'));

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

    public function register(){
        $data = Input::all();
        $pass = bcrypt($data['password']);
        $role=$data['role'];
      user::InsertGetId(array(
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$pass,
            'address'=>$data['address'],
            'birth_date'=>$data['birth_date'],
            'phone'=>$data['phone']

            ));

        $iduser=user::where('email','=',$data['email'])->get();
       foreach ($iduser as $key => $value) {
          $id=$value->id;
          
          if($role=='ibu'){
             userrole::InsertGetId(array(
            'user_id'=>$id,
            'role_id'=>'1'
            ));
          }
         elseif ($role=='dokter') {
             userrole::InsertGetId(array(
            'user_id'=>$id,
            'role_id'=>'3'
            ));
         }
         else{
             userrole::InsertGetId(array(
            'user_id'=>$id,
            'role_id'=>'2'
            ));
         }
       }
       return redirect('/login');
    }
}
