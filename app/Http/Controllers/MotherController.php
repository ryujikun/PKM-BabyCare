<?php

namespace App\Http\Controllers;

use App\Baby;
use App\Excel;
use App\Post;
use App\Question;
use App\Timeline;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MotherController extends Controller
{
    private function imageValidator($data){
        return Validator::make($data, [
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

    }

    public $viewPrefix = 'pages.mother.';

    public function index(Request $request){
        $data['content_title'] = 'Profil Anda';
        $data['item'] = $request->user();
        return view('pages.dashboard', $data);
    }

    public function dokterpeduli(Request $request){
        if($request->isMethod('get')){
            $data['content_title'] = 'Dokter Peduli';
            $data['items'] = Question::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->paginate(10);
            return view($this->viewPrefix.'dokterpeduli', $data);
        }
        elseif($request->isMethod('post')){
            $question = $request->all();
            $question['user_id'] = Auth::user()->id;
            if(Question::create($question)){
                return redirect('dokterpeduli')->with('success','Sukses memposting pertanyaan anda.');
            }
            else{
                return redirect('dokterpeduli')->with('danger','Maaf, ada kendala. Coba tanyakan lagi.');
            }
        }
    }

    public function explore(Request $request)
    {
        $data['content_title'] = 'Explore';

        $data['items'] = Timeline::orderBy('created_at', 'desc')->paginate(10);

        if ($request->isMethod('get')) {
            return view($this->viewPrefix . 'explore', $data);
        }
        elseif ($request->isMethod('post')) {
            $file = $request->file('image');
            $validator = $this->imageValidator($request->only('image'));

            if ($validator->fails()) {
                $this->throwValidationException($request, $validator);
            }

            $post = Timeline::create(['path_picture' => '']);
            $path_picture = 'timeline-' . $post->id . '.'. $file->getClientOriginalExtension();

            if ($file->move(base_path() . '/public/images/web/' , $path_picture))
            {
                $post->path_picture = $path_picture;
                $post->save();
                return view($this->viewPrefix . 'explore', $data)
                    ->with('success', 'Gambar telah sukses diupload!');
            } else
            {
                return view($this->viewPrefix . 'explore', $data)
                    ->with('error', 'Maaf ada kesalahan, silahkan coba lagi.');
            }

        }
    }

    public function motherzone(Request $request){
        if($request->isMethod('get')){
            $data['content_title'] = 'Zona Ibu';
            $data['items'] = Post::orderBy('created_at','desc')->paginate(10);
            return view($this->viewPrefix.'motherzone', $data);

        }
        elseif($request->isMethod('post')){
            
            $data = $request->only('body');
            $data['user_id'] = $request->user()->id;
            $postItem = Post::create($data);
            if($postItem){
                if($request->only('image')){
                    $file = $request->file('image');
                    $validator = $this->imageValidator($request->only('image'));

                    if ($validator->fails()) {
                        $this->throwValidationException($request, $validator);
                    }

                    $path_picture = 'post-' . $postItem->id . '.'. $file->getClientOriginalExtension();

                    if ($file->move(base_path() . '/public/images/web/' , $path_picture))
                    {
                        $postItem->path_picture = $path_picture;
                        $postItem->save();
                        return redirect('motherzone')
                            ->with('success', 'Gambar telah sukses diupload!');
                    }
                    else
                    {
                        return redirect('motherzone')->withErrors('Maaf ada kesalahan, silahkan coba lagi');
                    }
                }

                redirect('motherzone');
            }
            else
                return redirect('motherzone')->with('danger','Maaf, postingan anda tidak dapat dipost, silahkan coba lagi');
        }

    }

    public function pertumbuhanku(Request $request){
        if($request->isMethod('get')){
            $data['content_title'] = 'Pertumbuhanku';
            $data['alert'] = null;
            
            if(Auth::user()->baby_id==null){
                return view($this->viewPrefix.'pertumbuhanku')
                    ->withAlert('Anda belum memasukkan data bayi anda.');
            }else
            {

                $data['item']  = Baby::find($request->user()->baby_id);
                return view($this->viewPrefix.'pertumbuhanku', $data);

            }
        }
        elseif($request->isMethod('post'))
        {
            $data = $request->except('image');
            $data['mother_id'] = $request->user()->id;
            $data['birth_date'] = Carbon::parse(date('Y-m-d', strtotime($_POST["birth_date"])));
            $postItem = Baby::create($data);
            $request->user()->baby_id = $postItem->id;
            $request->user()->save();
            if($postItem){
                if($request->only('image')){
                    $file = $request->file('image');
                    $validator = $this->imageValidator($request->only('image'));

                    if ($validator->fails()) {
                        $this->throwValidationException($request, $validator);
                    }

                    $path_picture = 'baby-' . $postItem->id . '.'. $file->getClientOriginalExtension();

                    if ($file->move(base_path() . '/public/images/web/' , $path_picture))
                    {
                        $postItem->path_picture = $path_picture;
                        $postItem->save();
                        return redirect('pertumbuhanku')
                            ->with('success', 'Gambar telah sukses diupload!');
                    }
                    else
                    {
                        return redirect('pertumbuhanku')->withErrors('Maaf ada kesalahan, silahkan coba lagi');
                    }
                }

                redirect('pertumbuhanku');
            }
            else
                return redirect('pertumbuhanku')->with('danger','Maaf, postingan anda tidak dapat dipost, silahkan coba lagi');
        }


    }

    public function jadwal(){
        $data['content_title'] = 'Jadwal';
        return view($this->viewPrefix.'jadwal');

    }

    public function ibusiaga(){
        $data['content_title'] = 'Ibu Siaga';
        return view($this->viewPrefix.'ibusiaga');

    }

    public function profil(){
        $data['item'] = $request->user();
        return view('pages.dashboard', $data);
    }


    public function profilPost(Request $request){
        $data['item'] = $request->user();
        return view('pages.dashboard', $data);
    }
}
