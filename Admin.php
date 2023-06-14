<?php
include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('https://wallpapercave.com/wp/wp7098397.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 300px;
      margin: 150px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 3px;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .error-message {
      background-color: #f8d7da;
      color: #721c24;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #f5c6cb;
      border-radius: 3px;
    }
  </style>  
</head>
<body>
  <div class="container">
    <h2>Admin Login</h2>
    <form action="authenticate.php" method="post">
     <input type="text" name="userid" placeholder="User ID" required>
     <input type="password" name="password" placeholder="Password" required>
     <input type="submit" value="Login">
    </form>

  </div>
</body>
</html>

