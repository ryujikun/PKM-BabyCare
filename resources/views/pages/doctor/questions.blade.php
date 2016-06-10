@extends('layouts.templates')

@section('page-title')
    BabyCare : Dokter Peduli
@endsection

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col s6 m6">
                <div class="card ">
                    <div class="card-content blue-text">
                        <p>
                            <strong>Pertanyaan belum terjawab</strong>
                        </p>
                        <h2> {{ $blmTerjawab }} </h2>
                    </div>
                </div>
            </div>
            <div class="col s6 m6">
                <div class="card blue darken-1">
                    <div class="card-content white-text">
                        <p>
                            <strong>Pertanyaan baru hari ini</strong>
                        </p>
                        <h2> {{ $hariIni }} </h2>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col">
            <div class="container">

                <h3>
                    Ups!
                </h3>
                <h5 class="blue-text">
                    Semua pertanyaan sudah terjawab.

                </h5>
            </div>
        </div>
    </div>


@endsection

@section('custom-foot')

    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>

@endsection