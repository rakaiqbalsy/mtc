<<<<<<< HEAD
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="asset/css/base.css">
	<link rel="stylesheet" href="asset/css/skeleton.css">
	<link rel="stylesheet" href="asset/css/layout.css">
	
</head>
<body>


	
			<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="gagal"){
						echo "<div class=notice bg=primary>
                <a href=index.php class=close>close</a>
                <p class=warn>Username dan Password tidak sesuai !	</p>
              </div>";
					}	
				}
			?>
	



	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<form class="login-form" action="cek_login.php" method="post">
				<h2>Login</h2>
				<p><input type="text" name="username" placeholder="Username"></p>
				<p><input type="password" name="password" placeholder="Password"></p>
				<button type="submit"></button>
			<form>
		</div>

	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
=======
<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
	<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
 
	<h1>Aplikasi Pemilihan Umum <br/> RW 08 Nagri Kaler Purwakarta </h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.malasngoding.com">kembali</a>
			</center>
		</form>
		
	</div>
 
 
>>>>>>> feb00197c8a5328a536b110e95bfc648749a2f20
</body>
</html>