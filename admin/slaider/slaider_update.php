<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

$id=$_POST['id'];

$subtitle=$_POST['subtitle'];

$title=$_POST['title'];

$discount=$_POST['discount'];

$description=$_POST['description'];

$image=$_FILES['image']['name'];

$tem=$_FILES['image']['tmp_name'];

move_uploaded_file($tem,"../uploads/".$image);

$sql="update slaider set subtitle='$subtitle',title='$title',discount='$discount',description='$description',image='$image' where id='$id'";
$result=mysqli_query($connection,$sql);
header('location:slaider.php')
?>
