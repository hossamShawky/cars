<?php 
session_start();
include 'include/nav.php';
include 'include/connection.php';

$sql = $con->prepare("SELECT * FROM cars");
$sql->execute();
$rows = $sql->fetchAll();

echo "<h1 class='text-center'>Products</h1>";
echo "<table class='table'>";
echo "<thead>

	<th>Car</th>
	<th>Model</th>
	<th>Image</th>
	<th>Review</th>
	<th>Price</th>
	<th>Discount</th>
	<th>BUY NOW</th>
	 
  </thead>";
echo "<tbody>";
foreach ($rows as $car) {
	 echo "<tr>";


echo "<td>".$car['name']."</td>";
echo "<td>".$car['model']."</td>";
echo "<td>".$car['image']."</td>";
echo "<td>".$car['reveiw']."</td>";
echo "<td>".$car['price']."</td>";
echo "<td>".$car['discount']."</td>";
echo "<td> <a href='' class='btn btn-success'>  BUY </td>";

	 echo "</tr>";
}

echo "</tbody>";
echo "<tfoot>

	<th>Car</th>
	<th>Model</th>
	<th>Image</th>
	<th>Review</th>
	<th>Price</th>
	<th>Discount</th>
	<th>BUY NOW</th>
	 
  </tfoot>";

echo "</table>";



?>









<?php 
 
include 'include/footer.php';
 
?>