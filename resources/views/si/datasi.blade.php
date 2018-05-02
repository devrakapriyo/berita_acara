<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Data Sistem Informasi</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardsi')}}">Dashboard</a></li>
        <li><a href="{{URL::asset('entrysi')}}">Sistem Information</a></li>
        <li class="active">Data Sistem Information</li>
    </ol>
    @if(Session::has('sukses'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">done</i>
            {{Session::get('sukses')}}
        </div>
    @endif
    <form method="post" action="{{URL::asset('caridatasi')}}">
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
    @if($respon == 1)
    <div class="card-panel z-depth-2">
        <table class="atas highlight bordered resoponsive-table">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No pengajuan</th>
                    <th rowspan="2">Tot. penganjuan</th>
                    <th colspan="2" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">Dok pendukung</th>
                    <th class="center-align">Download BA</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $data)
                <tr>
                    <th>{{$data->nama_customer}}</th>
                    <th>{{$data->id_cr}}</th>
                    <th>{{$data->tot_pengajuan}} Pengajuan</th>
                    <th class="center-align" title="Dok pendukung {{$data->nama_customer}}">
                        <a target="_blank" href="{{URL::asset('dokpendukung')}}/{{$data->dok_pendukung}}"><i class="material-icons orange-text">work</i></a>
                    </th>
                    <th class="center-align" title="Download BA {{$data->nama_customer}}">
                        <a target="_blank" href="{{URL::asset('exportexcl')}}/{{$data->id_buat_ba}}"><i class="material-icons green-text">explicit</i></a>
                    </th>
                </tr>
                @empty
                <tr>
                    <th colspan="5" class="center-align">Maaf, data tidak valid</th>
                </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="kanan">{!! $page->render() !!}</td>
                </tr>
            </tfoot>
        </table>
    </div>
    @else
    <div class="card-panel z-depth-2">
        <table class="atas highlight bordered resoponsive-table">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No pengajuan</th>
                    <th rowspan="2">Tot. penganjuan</th>
                    <th colspan="2" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">Dok pendukung</th>
                    <th class="center-align">Download BA</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cari as $cari)
                <tr>
                    <th>{{$cari->nama_customer}}</th>
                    <th>{{$cari->id_cr}}</th>
                    <th>{{$cari->tot_pengajuan}} Pengajuan</th>
                    <th class="center-align" title="Dok pendukung {{$cari->nama_customer}}">
                        <a target="_blank" href="{{URL::asset('dokpendukung')}}/{{$cari->dok_pendukung}}"><i class="material-icons orange-text">work</i></a>
                    </th>
                    <th class="center-align" title="Download BA {{$cari->nama_customer}}">
                        <a target="_blank" href="{{URL::asset('exportexcl')}}/{{$cari->id_buat_ba}}"><i class="material-icons green-text">explicit</i></a>
                    </th>
                </tr>
                @empty
                <tr>
                    <th colspan="5" class="center-align pink-text">Maaf, data tidak ditemukan</th>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endif
</body>
@stop

</html>