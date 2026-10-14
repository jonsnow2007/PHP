<?php
include "db.php";
?>

<h2>Search Student</h2>

<form method="post">
    <input type="text" name="name" placeholder="Enter student name">
    <input type="submit" name="search" value="Search">
</form>

<?php
if (isset($_POST['search'])) {

    $name = $_POST['name'];

    $result = mysqli_query($conn,
        "SELECT * FROM students WHERE name LIKE '%$name%'");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Course: " . $row['course'] . "<br><br>";
    }
}
?>
