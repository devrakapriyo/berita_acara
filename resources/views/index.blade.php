<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<title>IPC | Home</title>

	<!-- CSS  -->
	<link href="{{URL::asset('font.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
	<nav class="white" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="#" class="brand-logo"><img src="{{URL::asset('image/icon.png')}}" style="width:90px; height:60px; margin-top:5px;"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="{{URL::asset('login')}}">Login</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="{{URL::asset('login')}}">Login</a></li>
			</ul>
			<a href="{{URL::asset('login')}}" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br>
				<br>
				<h1 class="header center text-lighten-2">PT. Pelabuhan Tanjung Priok</h1>
				<div class="row center">
					<h5 class="header col s12 light">Procurement</h5>
					<h6>
            Information for partners regarding auctions for projects to be conducted by Indonesia Port Corporation.
          </h6>
				</div>
				<br>
				<br>

			</div>
		</div>
		<div class="parallax"><img src="{{URL::asset('image/home_produk_layanan2.jpg')}}" alt="Unsplashed background img 1"></div>
	</div>


	<div class="container">
		<div class="section">

			<!--   Icon Section   -->
			<div class="row">
				<div class="col s10 m3">
					<div class="icon-block">
						<h2 class="center brown-text"><i class="material-icons">group</i></h2>
						<h5 class="center">Costumer Service</h5>

						<p class="light">
							...
						</p>
					</div>
				</div>

				<div class="col s10 m3">
					<div class="icon-block">
						<h2 class="center brown-text"><i class="material-icons">perm_identity</i></h2>
						<h5 class="center">Terminal Opration</h5>

						<p class="light">
							...
						</p>
					</div>
				</div>

				<div class="col s10 m3">
					<div class="icon-block">
						<h2 class="center brown-text"><i class="material-icons">recent_actors</i></h2>
						<h5 class="center">System Information</h5>

						<p class="light">
							...
						</p>
					</div>
				</div>

				<div class="col s10 m3">
					<div class="icon-block">
						<h2 class="center brown-text"><i class="material-icons">assignment_ind</i></h2>
						<h5 class="center">Finance</h5>

						<p class="light">
							...
						</p>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light">A modern port form Indonesia</h5>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="{{URL::asset('image/background2.jpg')}}" alt="Unsplashed background img 2"></div>
	</div>

	<div class="container">
		<div class="section">

			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>
					<h4>Contact Us</h4>
					<p class="left-align light">
						...
					</p>
				</div>
			</div>

		</div>
	</div>


	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light">A modern web service PT. Pelabuhan Tanjung Priok framework based on Material Design</h5>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="{{URL::asset('image/background3.jpg')}}" alt="Unsplashed background img 3"></div>
	</div>

	<footer class="page-footer teal">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">About us</h5>
					<p class="grey-text text-lighten-4">
						We are the students who attend school in smk wikrama bogor city who were working the field in practice PT. Tanjung Priok, we here are working on the project application event news
					</p>


				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Join us</h5>
					<ul>
						<li><a class="white-text" href="#!">Gmail</a></li>
						<li><a class="white-text" href="#!">Facebook</a></li>
						<li><a class="white-text" href="#!">Tweeter</a></li>
						<li><a class="white-text" href="#!">Yahoo</a></li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Contact</h5>
					<ul>
						<li>
							<a class="white-text" href="#!">
								<i class="Tiny material-icons">iperm_phone_msg</i> 081281974573
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
			</div>
		</div>
	</footer>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{URL::asset('js/materialize.js')}}"></script>
	<script src="{{URL::asset('js/init.js')}}"></script>

</body>

</html>