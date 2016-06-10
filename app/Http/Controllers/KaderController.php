<?php

namespace App\Http\Controllers;

use App\Baby;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class KaderController extends Controller
{
    private function fileValidator($data){
        return Validator::make($data, [
            'xx' => 'required',
        ]);
    }

    private function imageValidator($data){
        return Validator::make($data, [
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

    }

    private $viewModel = 'pages.kader.';

    public function index(){
        $data['items'] = Baby::all();
        $data['filled'] = Baby::where('document_index',null)->count();
        return view($this->viewModel.'list', $data);
    }

    public function detail($id){
        $data['item'] = Baby::find($id);
        return view($this->viewModel.'detail', $data);
    }

    public function upload($id){
        $data['item'] = Baby::find($id);
        return view($this->viewModel.'upload', $data);
    }

    public function uploadPost(Request $request, $id){
        $file = $request->file('xx');
        $validator = $this->fileValidator($request->only('xx'));

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        $baby = Baby::find($id);
        $path_picture = $id . '.'. $file->getClientOriginalExtension();

        if ($file->move(base_path() . '/public/file/' , $path_picture))
        {
            $baby->document_index = $path_picture;
            $baby->save();
        }
        return redirect('/');
    }

    public function babydata(){
        $data['items'] = Baby::orderBy('name')->get();
        $data['filled'] = Baby::count();
        return view($this->viewModel.'babydata', $data);
    }

    public function updateBaby($id){
        $data['item'] = Baby::find($id);
        return view($this->viewModel.'profil', $data);
    }

    public function updateBabyPost(Request $request,$id)
    {
        $data = $request->only('name','condition','birth_date','weight','height');
        $baby = Baby::find($id);
        $baby->birth_date = Carbon::parse(date('Y-m-d', strtotime($_POST["birth_date"])));
        $baby->name = $data['name'];
        $baby->condition = $data['condition'];
        $baby->weight = $data['weight'];
        $baby->height = $data['height'];

        if($baby->save()){
            if($request->only('image')){
                $file = $request->file('image');
                $validator = $this->imageValidator($request->only('image'));

                if ($validator->fails()) {
                    $this->throwValidationException($request, $validator);
                }

                $path_picture = 'baby-' . $baby->id . '.'. $file->getClientOriginalExtension();

                if ($file->move(base_path() . '/public/images/web/' , $path_picture))
                {
                    $baby->path_picture = $path_picture;
                    $baby->save();
                }
            }

            return redirect('detailImun/'.$id);
        }
        else
            return redirect()->back();
    }
}
