<?php
require_once '../includes/rb.db.inc.php';

// get id.
$studentId = filter_input(INPUT_GET,'id');

// fetch record
$student = R::findOne('student',' id=? ', array($studentId));

// extract fields
$studentListArr = array();
$s = array();
$s['id'] = $student->id;
$s['first_name'] = $student->first_name;
$s['last_name'] = $student->last_name;
$s['date_of_birth'] = $student->date_of_birth;
$s['registration_date'] = $student->registration_date;
$s['active'] = $student->active;
$s['family']['name'] = $student->family->first_name . ' ' . $student->family->last_name;
$s['family']['phone'] = $student->family->phone_number_1;
$s['family']['email'] = $student->family->email_address_1;

// extract class fields
$s['classes'] = array();             
$c = array();
foreach($student->sharedClassList as $class) {    
    $c['course'] = $class->course->course_name;
    $c['day'] = $class->day_of_week;
    $c['time'] = $class->time_of_day;
    $c['teacher'] = $class->teacher->first_name;
    $c['start'] = $class->start_date;
    $c['end'] = $class->end_date;
    $c['room'] = $class->room->room_name;    
    $s['classes'][] = $c;             
}
$studentListArr[] = $s;

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($studentListArr),
              'data' => $studentListArr
          ); 
echo(json_encode($result));          
exit();


