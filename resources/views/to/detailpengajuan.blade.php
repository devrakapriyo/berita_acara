<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Detail Data {{$title->nama_customer}}</title>
</head>
@section('content')

<body>
    <form method="post" action="{{URL::asset('entryto')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <ol class="breadcrumb">
            <li><a href="{{URL::asset('dashboardto')}}">Dashboard</a></li>
            <li class="active">Terminal Opration</li>
            <li><a href="{{URL::asset('datato')}}">Buat Berita Acara</a></li>
        </ol>
        @if(Session::has('sukses'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">done</i> {{Session::get('sukses')}}
        </div>
        @endif
        <div class="card-panel z-depth-2">
            <table class="highlight responsive-table bordered atas">
                <thead class="pink-text">
                    <tr>
                        <th rowspan="2">Customer</th>
                        <th rowspan="2">No pengajuan</th>
                        <th rowspan="2">No permohonan</th>
                        <th rowspan="2">Jenis nota</th>
                        <th rowspan="2">Nota lama</th>
                        <th rowspan="2">Terminal operasi</th>
                        <th colspan="3" class="center-align">OPSI</th>
                    </tr>
                    <tr>
                        <td>Input TO</td>
                        <td>Detail TO</td>
                        <td>Abaikan TO</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <input type="hidden" name="id[]" value="{{ $data->id_cr }}">
                        <input type="hidden" name="no_pengajuan[]" value="{{$data->no_pengajuan}}">
                        <input type="hidden" name="no_bprp[]" class="generate3">

                        <td class="{{$data->status_cr}}">{{$data->nama_customer}}</td>
                        <td class="{{$data->status_cr}}">{{$data->no_pengajuan}}</td>
                        <td class="{{$data->status_cr}}">{{$data->id_cr}}</td>
                        <td class="{{$data->status_cr}}">{{$data->jenis_nota}}</td>
                        <td class="{{$data->status_cr}}">{{$data->nota_lama}}</td>
                        <td class="{{$data->status_cr}}">{{$data->terminal_operasi}}</td>
                        <td class="{{$data->status_cr}}">
                            <a href="{{URL::asset('inputba')}}/{{$data->nota_lama}}" title="Input data {{$data->nama_customer}}"><i class="material-icons left green-text">add</i></a>
                        </td>
                        <td class="{{$data->status_cr}}">
                            <a href="{{URL::asset('detaildatato')}}/{{$data->nota_lama}}" title="Detail data {{$data->nama_customer}}"><i class="material-icons center orange-text">sort</i></a>
                        </td>
                        <td class="{{$data->status_cr}}">
                            <a href="{{URL::asset('abaikanba')}}/{{$data->nota_lama}}" title="Abaikan data {{$data->nama_customer}}"><i class="material-icons left red-text">clear</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- <a href="{{URL::asset('abaikanto')}}/{{$data->id_cr}}" class="waves-effect waves-light btn red "><i class="material-icons right">close</i>Abaikan</a> -->
        <a href="{{URL::asset('entryto')}}" class="btn waves-effect orange " style="margin-right:10px;">Kembali
            <i class="material-icons right">undo</i>
        </a>
    </form>
</body>
@stop

</html>