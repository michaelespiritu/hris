<?php 
class Validator{
	/*
	 *	Check Required Fields
	 */
	 public function isRequired($field_array){
		foreach($field_array as $field){
			if($_POST[''.$field.''] == ''){
				return false;
			}
		}
		return true;
	 }
	 
	 /*
	  *		Validate Email Field
	  */
	  public function isValidEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
		} else {
			return false;
		}
	  }
	  
  	/*
	*	Check Password Match
	*/
	public function passwordsMatch($pw1,$pw2){
		if($pw1 == $pw2){
			return true;
		} else {
			return false;
		}
	}  	  
  	/*
	*	Check Password Characters
	*/
	public function passwordsCharacters($pw){
		if(strlen($pw) >= 6 ){
			return true;
		} else {
			return false;
		}
	}  
  	/*
	*	Get Current Password
	*/
	public function checkPasswords($pw, $id){
		$db = new Database;
		$password = $pw;
		$db->query('SELECT * FROM users WHERE password = :password AND employee_id = :employee_id');
		$db->bind(':password', $password);
		$db->bind(':employee_id', $id);
		$rows = $db->resultset();
		//Get Count
		return $db->rowCount();
	}

}