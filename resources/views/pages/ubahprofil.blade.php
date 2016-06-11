@extends('layouts.templates')

@section('page-title')
    Ubah Profil : BabyCare
@endsection

@section('nav-title')
    Ubah Profil
@endsection

@section('content')

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <form class="col s12" role="form" method="post" action="" enctype="multipart/form-data">
                    <h2 class="header">Ubah Profil</h2>
                    <br>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Nama lengkap" id="name" type="text" name='name' class="validate"
                                    value="{{ $item->name }}">
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
                            <input type="date" name='birth_date' id="datepicker"  value="{{ $item->birth_date }}">
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
                            <textarea id="address" name='address' class="materialize-textarea">{{ $item->address }}</textarea>
                            @if ($errors->has('address'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="phone" type="number" name='phone' class="validate"  value="{{ $item->phone }}">
                            <label for="phone">Nomor Telefon</label>
                            @if ($errors->has('phone'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class='row'>
                        <div class="input-field col s12">
                            <p class="flow-text">Foto Profil</p>
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Foto Profil</span>
                                    <input name="image" accept="image/*" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Unggah Foto Profil anda disini">
                                </div>
                                @if ($errors->has('image'))
                                    <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-large waves-effect waves-light right" type="submit" name="action">
                        Perbarui Profil
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>

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
