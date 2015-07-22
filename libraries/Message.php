<?php
class Message {
	//Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }


	 /*
	 * Get All Inbox
	 */
	 public function inbox(){
	 	//Select Query
		$this->db->query('SELECT messages.*, profiles.* FROM messages INNER JOIN profiles ON messages.message_to_id = :message_to_id AND profiles.user_id = messages.message_from_id');
		//$this->db->query('SELECT messages.* FROM messages WHERE message_to_id = :message_to_id');
		$this->db->bind(':message_to_id', getUser()['user_id']);
		$rows = $this->db->resultset();
		return $rows;
	 }

	 /*
	 * Get All Sent
	 */
	 public function sent(){
	 	//Select Query
		$this->db->query('SELECT * FROM messages WHERE message_from_id = :message_from_id');
		$this->db->bind(':message_from_id', getUser()['user_id']);
		$rows = $this->db->resultset();
		return $rows;
	 }

	 /*
	 * Send Message
	 */
	 public function sendmessage($data){
		//Insert Query
		$this->db->query('INSERT INTO messages (message_from_id, message_to_id, message_body) 
										VALUES (:message_from_id, :message_to_id, :message_body)');

		$this->db->bind(':message_from_id', getUser()['user_id']);
		$this->db->bind(':message_to_id', $data['recipient']);
		$this->db->bind(':message_body', $data['body_message']);
		
		//Execute
		if($this->db->execute()){
			return true;
			 
		} else {
			return false;
		}
	 }


}