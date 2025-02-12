<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

$id=$_GET['id'];

$sql="delete from slaider where id='$id'";
$result=mysqli_query($connection,$sql);
header('location:slaider.php');

?>