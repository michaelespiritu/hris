<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/course/create_course.php');

	//Create User Object
	$user = new User;
	//Create Course Object
	$course = new Course;
	//Create Validator Object
	$validate = new Validator;
	
	$template->profile = $user->getProfile();
	$template->courses = $course->getCourses();

	if(isset($_POST['create_btn'])){
		$data = array();
		$data['course_code'] = $_POST['course_code'];
		$data['course_name'] = $_POST['course_name'];
		
		//Required Fields
		$field_array = array('course_name', 'course_code');
		
		if($validate->isRequired($field_array)){
			if(courseCount($_POST['course_code']) == 0){
				if($course->register($data)){
					redirect('course.php', 'User successfully registered!', 'success');
				} else {
					redirect('create_course.php', 'Something went wrong with registration', 'error');
				}
			}else{
				redirect('create_course.php', 'Course Code already registered.', 'error');
			}
		} else {
			redirect('create_course.php', 'Please fill in all required fields', 'error');
		}
	}

	//Display template
	echo $template;
}else{
	redirect('index.php');
}