<?php
$dbServerName = "remotemysql.com";
$dbUsername = "FxiFtniY7y";
$dbPassword = "fgTpRLCJuK";
$dbName = "FxiFtniY7y";

// create connection
$con = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
