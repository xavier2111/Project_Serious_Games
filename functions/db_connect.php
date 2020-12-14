<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project_serious_games";
// connectie maken met PDO.

  $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
  $options = [
    PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
  ];
  try {
    $conn = new PDO($dsn, $username, $password, $options);
  } catch (Exception $e) {
    error_log($e->getMessage());
    exit('Cannot get connection with database'); //something a user can understand
  }
?>