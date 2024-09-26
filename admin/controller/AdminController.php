<?php

include './config/autoload.php';
class AdminController extends Controller
{

	public function Login()
	{
		Request::method('login', function () {

			$data = [
				'EMAIL' => Input::Validate('email'),
			];
			$query = $this->select('admin', $data);

			if ($result = $query->fetch(PDO::FETCH_OBJ)) {
				if (Hash::check(Input::Validate('password'), $result->PASSWORD)) {

					Session::put('isAuth', true);
					Session::put('id', $result->ID);
					Session::put('fullname', $result->FULLNAME);
					Session::put('username', $result->USERNAME);
					Session::put('email', $result->EMAIL);
					Session::put('password', $result->PASSWORD);
					Session::put('image', $result->IMAGE);
					Redirect::to('dashboard');
				} else {
					Redirect::to('index', 'Email or Password is incorrect!', 'danger');
				}
			} else {
				Redirect::to('index', 'Email not found!', 'danger');
			}
		});
	}

	public function Register()
	{
		Request::method('register', function () {

			$file = new File;
			$file->file('image');
			$image = $file->name();
			if ($file->validate()) {

				$data = [
					'EMAIL' => Input::Validate('email'),
				];

				$query = $this->select('admin', $data);

				if ($query->rowCount() > 0) {
					Redirect::to('register', 'Email is already exist!', 'warning');
				} else {
					if (Input::Validate('password') == Input::Validate('c_password')) {
						$data = [
							'FULLNAME' => Input::Validate('fullname'),
							'IMAGE' => $image,
							'USERNAME' => Input::Validate('username'),
							'EMAIL' => Input::Validate('email'),
							'PASSWORD' => Hash::make(Input::Validate('password')),
						];
						$result = $this->save('admin', $data);

						if ($result) {
							$file->upload();
							Redirect::to('index', 'Created account successfully!', 'success');
						} else {
							Redirect::to('register', 'Created account failed!', 'danger');
						}
					} else {
						Redirect::to('register', 'Password does not match!', 'danger');
					}
				}
			} else {
				Redirect::to('register', 'Wrong extension!', 'danger');
			}
		});
	}
	public function Total_Admin()
	{
		$admin = $this->selectAll('admin');
		$count = $admin->rowCount();
		return $count;
	}
	public function Total_Employees()
	{
		$admin = $this->selectAll('employees');
		$count = $admin->rowCount();
		return $count;
	}
}
