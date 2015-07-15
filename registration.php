<?php require('core/init.php'); ?>

<?php
//Create Validator Object
$validate = new Validator;
//Create User Object
$user = new User;
	


if(isset($_POST['register'])){
	//Create Data Array
	$data = array();
	$data['first_name'] = $_POST['first_name'];
	$data['last_name'] = $_POST['last_name'];
	$data['address'] = $_POST['address'];
	$data['email'] = $_POST['email'];
	$data['contact_number'] = $_POST['contact_number'];
	$data['role'] = $_POST['role'];
	$data['employee_id'] = $_POST['employee_id'];
	$data['password'] = md5(quickRandom(6));
	
	//Required Fields
	$field_array = array('first_name','last_name','address','email', 'employee_id');
	
	if($validate->isRequired($field_array)){
		if($validate->isValidEmail($data['email'])){
				//Register User
				if($user->register($data)){
					redirect('profile.php', 'User successfully registered!', 'success');
				} else {
					redirect('profile.php', 'Something went wrong with registration', 'error');
				}
		} else {
			redirect('registration.php', 'Please use a valid email address', 'error');
		}
	} else {
		redirect('registration.php', 'Please fill in all required fields', 'error');
	}
}

//Get Template & Assign Vars
$template = new Template('templates/dashboard/registration.php');
$template->profile = $user->getProfile();
//Assign Vars

//Display template
echo $template;