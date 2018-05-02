<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Data Terminal Operasi</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardto')}}">Dashboard</a></li>
        <li><a href="{{URL::asset('entryto')}}">Terminal Opration</a></li>
        <li class="active">Buat Berita Acara</li>
    </ol>
    <form method="post" action="{{URL::asset('caridatato')}}">
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
        <table class="highlight responsive-table atas">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">Tot. pengajuan</th>
                    <th rowspan="2">No permohonan</th>
                    <th rowspan="2">Status TO</th>
                    <th colspan="3" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">Buat BA</th>
                    <th class="center-align">Dok pendukung</th>
                    <th class="center-align">Download BA</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $data)
                <tr>
                    <th>{{$data->nama_customer}}</th>
                    <th>{{$data->tot_pengajuan}} Pengajuan</th>
                    <th>{{$data->id_cr}}</th>
                    @if($data->status_to == 'NEW') 
                    <th class="blue-text">Dikonfirmasi</th>
                    @else 
                    <th class="red-text">Diabaikan</th>
                    @endif
                    <th class="center-align" title="Buat BA">
                        <a href="{{URL::asset('buatba')}}/{{$data->id_buat_ba}}"><i class="material-icons">playlist_add</i></a>
                    </th>
                    <th class="center-align" title="Dok pedukung">
                        <a target="_blank" href="{{URL::asset('dokpendukung')}}/{{$data->dok_pendukung}}"><i class="material-icons orange-text">library_books</i></a>
                    </th>
                    <th class="center-align" title="Download BA">
                        <a target="_blank" href="{{URL::asset('exportexcl')}}/{{$data->id_cr}}"><i class="material-icons green-text">explicit</i></a>
                    </th>
                </tr>
                @empty
                <tr>
                    <th colspan="7" class="center-align">Maaf, data tidak valid</th>
                </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7" class="center-align">{!! $page->render() !!}</td>
                </tr>
            </tfoot>
        </table>
    </div>
    @else
    <div class="card-panel z-depth-2">
        <table class="highlight responsive-table atas">
            <thead class="pink-text">
                tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">Tot. pengajuan</th>
                    <th rowspan="2">No permohonan</th>
                    <th rowspan="2">Status TO</th>
                    <th colspan="3" class="center-align">Detail</th>
                </tr>
                <tr>
                    <th class="center-align">Buat BA</th>
                    <th class="center-align">Dok pendukung</th>
                    <th class="center-align">Download BA</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cari as $cari)
                <tr>
                    <th>{{$cari->nama_customer}}</th>
                    <th>{{$cari->tot_pengajuan}} Pengajuan</th>
                    <th>{{$cari->id_cr}}</th>
                    @if($cari->status_to == 'NEW') 
                    <th class="blue-text">Dikonfirmasi</th>
                    @else 
                    <th class="red-text">Diabaikan</th>
                    @endif
                    <th class="center-align" title="Buat BA">
                        <a href="{{URL::asset('buatba')}}/{{$cari->id_buat_ba}}"><i class="material-icons">playlist_add</i></a>
                    </th>
                    <th class="center-align" title="Dok pedukung">
                        <a target="_blank" href="{{URL::asset('dokpendukung')}}/{{$cari->dok_pendukung}}"><i class="material-icons orange-text">library_books</i></a>
                    </th>
                    <th class="center-align" title="Download BA">
                        <a target="_blank" href="{{URL::asset('exportexcl')}}/{{$cari->id_cr}}"><i class="material-icons green-text">explicit</i></a>
                    </th>
                </tr>
                @empty
                <tr>
                    <th colspan="6" class="center-align pink-text">Maaf, data tidak ditemukan</th>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endif
</body>
@stop

</html>