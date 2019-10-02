<?php
session_start();
$bosadmin = $_SESSION['adminrole'];
include '../include/nav.php';
?>
<form method="post" action="insertprofile.php" class="form media-body">

<input  class="form-control input-lg" type='text' name='name' placeholder='username'>
<input  class="form-control input-lg"  type='text' name='email' placeholder='E-Mail'>
<input  class="form-control input-lg" type='password' name='password' placeholder='password'>
 
 <input  class="form-control input-lg"  type="file" name="image" value="image">

<select class="form-control input-lg text-center gender" name="gender" class="gender">
	<option>Male</option>
	<option>Female</option>

</select>

 <!--<input  class="form-control input-lg"  type='text' name='role' placeholder='role'>  -->

 <?php
if($bosadmin == 2) {

	echo "
	<select name='role' class='form-control input-lg role'>
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