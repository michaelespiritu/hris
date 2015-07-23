<?php require('core/init.php'); ?>

<?php
$message = new Message;

if($message -> readmessage($_POST['id'])){
	echo 'good';
}else{
	echo 'no good';
}