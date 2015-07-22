<?php
class Course {
	//Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }


	/*
	* Get All Course
	*/

	public function getCourses(){
		$this->db->query('SELECT * FROM courses ORDER BY course_title ASC');
		$rows = $this->db->resultset();
		return $rows;
	}

	/*
	* Register Course
	*/

	public function register($data){
			//Insert Query
			$this->db->query('INSERT INTO courses (course_code, course_title) 
											VALUES (:course_code, :course_name)');

			$this->db->bind(':course_code', $data['course_code']);
			$this->db->bind(':course_name', $data['course_name']);
			
			//Execute
			if($this->db->execute()){
				return true;
				 
			} else {
				return false;
			}
	}

	
	/*
	 * Get Profile of Subject Search
	 */
	public function getSubjectCourse($code){
		$this->db->query('SELECT * FROM courses WHERE course_code = '.$code );
		//$this->db->bind(':course_code', $id);
		$row = $this->db->single();
		return $code;
	}		



}