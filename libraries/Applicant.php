<?php
class Applicant {
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

	public function personal_info($data){
		$this->db->query('INSERT INTO applicants (p_q_1, p_q_2, p_q_3, p_q_4, p_q_5, p_q_6, p_q_7, p_q_8, p_q_9, p_q_10, p_q_11, p_q_12, p_q_13, p_q_14, p_q_15, p_q_16, p_q_17, p_q_18, p_q_19, p_q_20, p_q_21, p_q_22, p_q_23, p_q_24, p_q_25, p_q_26, p_q_27, p_q_28) 
										VALUES (:p_q_1, :p_q_2, :p_q_3, :p_q_4, :p_q_5, :p_q_6, :p_q_7, :p_q_8, :p_q_9, :p_q_10, :p_q_11, :p_q_12, :p_q_13, :p_q_14, :p_q_15, :p_q_16, :p_q_17, :p_q_18, :p_q_19, :p_q_20, :p_q_21, :p_q_22, :p_q_23, :p_q_24, :p_q_25, :p_q_26, :p_q_27, :p_q_28);');

		$this->db->bind(':p_q_1', $data['p_q_1']);
		$this->db->bind(':p_q_2', $data['p_q_2']);
		$this->db->bind(':p_q_3', $data['p_q_3']);
		$this->db->bind(':p_q_4', $data['p_q_4']);
		$this->db->bind(':p_q_5', $data['p_q_5']);
		$this->db->bind(':p_q_6', $data['p_q_6']);
		$this->db->bind(':p_q_7', $data['p_q_7']);
		$this->db->bind(':p_q_8', $data['p_q_8']);
		$this->db->bind(':p_q_9', $data['p_q_9']);
		$this->db->bind(':p_q_10', $data['p_q_10']);
		$this->db->bind(':p_q_11', $data['p_q_11']);
		$this->db->bind(':p_q_12', $data['p_q_12']);
		$this->db->bind(':p_q_13', $data['p_q_13']);
		$this->db->bind(':p_q_14', $data['p_q_14']);
		$this->db->bind(':p_q_15', $data['p_q_15']);
		$this->db->bind(':p_q_16', $data['p_q_16']);
		$this->db->bind(':p_q_17', $data['p_q_17']);
		$this->db->bind(':p_q_18', $data['p_q_18']);
		$this->db->bind(':p_q_19', $data['p_q_19']);
		$this->db->bind(':p_q_20', $data['p_q_20']);
		$this->db->bind(':p_q_21', $data['p_q_21']);
		$this->db->bind(':p_q_22', $data['p_q_22']);
		$this->db->bind(':p_q_23', $data['p_q_23']);
		$this->db->bind(':p_q_24', $data['p_q_24']);
		$this->db->bind(':p_q_25', $data['p_q_25']);
		$this->db->bind(':p_q_26', $data['p_q_26']);
		$this->db->bind(':p_q_27', $data['p_q_27']);
		$this->db->bind(':p_q_28', $data['p_q_28']);
		
		//Execute
		if($this->db->execute()){
			return $this->career_register($id);
			 
		} else {
			return false;
		}

	}

	public function career_register($id){
		$this->db->query('INSERT INTO career (applicant_id, p_q_1, p_q_2, p_q_3, p_q_4, p_q_5, p_q_6, p_q_7, p_q_8, p_q_9, p_q_10, p_q_11, p_q_12, p_q_13, p_q_14, p_q_15, p_q_16, p_q_17, p_q_18, p_q_19, p_q_20, p_q_21, p_q_22, p_q_23, p_q_24, p_q_25, p_q_26, p_q_27, p_q_28, p_q_29, p_q_30, p_q_31, p_q_32, p_q_33, p_q_34, p_q_35, p_q_36, p_q_37, p_q_38, p_q_39, p_q_40, p_q_41, p_q_42, p_q_43, p_q_44, p_q_45, p_q_46, p_q_47, p_q_48, p_q_49, p_q_50, p_q_51, p_q_52) 
										VALUES (:id, :p_q_1, :p_q_2, :p_q_3, :p_q_4, :p_q_5, :p_q_6, :p_q_7, :p_q_8, :p_q_9, :p_q_10, :p_q_11, :p_q_12, :p_q_13, :p_q_14, :p_q_15, :p_q_16, :p_q_17, :p_q_18, :p_q_19, :p_q_20, :p_q_21, :p_q_22, :p_q_23, :p_q_24, :p_q_25, :p_q_26, :p_q_27, :p_q_28, :p_q_29, :p_q_30, :p_q_31, :p_q_32, :p_q_33, :p_q_34, :p_q_35, :p_q_36, :p_q_37, :p_q_38, :p_q_39, :p_q_40, :p_q_41, :p_q_42, :p_q_43, :p_q_44, :p_q_45, :p_q_46, :p_q_47, :p_q_48, :p_q_49, :p_q_50, :p_q_51, :p_q_52)');

		$this->db->bind(':id', $id);
		$this->db->bind(':p_q_1', '-');
		$this->db->bind(':p_q_2', '-');
		$this->db->bind(':p_q_3', '-');
		$this->db->bind(':p_q_4', '-');
		$this->db->bind(':p_q_5', '-');
		$this->db->bind(':p_q_6', '-');
		$this->db->bind(':p_q_7', '-');
		$this->db->bind(':p_q_8', '-');
		$this->db->bind(':p_q_9', '-');
		$this->db->bind(':p_q_10', '-');
		$this->db->bind(':p_q_11', '-');
		$this->db->bind(':p_q_12', '-');
		$this->db->bind(':p_q_13', '-');
		$this->db->bind(':p_q_14', '-');
		$this->db->bind(':p_q_15', '-');
		$this->db->bind(':p_q_16', '-');
		$this->db->bind(':p_q_17', '-');
		$this->db->bind(':p_q_18', '-');
		$this->db->bind(':p_q_19', '-');
		$this->db->bind(':p_q_20', '-');
		$this->db->bind(':p_q_21', '-');
		$this->db->bind(':p_q_22', '-');
		$this->db->bind(':p_q_23', '-');
		$this->db->bind(':p_q_24', '-');
		$this->db->bind(':p_q_25', '-');
		$this->db->bind(':p_q_26', '-');
		$this->db->bind(':p_q_27', '-');
		$this->db->bind(':p_q_28', '-');
		$this->db->bind(':p_q_29', '-');
		$this->db->bind(':p_q_30', '-');
		$this->db->bind(':p_q_31', '-');
		$this->db->bind(':p_q_32', '-');
		$this->db->bind(':p_q_33', '-');
		$this->db->bind(':p_q_34', '-');
		$this->db->bind(':p_q_35', '-');
		$this->db->bind(':p_q_36', '-');
		$this->db->bind(':p_q_37', '-');
		$this->db->bind(':p_q_38', '-');
		$this->db->bind(':p_q_39', '-');
		$this->db->bind(':p_q_40', '-');
		$this->db->bind(':p_q_41', '-');
		$this->db->bind(':p_q_42', '-');
		$this->db->bind(':p_q_43', '-');
		$this->db->bind(':p_q_44', '-');
		$this->db->bind(':p_q_45', '-');
		$this->db->bind(':p_q_46', '-');
		$this->db->bind(':p_q_47', '-');
		$this->db->bind(':p_q_48', '-');
		$this->db->bind(':p_q_49', '-');
		$this->db->bind(':p_q_50', '-');
		$this->db->bind(':p_q_51', '-');
		$this->db->bind(':p_q_52', '-');
		
		//Execute
		if($this->db->execute()){
			return true;
			 
		} else {
			return false;
		}

	}public function career_update($data){
		$this->db->query('INSERT INTO career (p_q_1, p_q_2, p_q_3, p_q_4, p_q_5, p_q_6, p_q_7, p_q_8, p_q_9, p_q_10, p_q_11, p_q_12, p_q_13, p_q_14, p_q_15, p_q_16, p_q_17, p_q_18, p_q_19, p_q_20, p_q_21, p_q_22, p_q_23, p_q_24, p_q_25, p_q_26, p_q_27, p_q_28, p_q_29, p_q_30, p_q_31, p_q_32, p_q_33, p_q_34, p_q_35, p_q_36, p_q_37, p_q_38, p_q_39, p_q_40, p_q_41, p_q_42, p_q_43, p_q_44, p_q_45, p_q_46, p_q_47, p_q_48, p_q_49, p_q_50, p_q_51, p_q_52) 
										VALUES (:p_q_1, :p_q_2, :p_q_3, :p_q_4, :p_q_5, :p_q_6, :p_q_7, :p_q_8, :p_q_9, :p_q_10, :p_q_11, :p_q_12, :p_q_13, :p_q_14, :p_q_15, :p_q_16, :p_q_17, :p_q_18, :p_q_19, :p_q_20, :p_q_21, :p_q_22, :p_q_23, :p_q_24, :p_q_25, :p_q_26, :p_q_27, :p_q_28, :p_q_29, :p_q_30, :p_q_31, :p_q_32, :p_q_33, :p_q_34, :p_q_35, :p_q_36, :p_q_37, :p_q_38, :p_q_39, :p_q_40, :p_q_41, :p_q_42, :p_q_43, :p_q_44, :p_q_45, :p_q_46, :p_q_47, :p_q_48, :p_q_49, :p_q_50, :p_q_51, :p_q_52)');

		$this->db->bind(':id', $id);
		$this->db->bind(':p_q_1', $data['p_q_1']);
		$this->db->bind(':p_q_2', $data['p_q_2']);
		$this->db->bind(':p_q_3', $data['p_q_3']);
		$this->db->bind(':p_q_4', $data['p_q_4']);
		$this->db->bind(':p_q_5', $data['p_q_5']);
		$this->db->bind(':p_q_6', $data['p_q_6']);
		$this->db->bind(':p_q_7', $data['p_q_7']);
		$this->db->bind(':p_q_8', $data['p_q_8']);
		$this->db->bind(':p_q_9', $data['p_q_9']);
		$this->db->bind(':p_q_10', $data['p_q_10']);
		$this->db->bind(':p_q_11', $data['p_q_11']);
		$this->db->bind(':p_q_12', $data['p_q_12']);
		$this->db->bind(':p_q_13', $data['p_q_13']);
		$this->db->bind(':p_q_14', $data['p_q_14']);
		$this->db->bind(':p_q_15', $data['p_q_15']);
		$this->db->bind(':p_q_16', $data['p_q_16']);
		$this->db->bind(':p_q_17', $data['p_q_17']);
		$this->db->bind(':p_q_18', $data['p_q_18']);
		$this->db->bind(':p_q_19', $data['p_q_19']);
		$this->db->bind(':p_q_20', $data['p_q_20']);
		$this->db->bind(':p_q_21', $data['p_q_21']);
		$this->db->bind(':p_q_22', $data['p_q_22']);
		$this->db->bind(':p_q_23', $data['p_q_23']);
		$this->db->bind(':p_q_24', $data['p_q_24']);
		$this->db->bind(':p_q_25', $data['p_q_25']);
		$this->db->bind(':p_q_26', $data['p_q_26']);
		$this->db->bind(':p_q_27', $data['p_q_27']);
		$this->db->bind(':p_q_28', $data['p_q_28']);
		$this->db->bind(':p_q_29', $data['p_q_29']);
		$this->db->bind(':p_q_30', $data['p_q_30']);
		$this->db->bind(':p_q_31', $data['p_q_31']);
		$this->db->bind(':p_q_32', $data['p_q_32']);
		$this->db->bind(':p_q_33', $data['p_q_33']);
		$this->db->bind(':p_q_34', $data['p_q_34']);
		$this->db->bind(':p_q_35', $data['p_q_35']);
		$this->db->bind(':p_q_36', $data['p_q_36']);
		$this->db->bind(':p_q_37', $data['p_q_37']);
		$this->db->bind(':p_q_38', $data['p_q_38']);
		$this->db->bind(':p_q_39', $data['p_q_39']);
		$this->db->bind(':p_q_40', $data['p_q_40']);
		$this->db->bind(':p_q_41', $data['p_q_41']);
		$this->db->bind(':p_q_42', $data['p_q_42']);
		$this->db->bind(':p_q_43', $data['p_q_43']);
		$this->db->bind(':p_q_44', $data['p_q_44']);
		$this->db->bind(':p_q_45', $data['p_q_45']);
		$this->db->bind(':p_q_46', $data['p_q_46']);
		$this->db->bind(':p_q_47', $data['p_q_47']);
		$this->db->bind(':p_q_48', $data['p_q_48']);
		$this->db->bind(':p_q_49', $data['p_q_49']);
		$this->db->bind(':p_q_50', $data['p_q_50']);
		$this->db->bind(':p_q_51', $data['p_q_51']);
		$this->db->bind(':p_q_52', $data['p_q_52']);
		
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


}