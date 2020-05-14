<?php
session_start();
include 'db_connection.php';

$conn = OpenCon();



$passord = mysqli_real_escape_string($conn, $_POST['psw']);
$brukerid = $_SESSION["brukerid"];



$sql = "UPDATE `bruker` SET `passord` = $passord WHERE `bruker`.`brukerid` = $brukerid";


if ($conn->query($sql) === true) {
  
  echo "<script type='text/javascript'>alert('Gratulerer, passordet ditt er endret');</script>";
  header("refresh:0.1;url= side.php#txt");
  
} else {
    echo "big error";
   
}
CloseCon($conn);
?>
