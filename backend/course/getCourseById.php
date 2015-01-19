<?php
require_once '../includes/rb.db.inc.php';

// get id.
$courseId = filter_input(INPUT_GET,'id');

// fetch record
$course = R::findOne('course',' id=? ', array($courseId));

// extract fields
$courseListArr = array();
$c = array();
$c['id'] = $course->id;
$c['course_name'] = $course->course_name;
$c['course_desc'] = $course->course_desc;

// added course type (competitive or recreational) as per discussion with Art - Jan18/2015 (LCC)
$c['course_type'] = $course->course_type;

$c['class_size_limit'] = $course->class_size_limit;
$c['active'] = $course->active;
$courseListArr[] = $c;

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($courseListArr),
              'data' => $courseListArr
          ); 
echo(json_encode($result));          
exit();


