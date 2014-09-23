<?php

// 1. establish database connection
// better to have connection details in one central place 
// and pul that in (require_once) as needed
require_once '../includes/db.inc.php';
$dbConn = dbConnect();

// 2. query out the data
$sqlStatement = "SELECT `id`,`first_name`,`last_name` FROM `student`";
$sqlResult    = mysqli_query($dbConn, $sqlStatement);
if ( !$sqlResult ) {
    exit('MySQL Error: ' . mysqli_error($dbConn) . 'SQL: ' . $sqlStatement);
}

// 3. prep data for JSON-ising
$studentListArr = array();
while ( $row=mysqli_fetch_assoc($sqlResult) ) {
    $studentListArr[] = $row;
}

// 4. prep JSON object
$success = true;
$message = 'ok';
$rowCount = count($studentListArr); 
$resultsJson = json_encode( array( "success" => $success , "message" => $message , "rowCount" => $rowCount , "students" => $studentListArr ) );	

// 5. echo back JSON object
echo($resultsJson);

exit();
?>