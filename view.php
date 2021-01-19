<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

 <div class="header">
  <h1>User Records</h1>
</div> 
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
.form {
  max-width: 500px;
  margin: auto;
}
.header {
  padding: 10;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
body {
  background-image: url('bg.jpg');
}
</style> 
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="logout.php">Logout</a></p>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th style="color:white;"><strong>ID</strong></th>
<th style="color:white;"><strong>Username</strong></th>
<th style="color:white;"><strong>Email</strong></th>
<th style="color:white;"><strong>Password(MD5)</strong></th>
<th style="color:white;"><strong>Edit</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from users ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr style="color:white;"><td align="center"><?php echo $count; ?></td>
<td style="color:white;"align="center"><?php echo $row["username"]; ?></td>
<td style="color:white;"align="center"><?php echo $row["email"]; ?></td>
<td style="color:white;"align="center"><?php echo $row["password"]; ?></td>
<td style="color:white;"align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td style="color:white;"align="center">

</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>