<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Edit Data {{$title->nama_customer}}</title>
</head>
@section('content')
<body>
        <ol class="breadcrumb">
            <li><a href="{{URL::asset('dashboardto')}}">Dashboard</a></li>
            <li><a href="{{URL::asset('entryto')}}">Terminal Opration</a></li>
            <li><a href="{{URL::asset('datato')}}">Buat Berita Acara</a></li>
            <li class="active">Edit Data TO</li>
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
                        <th>Barui dok pendukung</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <input type="hidden" name="id[]" value="{{ $data->id_cr }}">
                        <input type="hidden" name="no_pengajuan[]" value="{{$data->no_pengajuan}}">
                        <input type="hidden" name="no_bprp[]" class="generate3">

                        <th>{{$data->nama_customer}}</th>
                        <th>{{$data->no_pengajuan}}</th>
                        <th>{{$data->id_cr}}</th>
                        <th>{{$data->jenis_nota}}</th>
                        <th>{{$data->nota_lama}}</th>
                        <th>{{$data->terminal_operasi}}</th>
                        <th>
                            <a href="{{URL::asset('editdetaildatato')}}/{{$data->nota_lama}}" title="Edit Dok pendukung {{$data->nama_customer}}"><i class="material-icons left">edit</i>{{$data->dok_pendukung}}</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{URL::asset('entryto')}}" class="btn waves-effect orange">Kembali
            <i class="material-icons right">undo</i>
        </a>
</body>
@stop
</html>