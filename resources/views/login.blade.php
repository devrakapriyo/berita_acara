<!DOCTYPE html>
<html>
<head>
	<title>IPC | Login</title>
</head>
<!--Import Google Icon Font-->
<link href="{{URL::asset('font.css')}}" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="{{URL::asset('design/css/materialize.min.css')}}"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
<link rel="stylesheet" href="{{URL::asset('style.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{URL::asset('design/js/materialize.min.js')}}"></script>

<nav class="white" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="#" class="brand-logo"><img src="{{URL::asset('image/icon.png')}}" style="width:90px; height:60px; margin-top:5px;"></a>
  </div>
</nav>
<div class="row">
<form method="post" action="{{URL::asset('login')}}" class="col s12">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
  <div class="col s12"><p></p></div>
  <div class="col s12"><p></p></div>
  <div class="col s12"><p></p></div>
  <div class="col s12"><p></p></div>
  <div class="col s12 m4 l2"><p></p></div>
  <div class="col s12 m4 l8">
    <div class="card">
      <div class="card-image">
      <img src="{{URL::asset('img/logo.png')}}" style="width:100px; height:60px; margin:auto;">
      <div>
        <h5 class="center-align">Selamat datang admin</h5>
      </div>
      </div>
      <div class="card-content">
        <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix orange-text">assignment_ind</i>
          <input name="email" id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Username</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix blue-text">lock_open</i>
          <input name="password" id="icon_telephone" type="password" class="validate">
          <label for="icon_telephone">Password</label>
        </div>
      </div>
      </div>
      <div class="card-action">
        <div class="row">
          <div class="col s12 m4 l2"><p></p></div>
          <div class="col s12 m4 l8"><p>
            @if(Session::has('gagal'))
            <div class="chip">
              {{session::get('gagal')}}
              <i class="material-icons pink-text">close</i>
            </div>
            @endif
          </p></div>
          <div class="col s12 m4 l2">
            <button class="btn waves-effect green" type="submit" name="action">LOGIN
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m4 l2"><p></p></div>
</div>
</form>
</div>
</body>
</html>