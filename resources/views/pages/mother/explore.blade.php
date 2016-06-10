@extends('layouts.templates')

@section('page-title')
    Explore : Babycare
    @endsection

@section('nav-title')
    Explore
    @endsection

    @section('content')

    </div>


    <div class="container">
        <h2 class="header">Explore!</h2>
        <blockquote>
            {{--{{ dd($success) }}--}}
            @if ($errors->has())
                    @foreach ($errors->all() as $error)
                    <span class="red-text">
                        {{ $error }}
                    </span> <br>
                    @endforeach
            @elseif (isset($success))
                <span class="green-text">
                    {{ $success }}
                </span>
            @endif

        </blockquote>
    </div>
    <div class="fluid-container">
        <div class="row">
            @foreach($items as $item)
            <div class="col s6">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed" src="{{url('/images/web/'.$item->path_picture)}}">
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col s6">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="{{url('images/baby1.jpg')}}" style="max-height: 100%">
                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card">
                    <div class="card-image">
                        <img class="materialboxed" src="{{url('images/baby2.jpg')}}" style="max-height: 100%">
                    </div>
                </div>
            </div>
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
            <h4>Tambahkan Post</h4>
            <hr>
            <p class="red-text">Ukuran file maksimal 1 MB</p>

            <form class="col s12" method="post" enctype="multipart/form-data" action="">
                {{ csrf_field() }}
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Foto Bayi</span>
                        <input type="file" accept="image/*" name="image" onchange="loadFile(event)">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="row">
                    <img id="output" style="max-width: 100%"/>
                </div>
                <script>
                    var loadFile = function(event) {
                        var output = document.getElementById('output');
                        output.src = URL.createObjectURL(event.target.files[0]);
                    };
                </script>
        </div>
        <div class="modal-footer">
            <a class="modal-action modal-close waves-effect waves-green btn-flat ">Batal</a>
            <button type="submit" class="modal-action waves-effect waves-green btn ">Post</button>
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
