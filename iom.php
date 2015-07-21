<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/settings/iom.php');

	//Create User Object
	$user = new User;
	//Create Validator Object
	$validate = new Validator;
	
	$template->profile = $user->getEmergencyContact();

	if(isset($_POST['update_submit'])){
		$data = array();
		$data['first_name'] = $_POST['first_name'];
		$data['last_name'] = $_POST['last_name'];
		$data['relationship'] = $_POST['relationship'];
		$data['contact_number'] = $_POST['contact_number'];
		
		$field_array = array('first_name','last_name','relationship', 'contact_number');

		if($validate->isRequired($field_array)){
			if($user->updateIOM($data, getUser()['user_id'])){
				redirect('index.php', 'Profile of emegency contact saved!');
			} else {
				redirect('index.php', 'Something went wrong try again later.', 'error');
			}
		} else {
			redirect('iom.php', 'Please fill in all required fields', 'error');
		}
	}
	//Display template
	echo $template;
}else{
	redirect('index.php');
}