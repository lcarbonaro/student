<?php
require_once '../includes/rb.db.inc.php';

$roomId = filter_input(INPUT_POST,'hdnId');
$roomName = filter_input(INPUT_POST,'roomName');
$roomDesc = filter_input(INPUT_POST,'roomDesc');

if ($roomId==0) {
    // fetch an empty record
    $room = R::dispense('room');
} else {
    // fetch the specific record    
    $room = R::findOne('room',' id=? ', array($roomId));
}

$room->room_name = $roomName;
$room->room_desc = $roomDesc;

// save teacher record
R::store($room);

exit();
