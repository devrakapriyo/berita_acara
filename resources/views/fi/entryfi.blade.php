<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Input Finance</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardfi')}}">Dashboard</a></li>
        <li class="active">Finance</li>
        <li><a href="{{URL::asset('datafi')}}">Data Finance</a></li>
    </ol>
    <form method="post" action="{{URL::asset('carifi')}}">
        <div class="row">
            <div class="input-field col s6">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input name="cari" type="text" class="validate">
                <label for="password">Pencarian...</label>
            </div>
            <button type="submit" class="btn blue" style="margin-top:25px;">
                <i class="material-icons right">search</i>
            </button>
        </div>
    </form>
    @if(Session::has('sukses'))
    <div class="chip" title="Klick jika ingin di hilangkan">
        <i class="material-icons green-text">done</i> {{Session::get('sukses')}}
    </div>
    @endif
    @if($respon == 1)
    <div class="card-panel z-depth-2">
        <table class="highlight atas responsive-table">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">NO. BA</th>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No permohonan</th>
                    <th colspan="3" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">View</th>
                    <th class="center-align">Dok pendukung</th>
                    <th class="center-align">Edit data FI</th>
                    <th class="center-align">Hapus data FI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $data)
                <tr>
                    <input type="hidden" class="{{$data->status_si}}" value="{{$data->status_si}}">
                    <th class="{{$data->status_si}} allow2">{{$data->id_buat_ba}}</th>
                    <th class="{{$data->status_si}} allow2">{{$data->nama_customer}}</th>
                    <th class="{{$data->status_si}} allow2">{{$data->id_cr}}</th>
                    <th class="{{$data->status_si}} allow center-align" title="Input Finance">
                        <a href="{{URL::asset('detailinputfi')}}/{{$data->id_buat_ba}}" title="Total data pengajuan {{$data->nama_customer}}">{{$data->tot_pengajuan}} Pengajuan</a>
                    </th>
                    <th class="{{$data->status_si}} allow2 allow center-align">
                        <a href="{{URL::asset('dokpendukung')}}/{{$data->dok_pendukung}}" title="Dok pendukung {{$data->nama_customer}}"><i class="material-icons">work</i></a>
                    </th>
                    <th class="{{$data->status_si}} allow2 center-align">
                        <a href="{{URL::asset('editdatafi')}}/{{$data->id_buat_ba}}" title="Edit data {{$data->nama_customer}}"><i class="material-icons">edit</i></a>
                    </th>
                    <th class="{{$data->status_si}} allow2 center-align">
                        <a href="{{URL::asset('deletefi')}}/{{$data->id_buat_ba}}" title="Delete data {{$data->nama_customer}}"><i class="material-icons">delete</i></a>
                    </th>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="center-align">Maaf, data tidak valid</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7" class="kanan">{!! $page->render() !!}</td>
                </tr>
            </tfoot>
        </table>
    </div>
    @else
    <div class="card-panel z-depth-2">
        <table class="highlight atas responsive-table">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">NO. BA</th>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No permohonan</th>
                    <th colspan="3" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">View</th>
                    <th class="center-align">Dok pendukung</th>
                    <th class="center-align">Edit data FI</th>
                    <th class="center-align">Hapus data FI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cari as $cari)
                <tr>
                    <input type="hidden" class="{{$cari->status_si}}" value="{{$cari->status_si}}">
                    <th class="{{$cari->status_si}} allow2">{{$cari->id_buat_ba}}</th>
                    <th class="{{$cari->status_si}} allow2">{{$cari->nama_customer}}</th>
                    <th class="{{$cari->status_si}} allow2">{{$cari->id_cr}}</th>
                    <th class="{{$cari->status_si}} allow center-align">
                        <a href="{{URL::asset('detailinputfi')}}/{{$cari->id_buat_ba}}" title="Total pengajuan {{$cari->nama_customer}}">{{$cari->tot_pengajuan}} Pengajuan</a>
                    </th>
                    <th class="{{$cari->status_si}} allow2 allow center-align">
                        <a href="{{URL::asset('dokpendukung')}}/{{$cari->dok_pendukung}}" title="Dok pendukung {{$cari->nama_customer}}"><i class="material-icons">work</i></a>
                    </th>
                    <th class="{{$cari->status_si}} allow2 center-align">
                        <a href="{{URL::asset('editdatafi')}}/{{$cari->id_buat_ba}}" title="Edit data {{$cari->nama_customer}}"><i class="material-icons">edit</i></a>
                    </th>
                    <th class="{{$cari->status_si}} allow2 center-align">
                        <a href="{{URL::asset('deletefi')}}/{{$cari->id_buat_ba}}" title="Delete data {{$cari->nama_customer}}"><i class="material-icons">delete</i></a>
                    </th>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="center-align pink-text">Maaf, tidak ditemukan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endif
</body>
@stop

</html>