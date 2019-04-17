<html>
<head>
	<title>Company Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
</style>
</head>
	<body>
		<div class="container">
			<h2>Company Sign-up page</h2>
			<form action="register_user.php" method="post">
			<div class="form-group">
			<input type="text" name="Name" placeholder="Company's Name" required>
			</div>
			
			<div class="form-group">
			<input type="text" name="Username" placeholder="Company's Username" required><br>
			</div>
			
			<div class="form-group">
			<input type="email" name="Email" placeholder="Company's Email"required><br>
			</div>
			
			<div class="form-group">
			<input type="password" name="Password" placeholder="Password"required>
			</div>
			
			<div class="form-group">
			<input type="password" name="Password2" placeholder="Confirm password" required><br>	
			</div>
			
			<div class="form-group">
			<input type="number" name="NumOfEmployees" placeholder="Number of Employees" required><br>
			</div>
			
            <div class="form-group">
			<input type="text" name="Location" placeholder="Location" required><br>
			</div>
			
			
			<div class="form-group">
			<input type="text" name="InterestFields_1" placeholder="field of interests(1)"><br>
			<input type="text" name="InterestFields_2" placeholder="field of interests(2)"><br>
			<input type="text" name="InterestFields_3" placeholder="field of interests(3)"><br>
			<input type="text" name="InterestFields_4" placeholder="field of interests(4)"><br>
			<input type="text" name="InterestFields_5" placeholder="field of interests(5)"><br>
			</div>
			<input type="checkbox" required>I agree to the terms of use<br>
			<input type="submit" value="Sign up">
			
			</form>
		</div>
	</body>
</html>