@extends('layouts.templates')

@section('page-title')
    BabyCare : Home
    @endsection

    @section('content')

    </div>

    <div class="parallax-container " style="max-height:15em;">
        <div class="parallax" ><img src="{{ url('images/motherDashboard.jpg') }}"></div>
        <div class="center " >
            <img class="s2 circle responsive-img" style="margin-top:1em;max-height:12em" src="{{ $item->path_picture ? url('images/web/'.$item->path_picture) : url('images/motherDefaultPic.png')  }}">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <a class="btn-floating btn-large blue right" href="{{ url('editProfil') }}">
                <i class="large material-icons">mode_edit</i> Ubah Profil anda
            </a>
            <h3 class="header">{{ $item->name }}</h3>
            <a class="flow-text">Profil Anda</a>
            <div class="s12 l6">

                <table class="bordered">
                    <tbody>
                    <tr>
                        <td>
                            <strong>
                                Terdaftar sebagai
                            </strong>
                        </td>
                        <td>
                            {{ $item->role->first()->name }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Tanggal lahir
                            </strong>
                        </td>
                        <td>
                            {{ $item->birth_date }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Nomor Telefon
                            </strong>
                        </td>
                        <td>
                            {{ $item->phone }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Alamat Email
                            </strong>
                        </td>
                        <td>{{ $item->email }} </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Alamat Rumah
                            </strong>
                        </td>
                        <td>{{ $item->address }}</td>
                    </tr>
                    </tbody>
                </table>
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
