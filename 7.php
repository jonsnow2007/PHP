<?php
include "db.php";

/* Create */
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "INSERT INTO students(name,email,course)
                         VALUES('$name','$email','$course')");
}

/* Delete */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM students WHERE id=$id");
}

/* Update */
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "UPDATE students SET
        name='$name', email='$email', course='$course'
        WHERE id=$id");
}
?>

<h2>Add Student</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Course: <input type="text" name="course"><br><br>
    <input type="submit" name="add" value="Add Student">
</form>

<h2>Student Records</h2>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . " - ";
    echo $row['name'] . " - ";
    echo $row['email'] . " - ";
    echo $row['course'];

    echo " <a href='crud.php?delete=".$row['id']."'>Delete</a><br>";
}
?>
