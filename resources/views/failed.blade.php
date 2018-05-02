<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body {
		margin: 0px;
		padding: 0px;
		color: #666;
		background-color: #fff;
		font-size: 16px;
	}

	.header {
		width: 100%;
		height: 50px;
		background-color: #3498db;
		color: #fff;
		text-align: center;
		font-size: 20px;
		line-height: 50px;
		box-shadow: 0px 0px 5px #333;
	}

	.image {
		width: 100%;
		height: 610px;
		margin-top: 10px;
		background-image:url('robot rusak.png');
	}

	.tombol {
		margin-top: 200px;
	}
</style>
<title>Anda belum Login</title>
</head>
<body>
<div class="header">Maaf, sebelumnya anda belum melakukan login</div>
<div class="image">
	<center><a class="btn btn-warning tombol" href="{{URL::asset('login')}}">Silahkan login terlebih dahulu</a></center>
</div>
</body>
</html>