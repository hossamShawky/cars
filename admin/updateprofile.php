<?php
session_start();
$bosadmin = $_SESSION['adminrole'];
$uid = $_GET['uid']; 
include '../include/nav.php';
include '../include/connection.php';

$sql = $con->prepare("SELECT * FROM users WHERE id = $uid");
$sql->execute();
$row = $sql->fetch();
?>
<form method="post" action="checkupdateprofile.php" class="form media-body">
<input  class="form-control input-lg" value="<?php  echo $row['id'] ?>" type='hidden' name='id' placeholder='username'>
<input  class="form-control input-lg" value="<?php  echo $row['name'] ?>" type='text' name='name' placeholder='username'>
<input  class="form-control input-lg" value="<?php  echo $row['email'] ?>"  type='email' name='email' placeholder='E-Mail'>
<input  class="form-control input-lg" value="<?php  echo $row['password'] ?>" type='password' name='password' placeholder='password'>
 
 <input  class="form-control input-lg" value="<?php  echo $row['image'] ?>"  type="file" name="image" value="image">

<select class="form-control input-lg text-center gender" value="<?php  echo $row['gender'] ?>" name="gender" class="gender">
	<option>Male</option>
	<option>Female</option>

</select>

 <!--<input  class="form-control input-lg"  type='text' name='role' placeholder='role'>  -->

 <?php
if($bosadmin == 2) {

	echo "
	<select name='role'  class='form-control input-lg role'>
 	<option>0</option>
	<option>1</option>
	<option>2</option>
 	</select>
 ";

}

else {
 	echo "
	<select name='role' class='form-control input-lg role'>
 	<option>0</option>
	<option>1</option>
 	</select>
 ";
 }



 ?>


<input  class="form-control input-lg btn-primary"  type="submit" value="Regist">

</form>

 


<style type="text/css">
	input[type='text'],
	input[type='password'],
	input[type='submit'],
	input[type='email'],
	input[type='file'],
	.role,
	.gender 
	{
 width:350px;  margin: 0 auto; 
	}
.form{
	  

}
</style>


  <?php

include '../include/footer.php';
  ?>