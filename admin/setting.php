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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
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
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li>
                            <a href="setting.php">Setting</a>
                        </li>
                        <li>
                            <a href="facility/facility.php">Facility</a>
                        </li>
                        <li>
                            <a href="slaider/slaider.php">Slaider</a>
                        </li>
                        <li>
                            <a href="product/product.php">Product</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-xl-10">
                <div class="main">
                    <h3>Website Setting</h3>
                    <?php

                    $sql="select*from setting";
                    $result=mysqli_query($connection, $sql);

                    $row=mysqli_fetch_array($result);
                    ?>
                    <form action="setting_update.php" method="POST">
                        <h3>Location</h3>
                        <input type="text" name="location" class="form-control" value="<?php echo $row['location'];?>">
                        <h3>Mobile</h3>
                        <input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile'];?>">
                        <h3>Info</h3>
                        <input type="text" name="info" class="form-control" value="<?php echo $row['info'];?>">
                        <h3>Copyright</h3>
                        <input type="text" name="copyright" class="form-control" value="<?php echo $row['copyright'];?>">
                        <h3>Facebook</h3>
                        <input type="text" name="facebook" class="form-control" value="<?php echo $row['facebook'];?>">
                        <h3>Instagram</h3>
                        <input type="text" name="instagram" class="form-control" value="<?php echo $row['instagram'];?>">
                        <h3>Pintarest</h3>
                        <input type="text" name="pintarest" class="form-control" value="<?php echo $row['pintarest'];?>">
                        <h3>Twitter</h3>
                        <input type="text" name="twitter" class="form-control" value="<?php echo $row['twitter'];?>">

                        <button type="submit" class="btn btn-success">Update Setting</button>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>