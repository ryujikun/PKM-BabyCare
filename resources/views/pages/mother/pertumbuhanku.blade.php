@extends('layouts.templates')

@section('page-title')
    BabyCare : Pertumbuhanku
    @endsection

    @section('content')

    </div>

    @if(isset($alert))
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="header">Pertumbuhanku</h2>
                        <br>
                        <h4 class="flow-text">Oops, {{ $alert }} <br> Silahkan masukkan data bayi anda pada form dibawah ini</h4>

                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="header ">Data Bayi</h4>

                                    <form role="form" method="POST" action="">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="first_name" type="text" name='name' class="validate">
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
                                            <div class="input-field col s6">
                                                <input placeholder='dalam Centimeter' id="height" name='height' type='number' class="validate">
                                                <label for="height">Panjang</label>
                                                @if ($errors->has('height'))
                                                    <span class="red-text text-darken-1">
                                                        <strong>{{ $errors->first('height') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-field col s6">
                                                <input placeholder='dalam Kilogram' id="weight" name='weight' type='number' class="validate">
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
                                                <textarea id="condition" name='condition' class="materialize-textarea"></textarea>
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
                                                        <input type="file" name="picture">
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
            </div>
        </div>

    @else
        <div class="parallax-container " style="max-height:15em;">
            <div class="parallax" ><img src="{{ url('images/playground1.jpg') }}"></div>
            <div class="center " >
                <img class="s2 circle responsive-img" style="margin-top:1em;max-height:12em" src="{{ url('images/web/'.$item->path_picture) }}">
            </div>
        </div>
        <div class="section white">
            <div class="row container">
                <h3 class="header">{{ $item->name }}</h3>
                <hr>
                <h4 class="header ">Data Bayi</h4>
                <div class="s12 l6">

                    <table class="bordered">
                        <tbody>
                        <tr>
                            <td>
                                <strong>
                                    Jenis Kelamin
                                </strong>
                            </td>
                            <td>
                                {{--todo--}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    Usia
                                </strong>
                            </td>
                            <td>
                                {{--todo--}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    Tanggal lahir
                                </strong>
                            </td>
                            <td>{{ $item->birth_date }}</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    Tinggi / Berat Badan
                                </strong>
                            </td>
                            <td>{{ $item->height }} cm / {{ $item->weight }} kilogram</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    Kondisi
                                </strong>
                            </td>
                            <td>{{ $item->condition }}</td>
                        </tr>
                        </tbody>
                    </table>
            </div>
                <br>
                <h4 class="header ">Jadwal Imunisasi</h4>
                <div class="s12 l6"></div>
        </div>
            @endif



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
