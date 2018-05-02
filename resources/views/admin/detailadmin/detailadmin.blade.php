<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Detail Data {{$detail->name}}</title>
</head>
@section('content')
<body>
<blockquote>
    <h5>Detail data {{$detail->jab}}</h5>
</blockquote>
<div class="card-panel hoverable">
	<div class="row">
		<div class="card-content">
		  <div class="input-field col s6">
		    <input readonly  value="{{$detail->name}}" type="text" class="validate">
		    <label class="blue-text">Nama :</label>
		  </div>
		  <div class="input-field col s6">
	        <input readonly value="{{$detail->email}}" type="text" class="validate">
	        <label class="green-text">Username</label>
	      </div>
		</div>
		<div class="row">
		  <div class="input-field col s6">
		    <input readonly  value="{{$detail->jab}}" type="text" class="validate">
		    <label class="pink-text">Jabatan :</label>
		  </div>
		</div>
		<div class="row valign-wrapper">
            <div class="col s2">
              <img src="{{URL::asset('image')}}/{{$detail->foto}}" alt="" class=" responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                Foto admin <span class="blue-text">{{$detail->name}}</span>
              </span>
            </div>
          </div>
		<!-- <div class="card-action">
		<a href="#" class="btn waves-effect deep-orange lighten-1 kanan">Kembali
			<i class="material-icons right">send</i>
		</a>
		</div> -->
	</div>
</div>
</body>
@stop
</html>