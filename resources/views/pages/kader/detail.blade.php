@extends('layouts.templates')

@section('page-title')
    BabyCare : Detail
@endsection

@section('nav-title')
    Detail
@endsection

@section('content')

    @include('partials.sheets_script')
    <div class="section white">
        <div class="row container">
            <h4 class="header ">Data Bayi</h4>
            <hr>
            <div class="s12 l6">

                <table class="bordered">
                    <tbody>
                    <tr>
                        <td>
                            <strong>
                                Ibu
                            </strong>
                        </td>
                        <td>
                            {{ isset($item->mother->name) ? $item->mother->name : '' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Nama
                            </strong>
                        </td>
                        <td>
                            {{ $item->name }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Tanggal lahir
                            </strong>
                        </td>
                        <td>
                            {{ date('d F Y', strtotime($item->birth_date)) }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Tinggi / Berat Badan
                            </strong>
                        </td>
                        <td>{{ $item->height }} cm <br> {{ $item->weight }} kilogram</td>
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
                <div class="s12" id="jadwal">
                </div>
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
