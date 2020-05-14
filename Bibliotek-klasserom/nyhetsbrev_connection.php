<?php
session_start();
include 'db_connection.php';

$conn = OpenCon();

$brukerid = $_SESSION["brukerid"];



$sql = "UPDATE `bruker` SET `nyhetsbrev` = 1 WHERE `bruker`.`brukerid` = $brukerid";

if ($conn->query($sql) === true) {
  
  echo "<script type='text/javascript'>alert('Gratulerer, du er nå meldt på vårt nyhetsbrev!');</script>";
  header("refresh:0.1;url= index.php");
  CloseCon($conn);
}else {
    echo "big error";
   
}

?>
