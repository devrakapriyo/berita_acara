<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Data User</title>
</head>
@section('content')
<body>
<ol class="breadcrumb">
	<li><a href="{{URL::asset('dataadmin')}}">Admin</a></li>
	<li><a href="{{URL::asset('dataadmincs')}}">Data Customer Service</a></li>
	<li><a href="{{URL::asset('dataadminto')}}">Data Terminal Operation</a></li>
	<li><a href="{{URL::asset('dataadminsi')}}">Data Sistem Information</a></li>
	<li><a href="{{URL::asset('dataadminfi')}}">Data Finance</a></li>
	<li class="active">Data User Customer</li>
</ol>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
  <i class="material-icons green-text">done</i>
  {{ Session::get('sukses') }}
</div>
@endif
<div class="card-panel hoverable">
<table class="highlight bordered atas responsive-table">
	<thead>
		<tr>
			<th rowspan="2">Nama</th>
			<th rowspan="2">Email</th>
			<th rowspan="2">Jabatan</th>
			<th rowspan="2">Foto</th>
			<th colspan="3" class="center-align">Aksi</th>
		</tr>
		<tr>
			<th class="center-align">Detail</th>
			<th class="center-align">Edit</th>
			<th class="center-align">Delete</th>
		</tr>
	</thead>
	<tbody>
		@forelse($data as $data)
		<tr>
			<td>{{$data->name}}</td>
			<td>{{$data->email}}</td>
			<td>{{$data->jab}}</td>
			<td><img src="{{URL::asset('image')}}/{{$data->foto}}" style="width:40px; height:40px;"></td>
			<td class="center-align">
				<a href="{{URL::asset('detaildata')}}/{{$data->id}}" title="Detail"><i class="material-icons">assignment_ind</i></a>
			</td>
			<td class="center-align">
				<a href="{{URL::asset('edituser')}}/{{$data->id}}" title="Edit"><i class="material-icons">assignment</i></a>
			</td>
			<td class="center-align">
				<a href="{{URL::asset('deleteadmin')}}/{{$data->id}}" title="Delete"><i class="material-icons">delete</i></a>
			</td>
		</tr>
		@empty
		<tr>
			<td colspan="7" class="pink-text center-align">Maaf, tidak ada data yang harus d tampilkan</td>
		</tr>
		@endforelse
	</tbody>
	<!-- <tfoot>
		<tr>
			<td class="right-align" colspan="7">{!! $page->render() !!}</td>
		</tr>
	</tfoot> -->
</table>
</div>
</body>
@stop
</html>