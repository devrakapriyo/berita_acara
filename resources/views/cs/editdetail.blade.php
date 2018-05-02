<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Edit Data {{$data->nama_customer}}</title>
</head>
@section('content')
<body>
<form method="post" action="{{URL::asset('updatecs')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $data->id_cs}}">
<ol class="breadcrumb">
    <li><a href="{{URL::asset('dashboardcs')}}">Dashboard</a></li>
    <li><a href="{{URL::asset('entrycs')}}">Entry Customer Service</a></li>
    <li><a href="{{URL::asset('datacs')}}">Data Customer Service</a></li>
    <li class="active">Barui Data Custumer Service</li>
</ol>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
    <i class="material-icons green-text">done</i> {{Session::get('sukses')}}
</div>
@endif
<div class="card-panel z-depth-2">
<table class=" highlight responsive-table">
    <thead>
        <tr>
            <th colspan="3" class="blue-text">
                <h5>Customer service</h5>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Customer</th>
            <th>:</th>
            <th>
                <input type="text" name="nama_customer" value="{{$data->nama_customer}}" class="validate">
            </th>
        </tr>
        <tr>
            <th>No permohonan</th>
            <th>:</th>
            <th>{{$data->id_cr}}</th>
        </tr>
        <tr>
            <th>Nota lama</th>
            <th>:</th>
            <th>
                <input type="text" name="nota_lama" value="{{$data->nota_lama}}" class="validate">
            </th>
        </tr>
        <tr>
            <th>No request</th>
            <th>:</th>
            <th>
                <input type="text" name="no_req" value="{{$data->no_req}}" class="validate">
            </th>
        </tr>
        <tr>
            <th>Jenis nota</th>
            <th>:</th>
            <th>
					<select class="browser-default" name="jenis_nota" required>
                    <option value="" disabled selected>{{$data->jenis_nota}}</option>
                    <option value="Kapal">Kapal</option>
                    <option value="Barang">Barang</option>
                    <option value="Peti kemas">Peti kemas</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
             </th>
        </tr>
        <tr>
        <th>Terminal operasi</th>
        <th>:</th>
        <th>
            <select class="browser-default" name="to" required>
                <option value="" disabled selected>{{$data->terminal_operasi}}</option>
                <option value="TO 1">TO 1</option>
                <option value="TO 2">TO 2</option>
                <option value="TO 3">TO 3</option>
                <option value="VAS">VAS</option>
            </select>
        </th>
    </tr>
</tbody>
<tfoot>
    <tr>
        <th colspan="3">
            <a href="{{URL::asset('editdetailcs')}}/{{$data->id_cr}}" class="btn waves-effect orange darken-1" type="submit">Kembali
                <i class="material-icons right">undo</i>
            </a>
            <button class="btn waves-effect green">BARUI
                <i class="material-icons right">done</i>
            </button>
        </th>
    </tr>
</tfoot>
</table>
</div>
</form>
</body>
@stop
</html>