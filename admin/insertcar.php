<?php #include '../include/nav.php'; 
?>


<?php
// print_r($_POST);	
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_POST['name'];
$email = $_POST['model']; 
$price = $_POST['price'];
$discount = $_POST['discount'];
$reveiw = $_POST['reveiw'];
	// check for uploaded file
if(isset($_FILES['image']))
	{
		// file name, type, size, temporary name
		$file_name = $_FILES['image']['name'];
		$file_type = $_FILES['image']['type'];
		$file_tmp_name = $_FILES['image']['tmp_name'];
		$file_size = $_FILES['image']['size'];
 
		// target directory
		$target_dir = "cars/";
	
		// uploding file
if(move_uploaded_file($file_tmp_name,$target_dir.$file_name))
		{
			// connect to database
			$cdb = mysqli_connect('localhost','root','','cardb') or die("Sorry could not connect to database");	
				$st = ""  .$target_dir.$file_name . "";	
			// query
			$q = "INSERT INTO cars(name,model,price,discount,reveiw,image)
			     VALUES('$name', '$model', '$price','$discount','$reveiw', '$st' )";
			
			// run query
			$r = mysqli_query($cdb,$q);
 
			if(mysqli_affected_rows($cdb) == 1)
			{
				echo "<p style='color:green'><b>File has been successfully uploaded</b></p>";
				#header("location:index.php");
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

}



// session_start();
// include '../include/connection.php';
//  include '../include/nav.php';
//  $name = $_POST['name'];
// $email = $_POST['model']; 
// $price = $_POST['price'];
// $discount = $_POST['discount'];
// $reveiw = $_POST['reveiw'];

// 	$sql = "INSERT INTO cars (name,model,price,discount,reveiw) 
// 			VALUES ('$name','$model','$price','$discount','$reveiw')";

// $con->exec($sql);
//  header("location:dashbord.php");

?>

<?php
# include '../include/footer.php'; 
?>
