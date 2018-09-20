<?php
include("db.php");

$prodiddd=$dbconn->real_escape_string($_POST['prodid']);

$query="UPDATE `postedads` SET `status` = 1 WHERE `prodid` = '$prodiddd'";

$stmt=$dbconn->query($query);

if(!$stmt)
    {
     echo $response=0;
    }
    else
    {
    	echo 
    	$response=1;
    }
?>