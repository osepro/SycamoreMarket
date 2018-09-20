<?php
include("db.php");

$userid=$dbconn->real_escape_string($_POST["userid"]);
$password=$dbconn->real_escape_string($_POST["passwords"]);

$passwordwd=openssl_digest($password,'sha512');

$login="SELECT email,password FROM `users` WHERE email='$userid' AND password='$passwordwd'";
$query=$dbconn->query($login);

if($query->num_rows==1)
{
	echo 1;
}
else
{
	echo 0;
}
?>