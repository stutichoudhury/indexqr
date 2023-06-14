<?php
session_start();
include("connection.php");

// Get the user ID and password from the login form
$userid = $_POST['userid'];
$password = $_POST['password'];

// Prepare the SQL statement to check if the admin credentials are correct
$stmt = $connect->prepare("SELECT * FROM adminlogin WHERE User_id = ? AND password = ?");
$stmt->bind_param("ss", $userid, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    // Admin login successful
    $_SESSION['admin'] = true;
    header("Location: admin_panel.php"); // Redirect to the admin panel page
} else {
    // Admin login failed
    $_SESSION['admin'] = false;
    header("Location: login.php?error=1"); // Redirect back to the login page with an error parameter
}

$stmt->close();
$connect->close();
?>
