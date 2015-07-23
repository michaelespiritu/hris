<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/leave/index.php');

	//Create User Object
	$user = new User;
	//Create Leave Object
	$leave = new Leave;
	//Create Leave Object
	$validate = new Validator;
	
	$template->profile = $user->getProfile();

	if(isset($_POST['leave_submit'])){
		//Create Data Array
		$data = array();
		$data['leave_type'] = $_POST['leave_type'];
		$data['from'] = date('Y-m-d', strtotime($_POST['from']));
		$data['to'] = date('Y-m-d', strtotime($_POST['to']));
		$data['body_message'] = $_POST['body_message'];
		
		//Required Fields
		$field_array = array('leave_type','from', 'to', 'body_message');
		
		if($validate->isRequired($field_array)){
			//Register User
			if($leave->leaverequest($data)){
				redirect('Leave.php', 'Leave Requested!', 'success');
			} else {
				redirect('leave.php', 'Something went wrong please try again.', 'error');
			}
		} else {
			redirect('leave.php', 'Please fill in all required fields', 'error');
		}
	}

	//Display template
	echo $template;
}else{
	redirect('index.php');
}