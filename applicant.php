<?php require('core/init.php'); ?>

<?php

if(!isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/applicant/applicant.php');
	//Create Validator Object
	$validate = new Validator;
	//Create Applicant Object
	$applicant = new Applicant;


	if(isset($_POST['form-submit'])){
		//Create Data Array
		$data = array();
		$data['p_q_1'] = $_POST['p_q_1'];
		$data['p_q_2'] = $_POST['p_q_2'];
		$data['p_q_3'] = $_POST['p_q_3'];
		$data['p_q_4'] = $_POST['p_q_4'];
		$data['p_q_5'] = $_POST['p_q_5'];
		$data['p_q_6'] = $_POST['p_q_6'];
		$data['p_q_7'] = $_POST['p_q_7'];
		$data['p_q_8'] = $_POST['p_q_8'];
		$data['p_q_9'] = $_POST['p_q_9'];
		$data['p_q_10'] = $_POST['p_q_10'];
		$data['p_q_11'] = $_POST['p_q_11'];
		$data['p_q_12'] = $_POST['p_q_12'];
		$data['p_q_13'] = $_POST['p_q_13'];
		$data['p_q_14'] = $_POST['p_q_14'];
		$data['p_q_15'] = $_POST['p_q_15'];
		$data['p_q_16'] = $_POST['p_q_16'];
		$data['p_q_17'] = $_POST['p_q_17'];
		$data['p_q_18'] = $_POST['p_q_18'];
		$data['p_q_19'] = $_POST['p_q_19'];
		$data['p_q_20'] = $_POST['p_q_20'];
		$data['p_q_21'] = $_POST['p_q_21'];
		$data['p_q_22'] = $_POST['p_q_22'];
		$data['p_q_23'] = $_POST['p_q_23'];
		$data['p_q_24'] = $_POST['p_q_24'];
		$data['p_q_25'] = $_POST['p_q_25'];
		$data['p_q_26'] = $_POST['p_q_26'];
		$data['p_q_27'] = $_POST['p_q_27'];
		$data['p_q_28'] = $_POST['p_q_28'];
		
		//Required Fields
		$field_array = array(
			'p_q_1', 
			'p_q_2',
			'p_q_3',
			'p_q_4',
			'p_q_5',
			'p_q_6',
			'p_q_7',
			'p_q_8',
			'p_q_9',
			'p_q_10',
			'p_q_11',
			'p_q_12',
			'p_q_13',
			'p_q_14',
			'p_q_15',
			'p_q_16',
			'p_q_17',
			'p_q_18',
			'p_q_19',
			'p_q_20',
			'p_q_21',
			'p_q_22',
			'p_q_23',
			'p_q_24',
			'p_q_25',
			'p_q_26',
			'p_q_27',
			'p_q_28',
		);
		
		if($validate->isRequired($field_array)){
			//Register User
			if($applicant->personal_info($data)){
				redirect('career.php', 'Personal Information Created', 'success');
			} else {
				redirect('applicant.php', 'Something went wrong please try again.', 'error');
			}
		} else {
			redirect('applicant.php', 'Please fill in all required fields', 'error');
		}
	}
	
	//Display template
	echo $template;
}else{
	redirect('profile.php');
}