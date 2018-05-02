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
    </ol>
    <div class="card-panel">
        <blockquote>
            Selamat datang admin {{Auth::user()->name}}, silahkan anda menginput semua keluhan costumer
        </blockquote>

        <p>Keluhan :</p>
        <p>1. Nota Kapal</p>
        <p>2. Nota Petikemas</p>
        <p>3. Nota Barang</p>
        <p>4. Nota Lainya</p>
    </div>
</body>
@stop

</html>