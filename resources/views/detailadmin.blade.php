<!DOCTYPE html>
<html>
@extends('dashboard')
<head>
	<title>IPC | Detail Data {{Auth::user()->name}}</title>
</head>
@section('content')
<body>
<form method="post" action="{{URL::asset('baruiadmin')}}" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="hidden" name="id" value="{{ Auth::user()->id }}">
<blockquote>
    <h5>Profil</h5>
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
	        <input name="nama" value="{{Auth::user()->name}}" id="first_name" type="text" class="validate">
	        <label class="blue-text">Perbarui nama</label>
	      </div>
		  <div class="input-field col s6">
	        <input name="email" value="{{Auth::user()->email}}" id="first_name" type="text" class="validate">
	        <label class="green-text">Perbarui username</label>
	      </div>
		</div>
		
		<div class="row">
            <div class="col s2">
              <img src="{{URL::asset('image')}}/{{Auth::user()->foto}}" alt="" class=" responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                Foto lama {{Auth::user()->name}}, mungkin anda ingin mengubah
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