<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;

class DoctorController extends Controller
{
    protected function answerValidator(array $data)
    {
        return Validator::make($data, [
            'answer' => 'required|min:10'
        ]);
    }

    private $modelView = 'pages.doctor.';

    public function index(Request $request){
            $data['items'] = Question::all();
            $data['content_title'] = 'Daftar Pertanyaan';
            $data['items'] = Question::orderBy('created_at', 'desc')->get();
            return view($this->modelView.'question', $data);

    }

    public function unanswered(Request $request){
        if($request->isMethod('get')){
            $data['items'] = Question::all();
            $data['content_title'] = 'Daftar Pertanyaan';
            $data['items'] = Question::where('answer_id',null)->orderBy('created_at', 'desc')->get();
            return view($this->modelView.'unanswered', $data);
        }

    }

    public function questions(){
            $data['blmTerjawab'] = Question::where('answer_id',null)->count();
            $data['hariIni'] = Question::whereDate('created_at', '=', Carbon::today()->toDateString())->count();
            return view($this->modelView.'questions', $data);
    }

    public function answer($id, Request $request){
        if($request->isMethod('get')){
            $data['item'] = Question::find($id);
            $data['lastQuestion'] = Question::where('user_id', Question::find($id)->user->id)->get();
            return view($this->modelView.'answer', $data);
        }
        elseif($request->isMethod('post')){
            $data = $request->all();
            $data['user_id'] = $request->user()->id;
            if($answer = Answer::create($data)){
                $question = Question::find($id);
                $question->answer_id = $answer->id;
                $question->save();
                return redirect()->back();
            }
            else redirect()->back();


        }
    }
}
