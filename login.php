<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OZQ Cart/Login</title>

	  <!--icon-->
  <link rel="shortcut icon" href="./assets/images/logo/logoicon.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="login.css">

	  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">


</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="https://m.facebook.com/nishan.gamage.3998?wtsid=rdr_0VEJr9lAHDWV1BSqf" class="social">
					<i class="fab fa-facebook-f"></i></a>
				<a href="https://twitter.com/NishanGamage5" class="social">
					<i class="fab fa-google-plus-g"></i></a>
				<a href="https://linkedin.com/in/nishangamage" class="social">
					<i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Follow us on</span>
			<input type="email" placeholder="Email" id="email" />
			<input type="password" placeholder="Password" id="password" />
			<a href="forgot.php">Forgot your password?</a>
			<button type="submit" onclick="auth()">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello</h1>
				<p>Enter your personal details</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>




<script type="text/javascript" src="login.js">
</script>
  <script>
    function auth(){
      var email=document.getElementsById('email').value;
      var password=document.getElementsById('password').value;

      //condition

      if (email=='admin@gmail.com' && password==12345) {
      	window.location.assign('index.html');

      }

      else{
      	alert("Invalid Information");
      	return;
      }
    }
  </script>
</body>
</html>