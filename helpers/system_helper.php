<?php
/*
 * Redirect To Page
*/
function redirect($page = FALSE, $message = NULL, $message_type = NULL) {
	if (is_string ($page)) {
		$location = $page;
	} else {
		$location = $_SERVER ['SCRIPT_NAME'];
	}

	//Check For Message
	if($message != NULL){
		//Set Message
		$_SESSION['message'] = $message;
	}
	//Check For Type
	if($message_type != NULL){
		//Set Message Type
		$_SESSION['message_type'] = $message_type;
	}

	//Redirect
	header ('Location: '.$location);
	exit;
}

/*
 * Display Message
 */
function displayMessage(){
	if(!empty($_SESSION['message'])) {
		
		//Assign Message Var
		$message = $_SESSION['message'];
			
		if(!empty($_SESSION['message_type'])) {
			//Assign Type Var
			$message_type = $_SESSION['message_type'];
			//Create Output
			if ($message_type == 'error') {
				echo '<div class="alert alert-danger text-center">' . $message . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			} else {
				echo '<div class="alert alert-success text-center">' . $message . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}
		}
		//Unset Message
		unset($_SESSION['message'] );
		unset($_SESSION['message_type'] );
	} else {
		echo '';
	}
}

/*
 * Check If User Is Logged In
 */
function isLoggedIn(){
	if(isset($_SESSION['is_logged_in'])){
		return true;
	} else {
		return false;
	}
}

/*
 * Get Logged In User Info
*/
function getUser(){
	$userArray = array();
	$userArray['user_id'] = $_SESSION['user_id'];
	$userArray['employee_id'] = $_SESSION['employee_id'];
	$userArray['join_date'] = $_SESSION['join_date'];
	return $userArray;
}

/*
 * Generate Random string
*/
function quickRandom($length = 16){
    $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
}
/*
 * Generate Random string
*/
function getprofilepicture($path){
    if(!empty($path)){
    	$path = BASE_URI.$path;
    }else{
    	$path = BASE_URI.'images/avatar/unknown_man.jpg';
    }

    return $path;
}
/*
 * Generate Random string
*/
function getIncaseOfEmergency($data){
	$info = (array)$data;
    if(!empty($info['first_name']) && !empty($info['last_name']) && !empty($info['relationship'])  && !empty($info['contact_number'])  ){
    	$content = '
        <p><strong>Incase of emergency:</strong></p>
        <p>'.outputVariable($info['first_name']) .' '.outputVariable($info['last_name']).' ( '.outputVariable($info['relationship']).' )</p>
        <p>'.outputVariable($info['contact_number']).'</p>';
    }else{
    	$content = '';
    }

    return $content;
}


/*
* Output Variable
*/

function outputVariable($data){
	if(!empty($data)){
		$data = strip_tags(htmlspecialchars($data));
	}else{
		$data = '';
	}

	return $data;
}