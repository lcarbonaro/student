<?php
require_once '../includes/rb.db.inc.php';

// fetch all records
$families = R::findAll('family');

$familyListArr = array();
$f = array();

// loop through
foreach($families as $family) {
  $f['DT_RowId'] = $family->id;              // required by datatable for tr id 
  $f['first_name'] = $family->first_name;
  $f['last_name'] = $family->last_name;
  $f['phone_number_1'] = $family->phone_number_1;
  $f['email_address_1'] = $family->email_address_1;  
  $familyListArr[] = $f;
}

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($familyListArr),
              'data' => $familyListArr
          ); 
echo(json_encode($result));  
exit();        



