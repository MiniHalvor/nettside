<?php
function OpenCon()
{
  $sqlserver = "localhost";
  $sqluser = "root";
  $sqlpass = "";
  $sqldb = "mydb";

  ($conn = new mysqli($sqlserver, $sqluser, $sqlpass, $sqldb)) or
    die("Connect failed: %s\n" . $conn->error);
  $conn->set_charset("utf8");
  return $conn;
}

function CloseCon($conn)
{
  $conn->close();
}

?>
