<?php
include("connection.php");

// Get the submitted UserID and Password
$submittedUserID = $_POST['userid'];
$submittedPassword = $_POST['password'];

// Prepare the SQL statement with placeholders
$sql = "SELECT * FROM teacherlogin WHERE user_id = ? AND password = ?";
$stmt = $connect->prepare($sql);

// Bind the parameters and execute the statement
$stmt->bind_param("ss", $submittedUserID, $submittedPassword);
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if the query returned any rows
if ($result->num_rows > 0) {
    // Login successful, redirect to another page using JavaScript
    echo "<script>window.location.href = 'test.php';</script>";
    exit(); // Ensure that the script stops executing after the redirect
} else {
    // Invalid UserID or Password
    echo "Invalid UserID or Password!";
}

$stmt->close();
$connect->close();
?>
