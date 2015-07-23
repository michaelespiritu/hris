<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/message/sent.php');

	//Create User Object
	$user = new User;
	//Create Validator Object
	$message = new Message;

	$template->profile = $user->getProfile();
	$template->sent = $message->sent();

	
	//Display template
	echo $template;
}else{
	redirect('index.php');
}