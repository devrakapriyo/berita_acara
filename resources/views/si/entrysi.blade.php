<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Input Data Sistem Informasi</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardsi')}}">Dashboard</a></li>
        <li class="active">Sistem Information</li>
        <li><a href="{{URL::asset('datasi')}}">Data Sistem Information</a></li>
    </ol>
    <form method="post" action="{{URL::asset('carisi')}}">
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
        <table class="highlight atas responsive-table bordered">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">No BA</th>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No permohonan</th>
                    <th colspan="4" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">Tot. pengajuan</th>
                    <th class="center-align">Detail</th>
                    <th class="center-align">Edit SI</th>
                    <th class="center-align">Delete SI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $data)
                <input type="hidden" class="{{$data->status_to}}" value="{{$data->status_to}}">
                <tr>
                    <td class="{{$data->status_to}} allow2">{{$data->id_buat_ba}}</td>
                    <td class="{{$data->status_to}} allow2">{{$data->nama_customer}}</td>
                    <td class="{{$data->status_to}} allow2">{{$data->id_cr}}</td>
                        @if($data->tot_pengajuan <= "5")
                        <td class="{{$data->status_to}} allow center-align" title="Total pengajuan {{$data->nama_customer}}">
                            <a href="{{URL::asset('detailinputsi')}}/{{$data->id_buat_ba}}" class="green-text">{{$data->tot_pengajuan}} Pengajuan</a>
                        </td>
                        @elseif($data->tot_pengajuan >= "6")
                        <td class="{{$data->status_to}} allow center-align" title="Total pengajuan {{$data->nama_customer}}">
                            <a href="{{URL::asset('detailinputsi')}}/{{$data->id_buat_ba}}" class="orange-text">{{$data->tot_pengajuan}} Pengajuan</a>
                        </td>
                        @elseif($data->tot_pengajuan >= "11")
                        <td class="{{$data->status_to}} allow center-align" title="Total pengajuan {{$data->nama_customer}}">
                            <a href="{{URL::asset('detailinputsi')}}/{{$data->id_buat_ba}}" class="pink-text">{{$data->tot_pengajuan}} Pengajuan</a>
                        </td>
                        @endif
                    <td class="{{$data->status_to}} center-align allow2">
                        <a href="{{URL::asset('detailsi')}}/{{$data->id_buat_ba}}" title="Detail data {{$data->nama_customer}}"><i class="material-icons">pageview</i></a>
                    </td>
                    <td class="{{$data->status_to}} allow2 center-align" title="Edit data SI">
                        <a href="{{URL::asset('editdatasi')}}/{{$data->id_buat_ba}}" title="Edit data SI {{$data->nama_customer}}"><i class="material-icons orange-text">edit</i></a>
                    </td>
                    <td class="{{$data->status_to}} allow2 center-align" title="Delete data SI {{$data->nama_customer}}">
                        <a target="_blank" href="{{URL::asset('deletedatasi')}}/{{$data->id_buat_ba}}"><i class="material-icons red-text">delete</i></a>
                    </td>
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
        <table class="highlight atas responsive-table bordered">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">No BA</th>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No permohonan</th>
                    <th colspan="4" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">Tot. pengajuan</th>
                    <th class="center-align">Detail</th>
                    <th class="center-align">Edit SI</th>
                    <th class="center-align">Delete SI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cari as $cari)
                <tr>
                    <td class="{{$cari->status_to}} allow2">{{$cari->id_buat_ba}}</td>
                    <td class="{{$cari->status_to}} allow2">{{$cari->nama_customer}}</td>
                    <td class="{{$cari->status_to}} allow2">{{$cari->id_cr}}</td>
                        @if($cari->tot_pengajuan <= "5")
                        <td class="{{$cari->status_to}} allow center-align" title="Total pengajuan">
                            <a href="{{URL::asset('detailinputsi')}}/{{$cari->id_buat_ba}}" class="green-text">{{$cari->tot_pengajuan}} Pengajuan</a>
                        </td>
                        @elseif($cari->tot_pengajuan >= "6")
                        <td class="{{$cari->status_to}} allow center-align" title="Total pengajuan">
                            <a href="{{URL::asset('detailinputsi')}}/{{$cari->id_buat_ba}}" class="orange-text">{{$cari->tot_pengajuan}} Pengajuan</a>
                        </td>
                        @elseif($cari->tot_pengajuan >= "11")
                        <td class="{{$cari->status_to}} allow center-align" title="Total pengajuan">
                            <a href="{{URL::asset('detailinputsi')}}/{{$cari->id_buat_ba}}" class="pink-text">{{$cari->tot_pengajuan}} Pengajuan</a>
                        </td>
                        @endif
                    <td class="{{$cari->status_to}} center-align allow2">
                        <a href="{{URL::asset('detailsi')}}/{{$cari->id_buat_ba}}"><i class="material-icons">pageview</i></a>
                    </td>
                    <td class="{{$cari->status_to}} allow2 center-align" title="Edit data SI">
                        <a href="{{URL::asset('editdatasi')}}/{{$cari->id_buat_ba}}"><i class="material-icons orange-text">edit</i></a>
                    </td>
                    <td class="{{$cari->status_to}} allow2 center-align" title="Download BA">
                        <a target="_blank" href="{{URL::asset('deletedatasi')}}/{{$cari->id_buat_ba}}"><i class="material-icons red-text">delete</i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="center-align pink-text">Maaf, data tidak ditemukan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endif
</body>
@stop

</html>