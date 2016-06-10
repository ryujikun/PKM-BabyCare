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
                            <div class="card-panel">
                                <div class="row valign-wrapper">
                                    <div class="collapsible-header">

                                        <div class="col s2">
                                            <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                        </div>
                                        <div class="col s2">
                                            <img src="{{ isset($item->mother->path_picture) ?
                                                url('images/web/'.$item->mother->path_picture)
                                                : url('images/motherDefaultPic.png')  }}" alt="" class="circle responsive-img">
                                        </div>
                                        <div class="col s8">
              <span class="black-text">
                This is a square image. Add the "circle" class to it to make it appear circular.
              </span>
                                        </div>
                                    </div>
                                </div>
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