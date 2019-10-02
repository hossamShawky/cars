
<?php

include '../include/connection.php';
 $id = $_GET['uid'];
# echo $id;
$sql = " DELETE FROM users WHERE id = $id";
$con->exec($sql);
#echo "DELETED";
header("location:dashbord.php") ;
?>

 