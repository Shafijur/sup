<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

$id=$_POST['id'];

$icon=$_POST['icon'];

$title=$_POST['title'];

$subtitle=$_POST['subtitle'];

$sql="update facility set icon='$icon', title='$title', subtitle='$subtitle' where id='$id'";
$result=mysqli_query($connection,$sql);
header('location:facility.php')
?>