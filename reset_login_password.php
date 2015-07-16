<?php include('core/init.php'); ?>

<?php

//Create Object
$validate = new Validator;
$user = new User;

if(isset($_POST['submit_button'])){
	//Get Vars
	$data = array();
	$data['current_password'] = md5($_POST['current_password']);
	$data['new_password'] = $_POST['new_password'];
	$data['confirm_password'] = $_POST['confirm_password'];
	
	$field_array = array('current_password', 'new_password', 'confirm_password');
	if($validate->isRequired($field_array)){	
		if($validate->passwordsMatch($data['new_password'], $data['confirm_password'])){
			if($validate->passwordsCharacters($data['new_password'])){
				if($validate->checkPasswords($data['current_password'], getUser()['employee_id']) == 1){
					if($user->resetPassword(md5($data['new_password']), getUser()['employee_id'])){
						redirect('profile.php', 'Password successfully changed! Please login again', 'success');
					} else {
						redirect('profile.php', 'Something went wrong try again later.', 'error');
					}
				}else{
					redirect('settings.php','Current Password not match!','error');
				}
			}else{
				redirect('settings.php','Password must atleast be 6 characters!','error');
			}
		}else{
			redirect('settings.php','New Password Not Match!','error');
		}			
	}else{
		redirect('settings.php', 'Please fill in all required fields', 'error');
	}
	

} else {
	redirect('index.php');
}