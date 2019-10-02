<?php
session_start();
$bosadmin = $_SESSION['adminrole'];
include '../include/nav.php';
?>
<form method="post" action="insertcar.php" class="form media-body">

<input  class="form-control input-lg" type='text' name='name' placeholder='Car Name'>
<input  class="form-control input-lg"  type='text' name='model' placeholder='Model'>
<input  class="form-control input-lg"  type="file" name="image" value="image">
<input  class="form-control input-lg"  type='text' name='price' placeholder='Price'>
<input  class="form-control input-lg"  type='text' name='discount' placeholder='Discount'>

<textarea class="form-control input-lg" name="reveiw" placeholder="Review"></textarea>

 
 <?php
 /*
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

*/
 ?>


<input  class="form-control input-lg btn-primary"  type="submit" value="Regist">

</form>

 


<style type="text/css">
	input[type='text'],
	input[type='submit'],
	input[type='file'],
	input[name='reveiw']
	{
 width:350px;  margin: 0 auto; 
	}
.form textarea{
	 height: 100px; 
	 width: 150px;
	 resize: none;
		}
</style>


  <?php

include '../include/footer.php';
  ?>