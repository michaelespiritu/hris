<?php 
class User{
	//Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }
	 
	/*
	 * Register User
	 */
	public function register($data){

			//Insert Query
			$this->db->query('INSERT INTO users (employee_id, password) 
											VALUES (:employee_id, :password)');

			$this->db->bind(':employee_id', $data['employee_id']);
			$this->db->bind(':password', $data['password']);
			
			//Execute
			if($this->db->execute()){
				return $this->registerprofile($data, $this->db->lastInsertId());
				 
			} else {
				return false;
			}
			//echo $this->db->lastInsertId();

	}
	 
	/*
	 * Register Profile
	 */
	public function registerprofile($data, $id){
			//Insert Query
			$this->db->query('INSERT INTO profiles (user_id, first_name, last_name, email, address, contact_number, role) 
											VALUES ('.$id.', :first_name, :last_name, :email, :address, :contact_number, :role)');
			$this->db->bind(':first_name', $data['first_name']);
			$this->db->bind(':last_name', $data['last_name']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':address', $data['address']);
			$this->db->bind(':contact_number', $data['contact_number']);
			$this->db->bind(':role', $data['role']);
			//Execute
			if($this->db->execute()){
				return $this->register_incase_of_emergency($id);
				 
			} else {
				return false;
			}
	}
	 
	/*
	 * Register Contact Person in Emergency
	 */
	public function register_incase_of_emergency($id){
		$this->db->query('INSERT INTO in_case_of_emergency (user_id) 
											VALUES (:user_id)');
		$this->db->bind(':user_id', $id);
		if($this->db->execute()){
			return true;
			 
		} else {
			return false;
		}
	}
	
	/*
	 * Upload User Avatar
	 */
	public function uploadAvatar(){
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["avatar"]["name"]);
		$extension = end($temp);
		if ((($_FILES["avatar"]["type"] == "image/gif")
				|| ($_FILES["avatar"]["type"] == "image/jpeg")
				|| ($_FILES["avatar"]["type"] == "image/jpg")
				|| ($_FILES["avatar"]["type"] == "image/pjpeg")
				|| ($_FILES["avatar"]["type"] == "image/x-png")
				|| ($_FILES["avatar"]["type"] == "image/png"))
				&& ($_FILES["avatar"]["size"] < 100000)
				&& in_array($extension, $allowedExts)) {
			if ($_FILES["avatar"]["error"] > 0) {
				redirect('register.php', $_FILES["avatar"]["error"], 'error');
			} else {
				if (file_exists("images/avatars/" . $_FILES["avatar"]["name"])) {
					redirect('register.php', 'File already exists', 'error');
				} else {
					move_uploaded_file($_FILES["avatar"]["tmp_name"],
					"images/avatars/" . $_FILES["avatar"]["name"]);
					
					return true;
				}
			}
		} else {
			redirect('register.php', 'Invalid File Type!', 'error');
		}
	}
	
	/*
	 * User Login
	 */
	public function login($employee_id, $password){
		$this->db->query("SELECT * FROM users
									WHERE employee_id = :employee_id
									AND password = :password			
		");
		
		//Bind Values
		$this->db->bind(':employee_id', $employee_id);
		$this->db->bind(':password', $password);
		
		$row = $this->db->single();

		//Check Rows
		if($this->db->rowCount() > 0){
			$this->setUserData($row);
			return true;
		} else {
			return false;
		}
	}
	
	/*
	 * Set User Data
	 */
	private function setUserData($row){
		$_SESSION['is_logged_in'] = true;
		$_SESSION['user_id'] = $row->id;
		$_SESSION['employee_id'] = $row->employee_id;
		$_SESSION['join_date'] = $row->join_date;
	}

	
	/*
	 * Get Total # Of Users
	 */
	public function getTotalUsers(){
		$this->db->query('SELECT * FROM users');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}
	
	/*
	 * Get Profile of loggedin User
	 */
	public function getProfile(){
		$id = $_SESSION['user_id'];
		$this->db->query('SELECT * FROM profiles WHERE user_id = '.$id);
		$row = $this->db->single();
		return $row;
	}	
	/*
	 * Get Emergency Contact # of loggedin User
	 */
	public function getEmergencyContact(){
		$id = $_SESSION['user_id'];
		$this->db->query('SELECT * FROM in_case_of_emergency WHERE user_id = '.$id);
		$row = $this->db->single();
		return $row;
	}
	/*
	 * Reset Password
	 */
	public function resetPassword($password, $employee_id){
		$this->db->query('UPDATE users SET password = :password WHERE id= :employee_id');
		$this->db->bind(':password', $password);
		$this->db->bind(':employee_id', $employee_id);
		$row = $this->db->execute();
		return $this->logout();
	}



	/*
	 * User Logout
	*/
	public function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_id']);
		unset($_SESSION['employee_id']);
		unset($_SESSION['join_date']);
		return true;
	}
}