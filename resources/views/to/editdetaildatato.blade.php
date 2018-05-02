<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Edit Data {{$data->nama_customer}}</title>
</head>
@section('content')
<body>
	<form method="post" action="{{URL::asset('editdatato')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $data->nota_lama }}">
        <input type="hidden" name="no_pengajuan" value="{{$data->no_pengajuan}}">
        <input type="hidden" name="nama_customer" value="{{$data->nama_customer}}">
        <ol class="breadcrumb">
            <li><a href="{{URL::asset('dashboardto')}}">Dashboard</a></li>
            <li><a href="{{URL::asset('entryto')}}">Terminal Opration</a></li>
            <li><a href="{{URL::asset('datato')}}">Buat Berita Acara</a></li>
            <li class="active">Barui Data TO</li>
        </ol>
        @if(Session::has('sukses'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">done</i> {{ Session::get('sukses') }}
        </div>
        @elseif(Session::has('gagal'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">close</i> {{ Session::get('gagal') }}
        </div>
        @endif
        <div class="card-panel z-depth-2">
            <table class="highlight responsive-table">
                <thead class="pink-text">
                    <tr>
                        <th>Customer</th>
                        <th>No BPRP</th>
                        <th>No Berita acara</th>
                        <th>Masukan dok pendukung</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <tr>
                            <th>{{$data->nama_customer}}</th>
                            <td>{{$data->no_bprp}}</th>
                            <th>{{$data->id_buat_ba}}</th>
                            <th>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input name="dok_pendukung" type="file" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" value="{{$data->dok_pendukung}}">
                                    </div>
                                </div>
                            </th>
                        </tr>
                </tbody>
            </table>
        </div>
        <button class="btn waves-effect blue kanan" type="submit" name="action">Barui
            <i class="material-icons right">send</i>
        </button>
        <a href="{{URL::asset('editdatato')}}/{{$data->id_cr}}" class="btn waves-effect orange kanan" style="margin-right:10px;">Kembali
            <i class="material-icons right">undo</i>
        </a>
    </form>
</body>
@stop
</html>