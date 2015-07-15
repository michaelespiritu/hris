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
				return true;
			} else {
				return false;
			}
			//echo $this->db->lastInsertId();

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
	 * User Logout
	*/
	public function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_id']);
		unset($_SESSION['employee_id']);
		unset($_SESSION['join_date']);
		return true;
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
	 * Get Emergency Contract # of loggedin User
	 */
	public function getEmergencyContact(){
		$id = $_SESSION['user_id'];
		$this->db->query('SELECT * FROM in_case_of_emergency WHERE user_id = '.$id);
		$row = $this->db->single();
		return $row;
	}
}