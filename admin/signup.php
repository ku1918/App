<?php
session_start();
include_once '../dbconnect.php';

if(isset($_POST['submit']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $fullname = mysql_real_escape_string($_POST['fullname']);
 $email = mysql_real_escape_string($_POST['email']);
 $phoneNumber = mysql_real_escape_string($_POST['phoneNumber']);
 $category = mysql_real_escape_string($_POST['category']);
 $password = md5(mysql_real_escape_string($_POST['password']));

 if(mysql_query("INSERT INTO users(username,fullname,email,phoneNumber,category,password) VALUES('$username','$fullname','$email','$phoneNumber','$category','$password')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>App Testing</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- styles -->
<link href="css/styles.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body class="login-bg">
<div class="header">
     <div class="container">
	<div class="row">
	   <div class="col-md-12">
	      <!-- Logo -->
	      <div class="logo">
		 <h1><a href="login.php">Admin Test Portal</a></h1>
	      </div>
	   </div>
	</div>
     </div>
</div>

<div class="page-content container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-wrapper">
			<div class="box">
			    <div class="content-wrap">
				<h6>Sign Up</h6>
		<form method="post" action"..." onsubmit="return checkForm(this);">
		<div>
			<input type="text" class="form-control" placeholder="Username" required="" id="username" name="username" />
		</div>
		<div>
			<input type="text" class="form-control" placeholder="Full Name" required="" id="fullname" name="fullname"/>
		</div>
		<div>
			<input type="email" class="form-control" placeholder="Email Address" id="email" name="email" />
		</div>
		<div>
			<input type="tel" pattern='\d{10}' class="form-control" placeholder="Phone Number (0121234567)" required="" id="phoneNumber" name="phoneNumber" />
		</div>
		<div>
			<input type="password" title="Password must contain at least 6 character" pattern=".{6,}" class="form-control" placeholder="Password" required="" id="password" name="password" onchange="form.confirmPassword.pattern = this.value;" /> 
		</div>
			<input type="password" title="Please enter the same Password as above" class="form-control" placeholder="Confirm Password" pattern=".{6,}" required="" id="confirmPassword" />
		</div> 
		<div>
			<select name="category" required="" >
				<option value="Category" disabled selected>Select Category</option>
				<option value="0">Superadmin</option>
				<option value="1">Master</option>
				<option value="2">Cashier</option>
				<option value="3">Player</option>
			</select>
		</div>
			<!--        <input class="form-control" type="text" placeholder="E-mail address">
				<input class="form-control" type="password" placeholder="Password">
				<input class="form-control" type="password" placeholder="Confirm Password"> -->
				<div class="action">
				    <input class="btn btn-primary signup" type="submit" value="Sign Up" name="submit" >
				</div>                
			    </div>
			</div>

			<div class="already">
			    <p>Have an account already?</p>
			    <a href="login.php">Login</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>
		</form>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
