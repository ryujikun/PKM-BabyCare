<?php

namespace App\Http\Controllers;

use App\Baby;
use App\Post;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MotherController extends Controller
{

    public $viewPrefix = 'pages.mother.';
    public function dokterpeduli(Request $request){
        if($request->isMethod('get')){
            $data['items'] = Question::where('ask_id', Auth::user()->id)->get();
            return view($this->viewPrefix.'dokterpeduli', $data);
        }
        elseif($request->isMethod('post')){
            $question = $request->all();
            $question['ask_id'] = Auth::user()->id;
            if(Question::create($question)){
                return redirect('dokterpeduli')->with('success','Sukses memposting pertanyaan anda.');
            }
            else{
                return redirect('dokterpeduli')->with('danger','Maaf, ada kendala. Coba tanyakan lagi.');
            }
        }
    }

    public function explore(){
        return view($this->viewPrefix.'explore');

    }


    public function babyzone(){
        return view($this->viewPrefix.'babyzone');

    }

    public function motherzone(Request $request){
        if($request->isMethod('get')){
            $data['items'] = Post::orderBy('created_at','desc')->paginate(10);
            return view($this->viewPrefix.'motherzone', $data);

        }
        elseif($request->isMethod('post')){
            $data = $request->only('body');
            $data['user_id'] = Auth::id();
            if(Post::create($data))
                return redirect('motherzone')->with('success','Postingan anda telah dipost');
            else
                return redirect('motherzone')->with('danger','Maaf, postingan anda tidak dapat dipost, silahkan coba lagi');

        }
    }

    public function pertumbuhanku(){
        $data['alert'] = null;
        if(Auth::user()->baby_id==null){
            return view($this->viewPrefix.'pertumbuhanku')
                ->withAlert('Anda belum memasukkan data bayi anda.');
        }else{
            $data['item']  = Baby::find(Auth::user()->baby_id);
            return view($this->viewPrefix.'pertumbuhanku', $data);

        }

    }

    public function jadwal(){
        return view($this->viewPrefix.'jadwal');

    }

    public function ibusiaga(){
        return view($this->viewPrefix.'ibusiaga');

    }
}
