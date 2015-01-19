<?php
require_once '../includes/rb.db.inc.php';

$courseId = filter_input(INPUT_POST,'hdnId');
$courseName = filter_input(INPUT_POST,'courseName');
$courseDesc = filter_input(INPUT_POST,'courseDesc');

// commented out as per discussion with Art - Jan18/2015 (LCC)
//$courseLimit = filter_input(INPUT_POST,'courseClassSizeLimit');

// added course type (competitive or recreational) as per discussion with Art - Jan18/2015 (LCC)
$courseType = filter_input(INPUT_POST,'courseType');

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

// commented out as per discussion with Art - Jan18/2015 (LCC)
//$course->class_size_limit = $courseLimit;

// added as per discussion with Art - Jan18/2015 (LCC)
$course->course_type = $courseType;

$course->active = isset($courseActive) ? 1 : 0;

// save course record
R::store($course);

exit();
