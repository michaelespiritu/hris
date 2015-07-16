<?php
/*
 *	Get # of replies per topic
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