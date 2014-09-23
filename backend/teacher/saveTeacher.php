<?php
require_once '../includes/rb.db.inc.php';

$teacherId = filter_input(INPUT_POST,'hdnId');
$teacherFirstName = filter_input(INPUT_POST,'teacherFirstName');
$teacherLastName = filter_input(INPUT_POST,'teacherLastName');
$teacherActive = filter_input(INPUT_POST,'teacherActive');


if ($teacherId==0) {
    // fetch an empty record
    $teacher = R::dispense('teacher');
} else {
    // fetch the specific record    
    $teacher = R::findOne('teacher',' id=? ', array($teacherId));
}

$teacher->first_name = $teacherFirstName;
$teacher->last_name = $teacherLastName;
$teacher->active = isset($teacherActive) ? 1 : 0;

// save teacher record
R::store($teacher);

exit();
