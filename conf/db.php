<?php
$username="root";
$password="root";
$database="sycamore_mkt";
$host="localhost";
$dbconn=new mysqli($host,$username,$password,$database);

if ($dbconn->connect_error) {
  echo("Failed to connect to database (" . $dbconn->connect_errno . "): ". $dbconn->connect_error);
}
?>