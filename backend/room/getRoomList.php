<?php
require_once '../includes/rb.db.inc.php';

// fetch all rooms
$rooms = R::findAll('room');

$roomListArr = array();
$r = array();

// loop through
foreach($rooms as $room) {
  $r['DT_RowId'] = $room->id;              // required by datatable for tr id
  $r['room_name'] = $room->room_name;
  $r['room_desc'] = $room->room_desc;
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



