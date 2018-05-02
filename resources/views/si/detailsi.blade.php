<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
    <title>IPC | Detail Data {{$title->nama_customer}}</title>
</head>
@section('content')
<body>
        <ol class="breadcrumb">
            <li><a href="{{URL::asset('dashboardsi')}}">Dashboard</a></li>
            <li><a href="{{URL::asset('entrysi')}}">Sistem Information</a></li>
            <li><a href="{{URL::asset('datasi')}}">Data Sistem Information</a></li>
            <li class="active">Detail SI</li>
        </ol>
        @if(Session::has('sukses'))
        <div class="chip" title="Klick jika ingin di hilangkan">
            <i class="material-icons green-text">done</i> {{Session::get('sukses')}}
        </div>
        @endif
        <div class="card-panel z-depth-2">
            <table class="highlight responsive-table bordered atas">
                <thead class="pink-text">
                    <tr>
                        <th>Customer</th>
                        <th>No pengajuan</th>
                        <th>No permohonan</th>
                        <th>Jenis nota</th>
                        <th>Nota lama</th>
                        <th>Terminal operasi</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td class="{{$data->status_to}}">{{$data->nama_customer}}</td>
                        <td class="{{$data->status_to}}">{{$data->no_pengajuan}}</td>
                        <td class="{{$data->status_to}}">{{$data->id_cr}}</td>
                        <td class="{{$data->status_to}}">{{$data->jenis_nota}}</td>
                        <td class="{{$data->status_to}}">{{$data->nota_lama}}</td>
                        <td class="{{$data->status_to}}">{{$data->terminal_operasi}}</td>
                        <td class="{{$data->status_to}}">
                            <a href="{{URL::asset('detaildatasi')}}/{{$data->nota_lama}}" title="Detail Data {{$data->nama_customer}}"><i class="material-icons orange-text">sort</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <a href="{{URL::asset('entrysi')}}" class="btn waves-effect orange darken-1" type="submit">Kembali
                                <i class="material-icons right">undo</i>
                            </a>
<!--
                            <a href="{{URL::asset('abaikansi')}}/{{$data->id_buat_ba}}" class="btn waves-effect red darken-1" type="submit">Abaikan
                                <i class="material-icons right">swap_horiz</i>
                            </a>
-->
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
</body>
@stop
</html>