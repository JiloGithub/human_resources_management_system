<?php

include './config/autoload.php';
class ManageAccountController extends Controller
{

    public function update_account()
    {

        Request::method('update_profile', function () {

            $file = new File;
            $file->file('image');
            $image = $file->name();
            if ($file->file('image') !== '') {

                if ($file->validate()) {
                    $data = [
                        'IMAGE' =>  $image,
                        'FULLNAME' =>  Input::Validate('fullname'),
                        'USERNAME' =>  Input::Validate('username'),
                    ];
                    $query = $this->update('admin', $data, $this->where('ID', Input::Validate('id')));
                    if ($query) {
                        $file->upload();
                        $file->delete(Input::Validate('current_image'));
                        Session::put('image', $data['IMAGE']);
                        Session::put('fullname', $data['FULLNAME']);
                        Session::put('username', $data['USERNAME']);
                        Redirect::to('manage-account', 'Updated successfully', 'success');
                    } else {
                        Redirect::to('manage-account', 'Updated failed', 'danger');
                    }
                }
            }
            $data = [
                'IMAGE' =>  Input::Validate('current_image'),
                'FULLNAME' =>  Input::Validate('fullname'),
                'USERNAME' =>  Input::Validate('username'),
            ];
            $query = $this->update('admin', $data, $this->where('ID', Input::Validate('id')));
            if ($query) {
                Session::put('image', $data['IMAGE']);
                Session::put('fullname', $data['FULLNAME']);
                Session::put('username', $data['USERNAME']);
                Redirect::to('manage-account', 'Updated successfully', 'success');
            } else {
                Redirect::to('manage-account', 'Updated failed', 'danger');
            }
        });
    }


    public function change_password()
    {
        Request::method('change_password', function () {

            $data = [
                'ID' => Input::Validate('id'),
            ];
            $query = $this->select('admin', $data);
            if ($result = $query->fetch(PDO::FETCH_OBJ)) {
                if (Hash::check(Input::Validate('current_password'), $result->PASSWORD)) {

                    if (Input::Validate('password') == Input::Validate('c_password')) {
                        $data = [
                            'PASSWORD' => Hash::make(Input::Validate('password')),
                        ];
                        $result = $this->update('admin', $data, $this->where('ID', Input::Validate('id')));

                        if ($result) {
                            Redirect::to('manage-account', 'Changed password successfully!', 'success');
                        } else {
                            Redirect::to('manage-account', 'Changed password failed!', 'danger');
                        }
                    } else {
                        Redirect::to('manage-account', 'Password does not match!', 'danger');
                    }
                } else {
                    Redirect::to('manage-account', 'Current password is incorrect', 'danger');
                }
            }
        });
    }
}
