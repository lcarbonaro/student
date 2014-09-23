<?php
require_once '../includes/rb.db.inc.php';

// fetch POSTed fields
$classId = filter_input(INPUT_POST,'hdnId');
$classCourseId = filter_input(INPUT_POST,'classCourse');
$classDay = filter_input(INPUT_POST,'classDay');
$classTime = filter_input(INPUT_POST,'classTime');
$classTeacherId = filter_input(INPUT_POST,'classTeacher');
$classRoomId = filter_input(INPUT_POST,'classRoom');  
$classStart = filter_input(INPUT_POST,'classStartDate');
$classEnd = filter_input(INPUT_POST,'classEndDate');

if ($classId==0) {
    // fetch an empty record
    $class = R::dispense('class');
} else {
    // fetch the specific record    
    $class = R::findOne('class',' id=? ', array($classId));
}

// set fields
$class->course_id = $classCourseId;
$class->day_of_week = $classDay;     
$class->time_of_day = $classTime;
$class->teacher_id = $classTeacherId;
$class->room_id = $classRoomId;
$class->start_date = $classStart;
$class->end_date = $classEnd;

// save record
R::store($class);

exit();
