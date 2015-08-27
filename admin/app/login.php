<?PHP
$host = "localhost"; //put your host here
$user = "root"; //in general is root
$dbpassword = "mighty"; //use your password here
$dbname = "app"; //your database
mysql_connect($host, $user, $dbpassword) or die("Cant connect into database");//connects to the mysql table with those credentials.
mysql_select_db($dbname)or die("Cant connect into database");//and selects the database you wrote $dbname. or kills the php script if it cant connect.

$username = mysql_real_escape_string($_POST['username']);//takes the username inputted from the wwwform.
$password = mysql_real_escape_string($_POST['password']);//takes the password inputed from the wwwform.
$password_md5=md5($password);

$data = mysql_query("SELECT * FROM users WHERE username ='".$username."' AND password = '".$password_md5."'");//selects all the information where the user and pass = the data you inputted.
$usercheck = mysql_num_rows($data);//generates a value of rows with the username and password credentials you inputted.
	if($usercheck == 1){ // if there is 1 row of data, then you are successfully logged in.
		die("Login success! Please wait while the game loads...");//kills the rest of the script... its practically pointless if you are successful in logging in.
	}else{//if there is no row with the inputted username or password together, then it will not let you login.
		die("The username or password is invalid.");//kills the script because you inputted the wrong user/password.
	}
?>
