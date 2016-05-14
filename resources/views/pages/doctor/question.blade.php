@extends('layouts.templates')

@section('page-title')
    BabyCare : Dokter Peduli
    @endsection

    @section('content')

    </div>


    <div class="parallax-container " style="max-height:15em;">
        <div class="parallax" ><img src="{{ url('images/playground1.jpg') }}"></div>
        <div class="center " >
            <img class="s2 circle responsive-img" style="margin-top:1em;max-height:9em" src="{{ url('images/doctor.png') }}">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">Dokter Peduli</h2>
            <p class=" ">
                Anda bisa menanyakan pertanyaan disini, dan dokter yang tersedia akan menjawabnya untuk anda.
            </p>
        </div>
        <div class="container">

            <div class="row">
                @foreach($items as $item)
                    <h5 class="flow-text">Ask</h5>
                    <ul class="collection">
                        <li class="collection-item red lighten-5">
                            Anda : {{ $item->question }}
                        </li>
                    </ul>
                    @if($item->answer!=NULL)
                        <h4 class=" flow-text right-align">Answer</h4>
                        <ul class="collection">
                            <li class="collection-item green lighten-5">
                                {{ $item->answer }}
                            </li>
                        </ul>
                    @endif
                    <br>
                @endforeach
                <p class="flow-text">Tanyakan pada Dokter</p>
                <form class="col s12" method="post" action="">
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
