
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
                    <h3>
                        Product 
                        <a href="http://localhost/project/admin/product/product_add.php" class="btn btn-success">Add Product</a>

                    </h3>
                    <div class="card">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Rprice</th>
                                <th>Bprice</th>
                                <th>Discount</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Tag</th>
                                <th>Image</th>
                                <th>Show P</th>
                                <th>Action</th>

                            </tr>

                            <?php

                            $i=1;
                            $sql="select*from product";
                            $result=mysqli_query($connection, $sql);

                            while($row=mysqli_fetch_array($result)){
                            ?>
                            
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php echo$row['title'];?></td>
                                <td><?php echo$row['rprice'];?></td>
                                <td><?php echo$row['bprice'];?></td>
                                <td><?php echo$row['discount'];?></td>
                                <td><?php echo$row['brand'];?></td>
                                <td><?php echo$row['category'];?></td>
                                <td><?php echo$row['description'];?></td>
                                <td><?php echo$row['tag'];?></td>
                                <td>
                                    <img style="width: 70px;50px" src="../uploads/product_img/<?php echo $row['image'];?>">
                                </td>
                                
                                 <td>
                                    <?php
                                    if($row['pshow']== 0){
                                        echo "All Product";
                                    }
                                    if($row['pshow']== 1){
                                        echo "Feature Product";
                                    }
                                    if($row['pshow']== 2){
                                        echo "Best Seller Product";
                                    }
                                    if($row['pshow']== 3){
                                        echo "Hot Deal Product";
                                    }
                                    if($row['pshow']== 4){
                                        echo "Top Rated Product";
                                    }
                                    

                                    ?>
                                 </td>


                                <td>
                                    <a href="product_edit.php?id=<?php echo $row['id'];?>">Edit</a>
                                    <a href="product_delete.php?id=<?php echo $row['id'];?>">Delete</a>
                                </td>
                            </tr>



                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>