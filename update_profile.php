<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/settings/update_profile.php');

	//Create User Object
	$user = new User;
	//Create Validator Object
	$validate = new Validator;

	$template->profile = $user->getProfile();
	//Display template
	echo $template;


	if(isset($_POST['update_submit'])){
		$data = array();
		$data['first_name'] = $_POST['first_name'];
		$data['last_name'] = $_POST['last_name'];
		$data['address'] = $_POST['address'];
		$data['email'] = $_POST['email'];
		$data['contact_number'] = $_POST['contact_number'];
		
		$field_array = array('first_name','last_name','address','email', 'contact_number');

		if($validate->isRequired($field_array)){
			if($validate->isValidEmail($data['email'])){
				if($user->updateProfile($data, getUser()['user_id'])){
					redirect('index.php', 'Profile successfully changed!');
				} else {
					redirect('index.php', 'Something went wrong try again later.', 'error');
				}
			} else {
				redirect('update_profile.php', 'Please use a valid email address', 'error');
			}
		} else {
			redirect('update_profile.php', 'Please fill in all required fields', 'error');
		}
	}
}else{
	redirect('index.php');
}
