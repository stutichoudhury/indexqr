<?php
include("connection.php");
?>

<!doctype html>
<html>
<head>
    <style>
        body {
            background-image: url('https://tse3.mm.bing.net/th?id=OIP.yfCbfIzfeZBTE1YdC63teAHaE3&pid=Api&P=0&h=180');
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        h1 {
            color: rgb(8, 251, 247);
            font-size: 32px;
        }
        
        h3 {
            color: rgb(241, 215, 14);
            font-size: 24px;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .box {
            width: 300px;
            height: 200px;
            background-color: #f1f1f1;
            border-radius: 5px;
            margin: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        
        .box:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        
        .content {
            text-align: center;
            padding: 20px;
        }
        
        a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
        
        a:hover {
            color: #555;
        }
        
        p {
            color: #777;
            margin-top: 10px;
        }
        
        .button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }
        
        .button-add {
            background-color: #4CAF50;
            border: none;
        }
        
        .button-add:hover {
            background-color: #45a049;
        }
        
        .button-remove {
            background-color: #f44336;
            border: none;
        }
        
        .button-remove:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <center>
        <h1><font size="40">ADMIN PANEL</font></h1>
        <h3><font size="30">Welcome</font></h3>
    </center>
    <div class="container">
        <div class="box">
            <span></span>
            <div class="content">
                <h2>Modify Teacher's Details</h2>
                <a href="addteacher.php"><button class="button button-add">Add</button></a>
                <a href="deleteteacher.php"><button class="button button-remove">Remove</button></a>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>Modify Student's Details</h2>
                <a href="add_student.html"><button class="button button-add">Add</button></a>
                <a href="remove_student.html"><button class="button button-remove">Remove</button></a>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>Modify Attendance Details</h2>
                <a href="add_attendance.html"><button class="button button-add">Add</button></a>
                <a href="remove_attendance.html"><button class="button button-remove">Remove</button></a>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>Modify Course Details</h2>
                <a href="add_course.html"><button class="button button-add">Add</button></a>
                <a href="remove_course.html"><button class="button button-remove">Remove</button></a>
            </div>
        
    </div>
</body>
</html>
