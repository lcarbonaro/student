<?php
require_once '../includes/rb.db.inc.php';

// fetch all records
$courses = R::findAll('course',' active=? ', array(1));

$courseListArr = array();
$c = array();

// loop through
foreach($courses as $course) {
  $c['id'] = $course->id;           
  $c['name'] = $course->course_name;  
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



