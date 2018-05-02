<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Dashboard {{Auth::user()->name}}</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
        <li><a href="{{URL::asset('entryto')}}">Terminal Opration</a></li>
        <li><a href="{{URL::asset('datato')}}">Buat Berita Acara</a></li>
    </ol>
    <div class="card-panel z-depth-2">
            Selamat datang <span class="blue-text">{{Auth::user()->name}}</span>, silahkan anda mengoreksi keluhan customer dan menginput dokumen
    </div>
</body>
@stop

</html>