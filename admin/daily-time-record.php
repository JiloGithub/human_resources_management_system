<?php
include './controller/DailyTimeRecordController.php';
$dtr = new DailyTimeRecordController;
$dtr->isAuth();
$dtr->time_in();
$dtr->time_out();
$data = $dtr->fetch();

// print_r($data);
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

        th,
        td {
            font-size: 12px;
            padding: 5px;
        }
    </style>
</head>

<body>

    <div class="modal fade text-left" id="time-out-modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title white" id="myModalLabel18">Time Out</h4>
                        <button type="button" class="close white" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="unique_id">UNIQUE_ID :</label>
                            <input type="text" id="unique_id" name="unique_id" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="time_out">TIME OUT :</label>
                            <input type="time" id="time_out" name="time_out" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" name="time-out-btn" class="btn btn-success ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="time-in-modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title white" id="myModalLabel18">Time In</h4>
                        <button type="button" class="close white" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="unique_id">UNIQUE_ID :</label>
                            <input type="text" id="unique_id" name="unique_id" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="time_in">TIME IN :</label>
                            <input type="time" id="time_in" name="time_in" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" name="time-in-btn" class="btn btn-success ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="app">
        <!-- Sidebar -->
        <?php include 'include/sidebar.php' ?>
        <!-- Main Content -->
        <div id="main">
            <!-- Navbar -->
            <?php include 'include/navbar.php' ?>
            <div class="main-content container-fluid">
                <?php
                include 'include/alert.php';
                ?>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>

                            <h3>Daily Time Record</h3>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#time-in-modal"> <i data-feather="plus" width="20"></i> Time In</button>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#time-out-modal"> <i data-feather="plus" width="20"></i> Time Out</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" width="100%">
                            <thead>
                                <tr>
                                    <th style="width: 5px;">NO.</th>
                                    <th>EMPLOYEE NAME</th>
                                    <th style="width: 200px;">TIME IN</th>
                                    <th style="width: 200px;">TIME OUT</th>
                                    <th>DATE</th>
                                    <th>WORKING HRS.</th>
                                    <th>OPTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if ($data) {
                                    foreach ($data as $row) {
                                ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row['SURNAME'] . ', ' . $row['FIRSTNAME']; ?></td>
                                            <td>
                                                <?php
                                                if ($row['TIME_IN'] !== '') {
                                                    if (strtotime($row['TIME_IN']) > strtotime('08:00')) {
                                                ?>
                                                        <?php echo date('h:i a', strtotime($row['TIME_IN'])); ?> | <span class="badge bg-danger">Late</span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <?php echo  date('h:i a', strtotime($row['TIME_IN'])); ?> | <span class="badge bg-success">Ontime</span>
                                                <?php
                                                    }
                                                } else {
                                                    echo '';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($row['TIME_OUT'] !== '') {
                                                    if (strtotime($row['TIME_OUT']) > strtotime('17:00')) {
                                                ?>
                                                        <?php echo date('h:i a', strtotime($row['TIME_OUT'])); ?> | <span class="badge bg-warning">OT</span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <?php echo  date('h:i a', strtotime($row['TIME_OUT'])); ?> | <span class="badge bg-success">Ontime</span>
                                                <?php
                                                    }
                                                } else {
                                                    echo '';
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $row['DATE']; ?></td>
                                            <td>
                                                <?php
                                                if ($row['TIME_IN'] == '' || $row['TIME_OUT'] == '') {
                                                    echo '';
                                                } else {
                                                    echo abs(number_format((strtotime($row['TIME_IN']) - strtotime($row['TIME_OUT'])) / 3600)) . ' hours';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="edit-daily-time-record.php?employee_id=<?php echo $row['EMPLOYEE_ID'] ?>&id=<?php echo $row['ID'] ?>" class="btn btn-sm btn-primary"><i data-feather="edit" width="20"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <td colspan="7" class="text-center">
                                        <p>No data found!</p>
                                    </td>
                                <?php

                                }
                                ?>
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