<?php
include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>Teacher Login</title>
  <style>
    body {
      background-image: url('https://tse1.mm.bing.net/th?id=OIP.sD5oU45MPPTxt5Gh38VmJAHaEK&pid=Api&P=0&h=180');
      background-repeat: no-repeat;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      background-color: #f2f2f2;
    }

    h2 {
      text-align: center;
    }

    .input-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 5px;
      font-size: 16px;
    }

    .btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="login.php" method="POST">
      <h2>Teacher Login</h2>
      <div class="input-group">
        <label for="userid">UserID:</label>
        <input type="text" id="userid" name="userid" required>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="input-group">
        <button type="submit" class="btn">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
