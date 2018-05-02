<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Tambah Admin</title>
</head>
@section('content')
<body>
<script type="text/javascript">
	$(document).ready(function() {
    $('select').material_select();
  });
</script>
<ol class="breadcrumb">
	<li class="active">Admin</li>
  <li><a href="{{URL::asset('admincs')}}">Admin Customer Service</a></li>
	<li><a href="{{URL::asset('adminto')}}">Admin Terminal Operation</a></li>
	<li><a href="{{URL::asset('adminsi')}}">Admin Sistem Information</a></li>
	<li><a href="{{URL::asset('adminfi')}}">Admin Finance</a></li>
	<li><a href="{{URL::asset('user')}}">User Customer</a></li>
</ol>
</body>
@stop
</html>