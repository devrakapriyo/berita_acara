<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Detail Data {{$data->nama_customer}}</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardfi')}}">Dashboard</a></li>
        <li><a href="{{URL::asset('entryfi')}}">Finance</a></li>
        <li><a href="{{URL::asset('datafi')}}">Data Finance</a></li>
        <li class="active">Detail Finance</li>
    </ol>
    <div class="card-panel z-depth-2">
        <table class="highlight atas responsive-table">
            <thead>
                <tr>
                    <th colspan="3" class="blue-text text-accent-2">
                        <h5>Detail Finance</h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Customer</th>
                    <th>:</th>
                    <th>{{$data->nama_customer}}</th>
                </tr>
                <tr>
                    <th>No Req</th>
                    <th>:</th>
                    <th>{{$data->no_req}}</th>
                </tr>
                <tr>
                    <th>No pengajuan</th>
                    <th>:</th>
                    <th>{{$data->no_pengajuan}}</th>
                </tr>
                <tr>
                    <th>Nota lama</th>
                    <th>:</th>
                    <th>{{$data->nota_lama}}</th>
                </tr>
                <tr>
                    <th>Jenis nota</th>
                    <th>:</th>
                    <th>{{$data->jenis_nota}}</th>
                </tr>
                <tr>
                    <th>Nota baru</th>
                    <th>:</th>
                    <th>{{$data->nota_baru}}</th>
                </tr>
                <tr>
                    <th>Surat kuasa</th>
                    <th>:</th>
                    <th>{{$data->surat_kuasa}}</th>
                </tr>
                <tr>
                    <th>Dok pendukung</th>
                    <th>:</th>
                    <th>{{$data->dok_pendukung}}</th>
                </tr>
                <tr>
                    <th>Terminal opration</th>
                    <th>:</th>
                    <th>{{$data->terminal_operasi}}</th>
                </tr>
                <tr>
                    <th>Admin Customer Service</th>
                    <th>:</th>
                    <th>{{$data->nama_cr}}</th>
                </tr>
                <tr>
                    <th>Tgl CS</th>
                    <th>:</th>
                    <th>{{$data->tgl_cr}}</th>
                </tr>
                <tr>
                    <th>Admin Terminal Operation</th>
                    <th>:</th>
                    <th>{{$data->nama_to}}</th>
                </tr>
                <tr>
                    <th>Tgl TO</th>
                    <th>:</th>
                    <th>{{$data->tgl_to}}</th>
                </tr>
                <tr>
                    <th>Admin Sistem Information</th>
                    <th>:</th>
                    <th>{{$data->nama_si}}</th>
                </tr>
                <tr>
                    <th>Tgl Si</th>
                    <th>:</th>
                    <th>{{$data->tgl_si}}</th>
                </tr>
                <tr>
                    <th>Admin Finance</th>
                    <th>:</th>
                    <th>{{$data->nama_finance}}</th>
                </tr>
                <tr>
                    <th>Tgl Fi</th>
                    <th>:</th>
                    <th>{{$data->tgl_finance}}</th>
                </tr>
                <tr>
                    <th>Tagihan</th>
                    <th>:</th>
                    <th class="orange-text">Rp. {{$data->tagihan}}</th>
                </tr>
                <tr>
                    <th>Tagihan baru</th>
                    <th>:</th>
                    <th class="green-text">Rp. {{$data->tagihan_baru}}</th>
                </tr>
                <tr>
                    <th>Selisih</th>
                    <th>:</th>
                    <th class="pink-text">Rp. {{$data->selisih}}</th>
                </tr>
                <tr>
                    <th>Pengeluaran Finance</th>
                    <th>:</th>
                    <th class="blue-text">{{$data->jml_finance}}</th>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="right-align">
                        <a href="{{URL::asset('detaildatafinance')}}/{{$data->id_buat_ba}}" class="btn waves-effect orange">Kembali
					       <i class="material-icons right">undo</i>
				        </a>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
@stop

</html>