<?php
include "db.php";
if(isset($_POST['add']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$course=$_POST['course'];
	
	mysqli_query($conn,"insert into students(name,email,course) values('$name','$email','$course')");
}
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$course=$_POST['course'];

	mysqli_query($conn,"update students set name='$name',email='$email',course='$course' where id='$id'");
}
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	mysqli_query($conn,"delete from students where id=$id");
}
?>
<h2>Add Student</h2>
<form method="post">
Name:
	<input type="text" name="name"><br>
Email:
	<input type="email" name="email"><br>
Course:
	<input type="text" name="course"><br>
	
	<input type="submit" name="add" value="Add">
</form>
<h2>Update Student</h2>
<form method="post">
ID:
<input type="number" name="id"><br>
Name:
<input type="text" name="name"><br>
Email:
<input type="email" name="email"><br>
Course:
<input type="text" name="course"><br>

<input type="submit" name="update" value="update">
</form>
<h2>Students Record</h2>
<?php
$result=mysqli_query($conn,"select * from students");
while($row=mysqli_fetch_assoc($result))
{
	echo $row['id']."-";
	echo $row['name']."-";
	echo $row['email']."-";
	echo $row['course']." ";
	
	echo "<a href='crud.php?delete=".$row['id']."'>Delete</a>";
	echo "<hr>";
}
?>


