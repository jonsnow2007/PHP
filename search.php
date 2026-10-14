<?php
include "db.php";
?>
<h2>Search Student</h2>
<form method="post">
	<input type="text" name="name" placeholder="enter student name">
	<input type="submit" name="search" value="search">
</form>
<?php
if(isset($_POST['search'])){
	$name=$_POST['name'];
	$result=mysqli_query($conn,"select * from students where name like '%$name%'");
	
	while($row=mysqli_fetch_assoc($result)){
		echo "ID:".$row['id']."<br>";
		echo "Name:".$row['name']."<br>";
		echo "Email:".$row['email']."<br>";
		echo "Course:".$row['course']."<br>";
	}

}
?>
