<?php session_start();
    ob_start();
	require('db.php');
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<style>
.form {
  max-width: 500px;
  margin: auto;
}
.content {
  max-width: 500px;
  margin: auto;
}
body {
  background-image: url('bg.jpg');
}

</style> 
<div class="form">
<h1 style="color:white;">Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" class="btn btn-primary" type="submit" value="Login" />
</form>
<p style="color:white;">Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />

<h2 style="color:white;">Welcome To Al Redho Login System :D</a>
</div>
</body>
</html>
<?php } ?>