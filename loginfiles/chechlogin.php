<?php
session_start();
include '../include/connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = $con->prepare("SELECT * FROM users WHERE name = ? AND password = ?");

$sql->execute(array($username,$password));
$row = $sql->fetch();
$count = $sql->rowCount();

if(($count >0 && $row['role'] == 1) || ($count >0 && $row['role'] == 2)) #Admin
{
$_SESSION['adminid'] = $row['id'];	
$_SESSION['adminrole'] = $row['role'];		#session oF Admin

header("location:../admin/dashbord.php");
}

elseif($count >0 && $row['role'] == 0) #USER
{
$_SESSION['userid'] = $row['id'];
 		#session oF user

header("location:../user/profile.php");
}

 else
 {
 	header("location:login.php");
 }
 