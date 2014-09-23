<?php

// 1. establish database connection
// better to have connection details in one central place 
// and pul that in (require_once) as needed
require_once '../includes/db.inc.php';
$dbConn = dbConnect();

// 2. query out the data
$fromTable  = filter_input(INPUT_POST,'fromTable');
$fieldValue = filter_input(INPUT_POST,'fieldValue'); 
$fieldText  = $_POST['fieldText'];  //filter_input(INPUT_POST,'fieldText'); // seems not to respect POSTed arrays

if ( is_array($fieldText) ) {
    $concat = "CONCAT_WS(' '," . implode(',',$fieldText) . ")";
    $sqlStatement = "SELECT `".$fieldValue."` AS `value`,".$concat." AS `text` FROM `".$fromTable."`";
} else {
    $sqlStatement = "SELECT `".$fieldValue."` AS `value`,`".$fieldText."` AS `text` FROM `".$fromTable."`";
}

$sqlResult    = mysqli_query($dbConn, $sqlStatement);
if ( !$sqlResult ) {
    exit('MySQL Error: ' . mysqli_error($dbConn) . 'SQL: ' . $sqlStatement);
}

// 3. prep data for JSON-ising
$itemsListArr = array();
while ( $row=mysqli_fetch_assoc($sqlResult) ) {
    $itemsListArr[] = $row;
}

// 4. prep JSON object
$success = true;
$message = 'ok';
$rowCount = count($itemsListArr); 
$resultsJson = json_encode( array( "success" => $success , "message" => $message , "rowCount" => $rowCount , "items" => $itemsListArr ) );	

// close db connection
mysqli_close($dbConn);

// 5. echo back JSON object
echo($resultsJson);

exit();
?>