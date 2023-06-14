<?php
$servername="localhost";
$username="root";
$password="";
$databasename="connectiondb";
$connect=mysqli_connect($servername,$username,$password,$databasename);
if($connect)
{
    echo "connection ok";
}
else
{
    echo "connection failed";  
}
?>
