<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Geolocation API Example</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"] {
      width: 200px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    input[type="submit"] {
      padding: 8px 16px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    #status {
      margin-bottom: 10px;
      font-weight: bold;
    }

    #location {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <p id="status"></p>
  <p id="location"></p>
  <div id="student-id" style="display: none;">
    <form action="input.php" method="POST">
      <label for="student_id">Student ID:</label>
      <input type="text" name="student_id" id="student_id" required>

      <label for="paperdate">Paper Date:</label>
      <input type="text" name="paperdate" id="paperdate" required>

      <input type="submit" value="Submit" name="reg">
    </form>
  </div>

  <script>
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
      } else {
        document.getElementById("status").innerHTML = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      document.getElementById("location").innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;

      // Define the center of the location to check against
      var centerLat =   22.572646;
      var centerLng =   88.363895;

      // Define the radius of the location in meters
      var radius = 1000;

      // Use the haversine formula to calculate the distance between the user's location and the center of the location to check against
      var dLat = (centerLat - latitude) * Math.PI / 180;
      var dLng = (centerLng - longitude) * Math.PI / 180;
      var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.cos(latitude * Math.PI / 180) * Math.cos(centerLat * Math.PI / 180) * Math.sin(dLng / 2) * Math.sin(dLng / 2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      var d = 6371 * c * 1000;

      // Check if the user is within the specified location
      if (d <= radius) {
        document.getElementById("status").innerHTML = "You are within the specified location.";
        document.getElementById("student-id").style.display = "block";
      } else {
        document.getElementById("status").innerHTML = "You are not within the specified location.";
        document.getElementById("student-id").style.display = "none";
      }
    }

    function showError(error) {
      switch (error.code) {
        case error.PERMISSION_DENIED:
          document.getElementById("status").innerHTML = "User denied the request for Geolocation.";
          break;
        case error.POSITION_UNAVAILABLE:
          document.getElementById("status").innerHTML = "Location information is unavailable.";
          break;
        case error.TIMEOUT:
          document.getElementById("status").innerHTML = "The request to get user location timed out.";
          break;
        case error.UNKNOWN_ERROR:
          document.getElementById("status").innerHTML = "An unknown error occurred.";
          break;
      }
    }

    // Call the getLocation function to start the geolocation process
    getLocation();
  </script>
</body>
</html>