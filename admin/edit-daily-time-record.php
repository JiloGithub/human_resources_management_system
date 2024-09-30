<?php
include './controller/DailyTimeRecordController.php';
$dtr = new DailyTimeRecordController;
$dtr->isAuth();
$data = $dtr->fetch_dtr();
$dtr->update_dtr();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Human Resources Management System</title>

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
                        <div class="col-md-5">
                            <div class="card shadow bg-white">
                                <div class="card-header bg-primary text-white">
                                    Update Daily Time Record
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group mb-3 mt-3">
                                            <label for="unique_id">Unique ID:</label>
                                            <input type="text" required id="unique_id" class="form-control" value="<?php echo $data[0]['UNIQUE_ID']; ?>" disabled>
                                        </div>
                                        <div class="form-group mb-3 mt-3">
                                            <label for="date">Date:</label>
                                            <input type="text" required id="date" class="form-control" value="<?php echo $data[0]['DATE']; ?>" disabled>
                                        </div>

                                        <div class="form-group mb-3 mt-3">
                                            <label for="time_in">Time In:</label>
                                            <input type="time" required id="time_in" class="form-control" value="<?php echo $data[0]['TIME_IN']; ?>" name="time_in">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="time_out">Time Out:</label>
                                            <input type="time" required id="time_out" class="form-control" value="<?php echo $data[0]['TIME_OUT']; ?>" name="time_out">
                                        </div>
                                        <div class="form-group mb-3 float-end">
                                            <button name="update" class="btn btn-sm btn-success">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
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