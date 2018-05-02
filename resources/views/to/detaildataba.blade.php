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
            <li><a href="{{URL::asset('entryto')}}">Terminal Opration</a></li>
            <li><a href="{{URL::asset('datato')}}">Buat Berita Acara</a></li>
            <li class="active">Detail Data BA</li>
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
                        <th>Customer</th>
                        <th>No pengajuan</th>
                        <th>No permohonan</th>
                        <th>Jenis nota</th>
                        <th>Nota lama</th>
                        <th>Terminal operasi</th>
                        <th>Detail</th>
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
                            <a href="{{URL::asset('detailba')}}/{{$data->id_cr}}" title="Detail data {{$data->nama_customer}}"><i class="material-icons center orange-text">sort</i></a>
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