<?php include('core/init.php'); ?>

<?php
	if(isset($_POST['login_submit'])){
		//Get Vars
		$employee_id = $_POST['employee_id'];
		$password = md5($_POST['password']);
		
		//Create User Object
		$user = new User;
		
		if($user->login($employee_id, $password)){
			redirect('profile.php','You have been logged in','success');
		} else {
			redirect('index.php','Incorrect Information','error');
		}
	} else {
		redirect('index.php');
	}