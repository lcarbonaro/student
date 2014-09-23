<?php

// set all values
$days = array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');

$dayListArr = array();
$d = array();

// loop through
foreach($days as $day) {
  $d['dow'] = $day;  
  $dayListArr[] = $d;
}

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($dayListArr),
              'data' => $dayListArr
          ); 
echo(json_encode($result));  
exit();        



