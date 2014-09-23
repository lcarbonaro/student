<?php
require_once '../includes/rb.db.inc.php';

// fetch all records
$teachers = R::findAll('teacher',' active=? ', array(1));

$teacherListArr = array();
$t = array();

// loop through
foreach($teachers as $teacher) {
  $t['DT_RowId'] = $teacher->id;              // required by datatable for tr id
  $t['first_name'] = $teacher->first_name;
  $t['last_name'] = $teacher->last_name;
  $teacherListArr[] = $t;
}

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($teacherListArr),
              'data' => $teacherListArr
          ); 
echo(json_encode($result));  
exit();        



