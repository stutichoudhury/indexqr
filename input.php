<?php
include("connection.php");
error_reporting(0);

// Check if the form is submitted
if (isset($_POST['reg'])) {
  $student_id = $_POST['student_id'];
  $paperdate = $_POST['paperdate'];

  // Insert the data into the database
  $query = "INSERT INTO studenttable (student_id, paperdate) VALUES ('$student_id', '$paperdate')";
  $data = mysqli_query($connect, $query);

  if ($data) {
    echo "Data inserted successfully.";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>
