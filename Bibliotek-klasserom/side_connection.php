<?php
include 'db_connection.php';

$conn = OpenCon();

$bokid = $_POST['eksemplar'];

$sql = "DELETE FROM `aktivbok` WHERE `aktivbok`.`bok_bokid` = $bokid";
if ($conn->query($sql) === true) {
  header("location: side.php");
  CloseCon($conn);
}

?>
