<?php
$connection = mysqli_connect('mysql.klasserom.net', 'knet-elev20821', 'okf47');
if (!$connection) {
  die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'knet-elev20821');
if (!$select_db) {
  die("Database Selection Failed" . mysqli_error($connection));
}
