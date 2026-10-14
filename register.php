<?php
include "db.php";
if(isset($_POST['register']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$hash=password_hash($password,PASSWORD_DEFAULT);
	mysqli_query($conn,"insert into users(username,password) values('$username','$hash')");
	
}
?>
<h2>Register</h2>
<form method="post">
Username:
	<input type="text" name="username"><br>
Password:
	<input type="password" name="password"><br>

	<input type="submit" name="register" value="register"><br>
	<?php echo "Registration Successful";?>
	<a href="login.php">go to login</a>
</form>
