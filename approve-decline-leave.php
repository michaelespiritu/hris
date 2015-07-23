<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/leave/approve-decline-leave.php');

	//Create User Object
	$user = new User;
	//Create Leave Object
	$leave = new Leave;
	//Create Leave Object
	$validate = new Validator;
	
	$template->profile = $user->getProfile();
	$q = intval($_GET['leave']);
	$template->pendingadmin = $leave->pendingleavespecificviewadmin($q);
	if(isset($_POST['leave_submit'])){
		//Create Data Array
		$data = array();
		$data['accept'] = $_POST['accept'];
		$data['body_message'] = $_POST['body_message'];
		$data['message_id'] = $_POST['message_id'];
		
		//Required Fields
		$field_array = array('accept', 'body_message');
		
		if($validate->isRequired($field_array)){
			//Register User
			if($leave->decideleave($data, $q)){
				redirect('Leave.php', 'Leave Updated!', 'success');
			} else {
				redirect('approve-decline-leave.php', 'Something went wrong please try again.', 'error');
			}
		} else {
			redirect('approve-decline-leave.php', 'Please fill in all required fields', 'error');
		}
	}

	//Display template
	echo $template;
}else{
	redirect('index.php');
}