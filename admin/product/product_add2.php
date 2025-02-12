<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

$title=$_POST['title'];

$rprice=$_POST['rprice'];

$bprice=$_POST['bprice'];

$discount=$_POST['discount'];

$brand=$_POST['brand'];

$category=$_POST['category'];

$tag=$_POST['tag'];

$description=$_POST['description'];

$pshow=$_POST['pshow'];

$image=$_FILES['image']['name'];

$tem=$_FILES['image']['tmp_name'];

move_uploaded_file($tem,"../uploads/product_img/".$image);

$sql="insert into product(title,rprice,bprice,discount,brand,category,tag,description,pshow,image) values('$title','$rprice','$bprice','$discount','$brand','$category','$tag','$description','$pshow','$image')";

$result=mysqli_query($connection,$sql);

header('location:product.php')

?>