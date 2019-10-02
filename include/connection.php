<?php

$dns="mysql:host=localhost;dbname=cardb";
$username="root";
$password="";


try{
	$con = new PDO($dns,$username,$password);
 	 $q1="SET NAMES utf8";
 	 $q2="character SET utf8";
 	  $con->exec($q1);
 	  $con->exec($q2);
 	  
 #echo "Done"; 
}
catch (PDOException $e){
 
 echo $e->getMessage();
}



?>

