<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/logins.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/img/logo.png" rel="icon">
</head>
<body>
	<div class="bo">
		<div class="gmbr">
			<img src="<?php echo base_url()?>assets/img/gambar1.png" alt="">
		</div>
		<div class="login">
			<div class="logo">
				<img src="<?php echo base_url()?>assets/img/logo.jpg">
				<h4> StartPlant </h4>
			</div>
			<div class="head">
				<h5>Welcome back!</h5>
				<h2>Login To Your Account</h2>
			</div>
			<form method="post" action= "<?= base_url('autentifikasi'); ?>">
				<div>
					<label>Email</label>
					<input type="text" name="email" id="email"> <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div>
					<label>Password</label>
					<input type="password" name="password" id="password" ><?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="remember">
					<input type="checkbox" name="remember" value="remember me">	Remember me<br>
				</div>
					<a href="#">Forgot password?</a>
				<div>
					<input type="submit" value="Login" class="tombol">
				</div>
					<center><p>Or Sign up with</p><center>
				<div class="fb">

					<a href="#"><img src="<?php echo base_url()?>assets/img/ffcc.png"></a>
					<a href="#"><img src="<?php echo base_url()?>assets/img/gml.png"></a>
				</div>
					<p> Dont have an account? <a href="<?php echo base_url(). 'autentifikasi/registrasi'?>"> Register now </p>
			</form>
		</div>
	</div>
</body>
</html>