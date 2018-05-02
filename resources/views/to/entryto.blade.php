<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Input Data Terminal Operasi</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li><a href="{{URL::asset('dashboardto')}}">Dashboard</a></li>
        <li class="active">Terminal Opration</li>
        <li><a href="{{URL::asset('datato')}}">Buat Berita Acara</a></li>
    </ol>
    <form method="post" action="{{URL::asset('carientryto')}}">
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
        <i class="material-icons green-text">done</i> {{ Session::get('sukses') }}
    </div>
    @endif
    <div class="card-panel z-depth-2">
        <table class="highlight responsive-table bordered atas">
            <thead class="pink-text">
                <tr>
                    <th rowspan="2">Customer</th>
                    <th rowspan="2">No permohonan</th>
                    <th colspan="4" class="center-align">View</th>
                </tr>
                <tr>
                    <th class="center-align">Tot. pengajuan</th>
                    <th class="center-align">Detail</th>
                    <th class="center-align">Edit</th>
                    <th class="center-align">Delete</th>
                </tr>
            </thead>
            @if($respon == 1)
            <tbody>
                @forelse($data as $data)
                <tr>
                    <input type="hidden" class="{{$data->status_cr}}" name="notif" value="{{$data->status_cr}}">
                    <th class="{{$data->status_cr}} allow2">{{$data->nama_customer}}</th>
                    <th class="{{$data->status_cr}} allow2">{{$data->id_cr}}</th>
                    <th class="{{$data->status_cr}} center-align allow"><a href="{{URL::asset('detailpengajuan')}}/{{$data->id_cr}}" title="Total pengajuan {{$data->nama_customer}}">{{$data->tot_pengajuan}} Pengajuan</a></th>
                    <th class="{{$data->status_cr}} center-align allow2" title="Detail"><a href="{{URL::asset('detaildataba')}}/{{$data->id_cr}}" title="Detail {{$data->nama_customer}}"><i class="material-icons">description</i></a></th>
                    <th class="{{$data->status_cr}} center-align allow2" title="Edit data">
                        <a href="{{URL::asset('editdatato')}}/{{$data->id_cr}}" title="Edit data {{$data->nama_customer}}">
                            <i class="material-icons orange-text">edit</i>
                        </a>
                    </th>
                    <th class="{{$data->status_cr}} center-align allow2" title="Delete data {{$data->nama_customer}}">
                        <a href="{{URL::asset('deletedatato')}}/{{$data->id_cr}}">
                            <i class="material-icons red-text">delete</i>
                        </a>
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
                    <td colspan="5">{!! $page->render() !!}</td>
                </tr>
            </tfoot>
            @else
            <tbody>
                @forelse($cari as $cari)
                <tr>
                    <input type="hidden" class="{{$cari->status_cr}}" name="notif" value="{{$cari->status_cr}}">
                    <th class="{{$cari->status_cr}} allow2">{{$cari->nama_customer}}</th>
                    <th class="{{$cari->status_cr}} allow2">{{$cari->id_cr}}</th>
                    <th class="{{$cari->status_cr}} center-align allow"><a href="{{URL::asset('detailpengajuan')}}/{{$cari->id_cr}}">{{$cari->tot_pengajuan}} Pengajuan</a></th>
                    <th class="{{$cari->status_cr}} center-align allow2" title="Detail"><a href="{{URL::asset('detaildataba')}}/{{$cari->id_cr}}"><i class="material-icons">description</i></a></th>
                    <th class="{{$cari->status_cr}} center-align allow2" title="Edit data">
                        <a href="{{URL::asset('editdatato')}}/{{$cari->id_cr}}">
                            <i class="material-icons orange-text">edit</i>
                        </a>
                    </th>
                    <th class="{{$cari->status_cr}} center-align allow2" title="Delete data {{$cari->nama_customer}}">
                        <a href="{{URL::asset('deletedatato')}}/{{$cari->id_cr}}">
                            <i class="material-icons red-text">delete</i>
                        </a>
                    </th>
                </tr>
                @empty
                <tr>
                    <th colspan="5" class="center-align pink-text">Maaf, data tidak ditemukan</th>
                </tr>
                @endforelse
            </tbody>
            @endif
            
        </table>
    </div>
</body>
@stop
</html>