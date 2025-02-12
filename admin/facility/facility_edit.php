
<?php

$hostname="localhost";
$username= "root";
$password= "";
$dbname= "project";

$connection=mysqli_connect($hostname, $username, $password, $dbname);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/admin.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
        </ul>
        <form class="d-flex" role="search">
            <a href="#">Logout <span>(M)</span></a>
        </form>
        </div>
    </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2">
                <div class="sidebar">
                    <h3>Sidebar</h3>
                    <ul>
                        <li>
                            <a href="http://localhost/project/admin/dashboard.php">Dashboard</a>
                        </li>
                        <li>
                            <a href="http://localhost/project/admin/setting.php">Setting</a>
                        </li>
                        <li>
                            <a href="http://localhost/project/admin/facility/facility.php">Facility</a>
                        </li>
                        <li>
                            <a href="http://localhost/project/admin/slaider/slaider.php">Slaider</a>
                        </li>
                        <li>
                            <a href="http://localhost/project/admin/product/product.php">Product</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-xl-10">
                <div class="main">
                    <h3>Edit Facility</h3>
                    <div class="card">


                    <?php

                    $id=$_GET["id"];

                    $sql="select*from facility where id='$id'";

                    $row=mysqli_fetch_array(mysqli_query($connection,$sql));

                    ?>



                        <form action="facility_update.php" method="POST">
                            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                            <h4>Icon</h4>
                            <input type="text" value="<?php echo $row['icon'];?>" name="icon" class="form-control">
                            <h4>Title</h4>
                            <input type="text" value="<?php echo $row['title'];?>" name="title" class="form-control">
                            <h4>Sub Title</h4>
                            <input type="text" value="<?php echo $row['subtitle'];?>" name="subtitle" class="form-control">
                            <button type="submit" class="btn btn-success">Update Facility</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>