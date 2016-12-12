<?php

namespace App\Http\Controllers;

use App\Baby;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\RefactorController;

class KaderController extends Controller
{
    private function fileValidator($data){
        return Validator::make($data, [
            'xx' => 'required',
        ]);
    }

    private function findBaby($id)
    {
        $data['item'] = Baby::find($id);
        return $data;
    }

    private $viewModel = 'pages.kader.';

    public function index(){
        $data['items'] = Baby::all();
        $data['filled'] = Baby::where('document_index',null)->count();
        return view($this->viewModel.'list', $data);
    }

    public function detail($id){
        return view($this->viewModel.'detail', $this->findBaby($id));
    }

    public function upload($id){
        return view($this->viewModel.'upload', $this->findBaby($id));
    }

    public function uploadPost(Request $request, $id){
        $file = $request->file('xx');
        $validator = $this->fileValidator($request->only('xx'));

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }

        $baby = $this->findBaby($id);
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
        return view($this->viewModel.'profil', $this->findBaby($id));
    }

    public function updateBabyPost(Request $request,$id)
    {
        $data = $request->only('name','condition','birth_date','weight','height');
        $baby = $this->findBaby($id);
        $baby->birth_date = Carbon::parse(date('Y-m-d', strtotime($_POST["birth_date"])));
        $baby->name = $data['name'];
        $baby->condition = $data['condition'];
        $baby->weight = $data['weight'];
        $baby->height = $data['height'];

        if($baby->save()){
            if($request->only('image')){
                $getReturnData = RefactorController::uploadPhoto($request->file('image'), $baby, $request);
                if ($getReturnData['file']->move(base_path() . '/public/images/web/' , $getReturnData['path_picture']))
                {
                    $baby->path_picture = $getReturnData['path_picture'];
                    $baby->save();
                }
            }

            return redirect('detailImun/'.$id);
        }
        else
            return redirect()->back();
    }
}
