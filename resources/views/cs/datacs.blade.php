<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Data Customer Service</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardcs')}}">Dashboard</a></li>
        <li><a href="{{URL::asset('monitoringcs')}}">Entry Customer Service</a></li>
        <li class="active">Data Customer Service</li>
    </ol>
    <form method="post" action="{{URL::asset('caridatacr')}}">
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
    <div class="card-panel z-depth-2">
        @if($respon == 1)
        <table class="atas highlight bordered responsive-table">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">Tot pengajuan</th>
                    <th rowspan="2">No permohonan</th>
                    <th colspan="2" class="center-align">Detail</th>
                </tr>
                <tr>
                    <td class="center-align">Edit</td>
                    <td class="center-align">Delete</td>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $data)
                <tr>
                    <td>{{$data->nama_customer}}</td>
                    <td>{{$data->tot_pengajuan}} Pengajuan</td>
                    <td>{{$data->id_cr}}</td>
                    <td class="center-align">
                        <a href="{{URL::asset('editdetailcs')}}/{{$data->id_cr}}"><i class="material-icons">input</i></a>
                    </td>
                    <td class="center-align">
                        <a href="{{URL::asset('deletedetailcs')}}/{{$data->id_cs}}"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="center-align">Tidak ada data yang belum di entry...</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="kanan">{!! $page->render() !!}</td>
                </tr>
            </tfoot>
        </table>
        @else
        <table class="atas highlight bordered responsive-table">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">Tot pengajuan</th>
                    <th rowspan="2">No permohonan</th>
                    <th colspan="2" class="center-align">Detail</th>
                </tr>
                <tr>
                    <td class="center-align">Edit</td>
                    <td class="center-align">Delete</td>
                </tr>
            </thead>
            <tbody>
                @forelse($cari as $cari)
                <tr>
                    <td>{{$cari->nama_customer}}</td>
                    <td>{{$cari->tot_pengajuan}} Pengajuan</td>
                    <td>{{$cari->id_cr}}</td>
                    <td class="center-align">
                        <a href="{{URL::asset('editdetailcs')}}/{{$cari->id_cr}}"><i class="material-icons">input</i></a>
                    </td>
                    <td class="center-align">
                        <a href="{{URL::asset('deletedetailcs')}}/{{$cari->id_cs}}"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="center-align pink-text">Maaf, data tidak ditemukan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @endif
    </div>
</body>
@stop
</html>