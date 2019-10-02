
<?php
include 'include/nav.php';
?>
<form method="post" action="insert.php" class="form media-body" enctype="multipart/form-data">

<input  class="form-control input-lg" type='text' name='name' placeholder='username'>
<input  class="form-control input-lg"  type='text' name='email' placeholder='E-Mail'>
<input  class="form-control input-lg" type='password' name='password' placeholder='password'>
 
 <input  class="form-control input-lg" accept="image/*"  type="file" name="image" value="image">

<select class="form-control input-lg text-center gender"    name="gender" class="gender">
	<option>Male</option>
	<option>Female</option>

</select>
 
<input  class="form-control input-lg btn-primary"  type="submit" value="Regist">

</form>

 
<style type="text/css">
	input[type='text'],
	input[type='password'],
	input[type='submit'],
	input[type='email'],
	input[type='file'],
	.gender 
	{
 width:350px;  margin: 0 auto; 
	}
.form{
	  

}
</style>