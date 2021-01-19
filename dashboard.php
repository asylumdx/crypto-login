<?php

require('db.php');
include("auth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <div class="header">
  <h1>Dashboard</h1>
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


<br />
<div class="form">
<p style="color:white;">What're you searching for?</p>
<p><a href="index.php">Home</a></p>
<p><a href="view.php">Registered User List</a></p>
<a href="logout.php">Logout</a>

<form action="#" method="post">
    <label for="md5me"><p style="color:white;">Input The Text You Want To Encrypt With MD5:</p></label>
    <input name="md5me" id="md5me" type="text" />
    <input type="submit" value="Create MD5 Hash" />
</form>

<?php

//check if the form has been submitted
if(isset($_POST['md5me'])) {
	//MD5 encode the submitted content
    $md5ed = md5($_POST['md5me']);
    ?><p style="color:white;">MD5 Value: </a></p><?php echo "<p style='color:white;'>". $md5ed . "</p>";?><p style="color:white;"></p><?php
}

?>
 



<br/>
<p style="color:white;">For Decrypting M5 Hashes, We Recommend Using</a></p>
<p style="color:white;"><a href="https://crackstation.net/">CrackStation</a></p>
<p style="color:white;">
Or Using Brutefoce Tools Such As :
<p  style="color:white;"><a href="https://hashcat.net/hashcat/HashCat/">HashCat</a></p>
<p  style="color:white;"><a href="https://www.openwall.com/john/">JohnTheRipper</a></p>

</div>
</body>
</html>
