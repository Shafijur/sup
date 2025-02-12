<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

$icon=$_POST['icon'];

$title=$_POST['title'];

$subtitle=$_POST['subtitle'];

$sql="insert into facility(icon,title,subtitle) values('$icon','$title','$subtitle')";
$result=mysqli_query($connection, $sql);
header('location:facility.php');

?>