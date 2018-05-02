<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Truncate data nomer permohonan</title>
</head>
@section('content')
<body>
<ol class="breadcrumb">
	<li><a href="{{URL::asset('truncate')}}">Dashboard</a></li>
	<li><a href="{{URL::asset('truncatenomerpermohonan')}}">Data CS</a></li>
	<li><a href="{{URL::asset('truncateto')}}">Data TO</a></li>
	<li><a href="{{URL::asset('truncatesi')}}">Data SI</a></li>
	<li><a href="{{URL::asset('truncatefi')}}">Data FI</a></li>
	<li class="active">Data nomer permohonan</li>
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
			<td>Nomer permohonan</td>
		</tr>
	</thead>
	<tbody>
		@forelse($data as $data)
		<tr>
			<td>{{$data->id_buat_ba}}</td>
		</tr>
		@empty
		<tr>
			<td class="center-align pink-text">Maaf, data tidak valid</td>
		</tr>
		@endforelse
	</tbody>
	<tfoot>
		<tr>
			<td>{!! $page->render() !!}</td>
		</tr>
	</tfoot>
</table>
</div>
<a href="{{URL::asset('hapusnomerpermohonan')}}" class="btn waves-effect pink darken-1 kanan" type="submit">Truncate
    <i class="material-icons right">delete</i>
</a>
</body>
@stop
</html>