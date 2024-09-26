<?php
include './controller/AdminController.php';
$admin = new AdminController;
$admin->isAuth();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Human Resources Management System</title>

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
                <div class="page-title">
                    <h3>Dashboard</h3>
                </div>
                <section class="section">
                    <div class="row mb-2">
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>EMPLOYEES</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <h1 class="text-white"><?php echo $admin->Total_Employees(); ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>LEAVE</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <h1 class="text-white">0</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>ATTENDACE</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <h1 class="text-white">0</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class='card-title'>ADMIN</h3>
                                        <div class="card-right d-flex align-items-center">
                                            <h1 class="text-white"><?php echo $admin->Total_Admin(); ?></h1>
                                        </div>
                                    </div>
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