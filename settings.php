<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/settings.php');

	//Create User Object
	$user = new User;
	
	$template->profile = $user->getProfile();
	//Display template
	echo $template;
}else{
	redirect('index.php');
}