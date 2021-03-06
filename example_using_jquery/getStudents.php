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

// 3. prepare the data for presentation
$tblRows = '';
while ( $row=mysqli_fetch_assoc($sqlResult) ) {
    $tblRows .= '<tr><td>'.$row['id'].'</td><td>'.$row['first_name'].'</td><td>'.$row['last_name'].'</td></tr>';
}

// 4. echo back the rows
echo($tblRows);

exit();
?>