<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

$id=$_POST['id'];

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

$sql="update product set title='$title',rprice='$rprice',bprice='$bprice',discount='$discount',brand='$brand',category='$category',tag='$tag',description='$description',pshow='$pshow',image='$image',where id='$id'";

$result=mysqli_query($connection,$sql);

header('location:product.php')

?>
