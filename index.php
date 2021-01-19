<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<div class="header">
  <h1>Home</h1>
</div> 
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
.header {
  padding: 10;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
.form {
  max-width: 500px;
  margin: auto;
}
body {
  background-image: url('bg.jpg');
}
</style> 

<div class="form">
<p style="color:white;">Welcome <?php echo $_SESSION['username']; ?>!</p>
<p style="color:white;">This is the Al-Redho Login System.</p>
<p style="color:white;"><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />

</div>
</body>
</html>
