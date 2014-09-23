<?php
require_once '../includes/rb.db.inc.php';

// fetch POSTed fields
$familyId = filter_input(INPUT_POST,'hdnFamilyId');
$studentFirstName = filter_input(INPUT_POST,'registerFirstName');
$studentLastName = filter_input(INPUT_POST,'registerLastName');
$studentDOB = filter_input(INPUT_POST,'registerDOB');

// fetch an empty record
$student = R::dispense('student');

// set fields
$student->first_name = $studentFirstName;
$student->last_name = $studentLastName;
$student->date_of_birth = $studentDOB;
$student->registration_date = date('Y-m-d');
$student->family_id = $familyId;
$student->active = 1;

// save record
R::store($student);

exit();
