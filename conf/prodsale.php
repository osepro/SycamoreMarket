<?php
include("db.php");

$res=$dbconn->real_escape_string($_POST["prodid"]);

$SQLreq="SELECT * FROM postedads WHERE prodid='$res'";
$query=$dbconn->query($SQLreq);
$fetch=$query->fetch_array();
$a=$fetch["email"];
$b=$fetch["prodname"];

echo json_encode($fetch);

?>