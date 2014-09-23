<?php
require_once '../includes/rb.db.inc.php';

// get id.
$teacherId = filter_input(INPUT_GET,'id');

// fetch record
$teacher = R::findOne('teacher',' id=? ', array($teacherId));

// extract fields
$teacherListArr = array();
$t = array();
$t['id'] = $teacher->id;
$t['first_name'] = $teacher->first_name;
$t['last_name'] = $teacher->last_name;
$t['active'] = $teacher->active;
$teacherListArr[] = $t;

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($teacherListArr),
              'data' => $teacherListArr
          ); 
echo(json_encode($result));          
exit();


