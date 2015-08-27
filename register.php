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
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>App Testing</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form method="post">
			<h1>Registration Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username" />
			</div>
			<div>
				<input type="text" placeholder="Full Name" required="" id="fullname" name="fullname"/>
			</div>
			<div>
				<input type="email" placeholder="Email Address" required="" id="email" name="email" />
			</div>
			<div>
				<input type="number" placeholder="Phone Number" required="" id="phoneNumber" name="phoneNumber" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="password" />
			</div>
			<!--<div>
				<input type="text" placeholder="Confirm Password" required="" id="confirmPassword" />
			</div> -->
			<div>
				<select name="category" required="" >
					<option value="Category" disabled selected>Select Category</option>
					<option value="0">Superadmin</option>
					<option value="1">Master</option>
					<option value="2">Cashier</option>
					<option value="3">Player</option>
				</select>
			</div>
			<div>
				<input type="submit" value="Register" name="submit" />
				<input type="reset" value="Reset" />
				<a href="index.php">Main Page</a>
			</div>
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
