@extends('layouts.templates')

@section('page-title')
    Perbarui Info Bayi : BabyCare
@endsection

@section('nav-title')
    Perbarui Info Bayi
@endsection

@section('content')

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="header">
                        Perbarui Informasi Bayi
                    </h2>

                    <div class="col s12">

                                <form role="form" method="POST" action="" enctype="multipart/form-data" >
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="first_name" type="text" name='name' class="validate" value="{{ $item->name }}">
                                            <label for="name">Nama Bayi</label>

                                            @if ($errors->has('name'))
                                                <span class="red-text text-darken-1">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="date" name='birth_date' class="datepicker"  value="{{ $item->birth_date }}">
                                            <label for="birth_date">Tanggal Lahir</label>
                                            @if ($errors->has('birth_date'))
                                                <span class="red-text text-darken-1">
                                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input placeholder='dalam Centimeter' id="height" value="{{ $item->height }}" name='height' type='number' class="validate">
                                            <label for="height">Panjang</label>
                                            @if ($errors->has('height'))
                                                <span class="red-text text-darken-1">
                                                        <strong>{{ $errors->first('height') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                        <div class="input-field col s6">
                                            <input placeholder='dalam Kilogram' id="weight" name='weight' value="{{ $item->weight }}" type='number' step="0.01" class="validate">
                                            <label for="weight">Berat</label>
                                            @if ($errors->has('weight'))
                                                <span class="red-text text-darken-1">
                                                        <strong>{{ $errors->first('weight') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="condition">Kondisi</label>
                                            <textarea id="condition" name='condition' class="materialize-textarea">{{ $item->condition }}</textarea>
                                            @if ($errors->has('condition'))
                                                <span class="red-text text-darken-1">
                                                        <strong>{{ $errors->first('condition') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="phone">Foto Bayi</label>
                                            <br>
                                        </div>
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input accept="image/*" type='file' name="image">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Unggah foto bayi anda disini">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <button class="btn btn-large waves-effect waves-light right" type="submit" name="action">
                                            Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>

                            </div>
                    </div>


            </div>
        </div>
    </div>

@endsection

@section('custom_foot')

@endsection
