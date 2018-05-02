<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Edit Data {{$title->nama_customer}}</title>
</head>
@section('content')
<body>
<ol class="breadcrumb">
    <li><a href="{{URL::asset('dashboardcs')}}">Dashboard</a></li>
    <li><a href="{{URL::asset('entrycs')}}">Entry Customer Service</a></li>
    <li><a href="{{URL::asset('datacs')}}">Data Customer Service</a></li>
    <li class="active">Barui Data Custumer Service</li>
</ol>
<div class="card-panel z-depth-2">
<table class="highlight responsive-table bordered atas">
    <thead class="pink-text">
        <tr>
            <th>Customer</th>
            <th>No permohonan</th>
            <th>No pengajuan</th>
            <th>Jenis nota</th>
            <th>Nota lama</th>
            <th>Terminal operasi</th>
            <th class="center-align">View</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $data)
        <tr>
            <th>{{$data->nama_customer}}</th>
            <th>{{$data->id_cr}}</th>
            <th>{{$data->no_pengajuan}}</th>
            <th>{{$data->jenis_nota}}</th>
            <th>{{$data->nota_lama}}</th>
            <th>{{$data->terminal_operasi}}</th>
            <th>
                <a class="center-align" title="View" href="{{URL::asset('editdetail')}}/{{$data->id_cs}}"><i class="material-icons left">assignment</i>Ubah</a>
            </th>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="7">
                <a href="{{URL::asset('datacs')}}" class="btn waves-effect orange darken-1" type="submit">Kembali
                    <i class="material-icons right">undo</i>
                </a>
            </td>
        </tr>
    </tfoot>
</table>
</div>
</body>
@stop
</html>