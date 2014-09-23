<?php
require_once '../includes/rb.db.inc.php';

// fetch all records
$rooms = R::findAll('room');

$roomListArr = array();
$r = array();

// loop through
foreach($rooms as $room) {
  $r['id'] = $room->id;       
  $r['name'] = $room->room_name;  
  $roomListArr[] = $r;
}

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($roomListArr),
              'data' => $roomListArr
          ); 
echo(json_encode($result));  
exit();        



