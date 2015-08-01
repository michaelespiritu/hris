<?php
class Activity {
	//Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }


 	/*
	* Create Activity
	*/

	public function register_activity($data){
		$this->db->query('INSERT INTO activities (activity_title, start_date, end_date, note) 
										VALUES (:activity_title, :start_date, :end_date, :note)');

		$this->db->bind(':activity_title', $data['activity_title']);
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
	* View All Leave
	*/

	public function all_activity(){
		//Select Query
		$this->db->query('SELECT activities.start_date AS start, DATE_ADD(activities.end_date,INTERVAL 1 DAY) AS end, activities.activity_title AS title FROM activities' );
		$rows = $this->db->resultset();
		return $rows;

	}

	/*

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL,
  `activity_title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `note` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
	*/

}