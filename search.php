<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/search/search.php');

	//Create User Object
	$user = new User;
	$template->profile = $user->getProfile();
	$template->employee = $user->getEmployee();
	//Display template
	echo $template;
}else{
	redirect('index.php');
}