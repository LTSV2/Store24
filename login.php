<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Stroe24/7</title>
    <link rel="stylesheet" href="css/responsive-style.css">
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			
            <form action="authentication.php" onsubmit ="return validation()" method ="POST">  
				<h1>Login</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
				</div>
				<span>or use your account</span>
				<input type="text" id="user" name="user" placeholder="User Name" />
				<input type="password" id="pass"  name="pass" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<!-- <button>Log In</button> -->
                <input type="submit"  class="button"  value="Login" name="submit" ></div>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Good food choices are good investments.</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum amet leod.</p>
				</div>
			</div>
		</div>
	</div>

    <script src="js/login.js"></script>
</body>
</html>