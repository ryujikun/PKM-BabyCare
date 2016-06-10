@extends('layouts.templates')

@section('page-title')
    Jawab : Babycare
    @endsection

@section('nav-title')
    Jawab Pertanyaan
    @endsection
    @section('content')

    </div>

    <div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m9">
                    <h3 class="header center-on-small-only blue-text">Jawab Pertanyaan</h3>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <ul class="collection">
                    <li class="collection-item">
                        <h5>
                            Oleh : {{ $item->user->name }}
                        </h5>
                        <p>
                            {{ $item->question }}
                            <br>
                        </p>
                    </li>
                </ul>

                <form class="col s12" role="form" method="POST" action="">
                    {{ csrf_field() }}

                    <div class="input-field col s12">
                        <label for="answer">Jawaban </label>
                        <textarea id="answer" name='body' class="materialize-textarea"></textarea>
                        @if ($errors->has('answer'))
                            <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('answer') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <button class="btn btn-large waves-effect waves-light blue right" type="submit" name="action">
                        Jawab
                        <i class="material-icons right ">send</i>
                    </button>
                </form>
            </div>

        </div>


@endsection

@section('custom-foot')

    <script type="text/javascript">
        $('#address').val('New Text');
        $('#address').trigger('autoresize');

        $('#datepicker').pickadate({
            selectYears:true,
            selectYears: 60,
            formatSubmit: 'yyyy-mm-dd'
        });

    </script>

@endsection
