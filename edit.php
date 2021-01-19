<?php
require('db.php');
include("auth.php");
$id =$_REQUEST['id'];
$query = "SELECT * from users where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<div class="header">
  <h1>Edit User</h1>
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
<p><a href="dashboard.php">Dashboard</a> 
| <a href="logout.php">Logout</a></p>
| <a href="view.php">View Records</a> 
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$username =$_REQUEST['username'];
$email =$_REQUEST['email'];
$password =$_REQUEST['password'];
$update="update users set username='".$username."', email='".$email."', password='".md5($password)."'where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="username" placeholder="Enter Username" 
required value="<?php echo $row['username'];?>" /></p>
<p><input type="email" name="email" placeholder="Enter Email" 
required value="<?php echo $row['email'];?>" /></p>
<p><input type="password" name="password" placeholder="Enter Password" 
required value="<?php echo $row['password'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>