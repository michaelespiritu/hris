<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/leave/my_leave.php');

	//Create User Object
	$user = new User;
	//Create Leave Object
	$leave = new Leave;
	//Create Leave Object
	$validate = new Validator;
	
	$template->profile = $user->getProfile();
	$template->pendings = $leave->pendingleaveview();
	$template->pendingsadmin = $leave->pendingleaveviewadmin();

	//Display template
	echo $template;
}else{
	redirect('index.php');
}