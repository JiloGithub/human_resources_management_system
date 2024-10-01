<?php
include './controller/EmployeeController.php';
$employee = new EmployeeController;
$employee->isAuth();
$employee->Create_Imployee();
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
                <?php
                include 'include/alert.php';
                ?>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Add Employees
                    </div>
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <!-- ********** Personal-Info ********** -->
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="personal-info-tab" role="tab"
                                            aria-controls="personal-info" aria-selected="true">Personal Info</a>
                                    </li>
                                    <!-- ********** Family Background ********** -->
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="family-background-tab" role="tab"
                                            aria-controls="family-background" aria-selected="false">Family
                                            Background</a>
                                    </li>
                                    <!-- ********** Educational Background ********** -->
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="educational-background-tab" role="tab"
                                            aria-controls="educational-background" aria-selected="false">Educational
                                            Background</a>
                                    </li>
                                    <!-- ********** CSE Elegibility ********** -->
                                    <!-- <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="cse_elegibility-tab" role="tab"
                                            aria-controls="cse_elegibility" aria-selected="false">CSE
                                            Elegibility</a>
                                    </li> -->
                                </ul>
                                <form action="" method="POST" id="form">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade  show active" id="personal-info" role="tabpanel"
                                            aria-labelledby="personal-info-tab">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label for="firstname">Firstname:</label>
                                                        <input type="text" name="firstname" id="firstname"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Middlename:</label>
                                                        <input type="text" name="middlename" id="middlename"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Surname:</label>
                                                        <input type="text" name="surname" id="surname"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group mt-3">
                                                        <label>Jr/Sr (Optional):</label>
                                                        <input data-optional="true" type="text" name="name_extension" id="name_extension"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Date of Birth:</label>
                                                        <input type="date" name="date_of_birth" id="date_of_birth"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Place of Birth:</label>
                                                        <input type="text" name="place_of_birth" id="place_of_birth"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Sex:</label><br>
                                                        <input class="form-check-input" type="radio" name="sex" id="sex"
                                                            value="male" checked> Male
                                                        <input class="form-check-input" type="radio" name="sex" id="sex"
                                                            value="female"> Female
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Civil Status:</label><br>
                                                        <input class="form-check-input" type="radio" name="civil_status"
                                                            id="civil_status" value="Single" checked> Single <br>
                                                        <input class="form-check-input" type="radio" name="civil_status"
                                                            id="civil_status" value="Married"> Married <br>
                                                        <input class="form-check-input" type="radio" name="civil_status"
                                                            id="civil_status" value="Separated"> Separated <br>
                                                        <input class="form-check-input" type="radio" name="civil_status"
                                                            id="civil_status" value="Widowed"> Widowed <br>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Citizenship:</label><br>
                                                        <input class="form-check-input" type="radio" name="citizenship"
                                                            id="citizenship" value="Filipino" checked> Filipino <br>
                                                        <input class="form-check-input" type="radio" name="citizenship"
                                                            id="citizenship" value="Dual Citizenship"> Dual Citizenship
                                                        <br>
                                                        <input class="form-check-input" type="radio" name="citizenship"
                                                            id="citizenship" value="By birth"> By birth <br>
                                                        <input class="form-check-input" type="radio" name="citizenship"
                                                            id="citizenship" value="By Naturalization"> By
                                                        Naturalization <br>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Blood Type:</label><br>
                                                        <input class="form-check-input" type="radio" name="blood_type"
                                                            id="blood_type" value="A+" checked> A+ <br>
                                                        <input class="form-check-input" type="radio" name="blood_type"
                                                            id="blood_type" value="A-"> A- <br>
                                                        <input class="form-check-input" type="radio" name="blood_type"
                                                            id="blood_type" value="B+"> B+ <br>
                                                        <input class="form-check-input" type="radio" name="blood_type"
                                                            id="blood_type" value="B-"> B- <br>
                                                        <input class="form-check-input" type="radio" name="blood_type"
                                                            id="blood_type" value="AB+"> AB+ <br>
                                                        <input class="form-check-input" type="radio" name="blood_type"
                                                            id="blood_type" value="AB-"> AB- <br>
                                                        <input class="form-check-input" type="radio" name="blood_type"
                                                            id="blood_type" value="O+"> O+ <br>
                                                        <input class="form-check-input" type="radio" name="blood_type"
                                                            id="blood_type" value="O-"> O- <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Height:</label>
                                                        <input type="text" name="heigth" id="heigth"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Weigth:</label>
                                                        <input type="text" name="weigth" id="weigth"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>GSIS ID no:</label>
                                                        <input type="text" class="form-control" name="gsis_id_no"
                                                            id="gsis_id_no">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Pag-Ibig ID no:</label>
                                                        <input type="text" name="pagibig_id_no" id="pagibig_id_no"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Philhealth ID no:</label>
                                                        <input type="text" name="philhealth_id_no" id="philhealth_id_no"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>SSS no:</label><br>
                                                        <input type="text" class="form-control" name="sss_no"
                                                            id="sss_no">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>TIN no:</label>
                                                        <input type="text" class="form-control" name="tin_no"
                                                            id="tin_no">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Agency Employee no:</label>
                                                        <input type="text" name="agency_employee_no"
                                                            id="agency_employee_no" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Residential Address:</label><br>
                                                        <input type="text" class="form-control"
                                                            name="residential_address" id="residential_address">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Permenent Address:</label>
                                                        <input type="text" class="form-control" name="permenent_address"
                                                            id="permenent_address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Mobile no:</label>
                                                        <input type="tel" name="mobile_no" id="mobile_no"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Email Address:</label>
                                                        <input type="email" name="email_address" id="email_address"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div align="center">
                                                <button type="button" name="btn-personal-info" id="btn-personal-info"
                                                    class="btn btn-primary btn-sm">Next</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="family-background" role="tabpanel"
                                            aria-labelledby="family-background-tab">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Firstname:</label>
                                                        <input type="text" name="fam_back_firstname" id="fam_back_firstname"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Middlename:</label>
                                                        <input type="text" name="fam_back_middlename" id="fam_back_middlename"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Spouse's Surname:</label>
                                                        <input type="text" name="fam_back_spouses_surname" id="fam_back_spouses_surname"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group mt-3">
                                                        <label>Jr/Sr (Optional):</label>
                                                        <input type="text" data-optional="true" name="fam_back_name_extension" id="fam_back_name_extension"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Occupation:</label>
                                                        <input type="text" name="fam_back_occupation" id="fam_back_occupation"
                                                            class="form-control" />
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Mobile No.:</label>
                                                        <input type="tel" name="fam_back_mobile_no" id="fam_back_mobile_no"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Employer Bussiness Name:</label>
                                                        <input type="text" name="fam_back_emp_bus_name" id="fam_back_emp_bus_name"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Bussiness Address:</label>
                                                        <textarea class="form-control" name="fam_back_bussiness_address" id="fam_back_bussiness_address" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Father's Firstame:</label>
                                                        <input type="text" name="fam_back_fathers_firstname" id="fam_back_fathers_firstname"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Father's Middlename:</label>
                                                        <input type="text" name="fam_back_fathers_middlename" id="fam_back_fathers_middlename"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Father's Surname:</label>
                                                        <input type="text" name="fam_back_fathers_surname" id="fam_back_fathers_surname"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group mt-3">
                                                        <label>Jr/Sr (Optional):</label>
                                                        <input type="text" data-optional="true" name="fam_back_fathers_name_extension" id="fam_back_fathers_name_extension"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Mother's Firstame:</label>
                                                        <input type="text" name="fam_back_mothers_firstname" id="fam_back_mothers_firstname"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Mother's Middlename:</label>
                                                        <input type="text" name="fam_back_mothers_middlename" id="fam_back_mothers_middlename"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Mother's Surname:</label>
                                                        <input type="text" name="fam_back_mothers_surname" id="fam_back_mothers_surname"
                                                            class="form-control" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Mother's Maiden Name:</label>
                                                        <input type="text" name="fam_back_mothers_maiden_name" id="fam_back_mothers_maiden_name"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mt-3">
                                                        <label>Number of Children:</label>
                                                        <input type="number" name="fam_back_no_of_children" id="fam_back_no_of_children"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div align="center">
                                                <button type="button" name="btn-family-bg-previous"
                                                    id="btn-family-bg-previous"
                                                    class="btn btn-primary btn-sm">Previous</button>
                                                <button type="button" name="btn-family-bg-next" id="btn-family-bg-next"
                                                    class="btn btn-primary btn-sm">Next</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="educational-background" role="tabpanel"
                                            aria-labelledby="educational-background-tab">

                                            <div class="form-group mt-3">
                                                <h3>Elementary</h3>
                                                <div class="row">
                                                    <input type="hidden" class="form-control" name="educ_bg_elementary_level" id="educ_bg_elementary_level" value="Elementary">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Name of School:</label>
                                                            <textarea class="form-control" name="educ_bg_elementary_name_of_school" id="educ_bg_elementary_name_of_school" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Basic Education/Degree/Course:</label>
                                                            <textarea class="form-control" name="educ_bg_elementary_basic_education_degree_course" id="educ_bg_elementary_basic_education_degree_course" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>From:</label>
                                                            <input type="text" class="form-control" name="educ_bg_elementary_from" id="educ_bg_elementary_from">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>To:</label>
                                                            <input type="text" class="form-control" name="educ_bg_elementary_to" id="educ_bg_elementary_to">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Highest Level/Unit Earned</label>
                                                            <input type="text" class="form-control" name="educ_bg_elementary_highest_level_unit_earned" id="educ_bg_elementary_highest_level_unit_earned">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Year Graduated:</label>
                                                            <input type="text" class="form-control" name="educ_bg_elementary_year_graduated" id="educ_bg_elementary_year_graduated">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Scholarship/Academic Honors Recieved:</label>
                                                            <textarea class="form-control" name="educ_bg_elementary_scholarship_academic_honors_recieved" id="educ_bg_elementary_scholarship_academic_honors_recieved" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <h3>Secondary</h3>
                                                <div class="row">
                                                    <input type="hidden" class="form-control" name="educ_bg_secondary_level" id="educ_bg_secondary_level" value="Secondary">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Name of School:</label>
                                                            <textarea class="form-control" name="educ_bg_secondary_name_of_school" id="educ_bg_secondary_name_of_school" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Basic Education/Degree/Course:</label>
                                                            <textarea class="form-control" name="educ_bg_secondary_basic_education_degree_course" id="educ_bg_secondary_basic_education_degree_course" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>From:</label>
                                                            <input type="text" class="form-control" name="educ_bg_secondary_from" id="educ_bg_secondary_from">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>To:</label>
                                                            <input type="text" class="form-control" name="educ_bg_secondary_to" id="educ_bg_secondary_to">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Highest Level/Unit Earned</label>
                                                            <input type="text" class="form-control" name="educ_bg_secondary_highest_level_unit_earned" id="educ_bg_secondary_highest_level_unit_earned">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Year Graduated:</label>
                                                            <input type="text" class="form-control" name="educ_bg_secondary_year_graduated" id="educ_bg_secondary_year_graduated">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Scholarship/Academic Honors Recieved:</label>
                                                            <textarea class="form-control" name="educ_bg_secondary_scholarship_academic_honors_recieved" id="educ_bg_secondary_scholarship_academic_honors_recieved" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <h3>Vocational</h3>
                                                <div class="row">
                                                    <input type="hidden" class="form-control" name="educ_bg_vocational_level" id="educ_bg_vocational_level" value="Vocational">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Name of School:</label>
                                                            <textarea class="form-control" name="educ_bg_vocational_name_of_school" id="educ_bg_vocational_name_of_school" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Basic Education/Degree/Course:</label>
                                                            <textarea class="form-control" name="educ_bg_vocational_basic_education_degree_course" id="educ_bg_vocational_basic_education_degree_course" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>From:</label>
                                                            <input type="text" class="form-control" name="educ_bg_vocational_from" id="educ_bg_vocational_from">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>To:</label>
                                                            <input type="text" class="form-control" name="educ_bg_vocational_to" id="educ_bg_vocational_to">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Highest Level/Unit Earned</label>
                                                            <input type="text" class="form-control" name="educ_bg_vocational_highest_level_unit_earned" id="educ_bg_vocational_highest_level_unit_earned">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Year Graduated:</label>
                                                            <input type="text" class="form-control" name="educ_bg_vocational_year_graduated" id="educ_bg_vocational_year_graduated">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Scholarship/Academic Honors Recieved:</label>
                                                            <textarea class="form-control" name="educ_bg_vocational_scholarship_academic_honors_recieved" id="educ_bg_vocational_scholarship_academic_honors_recieved" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <h3>College</h3>
                                                <div class="row">
                                                    <input type="hidden" class="form-control" name="educ_bg_college_level" id="educ_bg_college_level" value="College">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Name of School:</label>
                                                            <textarea class="form-control" name="educ_bg_college_name_of_school" id="educ_bg_college_name_of_school" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Basic Education/Degree/Course:</label>
                                                            <textarea class="form-control" name="educ_bg_college_basic_education_degree_course" id="educ_bg_college_basic_education_degree_course" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>From:</label>
                                                            <input type="text" class="form-control" name="educ_bg_college_from" id="educ_bg_college_from">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>To:</label>
                                                            <input type="text" class="form-control" name="educ_bg_college_to" id="educ_bg_college_to">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Highest Level/Unit Earned</label>
                                                            <input type="text" class="form-control" name="educ_bg_college_highest_level_unit_earned" id="educ_bg_college_highest_level_unit_earned">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Year Graduated:</label>
                                                            <input type="text" class="form-control" name="educ_bg_college_year_graduated" id="educ_bg_college_year_graduated">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Scholarship/Academic Honors Recieved:</label>
                                                            <textarea class="form-control" name="educ_bg_college_scholarship_academic_honors_recieved" id="educ_bg_college_scholarship_academic_honors_recieved" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div align="center">
                                                <button type="button" name="btn-educational-bg-previous"
                                                    id="btn-educational-bg-previous"
                                                    class="btn btn-primary btn-sm">Previous</button>
                                                <button type="submit" name="btn-educational-bg-next" id="btn-educational-bg-next"
                                                    class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                        </div>
                                        <!-- <div class="tab-pane fade" id="cse_elegibility" role="tabpanel"
                                            aria-labelledby="cse_elegibility-tab">

                                            <div class="form-group mt-3">

                                            </div>
                                            <br />
                                            <div align="center">
                                                <button type="button" name="btn-cse-elegibility-previous"
                                                    id="btn-cse-elegibility-previous"
                                                    class="btn btn-primary btn-sm">Previous</button>
                                                <button type="submit" name="btn-cse-elegibility-next" id="btn-cse-elegibility-next"
                                                    class="btn btn-primary btn-sm">Next</button>
                                            </div>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
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