<?php
include 'db_connection.php';

$conn = OpenCon();

$spørsmålid = mysqli_real_escape_string($conn, $_POST['spørsmål']);
$svar = mysqli_real_escape_string($conn, $_POST['svar']);
$brukerid = $_SESSION["brukerid"];
$date = date("Y-m-d");

$sql = "INSERT INTO `svar` (`svarid`, `svar`, `datosvart`, `Spørsmål_spørsmålid`, `bruker_brukerid`) 
VALUES (NULL, '$svar', '$date', '$spørsmålid', '$brukerid')";
if ($conn->query($sql) === true) {
  header("location: svar.php");
  CloseCon($conn);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  echo "<a href=\"index.php\">gå tilbake</a>";
}

?>
