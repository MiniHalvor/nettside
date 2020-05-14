<?php
session_start();
include 'db_connection.php';

$conn = OpenCon();



$brukerid = $_POST['brukerid'];
$passiv= $_POST['passiv'];


$sql = "UPDATE `bruker` SET `passiv` = $passiv WHERE `bruker`.`brukerid` = $brukerid";


if ($conn->query($sql) === true) {
  
  header("location: administrer.php");
  
} else {
    echo "big error";
}
CloseCon($conn);
?>
