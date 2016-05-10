@extends('layouts.templates')

@section('page-title')
    BabyCare : Dokter Peduli
    @endsection

    @section('content')

    </div>


    <div class="container">
        <h2 class="header">Explore!</h2>
    </div>
    <div class="fluid-container">

        <div class="row">
            <div class="col s4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{url('images/baby1.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col s4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{url('images/baby1.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col s4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{url('images/baby1.jpg')}}">
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
    <div id="addPost" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Tambahkan Tips dan Trik</h4>

            <form class="col s12" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="icon_prefix2"
                                  style='height:100%'class="materialize-textarea"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a class="modal-action modal-close waves-effect waves-green btn-flat ">Batal</a>
            <button type="submit" class="modal-action modal-close waves-effect waves-green btn ">Post</button>
        </div>
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
        });

    </script>

@endsection
