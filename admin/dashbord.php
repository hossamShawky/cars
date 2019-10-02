<script>
function showconfirm(uid)
{
/*

    var res=confirm("are you sure");
    if (res == true)
        //delete.php?uid=$row[id]
        {
     window.location="delete.php?uid=uid";
    window.location="dashbord.php";}
    else
        {window.location="dashbord.php";
    		alert('NO');
		}
*/
}
</script>

<?php
session_start();
if(isset($_SESSION['adminid']))
{

include '../include/connection.php';
include '../include/nav.php';

#echo "HELLO : ".$_SESSION['adminid'];
//////////////////

$sql = $con->prepare("SELECT * FROM users");
$sql->execute();
$rows = $sql->fetchAll();
$count = $sql->rowCount();
if($count>0 && $_SESSION['adminrole'] == 2){			#Boss Admin
echo "
<table class='table'>
<thead>
	<th>User Name</th>
	<th>E-mail</th>
	<th>Image</th>
	<th>Gender<h>
	<th>Role</th>
	<th>Update</th>
	<th>Delete</th>

</thead>

<tbody> ";
foreach($rows as $row)
{      

echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
#echo "<td><img style='width:120px;height:55px;' src='../images/me1.jpg'></td>";
echo "<td><img style='width:120px;height:55px; ' src='../". $row['image'] . "'></td> ";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['role']."</td>";
echo "<td>"."<a class='btn btn-success' href='updateprofile.php?uid=$row[id]'>Update</a></td>";
echo "<td>"."<a  onclick=showconfirm($row[id])  class='btn btn-danger' href='deleteprofile.php?uid=$row[id]'>Delete</a></td> </tr> ";
}
echo "</tbody>";
echo "
<tfoot>
	<th>User Name</th>
	<th>E-mail</th>
	<th>Image</th>
	<th>Gender<h>
	<th>Role</th>
	<th>Update</th>
	<th>Delete</th>

</tfoot>
</table>";

echo "<a href='registprofile.php'  class='btn btn-success'>Add User</a>";
echo "<a href='addcar.php'  class='btn btn-success'>Add Car</a>";


}
elseif($count>0 && $_SESSION['adminrole'] == 1){		#Normal Admin
echo "
<table class='table'>
<thead>
	<th>User Name</th>
	<th>E-mail</th>
	<th>Image</th> 

</thead>

<tbody> ";
foreach($rows as $row)
{

echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
#echo "<td>".$row['image']."</td>"; 
// class='img-thumbnail  img-rounded img-circle img-responsive' 
echo "<td><img style='width:100px;height:30px;' src='../images/me1.jpg'></td>";
}
echo "</tbody>";
echo "
<tfoot>
	<th>User Name</th>
	<th>E-mail</th>
	<th>Image</th> 

</tfoot>
</table>
";


}

else
{
	echo "<h2 style='color:red'>NO Data Found!</h2>";
}

}
?>



<?php
include '../include/footer.php';
/*


echo "<td>"."<a href='updateuser.php?user_id=$row[user_id]'>تحديث</a>"."</td>";
echo "<td>"."<a href='deleteuser.php?id=$row[user_id]'>حذف</a>"."</td></tr>"; 

*/
 