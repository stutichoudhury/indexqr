<?php
include("connection.php");

// Assuming you have collected the teacher's details from the admin
$userid = $_POST['userid'];
$password = $_POST['password'];
// ... other details

// SQL query to insert a new teacher record
$sql = "INSERT INTO teacherlogin (User_id, Password) VALUES ('$userid', '$password')";

// Execute the query
if ($connect->query($sql) === TRUE) {
    echo "Teacher added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
?>
