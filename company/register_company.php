<html>
<head>
    <title>Userlogin&Registration</title>
    <link rel="stylesheet" type="text/css" href="/opt/lampp/htdocs/test/swe/company/style.css">
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
     <div class="login-box">
     <div class="row">
       <div class="col-md-6">
         <h2>Login Here<h2>
         <form action="validation.php" method="post">
           <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-conrol" required>
           </div>
           <div class="form-group">
              <label>password</label>
              <input type="password" name="password" class="form-conrol" required>
           </div>
           <button type="submit" class="btn btn-primary">Login</button>
       </div>
       <div class="col-md-6">
         <h2>Register Here<h2>
         <form action="registeration.php" method="post">
           <div class="form-group">
              <h3>Companyname</la>
              <input type="text" name="Cname" class="form-conrol" required>
           </div>

           <div class="form-group">
              <label>password</label>
              <input type="password" name="password" class="form-conrol" required>
           </div>
           <button type="submit" class="btn btn-primary">Register</button>
         </form>
       </div>
     </div>
    </div>
   </div>
</body>
</html>
