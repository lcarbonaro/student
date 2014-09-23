<?php
require_once '../includes/rb.db.inc.php';

// get id.
$familyId = filter_input(INPUT_GET,'id');

// fetch record
$family = R::findOne('family',' id=? ', array($familyId));

// extract fields
$familyListArr = array();
$f = array();
$f['id'] = $family->id;
$f['first_name'] = $family->first_name;
$f['last_name'] = $family->last_name;
$f['phone_number_1'] = $family->phone_number_1;
$f['email_address_1'] = $family->email_address_1;   
$f['paymethod_id'] = $family->paymethod_id;

// extract student fields
$f['students'] = array();             
$s = array();
foreach($family->ownStudentList as $student) {    
    $s['first_name'] = $student->first_name;
    $s['last_name'] = $student->last_name;
    $s['date_of_birth'] = $student->date_of_birth;
    $s['registration_date'] = $student->registration_date;
    $f['students'][] = $s;             
}
$familyListArr[] = $f;

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($familyListArr),
              'data' => $familyListArr
          ); 
echo(json_encode($result));          
exit();


