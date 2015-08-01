<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/activity/create-activity.php');

	//Create User Object
	$user = new User;
	$activity = new Activity;
	$validate = new Validator;
	$template->profile = $user->getProfile();
	$template->getEmergencyContact = $user->getEmergencyContact();
	$template->employee = $user->getEmployee();

	if($user->getProfile()->role == 1){
		$template = $template;
	}else{
		redirect('activity.php');
	} 

	if(isset($_POST['activity_submit'])){
		//Create Data Array
		$data = array();
		$data['activity_title'] = $_POST['activity_title'];
		$data['from'] = date('Y-m-d', strtotime($_POST['from']));
		$data['to'] = date('Y-m-d', strtotime($_POST['to']));
		$data['body_message'] = $_POST['body_message'];
		
		//Required Fields
		$field_array = array('activity_title','from', 'to', 'body_message');
		
		if($validate->isRequired($field_array)){
			//Register User
			if($activity->register_activity($data)){
				redirect('activity.php', 'Activity Created', 'success');
			} else {
				redirect('activity.php', 'Something went wrong please try again.', 'error');
			}
		} else {
			redirect('activity.php', 'Please fill in all required fields', 'error');
		}
	}
	//Display template
	echo $template;
}else{
	redirect('index.php');
}