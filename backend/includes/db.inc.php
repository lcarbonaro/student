<?php

function dbConnect()
{
  $dbHost = 'mysql.2freehosting.com';
  $dbUser = 'u*****229_root';
  $dbPass = '*********';
  $dbName = 'u*****229_test';

  $dbConn = mysqli_connect($dbHost, $dbUser, $dbPass) or die('Could not connect to database server. Error:'.mysqli_connect_error());

  if ($dbName!='' and !mysqli_select_db($dbConn, $dbName))
  {
    die('Could not connect to database. Error:'.mysqli_connect_error());
  }
  return $dbConn;
}

