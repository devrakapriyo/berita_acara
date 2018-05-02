<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Dashboard {!! Auth::user()->name !!}</title>
</head>
@section('content')
<body>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
  <i class="material-icons green-text">done</i>
  {{ Session::get('sukses') }}
</div>
@endif
<ol class="breadcrumb">
	<li class="active">Dashboard</li>
	<li><a href="{{URL::asset('truncatecs')}}">Data CS</a></li>
	<li><a href="{{URL::asset('truncateto')}}">Data TO</a></li>
	<li><a href="{{URL::asset('truncatesi')}}">Data SI</a></li>
	<li><a href="{{URL::asset('truncatefi')}}">Data FI</a></li>
	<li><a href="{{URL::asset('truncatenomerpermohonan')}}">Data nomer permohonan</a></li>
	<li><a href="{{URL::asset('truncateprosesmonitoring')}}">Data proses monitoring</a></li>
	<li><a href="{{URL::asset('truncatereport')}}">Data report</a></li>
</ol>
<div class="card-panel z-depth-2">
    <blockquote>
        Selamat datang admin Raka Priyo Rachmanda, silahkan anda menghapus semua data pada setiap table :
    </blockquote>
    <p>Table :</p>
    <p>1. Customer service</p>
    <p>2. Terminal operation</p>
    <p>3. Sistem and Information</p>
    <p>4. Finance</p>
</div>
</body>
@stop
</html>