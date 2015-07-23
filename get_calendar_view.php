<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/leave/all_leave.php');

	//Create User Object
	$user = new User;
	//Create Leave Object
	$leave = new Leave;
	
	$template->profile = $user->getProfile();
	$template->all = $leave->all_leave();

	//Display template
	echo json_encode($leave->all_leave());
}else{
	redirect('index.php');
}