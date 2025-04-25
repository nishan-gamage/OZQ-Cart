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

<?php
  session_start();
?>

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
			<input type="text" placeholder="First Name" />
      <input type="text" placeholder="First Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
      <input type="text" placeholder="Mobile" />
			<input type="submit" class="button" value="register" name="register_btn" />
 
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



    <script src="app.js"></script>
     <!-- add jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#login-form').submit(function(e) {
          e.preventDefault(); // Prevent the default form submission

          var email = $('input[name="email"]').val();
          var password = $('input[name="password"]').val();

          $.ajax({
            type: 'POST',
            url: 'login_submit.php',
            data: {
              email: email,
              password: password
            },
            success: function(response) {
              if(response == "valid"){
                
                Toastify({
                  text: "Login Success",
                  backgroundColor: "green",
                  duration: 1000, 
                  gravity: "top", 
                  close: true, 
                  stopOnFocus: true
                }).showToast()
                
                setTimeout(()=>{
                  window.location.href = '../index.php';
                },1500)
              
              }

              if(response == "invalid"){

                Toastify({
                  text: "Email or Password Invalid",
                  backgroundColor: "red",
                  duration: 1000, 
                  gravity: "top", 
                  close: true, 
                  stopOnFocus: true
                }).showToast()
              }
            },
            error: function(error) {
              Toastify({
                  text: "Login Failed",
                  backgroundColor: "red",
                  duration: 1000, 
                  gravity: "top", 
                  close: true, 
                  stopOnFocus: true
                }).showToast()
            }
          });
        });
      });
    </script>

  <script>
  $(document).ready(function() {
    $('#registration-form').submit(function(e) {
      e.preventDefault(); // Prevent the default form submission

      var fname = $('input[name="fname"]').val();
      var lname = $('input[name="lname"]').val();
      var email = $('input[name="email2"]').val(); 
      var password = $('input[name="password2"]').val(); 
      var mobile = $('input[name="mobile"]').val();

      $.ajax({
        type: 'POST',
        url: 'register_submit.php',
        data: {
          fname: fname,
          lname: lname,
          email: email,
          password: password,
          mobile: mobile
        },
        success: function(response) {
          // Handle the response from the server here
          if(response == "success"){
            Toastify({
                  text: "Registered Successfully",
                  backgroundColor: "green",
                  duration: 1000, 
                  gravity: "top", 
                  close: true, 
                  stopOnFocus: true
                }).showToast()

                setTimeout(()=>{
                  window.location.href = '../index.php';
                },1500)
          } 

          if(response == "alreadyExit"){
            Toastify({
                  text: "Email was Already Exit",
                  backgroundColor: "red",
                  duration: 1000, 
                  gravity: "top", 
                  close: true, 
                  stopOnFocus: true
                }).showToast()
          }

          if(response == "error"){
            Toastify({
                  text: "Something Went wrong",
                  backgroundColor: "red",
                  duration: 1000, 
                  gravity: "top", 
                  close: true, 
                  stopOnFocus: true
                }).showToast()

                setTimeout(()=>{
                  window.location.href = '../index.php';
                },1500)
          }
        },
        error: function(error) {
          console.error('Registration failed');
        }
      });
    });
  });
  </script>
  
</body>
</html>