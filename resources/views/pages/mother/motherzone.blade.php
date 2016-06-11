@extends('layouts.templates')

@section('page-title')
    BabyCare : Dokter Peduli
    @endsection

@section('nav-title')
    Zona Ibu
    @endsection

    @section('content')

    <div class="container-fluid">
            {{--{{ dd($success) }}--}}
            @if ($errors->has())
            <blockquote>
                @foreach ($errors->all() as $error)
                    <span class="red-text">
                        {{ $error }}
                    </span>
            </blockquote>

                @endforeach
            @elseif (isset($success))
            <blockquote>
                <span class="green-text">
                    {{ $success }}
            </blockquote>
            @endif

        <div class="row">
            <ul class="collection">

                @foreach($items as $item)
                    <li class="collection-item avatar">
                        <img class="s2 circle responsive-img" style="margin-top:1em;max-height:12em" src="{{ Auth::user()->path_picture ? url('images/web/'.Auth::user()->path_picture) : url('images/motherDefaultPic.png')  }}">
                        <span class="title truncate">
                            {{ $item->user->name }}
                        </span>
                            <span class="small">
                                {{ date(' F j, Y, g:i a ', strtotime($item->created_at)) }}
                            </span>
                        @if($item->path_picture)
                            <img class='materialboxed' width='100%' src="{{url('images/web/'.$item->path_picture)}}">
                        @endif
                        <p>{{ $item->body }}</p>

                    </li>
                    <br>
                @endforeach
            </ul>

        </div>

    </div>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#addPost">
            <i class="material-icons">add</i>
        </a>
    </div>
    {{--the modal form is here--}}
    <div id="addPost" class="modal">
        <div class="modal-content">
            <h4>Post Tips dan Trik</h4>

            <form class="col s12" method="post" action="" enctype="multipart/form-data">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="icon_prefix2"
                                  style='max-height:100%' class="materialize-textarea" name="body"></textarea>
                        <label for="icon_prefix2">Isi Post</label>
                    </div>
                    <div class="row">
                        <span>Image preview <span class="red-text">NOTE : Ukuran file maksimal 1 MB</span>
                        </span>
                        <img id="output" style="max-width: 100%"/>
                    </div>
                    <div class="file-field input-field">

                        <div class="btn">
                            <span>File</span>
                            <input type="file"
                                   name='image' accept="image/*" onchange="loadFile(event)">
                        </div>
                    </div>
                    <script>
                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>

                <div class="modal-footer">
                    <div class="input-field col s12">
                        <a class="modal-action modal-close waves-effect waves-green btn-flat right">Batal</a>
                        <button type="submit" class="modal-action waves-effect waves-green btn right">
                            Post
                        </button>
                    </div>
                </div>
        </div>
            </form>
        </div>


@endsection

@section('custom-foot')

    <script type="text/javascript">
        $(document).ready(function(){

            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal({

                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration
                starting_top: '4%', // Starting top style attribute
                ending_top: '10%',
                height:'50%'// Ending top style attribute
            });
        });

    </script>

@endsection
