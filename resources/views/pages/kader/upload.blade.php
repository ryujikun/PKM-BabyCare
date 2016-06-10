@extends('layouts.templates')

@section('page-title')
    BabyCare : Detail
@endsection

@section('nav-title')
    Detail
@endsection

@section('content')

    @include('partials.sheets_script')

    <div class="container">
        <div class="row">
            <form class="col s12" role="form" method="POST" action="" enctype="multipart/form-data">
                <h2 class="header">{{ isset($item->document_index)? 'Perbarui ' : 'Tambah ' }} Data Imunisasi</h2>
                {{ csrf_field() }}

                <div class='row'>
                    <div class="input-field col s12">
                        <h4 class="flow-text">Data Imunisasi Sebelumnya</h4>
                        <div class="input-field">
                            @if(isset($item->document_index))
                                <div class="s12" id="jadwal">
                                </div>
                            @else
                                <div class="s12 grey lighten-4">
                                    <blockquote>
                                        <br>
                                        <h5 class="red-text">
                                            <i class="material-icons">warning</i> Data Imunisasi Bayi Anda tidak tersedia
                                        </h5
                                        <strong>Segera kunjungi posyandu dan minta kader posyandu mengunggah data bayi anda.<br></strong>
                                        <br>
                                    </blockquote>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class="input-field col s12">
                        <p class="flow-text">Data Imunisasi Baru</p>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input name="xx" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" >
                            </div>
                            @if ($errors->has('xx'))
                                <span class="red-text text-darken-1">
                                        <strong>{{ $errors->first('xx') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <span class="red-text text-darken-1">
                    <strong>Note:  </strong>Yang dapat diterima hanyalah format spreadsheet sepert Microsoft Excel, ODS, dll.
                    </span>
                <br>
                <br>

                <div class="row">

                    <button class="btn btn-large waves-effect waves-light right" type="submit" name="action">Perbarui
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>

    </div>



@endsection

@section('custom_foot')

    <script type="text/javascript">
        //        var json;
        $(document).ready(function(){

            $.ajax({
                url : "{{ url('json/'.$item->id) }}",
                type : "GET",
                dataType : 'json',
                success : function(data) {
                    console.log(data);

                    var container = document.getElementById('jadwal');
                    var hot = new Handsontable(container, {
                        data: data,
                        dropdownMenu: true,
                        readOnly : true
                    });
                }
            });


        });

    </script>

@endsection
