<?php

$dbhost = "localhost";
$dbuser = "sonlines_bookinghub";
$dbpass = "ruua]P!inh";
$dbname = "sonlines_bookinghub";


$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// Check connection
if (!$conn) {
  die("connection  failed : " .mysqli_connect_error());
  exit();
}
?>