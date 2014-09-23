<?php

require_once '../includes/rb.db.inc.php';

// fetch all records
$classes = R::findAll('class');   // should filter currently on-going classes??

$classListArr = array();
$c = array();

// loop through
foreach ($classes as $class) {
    $c['DT_RowId'] = $class->id;              // required by datatable for tr id 
    $c['course']   = $class->course->course_name;
    $c['day']      = $class->day_of_week;
    $c['time']     = $class->time_of_day;
    $c['teacher']  = $class->teacher->first_name;
    $c['start']    = $class->start_date;
    $c['end']      = $class->end_date;
    $c['room']     = $class->room->room_name;
    $classListArr[] = $c;
}

// prep result JSON 
$result = array(
    'success' => true,
    'message' => '',
    'rowCount' => count($classListArr),
    'data' => $classListArr
);
echo(json_encode($result));
exit();



