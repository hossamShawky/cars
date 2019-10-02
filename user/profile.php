<?php
session_start();
include '../include/nav.php';
$uid = $_SESSION['userid'];
if(isset($uid))
{
include '../include/connection.php';
 #echo "HELLO VISiTOR : ".$uid;
 
$sql = $con->prepare("SELECT * FROM users  WHERE id = $uid ");
$sql->execute();
$rows = $sql->fetch();
 
			////////////////////
echo "<div class='profile card text-center'>";

echo "<h2>". $rows['name'] ."</h2>"; 
echo "<img"."  src='../".$rows['image']."'/>";


echo "</div>";
//   echo $rows['name'];
 
//   echo $rows['id'];
//  echo  $rows['image'];

//  echo "<br>";

// echo "<img  src='../".$rows['image']."'/>";

 
 echo "<br>";
#print_r($rows); 

 }
?>

<?php
// session_start();
// include '../include/connection.php';
// include '../include/nav.php';
// $userid=$_SESSION['userid'];
//  echo $userid;
// $sql = $con->prepare("SELECT * FROM users WHERE id = $userid");
// $sql->execute();
// $rows= $sql->fetch();

// echo $rows['name']."<br>";
// echo $rows['email']."<br>";
// echo $rows['gender']."<br>";
// echo "<img style='width:120px;height:55px;' src='../images/".$rows['image']."'><br>";
 	 


// session_start();
//  include '../include/nav.php';
// $userid=$_SESSION['userid'];
//   echo $userid;

// $cdbimg = mysqli_connect('localhost','root','','cardb') or die("Sorry could not connect to database");
//   $select = " SELECT * FROM users ";
//   $query = mysqli_query($cdbimg,$select);
// $row = mysqli_fetch_array($query);

// echo $row['name']."<br>";
// echo $row['email']."<br>";
// echo $row['gender']."<br>";
 
//  echo "<img  src= ' " . $row['image'] ." ' height='80' width='150'  >";

  // while ($row = mysqli_fetch_array($query)) {
  // $i = $row['image'];

  //   echo "<img  src= '" . $i ." ' height='80'  >"; 
  //   echo "User Name : "  . $row['name'];
  //   echo "<br>";
  // }





?>
<!-- <img src= "<?php echo $i;  ?> " width="150"/>   --> 

<?php

include '../include/footer.php';
?>

<style type="text/css">
	.profile
	{
		
	}
.profile h2 
	{ 
 		display: inline;
	}  
	.profile img{
	text-align: center;
		width: 30%;
		height: 30%;
		border-radius: 50%;
	}

</style>