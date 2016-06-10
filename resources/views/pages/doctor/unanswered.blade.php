@extends('layouts.templates')

@section('page-title')
    BabyCare : Dokter Peduli
@endsection

@section('content')

    <div class="container-fluid">
        <div class="col">
            <ul class="collection">

                @if(isset($items))


                    <div class="parallax-container " style="max-height:15em;">
                        <div class="parallax" ><img src="{{ url('images/playground1.jpg') }}"></div>
                        <div class="center " >
                            <img class="s2 circle responsive-img" style="margin-top:1em;max-height:9em" src="{{ url('images/doctor.jpg') }}">
                        </div>
                    </div>
                    <br>
                    <div class="container">

                        <h3>
                            Hore!
                        </h3>
                        <h5 class="blue-text">
                            Semua pertanyaan sudah terjawab.

                        </h5>
                    </div>

                @else
                    @foreach($items as $item)


                    <li class="collection-item avatar">
                        <i class="material-icons circle {{ $item->answer_id==null ? 'red' : 'green' }}">
                        </i>
                        <span class="title truncate">
                            {{ $item->question }}
                        </span>
                            <span class="small">
                                {{ $item->user->name }}
                            </span>
                        @if($item->answer!=null) <span class="green-text">
                                Terjawab
                            </span>
                        <p class="truncate">
                            {{ $item->answer->body }}
                        </p>
                        @else
                            <p class="red-text">
                                Belum dijawab
                            </p>
                            <a class="secondary-content btn btn-default right-align green" href="{{ url('answer/'.$item->id) }}">
                                Jawab
                            </a>
                        @endif

                    </li>
                @endforeach
                @endif
            </ul>
        </div>
    </div>


@endsection

@section('custom-foot')

    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>

@endsection