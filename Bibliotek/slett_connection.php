<?php
session_start();
include 'db_connection.php';

$conn = OpenCon();

$brukerid = $_SESSION["brukerid"];


$sql = "UPDATE `bruker` SET `passiv` = 1 WHERE `bruker`.`brukerid` = $brukerid";

if ($conn->query($sql) === true) {
  header("location: logout.php");
  CloseCon($conn);
}

?>
