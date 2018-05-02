<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Detail Data {{$title->nama_customer}}</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardto')}}">Dashboard</a></li>
        <li><a href="{{URL::asset('entryto')}}">Terminal Opration</a></li>
        <li><a href="{{URL::asset('datato')}}">Buat Berita Acara</a></li>
        <li class="active">Detail Data Terminal Operasi</li>
    </ol>
    <div class="card-panel z-depth-2">
        <table class="highlight responsive-table">
            <thead>
                <tr>
                    <th colspan="3" class="blue-text">
                        <h5>Detail berita acara</h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Customer</th>
                    <th>:</th>
                    <th>{{$detail->nama_customer}}</th>
                </tr>
                <tr>
                    <th>No pengajuan</th>
                    <th>:</th>
                    <th>{{$detail->no_pengajuan}}</th>
                </tr>
                <tr>
                    <th>No permohonan</th>
                    <th>:</th>
                    <th>{{$detail->id_cr}}</th>
                </tr>
                <tr>
                    <th>No Request</th>
                    <th>:</th>
                    <th>{{$detail->no_req}}</th>
                </tr>
                <tr>
                    <th>Jenis nota</th>
                    <th>:</th>
                    <th>{{$detail->jenis_nota}}</th>
                </tr>
                <tr>
                    <th>Nota lama</th>
                    <th>:</th>
                    <th>{{$detail->nota_lama}}</th>
                </tr>
                <tr>
                    <th>Admin Customer Service</th>
                    <th>:</th>
                    <th>{{$detail->nama_cr}}</th>
                </tr>
                <tr>
                    <th>jab Admin Customer Service</th>
                    <th>:</th>
                    <th>{{$detail->jab_cr}}</th>
                </tr>
                <tr>
                    <th>Tgl input Admin Customer Service</th>
                    <th>:</th>
                    <th>{{$detail->tgl_cr}}</th>
                </tr>
                <tr>
                    <th>Jam input Admin Customer Service</th>
                    <th>:</th>
                    <th>{{$detail->jam_cr}}</th>
                </tr>
                <tr>
                    <th>Surat kuasa</th>
                    <th>:</th>
                    <th>{{$detail->surat_kuasa}}</th>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="right-align">
                        <a href="{{uRL::asset('detailpengajuan')}}/{{$detail->id_cr}}" class="btn waves-effect orange">Kembali
                        <i class="material-icons right">undo</i></a>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
@stop

</html>