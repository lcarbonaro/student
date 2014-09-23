<?php
require_once '../includes/rb.db.inc.php';

$courseId = filter_input(INPUT_POST,'hdnId');
$courseName = filter_input(INPUT_POST,'courseName');
$courseDesc = filter_input(INPUT_POST,'courseDesc');
$courseLimit = filter_input(INPUT_POST,'courseClassSizeLimit');
$courseActive = filter_input(INPUT_POST,'courseActive');


if ($courseId==0) {
    // fetch an empty record
    $course = R::dispense('course');
} else {
    // fetch the specific record    
    $course = R::findOne('course',' id=? ', array($courseId));
}

$course->course_name = $courseName;
$course->course_desc = $courseDesc;
$course->class_size_limit = $courseLimit;
$course->active = isset($courseActive) ? 1 : 0;

// save course record
R::store($course);

exit();
