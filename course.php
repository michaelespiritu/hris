<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/course/course.php');

	//Create User Object
	$user = new User;
	//Create Course Object
	$course = new Course;
	//Create Validator Object
	$validate = new Validator;
	
	$template->profile = $user->getProfile();
	$template->courses = $course->getCourses();

	//Display template
	echo $template;
}else{
	redirect('index.php');
}