<?php
/*
 * Format Date
 */
function formatDate($date){
	$date = date("F d, Y",strtotime($date));
	return $date;
}
