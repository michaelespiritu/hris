<?php require('core/init.php'); ?>

<?php
//Create User Object
$course = new Course;
$q = intval($_GET['q']);

$data = $course->getSubjectCourse($q);
echo $output = var_dump($data);