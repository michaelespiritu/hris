<?php
class Leave {
	//Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }

	/*
	* View All Leave
	*/

	public function all_leave(){
		//Select Query
		$this->db->query('SELECT leaves.start_date AS start, DATE_ADD(leaves.end_date,INTERVAL 1 DAY) AS end, CONCAT(profiles.first_name, profiles.last_name) AS title FROM leaves INNER JOIN profiles ON leaves.approve = 1 AND profiles.user_id = leaves.user_id ORDER BY leaves.created_at DESC');
		$rows = $this->db->resultset();
		return $rows;

	}
 	/*
	* Request Leave
	*/

	public function leaverequest($data){
		//Insert Query
		//var_dump($data); die;
		$this->db->query('INSERT INTO leaves (user_id, start_date, end_date, leave_type, comment, approve) 
										VALUES (:user_id, :start_date, :end_date, :leave_type, :note, 0)');

		$this->db->bind(':user_id', getUser()['user_id']);
		$this->db->bind(':leave_type', $data['leave_type']);
		$this->db->bind(':start_date', $data['from']);
		$this->db->bind(':end_date', $data['to']);
		$this->db->bind(':note', $data['body_message']);
		
		//Execute
		if($this->db->execute()){
			return true;
			 
		} else {
			return false;
		}
	}
	/*
	* Pending Leave View
	*/

	public function pendingleaveview(){
		//Select Query
		$this->db->query('SELECT leaves.*, profiles.first_name, profiles.last_name FROM leaves INNER JOIN profiles ON leaves.user_id = :user_id AND profiles.user_id = leaves.user_id ORDER BY leaves.created_at DESC');
		//$this->db->query('SELECT messages.* FROM messages WHERE message_to_id = :message_to_id');
		$this->db->bind(':user_id', getUser()['user_id']);
		$rows = $this->db->resultset();
		return $rows;

	}
	/*
	* Pending Leave View Admin
	*/

	public function pendingleaveviewadmin(){
		//Select Query
		$this->db->query('SELECT leaves.*, profiles.first_name, profiles.last_name FROM leaves INNER JOIN profiles ON leaves.approve = 0 AND profiles.user_id = leaves.user_id ORDER BY leaves.created_at DESC');
		$rows = $this->db->resultset();
		return $rows;

	}

	/*
	* Pending Leave View Specific Person Admin
	*/

	public function pendingleavespecificviewadmin($q){
		//Select Query
		$this->db->query('SELECT leaves.*, profiles.first_name, profiles.last_name FROM leaves INNER JOIN profiles ON leaves.id = :id AND profiles.user_id = leaves.user_id ORDER BY leaves.created_at DESC');
		$this->db->bind(':id',$q);
		$rows = $this->db->single();
		return $rows;

	}
	/*
	* Approve or decline Leave
	*/

	public function decideleave($data){
		$this->db->query('UPDATE leaves SET approve = :accept, admin_comment = :body_message WHERE id = :message_id');
		$this->db->bind(':accept', $data['accept']);
		$this->db->bind(':body_message', $data['body_message']);
		$this->db->bind(':message_id', $data['message_id']);
		//Execute
		if($this->db->execute()){
			return true;
			 
		} else {
			return false;
		}

	}


}