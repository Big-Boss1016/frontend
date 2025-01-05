<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="csss/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

</head>
<body>
<div class="main">
		<div class="navbar">
		<a href="../index.php"><h2 class="logo">KDU Alumni</h2></a>
			<ul>
				<li><a href="../index.php">Home</a></li>
	
				
			</ul>
			
		</div>
	<div class="uni">
		<p class="unam">KDU Alumni</p>
		<p class="dpt">Member Log in</p>
		
	</div>
	<div class="log_frm">
		<h1> Login</h1>
		<form action="logpro.php" method="POST">
			<div class="input-group">
				<input type="email" name="email" placeholder="email" required>
				<input type="password" name="password" placeholder="Password" required>			
			</div>	
			<div class="sign_btn">
				<button type="submit" name="log_btn">Log In</button>
			</div>
			<div class="forget_pass">
				<a href="#">Forget password?</a>
			</div>
			<div class="member">
			Not Registered Yet? <a href="signup.php">Sing UP</a>
		</div>	
		</form> 
		
	</div>
</div>
</body>
</html>