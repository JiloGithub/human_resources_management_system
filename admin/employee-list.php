<?php
include './controller/EmployeeController.php';
$employee = new EmployeeController;
$employee->isAuth();
$employee->delete_employee();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List - Human Resources Management System</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        th,
        td {
            font-size: 12px;
            padding: 5px;
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
                <section class="section">
                    <?php include 'include/alert.php'; ?>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow bg-white">
                                <div class="card-header bg-primary text-white">
                                    Employee List
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>UNIQUE ID</th>
                                                <th>EMPLOYEE NAME</th>
                                                <th>EMAIL</th>
                                                <th>MOBILE NO.</th>
                                                <th>OPTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = $employee->fetch_employee();
                                            $no = 1;
                                            if ($data) {
                                                foreach ($data as $row) {
                                            ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $row->UNIQUE_ID; ?></td>
                                                        <td><?= $row->SURNAME . ', ' . $row->FIRSTNAME . ', ' . $row->MIDDLENAME; ?></td>
                                                        <td><?= $row->EMAIL_ADDRESS; ?></td>
                                                        <td><?= $row->MOBILE_NO; ?></td>
                                                        <td>
                                                            <a href="edit-employee.php?employee_id=<?= $row->EMPLOYEE_ID ?>" class="btn btn-sm btn-primary"> <i data-feather="edit" width="20"></i></a>
                                                            <a onclick="return window.confirm('Are you want to delete?')" href="employee-list.php?employee_id=<?= $row->EMPLOYEE_ID ?>" class="btn btn-sm btn-danger"> <i data-feather="trash" width="20"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="5" class="text-center">
                                                        No data found!
                                                    </td>

                                                </tr>
                                            <?php

                                            }
                                            ?>

                                        </tbody>
                                    </table>
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