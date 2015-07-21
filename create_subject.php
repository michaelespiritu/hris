<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/course/create_subject.php');

	//Create User Object
	$user = new User;
	//Create Validator Object
	$validate = new Validator;
	
	$template->profile = $user->getProfile();

	
	if(isset($_POST['create_btn'])){
		$x = 0;
		$total = $_POST['total_count'];
		while($x != $total){
			$x++;
			echo $_POST['subject_name_'.$x];
		}
	}
	//Display template
	echo $template;
}else{
	redirect('index.php');
}