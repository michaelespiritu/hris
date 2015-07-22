<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/message/inbox.php');

	//Create User Object
	$user = new User;
	//Create Validator Object
	$message = new Message;

	$template->profile = $user->getProfile();
	$template->inbox = $message->inbox();

	
	//Display template
	echo $template;
}else{
	redirect('index.php');
}