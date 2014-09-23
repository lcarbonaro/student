<?php
require_once '../includes/rb.db.inc.php';

// get id.
$classId = filter_input(INPUT_GET,'id');

// fetch record
$class = R::findOne('class',' id=? ', array($classId));

// extract fields
$classListArr = array();
$c = array();
$c['id'] = $class->id;
$c['course']   = $class->course_id;  //->course_name;
$c['day']      = $class->day_of_week;
$c['time']     = $class->time_of_day;
$c['teacher']  = $class->teacher_id;
$c['room']     = $class->room_id;
$c['start']    = $class->start_date;
$c['end']      = $class->end_date;

// extract student fields
$c['students'] = array();             
$s = array();
foreach($class->sharedStudentList as $student) {    
    $s['first_name'] = $student->first_name;
    $s['last_name'] = $student->last_name;    
    $c['students'][] = $s; 
}

$classListArr[] = $c;

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($classListArr),
              'data' => $classListArr
          ); 
echo(json_encode($result));          
exit();


