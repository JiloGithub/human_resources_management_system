<?php
session_start();
if (!isset($_SESSION["isAuth"])) {
    header('location:index.php');
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee - Human Resources Management System</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .has-error {
            border: 1px solid #cc0000;
        }

        .has-error::placeholder {
            color: #cc0000;
        }
    </style>
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
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <h3>Daily Time Record</h3>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-primary">Add Record</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Employee Name</th>
                                    <th>Time In</th>
                                    <th>Time Out</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Angelo Vijega</td>
                                    <td>10:00am</td>
                                    <td>5:00pm</td>
                                    <td>Sept. 09, 2024</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/employee_validation.js"></script>
</body>

</html>