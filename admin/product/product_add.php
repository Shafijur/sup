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
                    <h3>Add Product</h3>
                    <div class="card">
                        <form action="product_add2.php" method="POST" enctype="multipart/form-data">
                            <h4>Title</h4>
                            <input type="text" name="title" class="form-control">

                            <h4>Regular Price</h4>
                            <input type="text" name="rprice" class="form-control">

                            <h4>Before Price</h4>
                            <input type="text" name="bprice" class="form-control">

                            <h4>Discount</h4>
                            <input type="text" name="discount" class="form-control">

                            <h4>Brand</h4>
                            <input type="text" name="brand" class="form-control">

                            <h4>Category</h4>
                            <input type="text" name="category" class="form-control">

                            <h4>Tag</h4>
                            <input type="text" name="tag" class="form-control">

                            <h4>Description</h4>
                            <textarea type="text" name="description" class="form-control"></textarea>

                            <h4>Image</h4>
                            <input type="file" name="image" class="form-control">

                            <h4>Product Show</h4>
                            <select type="text" name="pshow" class="form-control">
                                <option value="0">All Product</option>
                                <option value="1">Feature Product</option>
                                <option value="2">Best Seller Product</option>
                                <option value="3">Hot Deal Product</option>
                                <option value="4">Top Rated Product</option>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-success">Add Product</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>