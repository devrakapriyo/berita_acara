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
        <li><a href="{{URL::asset('entrysi')}}">Sistem Information</a></li>
        <li><a href="{{URL::asset('datasi')}}">Data Sistem Information</a></li>
    </ol>
    <div class="card-panel z-depth-2">
            Selamat datang <span class="blue-text">{{Auth::user()->name}}</span>, silahkan anda mengoreksi keluhan customer
    </div>
</body>
@stop

</html>