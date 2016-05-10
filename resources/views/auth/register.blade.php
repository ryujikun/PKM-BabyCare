@extends('layouts.templates')

@section('page-title')
    Register Babycare
@endsection

@section('content')

</div>

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <form class="col s12" role="form" method="POST" action="{{ url('/register') }}">
                    <h2 class="header">Register BabyCare</h2>
                    <br>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Nama lengkap" id="first_name" type="text" name='name' class="validate">
                            <label for="name">Nama Lengkap</label>

                            @if ($errors->has('name'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="date" name='birth_date' class="datepicker">
                            <label for="birth_date">Tanggal Lahir</label>
                            @if ($errors->has('birth_date'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="address">Alamat</label>
                            <textarea id="address" name='address' class="materialize-textarea"></textarea>
                            @if ($errors->has('address'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif  
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="phone" type="number" name='phone' class="validate">
                            <label for="phone">Nomor Telefon</label>
                            @if ($errors->has('phone'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password_confirmation" name='password_confirmation' type="password" class="validate">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            @if ($errors->has('password_confirmation'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-large waves-effect waves-light right" type="submit" name="action">Daftar Sekarang
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
