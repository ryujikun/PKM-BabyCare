@extends('layouts.templates')

@section('page-title')
    BabyCare : Dokter Peduli
    @endsection

    @section('content')

    </div>


    <div class="parallax-container " style="max-height:15em;">
        <div class="parallax" ><img src="{{ url('images/playground1.jpg') }}"></div>
        <div class="center " >
            <img class="s2 circle responsive-img" style="margin-top:1em;max-height:9em" src="{{ url('images/doctor.jpg') }}">
        </div>
    </div>
    <br>
    <div class="section white">

        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <h5 class="flow-text">Ask</h5>
                    <ul class="collection">
                        <li class="collection-item red lighten-5">
                            Anda : {{ $item->question }}
                        </li>
                    </ul>
                    @if($item->answer_id)
                        <h4 class=" flow-text right-align">Answer</h4>
                        <ul class="collection">
                            <li class="collection-item green right-align lighten-5">
                                {{ $item->answer->body }}
                            </li>
                        </ul>
                    @endif
                    <br>
                @endforeach
                <p class="flow-text">Tanyakan pada Dokter</p>
                <form class="col s12" method="post" action="" id="tanyaDokter">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" name='question' class="materialize-textarea"></textarea>
                            <label for="icon_prefix2">Pertanyaan anda</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 ">
                            <button type="submit" class="waves-effect waves-light btn-large right">Tanyakan</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large waves-effect waves-light red" href="#tanyaDokter">
            <i class="material-icons">add</i>
        </a>
    </div>

@endsection

@section('custom-foot')

    <script type="text/javascript">
        $(document).ready(function(){
            $('.parallax').parallax({
                height:"1px",
            });
        });


    </script>

@endsection
