<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/register.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<title>REGISTRASI</title>
</head>
<body>
	<div class= "main_container">
		<div class="str">
			<div class="logo">
				<img src="<?php echo base_url()?>assets/img/vector 2.png">
			</div>
			<h2> StartPlant</h2>
		</div>
	</div>
	<div class="sgn">
			<a class="sgin" href="#">SIGN IN</a> 
			<a class="sgup" href="#">SIGN UP</a>
	</div>	
	<div class="tengah" >
	 	<div class="ss">
			<form method="post" >	
				<label>Full Name</label>
				<input type="text" class="input"placeholder="Name"><br>
				<label>Email</label>
				<input type="text" class="input" placeholder="Email"><br>
				<label>Password</label>
				<input type="password" class="input" placeholder="Password"><br>			
				<div class = "btn">
					<button type="submit" class="btn-sgu">SIGN UP</button>
				</div>
			</form>
		</div>
		<div class = "sm">
			<h3>OR SIGN UP VIA</h3>
			<div class ="fb">
				<img src="<?php echo base_url()?>assets/img/f.png">
				<a href ="#">FACEBOOK</a>
			</div>
			<div class ="gg">
				<img src="<?php echo base_url()?>assets/img/G.png">
				<a href="#">GOOGLE</a>
			</div>
			<div class = "gmt">
				<img src="<?php echo base_url()?>assets/img/plant.png">
				<P>By clicking sign up you<br> agree 
				to the Terms and <br>
				Condition</P>
			</div> 
		</div>

	</div>
			
		
	</div>
</body>
</html>