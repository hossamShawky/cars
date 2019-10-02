<?php

// check for form request method
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
	// check for uploaded file
	if(isset($_FILES['image']))
	{
		// file name, type, size, temporary name
		$file_name = $_FILES['image']['name'];
		$file_type = $_FILES['image']['type'];
		$file_tmp_name = $_FILES['image']['tmp_name'];
		$file_size = $_FILES['image']['size'];
 
		// target directory
		$target_dir = "images/";
	
		// uploding file
		if(move_uploaded_file($file_tmp_name,$target_dir.$file_name))
		{
			// connect to database
			$cdb = mysqli_connect('localhost','root','','cardb') or die("Sorry could not connect to database");
				$st = ""  .$target_dir.$file_name . "";	
			// query
			 $q = "INSERT INTO users(name,email,password,image,gender)
			                VALUES('$name', '$email', '$password', '$st', '$gender' )";
			
			// run query
			$r = mysqli_query($cdb,$q);
			
			if(mysqli_affected_rows($cdb) == 1)
			{
				#echo "<p style='color:green'><b>File has been successfully uploaded</b></p>";
				header("location:index.php");
			}
			else
			{
			echo "<p>A system error has been occured</p>".mysqli_error($cdb);
			}
		}
		else
		{
			echo "File can not be uploaded";
		}
	}




//To SHOW IMAGE
//  $cdbimg = mysqli_connect('localhost','root','','cardb') or die("Sorry could not connect to database");
// $select = " SELECT * FROM users";
// $query = mysqli_query($cdbimg,$select);

// while ($row = mysqli_fetch_array($query)) {
//  $i = $row['image'];

//   echo "<img  src= ' " . $i ." ' height='80'  >"; 
//   echo "User Name : "  . $row['name'];
//}


 
}
?>


	