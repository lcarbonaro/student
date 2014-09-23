<?php
require_once '../includes/rb.db.inc.php';

// fetch POSTed fields
$studentId = filter_input(INPUT_POST,'hdnId');
$studentFirstName = filter_input(INPUT_POST,'studentFirstName');
$studentLastName = filter_input(INPUT_POST,'studentLastName');
$studentDOB = filter_input(INPUT_POST,'studentDOB');
$studentRegDate = filter_input(INPUT_POST,'studentRegDate');
$studentActive = filter_input(INPUT_POST,'studentActive');

if ($studentId==0) {
    // fetch an empty record
    $student = R::dispense('student');
} else {
    // fetch the specific record    
    $student = R::findOne('student',' id=? ', array($studentId));
}

// set fields
$student->first_name = $studentFirstName;
$student->last_name = $studentLastName;
$student->date_of_birth = $studentDOB;
$student->registration_date = $studentRegDate;  
$student->active = isset($studentActive) ? 1 : 0;  

// save record
R::store($student);

exit();
