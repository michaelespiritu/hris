<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/leave/index.php');

	//Create User Object
	$user = new User;
	//Create Leave Object
	$activity = new Activity;
	
	$template->profile = $user->getProfile();
	$template->all = $activity->all_activity();

	//Display template
	echo json_encode($activity->all_activity());
}else{
	redirect('index.php');
}