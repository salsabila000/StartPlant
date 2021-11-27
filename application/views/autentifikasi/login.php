<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="bo">
		<div class="gmbr">
			<img src="image/gambar1.png" alt="">
		</div>
		<div class="login">
			<div class="logo">
				<img src='image/logo.jpg'>
				<h4> StartPlant </h4>
			</div>
			<div class="head">
				<h5>Welcome back!</h5>
				<h2>Login To Your Account</h2>
			</div>
			<form action="login.php" method="post" onSubmit="return validasi()">
				<div>
					<label>Email:</label>
					<input type="text" name="email" id="email" />
				</div>
				<div>
					<label>Password:</label>
					<input type="password" name="password" id="password" />
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
					<a href="#"><img src='image/fb.jpg'></a>
					<a href="#"><img src='image/google.jpg'></a>
				</div>
					<p> Dont have an account? <a href="#"> Register now </p>
			</form>
		</div>
		
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (email != "" && password!="") {
			return true;
		}else{
			alert('Email dan Password harus di isi !');
			return false;
		}
	}
 
</script>

</html>