<?php

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>SignUp Page</title>
        <meta name="description" content="jobs Hunters">
        <meta charset="utf-8" >
        <meta name="author" content="Andrew emad and George Nabil and Ahmed Samir" >
        <meta name="keywords" content="jobs" >
        <meta name="viewport" content="width=device-width,initial-scale=1.0" >
        <!--Bootsrap 4 CDN-->
	     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--Fontawesome CDN-->
	     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Register.css">
        <script>
        function validateForm() {
        var x = document.forms["myform"]["Email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
         if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
             alert("Not a valid e-mail address");
             return false;
            }
        var phone=document.forms["myform"]["phone"].value;
        if(phone.length!=11)
        {
            alert("Not a valid phone number");
            return false;
        }
        var pass=document.forms["myform"]["psw"].value;
        if(pass.length<5)
        {
            alert("Not a valid password, More Than 5");
            return false;
        }
        }
    </script>
    </head>

    <body>
    <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><a href="./classes/gmail.php" class="gmail"><i class="fab fa-google-plus-square"></i></a></span>

				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="./classes/regProcess.php" onsubmit="return validateForm()">
                    <div class="input-group form-group">
						<input type="text" name="FName" class="form-control" placeholder="First Name"required>
					</div>
          <div class="input-group form-group">
  <input type="text" name="LName" class="form-control" placeholder="Last Name"required>
</div>
                    <div class="input-group form-group">
						<input type="text" name="age" class="form-control" placeholder="Age"required>
					</div>
                    <div class="input-group form-group">
						<input type="text" name="Email" class="form-control" placeholder="Email" required>
					</div>
					<div class="input-group form-group">
						<input type="password" name="psw" class="form-control" placeholder="Password"required>
					</div>
                    <div class="input-group form-group">
						<input type="text" name="phone" class="form-control" placeholder="Phone"required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="SignUp" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Do have an account?<a href="http://localhost/test/swe/PersonLogIn/Login.php">LogIn</a>
				</div>
			    </div>
		    </div>
	    </div>
	</div>

    </body>
</html>
