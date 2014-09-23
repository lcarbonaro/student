<?php

require_once '../includes/rb.db.inc.php';

// get search term
$term = filter_input(INPUT_GET,'term');  

// fetch any matching records
$sql = 'SELECT `id`,`first_name`,`last_name` '
      . ' FROM `student` '
      . 'WHERE `active`=1 '
      . '  AND (`first_name` LIKE ? OR `last_name` LIKE ? OR `id`=?)'; 
$parms = array($term.'%', $term.'%' , $term);
$rows = R::getAll($sql, $parms);
$students = R::convertToBeans( 'student', $rows );

$studentListArr = array();
$s = array();

// loop through
foreach ($students as $student) {
    $s['id']    = $student->id;
    $s['value'] = $student->last_name.', '.$student->first_name;
    $studentListArr[] = $s;
}

echo json_encode($studentListArr);
exit();
