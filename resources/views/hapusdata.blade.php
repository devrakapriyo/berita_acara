<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Delete Data</title>
</head>
@section('content')
<body>
<ol class="breadcrumb">
	<li class="active">Hapus data</li>
</ol>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
  <i class="material-icons green-text">done</i>
  {{ Session::get('sukses') }}
</div>
@endif
@if($respon == 1)
<form method="post" action="{{URL::asset('caridataba')}}">
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
<div class="card-panel z-depth-2">
<table class="bordered">
	<thead>
		<tr>
			<th>No permohonan</th>
			<th>Customer</th>
			<th>No pengajuan</th>
			<th>Nota</th>
			<th>Jenis nota</th>
			<th>Tagihan</th>
			<th>Termonal operasi</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
		@forelse($data as $data)
		<tr>
			<td>{{$data->id_cr}}</td>
			<td>{{$data->nama_customer}}</td>
			<td>{{$data->no_pengajuan}}</td>
			<td>{{$data->nota_lama}}</td>
			<td>{{$data->jenis_nota}}</td>
			<td>{{$data->tagihan}}</td>
			<td>{{$data->terminal_operasi}}</td>
			<th>
				<a href="{{URL::asset('hapusdataba')}}/{{$data->id_cs}}" title="Hapus data"><i class="material-icons pink-text">delete</i></a>
			</th>
		</tr>
		@empty
		<tr>
			<td colspan="9" class="center-align pink-text">Maaf, data tidak valid</td>
		</tr>
		@endforelse
	</tbody>
	<tfoot>
		<tr>
			<td colspan="9">{!! $page->render() !!}</td>
		</tr>
	</tfoot>
</table>
@else
<table class="bordered">
	<thead>
		<tr>
			<th>No permohonan</th>
			<th>Customer</th>
			<th>No BPRP</th>
			<th>No pengajuan</th>
			<th>Nota</th>
			<th>Jenis nota</th>
			<th>Tagihan</th>
			<th>Termonal operasi</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
		@forelse($cari as $cari)
		<tr>
			<td>{{$cari->id_cr}}</td>
			<td>{{$cari->nama_customer}}</td>
			<td>{{$cari->no_bprp}}</td>
			<td>{{$cari->no_pengajuan}}</td>
			<td>{{$cari->nota_lama}}</td>
			<td>{{$cari->jenis_nota}}</td>
			<td>{{$cari->tagihan}}</td>
			<td>{{$cari->terminal_operasi}}</td>
			<th>
				<a href="{{URL::asset('hapusdataba')}}/{{$cari->id_cs}}" title="Hapus data"><i class="material-icons pink-text">delete</i></a>
			</th>
		</tr>
		@empty
		<tr>
			<td colspan="9" class="center-align pink-text">Maaf, tidak ada data yang di tampilkan</td>
		</tr>
		@endforelse
	</tbody>
</table>
@endif
</div>
</body>
@stop
</html>