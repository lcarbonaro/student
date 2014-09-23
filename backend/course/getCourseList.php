<?php
require_once '../includes/rb.db.inc.php';

// fetch all records
$courses = R::findAll('course',' active=? ', array(1));

$courseListArr = array();
$c = array();

// loop through
foreach($courses as $course) {
  $c['DT_RowId'] = $course->id;              // required by datatable for tr id
  $c['course_name'] = $course->course_name;
  $c['course_desc'] = $course->course_desc;
  $courseListArr[] = $c;
}

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($courseListArr),
              'data' => $courseListArr
          ); 
echo(json_encode($result));  
exit();        



