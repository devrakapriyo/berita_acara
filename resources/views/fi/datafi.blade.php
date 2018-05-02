<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Data Finance</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardfi')}}">Dashboard</a></li>
        <li><a href="{{URL::asset('entryfi')}}">Finance</a></li>
        <li class="active">Data Finance</li>
    </ol>
    @if(Session::has('sukses'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">done</i>
            {{Session::get('sukses')}}
        </div>
    @endif
    <form method="post" action="{{URL::asset('caridatafi')}}">
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
        <table class="highlight atas responsive-table">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No request</th>
                    <th rowspan="2">No. Permohonan</th>
                    <th rowspan="2">Tot. Pengajuan</th>
                    <th rowspan="2">Jenis nota</th>
                    <th colspan="2" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">Download BA</th>
                    <th class="center-align">Detail</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $data)
                <tr>
                    <th>{{$data->nama_customer}}</th>
                    <th>{{$data->no_req}}</th>
                    <th>{{$data->id_cr}}</th>
                    <th>{{$data->tot_pengajuan}} Pengajuan</th>
                    <th>{{$data->jenis_nota}}</th>
                    <th class="center-align" title="Download BA">
                        <a href="{{URL::asset('exportexcl')}}/{{$data->id_buat_ba}}" title="Download BA {{$data->nama_customer}}"><i class="material-icons">explicit</i></a>
                    </th>
                    <th title="View" class="center-align">
                        <a href="{{URL::asset('detaildatafinance')}}/{{$data->id_buat_ba}}" title="Detail data {{$data->nama_customer}}"><i class="material-icons">pageview</i></a>
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
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No request</th>
                    <th rowspan="2">No. Permohonan</th>
                    <th rowspan="2">Tot. Pengajuan</th>
                    <th rowspan="2">Jenis nota</th>
                    <th colspan="2" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">Dok pendukung</th>
                    <th class="center-align">Detail</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cari as $cari)
                <tr>
                    <th>{{$cari->nama_customer}}</th>
                    <th>{{$cari->no_req}}</th>
                    <th>{{$cari->id_cr}}</th>
                    <th>{{$cari->tot_pengajuan}}</th>
                    <th>{{$cari->jenis_nota}}</th>
                    <th class="center-align" title="Download BA">
                        <a href="{{URL::asset('exportexcl')}}/{{$cari->id_buat_ba}}" title="Download BA {{$cari->nama_customer}}"><i class="material-icons">explicit</i></a>
                    </th>
                    <th title="View" class="center-align">
                        <a href="{{URL::asset('detaildatafinance')}}/{{$cari->id_buat_ba}}" title="Detail data {{$cari->nama_customer}}"><i class="material-icons">pageview</i></a>
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