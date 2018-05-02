<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Truncate data Finance</title>
</head>
@section('content')
<body>
<ol class="breadcrumb">
	<li><a href="{{URL::asset('truncate')}}">Dashboard</a></li>
	<li><a href="{{URL::asset('truncatecs')}}">Data CS</a></li>
	<li><a href="{{URL::asset('truncateto')}}">Data TO</a></li>
	<li><a href="{{URL::asset('truncatesi')}}">Data SI</a></li>
	<li class="active">Data FI</li>
	<li><a href="{{URL::asset('truncatenomerpermohonan')}}">Data nomer permohonan</a></li>
	<li><a href="{{URL::asset('truncateprosesmonitoring')}}">Data proses monitoring</a></li>
	<li><a href="{{URL::asset('truncatereport')}}">Data report</a></li>
</ol>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
  <i class="material-icons green-text">done</i>
  {{ Session::get('sukses') }}
</div>
@endif
<div class="card-panel z-depth-2">
<table>
	<thead>
		<tr>
			<td>No BA</td>
			<td>Nota</td>
			<td>Jumlah pengeluaran</td>
			<td>Tanggal pengeluaran</td>
		</tr>
	</thead>
	<tbody>
		@forelse($data as $data)
		<tr>
			<td>{{$data->id_buat_ba}}</td>
			<td>{{$data->nota_lama}}</td>
			<td>{{$data->jml_finance}}</td>
			<td>{{$data->tgl_finance}}</td>
		</tr>
		@empty
		<tr>
			<td colspan="4" class="center-align pink-text">Maaf, data tidak valid</td>
		</tr>
		@endforelse
	</tbody>
	<tfoot>
		<tr>
			<td colspan="4">{!! $page->render() !!}</td>
		</tr>
	</tfoot>
</table>
</div>
<a href="{{URL::asset('hapusfi')}}" class="btn waves-effect pink darken-1 kanan" type="submit">Truncate
    <i class="material-icons right">delete</i>
</a>
</body>
@stop
</html>