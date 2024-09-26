<?php
include './controller/ManageAccountController.php';
$admin = new ManageAccountController;
$admin->isAuth();
$admin->update_account();
$admin->change_password();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Human Resources Management System</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="app">

        <!-- Sidebar -->
        <?php include 'include/sidebar.php' ?>

        <!-- Main Content -->
        <div id="main">
            <!-- Navbar -->
            <?php include 'include/navbar.php' ?>

            <div class="main-content container-fluid">
                <section class="section">
                    <?php include 'include/alert.php'; ?>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow bg-white">
                                <div class="card-header bg-primary text-white">
                                    Manage Account
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group mt-3">
                                            <input type="hidden" id="id" class="form-control" value="<?php echo $_SESSION['id']; ?>" name="id">
                                            <img src="uploads/<?php echo $_SESSION['image']; ?>" class="rounded" width="70px" height="70px">

                                        </div>
                                        <div class="form-group mb-3">

                                            <label for="image">Change Profile:</label>
                                            <input type="hidden" id="current_image" class="form-control" value="<?php echo $_SESSION['image']; ?>" name="current_image">
                                            <input type="file" id="image" class="form-control" name="image">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="fullname">Fullname:</label>
                                            <input type="text" required id="fullname" class="form-control" value="<?php echo $_SESSION['fullname']; ?>" name="fullname">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="username">Username:</label>
                                            <input type="text" required id="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" name="username">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email">Email:</label>
                                            <input type="email" disabled class="form-control " value="<?php echo $_SESSION['email']; ?>">
                                        </div>
                                        <div class="form-group mb-3 float-end">
                                            <button name="update_profile" class="btn btn-sm btn-primary">Update Account</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="card shadow bg-white">
                                <div class="card-header bg-primary text-white">
                                    Change Password
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group mb-3 mt-3">
                                            <label for="password">Current Password:</label>
                                            <input type="hidden" id="id" class="form-control" value="<?php echo $_SESSION['id']; ?>" name="id">
                                            <input type="password" required id="current_password" class="form-control" name="current_password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="password">Password:</label>
                                            <input type="password" required id="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="c_password">Confirm Password:</label>
                                            <input type="password" required id="c_password" class="form-control" name="c_password">
                                        </div>
                                        <div class="form-group mb-3 float-end">
                                            <button name="change_password" class="btn btn-sm btn-primary">Change Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2022 &copy; Voler</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="https://saugi.me">Saugi</a></p>
                        </div>
                    </div>
                </footer> -->
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>