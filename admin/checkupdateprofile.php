<?php
session_start();
include '../include/connection.php';
 include '../include/nav.php';

$uid = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$role = $_POST['role'];

#echo ($gender);

 //  $sql = "UPDATE users SET   name = '$name', password = '$password', email='$email',gender='$gender',role='$role' WHERE id ='$uid'";

 // $con->exec($sql);
 //  header("location:dashbord.php");



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
			$q = "UPDATE  users SET name = '$name',email='$email',password='$password',image='$st',gender='$gender' WHERE id ='$uid";
			
			// run query
			$r = mysqli_query($cdb,$q);
			
			if(mysqli_affected_rows($cdb) == 1)
			{
				#echo "<p style='color:green'><b>File has been successfully uploaded</b></p>";
				header("location:dashbord.php");
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





?>

<?php include '../include/footer.php'; 
?>