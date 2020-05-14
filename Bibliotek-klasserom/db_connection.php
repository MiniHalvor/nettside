<?php
function OpenCon()
{
  $sqlserver = "mysql.klasserom.net";
  $sqluser = "knet-elev20821";
  $sqlpass = "okf47";
  $sqldb = "knet-elev20821";

  $conn = new mysqli($sqlserver, $sqluser, $sqlpass, $sqldb) or
    die("Connect failed: %s\n" . $conn->error);
  $conn->set_charset("utf8");
  return $conn;



}





function CloseCon($conn)
{
  $conn->close();
}

?>
