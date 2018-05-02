<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | User</title>
</head>
@section('content')
<body>
<script type="text/javascript">
	$(document).ready(function() {
    $('select').material_select();
  });
</script>
<form method="post" action="{{URL::asset('simpanuser')}}" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="jabatan" value="User">
<ol class="breadcrumb">
	<li><a href="{{URL::asset('user')}}">Admin</a></li>
	<li><a href="{{URL::asset('admincs')}}">Admin Customer Service</a></li>
	<li><a href="{{URL::asset('adminto')}}">Admin Terminal Operation</a></li>
	<li><a href="{{URL::asset('adminsi')}}">Admin Sistem Information</a></li>
	<li><a href="{{URL::asset('adminfi')}}">Admin Finance</a></li>
	<li class="active">User Customer</li>
</ol>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
  <i class="material-icons green-text">done</i>
  {{ Session::get('sukses') }}
</div>
@elseif(Session::has('gagal'))
<div class="chip">
  <i class="material-icons pink-text" title="Klick jika ingin di hilangkan">error</i>
  {{ Session::get('gagal') }}
</div>
@endif
<div class="card-panel hoverable">
  <div class="row">
    <div class="card-content">
      <div class="input-field col s6">
        <input name="nama" placeholder="Nama lengkap" id="first_name" type="text" class="validate">
        <label class="blue-text">Masukan nama</label>
      </div>
      <div class="input-field col s6">
        <input name="email" placeholder="Username" id="first_name" type="text" class="validate">
        <label class="green-text">Masukan username</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input name="password" placeholder="Password" id="first_name" type="password" class="validate">
        <label class="pink-text">Masukan password</label>
      </div>
    </div>
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input name="foto" type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
    <div class="card-action">
    <button class="btn waves-effect blue lighten-1 kanan" type="submit" name="action">SIMPAN
      <i class="material-icons right">send</i>
    </button>
    </div>
  </div>
</div>
</form>
</body>
@stop
</html>