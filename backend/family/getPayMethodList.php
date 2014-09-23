<?php
require_once '../includes/rb.db.inc.php';

// fetch all records
$paymethods = R::findAll('paymethod');

$paymethodListArr = array();
$p = array();

// loop through
foreach($paymethods as $paymethod) {
  $p['id'] = $paymethod->id;       
  $p['method_name'] = $paymethod->method_name;  
  $paymethodListArr[] = $p;
}

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($paymethodListArr),
              'data' => $paymethodListArr
          ); 
echo(json_encode($result));  
exit();        



