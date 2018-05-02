<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Truncate data report</title>
</head>
@section('content')
<body>
<ol class="breadcrumb">
	<li><a href="{{URL::asset('truncate')}}">Dashboard</a></li>
	<li><a href="{{URL::asset('truncatenomerpermohonan')}}">Data CS</a></li>
	<li><a href="{{URL::asset('truncateto')}}">Data TO</a></li>
	<li><a href="{{URL::asset('truncatesi')}}">Data SI</a></li>
	<li><a href="{{URL::asset('truncatefi')}}">Data FI</a></li>
	<li><a href="{{URL::asset('truncatenomerpermohonan')}}">Data nomer permohonan</a></li>
	<li><a href="{{URL::asset('truncateprosesmonitoring')}}">Data proses monitoring</a></li>
	<li class="active">Data report</li>
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
			<td>Nama customer</td>
			<td>No pengajuan</td>
			<td>Nota</td>
			<td>Jenis nota</td>
			<td>Tagihan awal</td>
			<td>Tagihan akhir</td>
		</tr>
	</thead>
	<tbody>
		@forelse($data as $data)
		<tr>
			<td>{{$data->nama_customer}}</td>
			<td>{{$data->no_pengajuan}}</td>
			<td>{{$data->nota_lama}}</td>
			<td>{{$data->jenis_nota}}</td>
			<td>{{$data->tagihan_awal}}</td>
			<td>{{$data->tagihan_akhir}}</td>
		</tr>
		@empty
		<tr>
			<td colspan="6" class="center-align pink-text">Maaf, data tidak valid</td>
		</tr>
		@endforelse
	</tbody>
	<tfoot>
		<tr>
			<td colspan="6">{!! $page->render() !!}</td>
		</tr>
	</tfoot>
</table>
</div>
<a href="{{URL::asset('hapusreport')}}" class="btn waves-effect pink darken-1 kanan" type="submit">Truncate
    <i class="material-icons right">delete</i>
</a>
</body>
@stop
</html>