<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Truncate data Customer Service</title>
</head>
@section('content')
<body>
<ol class="breadcrumb">
	<li><a href="{{URL::asset('truncate')}}">Dashboard</a></li>
	<li class="active">Data CS</li>
	<li><a href="{{URL::asset('truncateto')}}">Data TO</a></li>
	<li><a href="{{URL::asset('truncatesi')}}">Data SI</a></li>
	<li><a href="{{URL::asset('truncatefi')}}">Data FI</a></li>
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
			<td>Customer</td>
			<td>No permohonan</td>
			<td>No pengajuan</td>
			<td>Nota</td>
			<td>Jenis nota</td>
			<td>Terminal operasi</td>
			<td>Tagihan</td>
		</tr>
	</thead>
	<tbody>
		@forelse($data as $data)
		<tr>
			<td>{{$data->nama_customer}}</td>
			<td>{{$data->id_cr}}</td>
			<td>{{$data->no_pengajuan}}</td>
			<td>{{$data->nota_lama}}</td>
			<td>{{$data->jenis_nota}}</td>
			<td>{{$data->terminal_operasi}}</td>
			<td>{{$data->tagihan}}</td>
		</tr>
		@empty
		<tr>
			<td colspan="7" class="center-align pink-text">Maaf, data tidak valid</td>
		</tr>
		@endforelse
	</tbody>
	<tfoot>
		<tr>
			<td colspan="7">{!! $page->render() !!}</td>
		</tr>
	</tfoot>
</table>
</div>
<a href="{{URL::asset('hapuscs')}}" class="btn waves-effect pink darken-1 kanan" type="submit">Truncate
    <i class="material-icons right">delete</i>
</a>
</body>
@stop
</html>