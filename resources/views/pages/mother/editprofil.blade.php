@extends('layouts.templates')

@section('page-title')
    BabyCare : Home
    @endsection

    @section('content')

    </div>

    <div class="section white">
        <div class="row container">
            <h3 class="header">Ubah Profil Anda</h3>
            <hr>

            <div class="s12 l6">

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

            </script>

@endsection
