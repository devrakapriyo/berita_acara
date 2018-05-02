<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Input Data Terminal Operasi</title>
</head>
@section('content')

<body>
    <form method="post" action="{{URL::asset('entryto')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $data->id_cr }}">
        <input type="hidden" name="no_pengajuan" value="{{$data->no_pengajuan}}">
        <input type="hidden" name="nota_lama" value="{{$data->nota_lama}}">
        <ol class="breadcrumb">
            <li><a href="{{URL::asset('dashboardto')}}">Dashboard</a></li>
            <li><a href="{{URL::asset('entryto')}}">Terminal Opration</a></li>
            <li><a href="{{URL::asset('datato')}}">Buat Berita Acara</a></li>
            <li class="active">Input Berita Acara</li>
        </ol>
        @if(Session::has('sukses'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">done</i> {{ Session::get('sukses') }}
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
                            <th>
                                <div class="input-field col s12">
                                    <input name="no_bprp" class="generate" placeholder="No BPRP" type="text" required>
                                    <label class="blue-text">No BPRP</label>
                                </div>
                            </th>
                            <th>
                                <div class="input-field col s12">
                                    @if($data->no_pengajuan == "")
                                    <input name="id_buat_ba" class="generate" placeholder="No BA" type="text" required> 
                                    @else
                                    <input name="id_buat_ba" type="text" value="{{$data->no_pengajuan}}" required> 
                                    @endif
                                    <label class="blue-text">No berita acara</label>
                                </div>
                            </th>
                            <th>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input name="dok_pendukung" type="file" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </th>
                        </tr>
                </tbody>
            </table>
            <p>Harap setiap penginputan multiple <span class="pink-text"><b>Nomer BA</b></span> dicopy untuk penginputan selanjutanya.</p>
        </div>
        <button class="btn waves-effect blue" type="submit" name="action">Konfirmasi
            <i class="material-icons right">send</i>
        </button>
        <a href="{{URL::asset('detailpengajuan')}}/{{$data->id_cr}}" class="btn waves-effect orange" style="margin-right:10px;">Kembali
            <i class="material-icons right">undo</i>
        </a>
        </form>

</body>
@stop

</html>