@extends('layouts.authtemplate')

@section('page-title')
    Register Babycare
    @endsection

    @section('content')

    </div>

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
                    <h2 class="header">Log In Babycare</h2>
                    <br>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name='email' class="validate">
                            <label for="email">Email</label>
                            @if ($errors->has('email'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name='password' type="password" class="validate">
                            <label for="password">Password</label>
                            @if ($errors->has('password'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-large waves-effect waves-light right" type="submit" name="action">
                        log In
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>

        </div>
    </div>

@endsection

@section('custom-foot')

    <script type="text/javascript">
        $('#address').val('New Text');
        $('#address').trigger('autoresize');

        $('.datepicker').pickadate({
            selectYears:true,
            selectYears: 60
        });

    </script>

@endsection
