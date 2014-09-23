<?php
require_once '../includes/rb.db.inc.php';

// get id.
$roomId = filter_input(INPUT_GET,'id');

// fetch record
$room = R::findOne('room',' id=? ', array($roomId));

// extract fields
$roomListArr = array();
$r = array();
$r['id'] = $room->id;
$r['room_name'] = $room->room_name;
$r['room_desc'] = $room->room_desc;
$roomListArr[] = $r;

// prep result JSON 
$result = array(
              'success' => true,
              'message' => '',
              'rowCount' => count($roomListArr),
              'data' => $roomListArr
          ); 
echo(json_encode($result));          
exit();


