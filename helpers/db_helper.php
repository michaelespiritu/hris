<?php
/*
 *	Get if user exist
 */
function userCount($employee_id){
	$db = new Database;
	$db->query('SELECT * FROM users WHERE employee_id = :employee_id');
	$db->bind(':employee_id', $employee_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	return $db->rowCount();
}

/*
 *	Get if course exist
 */
function courseCount($course_code){
	$db = new Database;
	$db->query('SELECT * FROM courses WHERE course_code = :course_code');
	$db->bind(':course_code', $course_code);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	return $db->rowCount();
}