@extends('layouts.templates')

@section('page-title')
    BabyCare : Dokter Peduli
@endsection

@section('nav-title')
    Data Imunisasi
@endsection

@section('content')

    <div class="container">

        <br>
        <h4 class="header ">Data Bayi</h4>
    </div>
    <div class="container-fluid">
        <div class="col">
            <ul class="collection">

                @if($filled)
                    <ul class="collapsible" data-collapsible="accordion">
                        @foreach($items as $item)
                            <li><div class="collapsible-header">

                                    <div class="row valign-wrapper">
                                        <div class="col s2">
                                            <img src="{{ isset($item->path_picture) ?
                                                url('images/web/'.$item->path_picture)
                                                : url('images/web/babyDefaultPic.jpg')  }}" alt="" class="circle responsive-img">
                                        </div>
                                        <div class="col s8">
                                            <p class="flow-text"> <strong>{{ $item->name }}</strong>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="collapsible-body">
                                    <p>

                                        <span class="flow-text">

                                            Anak dari : Ibu {{ isset($item->mother->name) ? $item->mother->name : '' }}
                                            <br>
                                            <br>
                                            Klik tombol dibawah untuk memperbarui informasi bayi ini.
                                        </span>
                                        <br>
                                        <a href="{{ url('babydata/'.$item->id) }}" class="btn green lighten-1 white-text">
                                            Perbarui
                                        </a>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                @else
                    <div class="container">

                        <div class="s12 grey lighten-4">
                            <blockquote>
                                <h5 class="red-text">
                                    <i class="material-icons">warning</i> Tidak ada anak terdaftar dalam sistem!
                                </h5>
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