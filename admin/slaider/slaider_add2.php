<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

$subtitle=$_POST['subtitle'];

$title=$_POST['title'];

$discount=$_POST['discount'];

$description=$_POST['description'];

$image=$_FILES['image']['name'];

$tem=$_FILES['image']['tmp_name'];

move_uploaded_file($tem,"../uploads/".$image);

$sql="insert into slaider(subtitle,title,discount,description,image) values('$subtitle','$title','$discount','$description','$image')";

$result=mysqli_query($connection,$sql);

header('location:slaider.php');

?>