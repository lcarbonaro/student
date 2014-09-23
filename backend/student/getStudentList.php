<?php
require_once '../includes/rb.db.inc.php';

// fetch all records
$students = R::findAll('student');

$studentListArr = array();
$s = array();

// loop through
foreach($students as $student) {
  $s['DT_RowId'] = $student->id;              // required by datatable for tr id 
  $s['first_name'] = $student->first_name;
  $s['last_name'] = $student->last_name;
  
  $from = new DateTime($student->date_of_birth);
  $to   = new DateTime('today');
  $age  = $from->diff($to)->y;
  
  $s['age'] = $age;
  $s['date_of_birth'] = $student->date_of_birth;
  $s['registration_date'] = $student->registration_date;
  $s['active'] = $student->active===1 ? 'Y' : 'N';
  $studentListArr[] = $s;
}

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($studentListArr),
              'data' => $studentListArr
          ); 
echo(json_encode($result));  
exit();        



