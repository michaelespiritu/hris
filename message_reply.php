<?php require('core/init.php'); ?>

<?php

if(isLoggedIn()){
	//Get Template & Assign Vars
	$template = new Template('templates/dashboard/message/message_reply.php');

	//Create User Object
	$user = new User;	
	//Create Message Object
	$message = new Message;
	//Create Validator Object
	$validate = new Validator;
	$template->profile = $user->getProfile();

	$q = intval($_GET['message']);
	$template -> messagereply = $message->getMessageReply($q);

	if(isset($_POST['sent-btn'])){
		//Create Data Array
		$data = array();
		$data['recipient'] = $_POST['recipient'];
		$data['body_message'] = $_POST['body_message'];
		$data['title_message'] = $_POST['title_message'];
		$data['reply'] = $_POST['reply'];
		
		//Required Fields
		$field_array = array('recipient','body_message', 'title_message');
		
		if($validate->isRequired($field_array)){
			//Register User
			if($message->sendmessage($data)){
				redirect('message.php', 'Message Reply sent!', 'success');
			} else {
				redirect('message_reply.php?message='.$_POST['recipient'].'.php', 'Something went wrong please try again.', 'error');
			}
		} else {
			redirect('message_reply.php?message='.$_POST['recipient'].'.php', 'Please fill in all required fields', 'error');
		}
	}
	//Display template
	echo $template;
}else{
	redirect('index.php');
}