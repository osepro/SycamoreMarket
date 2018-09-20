<?php
include("db.php");

$sessionvar=$dbconn->real_escape_string($_POST['sessionvar']);

$firstname=$dbconn->real_escape_string($_POST['firstname']);
$lastname=$dbconn->real_escape_string($_POST['lastname']);
$phoneno=$dbconn->real_escape_string($_POST['phoneno']);
$levels=$dbconn->real_escape_string($_POST['levels']);
$sexdesc=$dbconn->real_escape_string($_POST['sexdesc']);

$error=true;

if(empty($firstname) || empty($lastname) || empty($phoneno) || empty($levels) || empty($sexdesc))
{
  $error=false;
}

/*foreach ($required as $field) {
	if(empty($dbconn->real_escape_string($_POST[$field])))
	{
		$error=true;
	}
}*/


if(!$error){echo 0;}
else
{
$query="UPDATE `users` SET 
`fname` = '$firstname', 
`lname` = '$lastname',
`mobileno` = '$phoneno',
`levels` = '$levels',
`gender` = '$sexdesc'     
WHERE `email` = '$sessionvar'";

$stmt=$dbconn->query($query);

if(!$stmt)
    {
     echo $response=0;
    }
    else
    {
    echo $response=1;
    }
}
?>