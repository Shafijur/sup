<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-xl-4 offset-xl-4">
                <div class="login">
                    <h2>Admin Login</h2>
                    <form action="login2.php" method="POST">
                        <h4>Username</h4>
                        <input type="text" name="username" class="form-control" required>
                        <h4>Password</h4>
                        <input type="password" name="password" class="form-control" required>

                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                    
                </div>

            </div>

        </div>

    </div>


    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>