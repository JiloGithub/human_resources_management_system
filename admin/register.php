<?php
include 'controller/AdminController.php';
$admin = new AdminController();
$admin->register();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Human Resources Management System</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <?php
                            include 'include/alert.php';
                            ?>
                            <div class="text-center mb-5">
                                <img src="assets/images/avatar/users.png" width="80px" height="80px" style="border-radius: 50%;">
                                <h3>Register</h3>
                                <p>Please fill the form to register.</p>
                            </div>

                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="fullname">Fullname</label>
                                            <input type="text" required id="fullname" class="form-control" name="fullname">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" required id="image" class="form-control" name="image">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" required id="username" class="form-control" name="username">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" required id="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" required id="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="c_password">Confirm Password</label>
                                            <input type="password" required id="c_password" class="form-control" name="c_password">
                                        </div>
                                    </div>
                                </diV>

                                <a href="index.php">Have an account? Login</a>
                                <div class="clearfix">
                                    <button name="register" class="btn btn-primary float-end">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>