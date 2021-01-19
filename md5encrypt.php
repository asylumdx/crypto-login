
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
