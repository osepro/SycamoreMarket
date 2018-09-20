<?php
include("db.php");

$userid=$dbconn->real_escape_string($_POST['userid']);

$query="DELETE FROM postedads WHERE userid='$userid'";

$stmt=$dbconn->query($query);

if(!$stmt)
 {
 	echo 0;
 }
 else
 {
 	echo 1;
 }

?>