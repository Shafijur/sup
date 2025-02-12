<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

$l=$_POST['location'];

$m=$_POST['mobile'];

$info=$_POST['info'];

$c=$_POST['copyright'];

$fl=$_POST['facebook'];

$il=$_POST['instagram'];

$pl=$_POST['pintarest'];

$tl=$_POST['twitter'];

$sql="update setting set location='$l', mobile='$m', info='$info', copyright='$c', facebook='$fl', instagram='$il', pintarest='$pl', twitter='$tl'";

$result=mysqli_query($connection,$sql);

header('location:setting.php')
?>