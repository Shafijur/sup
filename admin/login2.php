<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

$u=$_POST['username'];

$p=$_POST['password'];

$sql="select*from user where username='$u' && password='$p' && role='1'";
$result=mysqli_query($connection, $sql);

$count=mysqli_num_rows($result);

if($count==1){
    header("location:dashboard.php");
}
else{
    header("location:login.php");
}
?>