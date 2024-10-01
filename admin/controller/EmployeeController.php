<?php

include './config/autoload.php';
class EmployeeController extends Controller
{


    public function Create_Imployee()
    {
        Request::method('btn-educational-bg-next', function () {

            $data = [
                'UNIQUE_ID' => 'UID-' . Hash::unique(8),
                'FIRSTNAME' => Input::Validate('firstname'),
                'MIDDLENAME' => Input::Validate('middlename'),
                'SURNAME' => Input::Validate('surname'),
                'NAME_EXTENSION' => Input::Validate('name_extension'),
                'DATE_OF_BIRTH' => Input::Validate('date_of_birth'),
                'PLACE_OF_BIRTH' => Input::Validate('place_of_birth'),
                'SEX' => Input::Validate('sex'),
                'CIVIL_STATUS' => Input::Validate('civil_status'),
                'HEIGHT' => Input::Validate('heigth'),
                'WEIGHT' => Input::Validate('weigth'),
                'BLOOD_TYPE' => Input::Validate('blood_type'),
                'GSIS_ID_NO' => Input::Validate('gsis_id_no'),
                'PAGIBIG_ID_NO' => Input::Validate('pagibig_id_no'),
                'PHILHEALTH_NO' => Input::Validate('philhealth_id_no'),
                'SSS_NO' => Input::Validate('sss_no'),
                'TIN_NO' => Input::Validate('tin_no'),
                'AGENCY_EMPLOYEE_NO' => Input::Validate('agency_employee_no'),
                'CITIZENSHIP' => Input::Validate('citizenship'),
                'RESIDENTIAL_ADDRESS' => Input::Validate('residential_address'),
                'PERMANENT_ADDRESS' => Input::Validate('permenent_address'),
                'MOBILE_NO' => Input::Validate('mobile_no'),
                'EMAIL_ADDRESS' => Input::Validate('email_address'),
            ];
            $result = $this->save('employees', $data);

            if ($result) {

                $data = [
                    'FB_FIRSTNAME' => Input::Validate('fam_back_firstname'),
                    'FB_MIDDLENAME' => Input::Validate('fam_back_middlename'),
                    'SPOUSES_SURNAME' => Input::Validate('fam_back_spouses_surname'),
                    'FB_NAME_EXTENSION' => Input::Validate('fam_back_name_extension'),
                    'OCCUPATION' => Input::Validate('fam_back_occupation'),
                    'EMPLOYER_BUSINESS_NAME' => Input::Validate('fam_back_emp_bus_name'),
                    'BUSINESS_ADDRESS' => Input::Validate('fam_back_bussiness_address'),
                    'FB_MOBILE_NO' => Input::Validate('fam_back_mobile_no'),
                    'FATHERS_SURNAME' => Input::Validate('fam_back_fathers_surname'),
                    'FATHERS_FIRSTNAME' => Input::Validate('fam_back_fathers_firstname'),
                    'FATHERS_MIDDLENAME' => Input::Validate('fam_back_fathers_middlename'),
                    'FATHERS_NAME_EXTENSION' => Input::Validate('fam_back_fathers_name_extension'),
                    'MOTHERS_MAIDEN_NAME' => Input::Validate('fam_back_mothers_maiden_name'),
                    'MOTHERS_SURNAME' => Input::Validate('fam_back_mothers_surname'),
                    'MOTHERS_FIRSTNAME' => Input::Validate('fam_back_mothers_firstname'),
                    'MOTHERS_MIDDLENAME' => Input::Validate('fam_back_mothers_middlename'),
                    'NO_OF_CHILDREN' => Input::Validate('fam_back_no_of_children'),
                    'EMPLOYEE_ID ' => $result,
                ];
                $result = $this->save('family_background', $data);
                if ($result) {
                    $data = [
                        'LEVEL' => Input::Validate('educ_bg_elementary_level'),
                        'SCHOOL_NAME' => Input::Validate('educ_bg_elementary_name_of_school'),
                        'BASIC_EDUCATION_DEGREE_COURSE' => Input::Validate('educ_bg_elementary_basic_education_degree_course'),
                        'school_FROM' => Input::Validate('educ_bg_elementary_from'),
                        'school_TO' => Input::Validate('educ_bg_elementary_to'),
                        'HIGHEST_LEVEL_UNIT_EARNED ' => Input::Validate('educ_bg_elementary_highest_level_unit_earned'),
                        'YEAR_GRADUATED ' => Input::Validate('educ_bg_elementary_year_graduated'),
                        'SCHOLARSHIP_ACADEMIC_HONOR_RECIEVED ' => Input::Validate('educ_bg_elementary_scholarship_academic_honors_recieved'),
                        'EMPLOYEE_ID  ' => $result,
                    ];
                    $data2 = [
                        'LEVEL' => Input::Validate('educ_bg_secondary_level'),
                        'SCHOOL_NAME' => Input::Validate('educ_bg_secondary_name_of_school'),
                        'BASIC_EDUCATION_DEGREE_COURSE' => Input::Validate('educ_bg_secondary_basic_education_degree_course'),
                        'school_FROM' => Input::Validate('educ_bg_secondary_from'),
                        'school_TO' => Input::Validate('educ_bg_secondary_to'),
                        'HIGHEST_LEVEL_UNIT_EARNED ' => Input::Validate('educ_bg_secondary_highest_level_unit_earned'),
                        'YEAR_GRADUATED ' => Input::Validate('educ_bg_secondary_year_graduated'),
                        'SCHOLARSHIP_ACADEMIC_HONOR_RECIEVED ' => Input::Validate('educ_bg_secondary_scholarship_academic_honors_recieved'),
                        'EMPLOYEE_ID  ' => $result,
                    ];
                    $data3 = [
                        'LEVEL' => Input::Validate('educ_bg_college_level'),
                        'SCHOOL_NAME' => Input::Validate('educ_bg_college_name_of_school'),
                        'BASIC_EDUCATION_DEGREE_COURSE' => Input::Validate('educ_bg_college_basic_education_degree_course'),
                        'school_FROM' => Input::Validate('educ_bg_college_from'),
                        'school_TO' => Input::Validate('educ_bg_college_to'),
                        'HIGHEST_LEVEL_UNIT_EARNED ' => Input::Validate('educ_bg_college_highest_level_unit_earned'),
                        'YEAR_GRADUATED ' => Input::Validate('educ_bg_college_year_graduated'),
                        'SCHOLARSHIP_ACADEMIC_HONOR_RECIEVED ' => Input::Validate('educ_bg_college_scholarship_academic_honors_recieved'),
                        'EMPLOYEE_ID  ' => $result,
                    ];
                    $data4 = [
                        'LEVEL' => Input::Validate('educ_bg_vocational_level'),
                        'SCHOOL_NAME' => Input::Validate('educ_bg_vocational_name_of_school'),
                        'BASIC_EDUCATION_DEGREE_COURSE' => Input::Validate('educ_bg_vocational_basic_education_degree_course'),
                        'school_FROM' => Input::Validate('educ_bg_vocational_from'),
                        'school_TO' => Input::Validate('educ_bg_vocational_to'),
                        'HIGHEST_LEVEL_UNIT_EARNED ' => Input::Validate('educ_bg_vocational_highest_level_unit_earned'),
                        'YEAR_GRADUATED ' => Input::Validate('educ_bg_vocational_year_graduated'),
                        'SCHOLARSHIP_ACADEMIC_HONOR_RECIEVED ' => Input::Validate('educ_bg_vocational_scholarship_academic_honors_recieved'),
                        'EMPLOYEE_ID  ' => $result,
                    ];
                    $result = $this->save('educational_background', $data, $data2, $data3, $data4);
                    if ($result) {
                        Redirect::to('employee-list', 'Create Success!', 'success');
                    } else {
                        Redirect::to('employee', 'Create Failed!', 'danger');
                    }
                } else {
                    Redirect::to('employee', 'Create Failed!', 'danger');
                }
            } else {

                Redirect::to('employee', 'Create Failed!', 'danger');
            }
        });
    }
    public function fetch_employee()
    {
        $query = $this->selectAll('employees');
        $query->execute();
        if ($query->rowCount() > 0) {
            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function fetch_indiv()
    {

        $sql = "SELECT * FROM `employees` INNER JOIN `family_background` ON employees.EMPLOYEE_ID = family_background.EMPLOYEE_ID";
        $sql .= " INNER JOIN `educational_background` ON employees.EMPLOYEE_ID = educational_background.EMPLOYEE_ID";
        $sql .= " WHERE employees.EMPLOYEE_ID = " . $_GET['employee_id'] . "";
        $query = $this->conn->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    public function update_employee()
    {
        Request::method('btn-educational-bg-update', function () {

            $data = [

                'FIRSTNAME' => Input::Validate('firstname'),
                'MIDDLENAME' => Input::Validate('middlename'),
                'SURNAME' => Input::Validate('surname'),
                'NAME_EXTENSION' => Input::Validate('name_extension'),
                'DATE_OF_BIRTH' => Input::Validate('date_of_birth'),
                'PLACE_OF_BIRTH' => Input::Validate('place_of_birth'),
                'SEX' => Input::Validate('sex'),
                'CIVIL_STATUS' => Input::Validate('civil_status'),
                'HEIGHT' => Input::Validate('heigth'),
                'WEIGHT' => Input::Validate('weigth'),
                'BLOOD_TYPE' => Input::Validate('blood_type'),
                'GSIS_ID_NO' => Input::Validate('gsis_id_no'),
                'PAGIBIG_ID_NO' => Input::Validate('pagibig_id_no'),
                'PHILHEALTH_NO' => Input::Validate('philhealth_id_no'),
                'SSS_NO' => Input::Validate('sss_no'),
                'TIN_NO' => Input::Validate('tin_no'),
                'AGENCY_EMPLOYEE_NO' => Input::Validate('agency_employee_no'),
                'CITIZENSHIP' => Input::Validate('citizenship'),
                'RESIDENTIAL_ADDRESS' => Input::Validate('residential_address'),
                'PERMANENT_ADDRESS' => Input::Validate('permenent_address'),
                'MOBILE_NO' => Input::Validate('mobile_no'),
                // 'EMAIL_ADDRESS' => Input::Validate('email_address'),
            ];
            $result = $this->update('employees', $data, $this->where('EMPLOYEE_ID', $_GET['employee_id']));
            if ($result) {

                $data = [
                    'FB_FIRSTNAME' => Input::Validate('fam_back_firstname'),
                    'FB_MIDDLENAME' => Input::Validate('fam_back_middlename'),
                    'SPOUSES_SURNAME' => Input::Validate('fam_back_spouses_surname'),
                    'FB_NAME_EXTENSION' => Input::Validate('fam_back_name_extension'),
                    'OCCUPATION' => Input::Validate('fam_back_occupation'),
                    'EMPLOYER_BUSINESS_NAME' => Input::Validate('fam_back_emp_bus_name'),
                    'BUSINESS_ADDRESS' => Input::Validate('fam_back_bussiness_address'),
                    'FB_MOBILE_NO' => Input::Validate('fam_back_mobile_no'),
                    'FATHERS_SURNAME' => Input::Validate('fam_back_fathers_surname'),
                    'FATHERS_FIRSTNAME' => Input::Validate('fam_back_fathers_firstname'),
                    'FATHERS_MIDDLENAME' => Input::Validate('fam_back_fathers_middlename'),
                    'FATHERS_NAME_EXTENSION' => Input::Validate('fam_back_fathers_name_extension'),
                    'MOTHERS_MAIDEN_NAME' => Input::Validate('fam_back_mothers_maiden_name'),
                    'MOTHERS_SURNAME' => Input::Validate('fam_back_mothers_surname'),
                    'MOTHERS_FIRSTNAME' => Input::Validate('fam_back_mothers_firstname'),
                    'MOTHERS_MIDDLENAME' => Input::Validate('fam_back_mothers_middlename'),
                    'NO_OF_CHILDREN' => Input::Validate('fam_back_no_of_children'),
                ];
                $result = $this->update('family_background', $data, $this->where('EMPLOYEE_ID', $_GET['employee_id']));

                if ($result) {

                    $data = [
                        'SCHOOL_NAME' => Input::Validate('educ_bg_elementary_name_of_school'),
                        'BASIC_EDUCATION_DEGREE_COURSE' => Input::Validate('educ_bg_elementary_basic_education_degree_course'),
                        'SCHOOL_FROM' => Input::Validate('educ_bg_elementary_from'),
                        'SCHOOL_TO' => Input::Validate('educ_bg_elementary_to'),
                        'HIGHEST_LEVEL_UNIT_EARNED' => Input::Validate('educ_bg_elementary_highest_level_unit_earned'),
                        'YEAR_GRADUATED ' => Input::Validate('educ_bg_elementary_year_graduated'),
                        'SCHOLARSHIP_ACADEMIC_HONOR_RECIEVED' => Input::Validate('educ_bg_elementary_scholarship_academic_honors_recieved'),
                    ];
                    $this->update('educational_background', $data, $this->where('LEVEL', 'Elementary'), $this->where('EMPLOYEE_ID', $_GET['employee_id']));

                    $data2 = [
                        'SCHOOL_NAME' => Input::Validate('educ_bg_secondary_name_of_school'),
                        'BASIC_EDUCATION_DEGREE_COURSE' => Input::Validate('educ_bg_secondary_basic_education_degree_course'),
                        'SCHOOL_FROM' => Input::Validate('educ_bg_secondary_from'),
                        'SCHOOL_TO' => Input::Validate('educ_bg_secondary_to'),
                        'HIGHEST_LEVEL_UNIT_EARNED ' => Input::Validate('educ_bg_secondary_highest_level_unit_earned'),
                        'YEAR_GRADUATED ' => Input::Validate('educ_bg_secondary_year_graduated'),
                        'SCHOLARSHIP_ACADEMIC_HONOR_RECIEVED ' => Input::Validate('educ_bg_secondary_scholarship_academic_honors_recieved'),

                    ];
                    $this->update('educational_background', $data2, $this->where('LEVEL', 'Secondary'), $this->where('EMPLOYEE_ID', $_GET['employee_id']));

                    $data3 = [
                        'SCHOOL_NAME' => Input::Validate('educ_bg_college_name_of_school'),
                        'BASIC_EDUCATION_DEGREE_COURSE' => Input::Validate('educ_bg_college_basic_education_degree_course'),
                        'SCHOOL_FROM' => Input::Validate('educ_bg_college_from'),
                        'SCHOOL_TO' => Input::Validate('educ_bg_college_to'),
                        'HIGHEST_LEVEL_UNIT_EARNED ' => Input::Validate('educ_bg_college_highest_level_unit_earned'),
                        'YEAR_GRADUATED ' => Input::Validate('educ_bg_college_year_graduated'),
                        'SCHOLARSHIP_ACADEMIC_HONOR_RECIEVED ' => Input::Validate('educ_bg_college_scholarship_academic_honors_recieved'),

                    ];
                    $this->update('educational_background', $data3, $this->where('LEVEL', 'College'), $this->where('EMPLOYEE_ID', $_GET['employee_id']));

                    $data4 = [
                        'SCHOOL_NAME' => Input::Validate('educ_bg_vocational_name_of_school'),
                        'BASIC_EDUCATION_DEGREE_COURSE' => Input::Validate('educ_bg_vocational_basic_education_degree_course'),
                        'SCHOOL_FROM' => Input::Validate('educ_bg_vocational_from'),
                        'SCHOOL_TO' => Input::Validate('educ_bg_vocational_to'),
                        'HIGHEST_LEVEL_UNIT_EARNED ' => Input::Validate('educ_bg_vocational_highest_level_unit_earned'),
                        'YEAR_GRADUATED ' => Input::Validate('educ_bg_vocational_year_graduated'),
                        'SCHOLARSHIP_ACADEMIC_HONOR_RECIEVED ' => Input::Validate('educ_bg_vocational_scholarship_academic_honors_recieved'),

                    ];
                    $result = $this->update('educational_background', $data4, $this->where('LEVEL', 'Vocational'), $this->where('EMPLOYEE_ID', $_GET['employee_id']));

                    Redirect::to('employee-list', 'Update Success!', 'success');
                } else {
                    Redirect::to('employee-list', 'Update Failed!', 'danger');
                }
            } else {
                Redirect::to('employee-list', 'Update Failed!', 'danger');
            }
        });
    }

    public function delete_employee()
    {

        if (isset($_GET['employee_id'])) {
            $result = $this->delete('employees', $this->where('EMPLOYEE_ID', $_GET['employee_id']));
            if ($result) {
                Redirect::to('employee-list', 'Deleted Success!', 'success');
            } else {
                Redirect::to('employee-list', 'Deleted Failed!', 'danger');
            }
        } else {
            return false;
        }
    }
}
