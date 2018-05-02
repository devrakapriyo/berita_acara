<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Edit Data {{$detail->name}}</title>
</head>
@section('content')
<body>
<form method="post" action="{{URL::asset('baruiadmincs')}}" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="hidden" name="id" value="{{ $detail ->id }}">

<input type="hidden" name="jabatan" value="Customer Relation">
<blockquote>
    <h5>Perbarui data admin customer service</h5>
</blockquote>
@if(Session::has('sukses'))
<div class="chip" title="Klick jika ingin di hilangkan">
  <i class="material-icons green-text">done</i>
  {{ Session::get('sukses') }}
</div>
@endif
<div class="card-panel hoverable">
	<div class="row">
		<div class="card-content">
		  <div class="input-field col s6">
	        <input name="nama" value="{{$detail->name}}" id="first_name" type="text" class="validate">
	        <label class="blue-text">Masukan nama</label>
	      </div>
		  <div class="input-field col s6">
	        <input name="email" value="{{$detail->email}}" placeholder="Username" id="first_name" type="text" class="validate">
	        <label class="green-text">Masukan username</label>
	      </div>
		</div>
		<div class="row">
		  <div class="input-field col s6">
	        <input name="password" value="{{$detail->password}}" id="first_name" type="text" class="validate">
	        <label class="blue-text">Masukan password</label>
	      </div>
		</div>
		<div class="row valign-wrapper">
            <div class="col s2">
              <img src="{{URL::asset('image')}}/{{$detail->foto}}" alt="" class=" responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                Foto lama {{$detail->name}}, mungkin anda ingin mengubah
              </span>
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
		<button class="btn waves-effect blue lighten-1 kanan" type="submit" name="action">Perbarui
			<i class="material-icons right">send</i>
		</button>
		</div>
	</div>
</div>
</form>
</body>
@stop
</html>