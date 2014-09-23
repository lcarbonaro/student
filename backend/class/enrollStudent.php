<?php
require_once '../includes/rb.db.inc.php';

// fetch POSTed fields
$classId = filter_input(INPUT_POST,'hdnClassId');
$studentId = filter_input(INPUT_POST,'hdnStudentId');

// enroll student in class
$class = R::load('class',$classId);  
$student = R::load('student',$studentId); 
$student->sharedClassList[] = $class;
R::store($student);

exit();
