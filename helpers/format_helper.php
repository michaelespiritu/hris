<?php
/*
 * Format Date
 */
function formatDate($date){
	$date = date("F d, Y",strtotime($date));
	return $date;
}
/*
 * Format Date Time
 */
function formatDateTime($date){
	$date = date("F d, Y @ h:i:s",strtotime($date));
	return $date;
}
