<?php
include "db.php";
if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	mysqli_query($conn,"delete from products where id='$id';");
}
?>
<h2>Product List</h2>
<?php
$result=mysqli_query($conn,"select * from products;");
while($row=mysqli_fetch_assoc($result)){
	echo "Product:".$row['name']."<br>";
	echo "Price:".$row['price']."<br>";
	
	echo "<a href='products.php?delete=".$row['id']."'>Delete</a>";
	echo "<hr>";
}
?>
