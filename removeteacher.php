<?php
include("connection.php");

// Assuming you have collected the teacher's user ID from the admin
$userid = $_POST['userid'];

// SQL query to remove the teacher record
$sql = "DELETE FROM teacherlogin WHERE User_id = '$userid'";

// Execute the query
if ($connect->query($sql) === TRUE) {
    echo "Teacher removed successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
?>
