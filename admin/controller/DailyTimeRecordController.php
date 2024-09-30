<?php
include './config/autoload.php';
class DailyTimeRecordController extends Controller
{


    public function time_in()
    {
        Request::method('time-in-btn', function () {


            $query = $this->and('daily_time_record', $this->where('UNIQUE_ID', Input::Validate('unique_id')), $this->where('DATE', date('M d, Y')));
            if ($query->rowCount() > 0) {

                Redirect::to('daily-time-record', "You've already done it for today, you can't do it again!", 'warning');
            } else {

                $query = $this->find('employees', $this->where('UNIQUE_ID', Input::Validate('unique_id')));
                if ($query->rowCount() > 0) {
                    $employee = $query->fetch(PDO::FETCH_ASSOC);
                    $data = [
                        'UNIQUE_ID' => Input::Validate('unique_id'),
                        'TIME_IN' => Input::Validate('time_in'),
                        'DATE' => date('M d, Y'),
                        'EMPLOYEE_ID' => $employee['EMPLOYEE_ID'],
                    ];
                    $res = $this->save('daily_time_record', $data);
                    if ($res) {
                        Redirect::to('daily-time-record', 'Add Successfully!', 'success');
                    } else {
                        Redirect::to('daily-time-record', 'Add Failed!', 'danger');
                    }
                } else {
                    Redirect::to('daily-time-record', 'Unique ID not found!', 'danger');
                }
            }
        });
    }

    public function time_out()
    {
        Request::method('time-out-btn', function () {

            $query = $this->and('daily_time_record', $this->where('UNIQUE_ID', Input::Validate('unique_id')), $this->where('DATE', date('M d, Y')));
            if ($query->rowCount() > 0) {


                $data = [
                    'TIME_OUT' => Input::Validate('time_out'),
                ];
                $res = $this->update('daily_time_record', $data, $this->where('UNIQUE_ID', Input::Validate('unique_id')));
                if ($res) {
                    Redirect::to('daily-time-record', 'Add Successfully!', 'success');
                } else {
                    Redirect::to('daily-time-record', 'Add Failed!', 'danger');
                }
            } else {
                Redirect::to('daily-time-record', "You need to fill out Time In first!", 'warning');
            }
        });
    }
    public function fetch()
    {
        $query = $this->Inner_Join('employees', 'UNIQUE_ID', 'daily_time_record', 'UNIQUE_ID');

        if ($query->rowCount() > 0) {
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function fetch_dtr()
    {
        if (isset($_GET['employee_id']) && isset($_GET['id'])) {
            $query = $this->find('daily_time_record', $this->where('EMPLOYEE_ID', $_GET['employee_id']), $this->where('ID', $_GET['id']));

            if ($query->rowCount() > 0) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }
                return $data;
            } else {
                return false;
            }
        }
    }
    public function update_dtr()
    {
        Request::method('update', function () {

            $data = [
                'TIME_IN' => Input::Validate('time_in'),
                'TIME_OUT' => Input::Validate('time_out'),
            ];
            $res = $this->update('daily_time_record', $data, $this->where('EMPLOYEE_ID', $_GET['employee_id']), $this->where('ID', $_GET['id']));
            if ($res) {
                Redirect::to('daily-time-record', 'Update Successfully!', 'success');
            } else {
                Redirect::to('daily-time-record', 'Update Failed!', 'danger');
            }
        });
    }
}
