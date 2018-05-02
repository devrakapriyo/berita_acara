<!DOCTYPE html>
<html>
@extends('dashboard')

<head>
    <title>IPC | Dashboard {!! Auth::user()->name !!}</title>
</head>
@section('content')

<body>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
        <li><a href="{{URL::asset('monitoringcs')}}">Entry Customer Service</a></li>
        <li><a href="{{URL::asset('datacs')}}">Data Customer Service</a></li>
    </ol>
    <div class="card-panel z-depth-2">
        Selamat datang <span class="blue-text">{{Auth::user()->name}}</span>, silahkan anda menginput semua keluhan costumer
    </div>
</body>
@stop

</html>