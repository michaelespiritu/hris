<?php require('core/init.php'); ?>

<?php

if(!isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/login.php');

	//Display template
	echo $template;
}else{
	redirect('profile.php');
}