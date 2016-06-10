@extends('layouts.templates')

@section('page-title')
    Pertanyaan : BabyCare
    @endsection
@section('nav-title')
    Pertanyaan
@endsection

    @section('content')

        <div class="container-fluid">
            <div class="col">
                <ul class="collection">

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