@extends('layouts.templates')

@section('page-title')
    BabyCare : Dokter Peduli
@endsection

@section('nav-title')
    Data Imunisasi
@endsection

@section('content')

    <div class="container-fluid">
        <div class="col">
            <ul class="collection">

                @if($filled)
                    <ul class="collapsible" data-collapsible="accordion">
                    @foreach($items as $item)
                        <li>
                            <div class="collapsible-header {{ isset($item->document_index) ? '' : 'red lighten-4' }}">

                                <div class="row valign-wrapper">
                                    <div class="col s8">
                                        <p class="flow-text"> <strong>{{ $item->name }}</strong>
                                        dan Ibu {{ isset($item->mother->name) ? $item->mother->name : '' }}
                                        <br>
                                            @if(isset($item->document_index))
                                            <span class="small green-text">
                                                Data Imunisasi Tersedia.
                                            </span>
                                                @else

                                                <span class="small red-text">
                                                    Data Imunisasi tidak tersedia.
                                                </span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col s2">
                                        <img src="{{ isset($item->path_picture) ?
                                                url('images/web/'.$item->path_picture)
                                                : url('images/web/babyDefaultPic.jpg')  }}" alt="" class="circle responsive-img">
                                    </div>
                                    <div class="col s2">
                                        <img src="{{ isset($item->mother->path_picture) ?
                                                url('images/web/'.$item->mother->path_picture)
                                                : url('images/motherDefaultPic.png')  }}" alt="" class="circle responsive-img">
                                    </div>
                                </div>

                            </div>
                            <div class="collapsible-body">

                                @if(isset($item->document_index))
                                    <p>
                                        <span class="flow-text">
                                            Silahkan unggah dengan klik tombol dibawah ini.
                                        </span>
                                        <br>
                                        <br>
                                        <a href="{{ url('detailImun/'.$item->id) }}" class="btn green lighten-1 white-text">
                                            Lihat Detail
                                        </a>
                                        <br>
                                        <br>
                                        <a href="{{ url('uploadImunisasi/'.$item->id) }}" class="btn green lighten-1 white-text">
                                            Perbarui Data
                                        </a>
                                    </p>
                                @else
                                    <p>
                                        <span class="flow-text">
                                            Silahkan unggah dengan klik tombol dibawah ini.
                                        </span>
                                        <br>
                                        <a href="{{ url('uploadImunisasi/'.$item->id) }}" class="btn green lighten-1 white-text">
                                            Ke Halaman Unggah Data
                                        </a>
                                    </p>
                                @endif
                            </div>
                        </li>
                    @endforeach
                    </ul>

                @else
                    <div class="container">

                        <div class="s12 grey lighten-4">
                            <blockquote>
                                <h5 class="red-text">
                                    <i class="material-icons">warning</i> Tidak ada data imunisasi tersedia!
                                </h5
                                <br>
                                <strong>Segera perbarui data.</strong>
                            </blockquote>
                        </div>
                    </div>
                @endif
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