<?php
include("db.php");


$resp=SQLsignin($dbconn);

if($resp==0){echo 0;}
else if($resp==4){echo 4;}
else{echo 1;}



function SQLsignin($dbconn)
{
   $response =1;

$firstname=$dbconn->real_escape_string($_POST["firstname"]);
$lastname=$dbconn->real_escape_string($_POST["lastname"]);
$mobileno=$dbconn->real_escape_string($_POST["mobileno"]);
$sycamoreid=$dbconn->real_escape_string($_POST["sycamoreid"]);
$password=$dbconn->real_escape_string($_POST["passwordss"]);
$passwordwd=openssl_digest($password,'sha512');
//$passwordwd=hash('sha512',$password);
$levelsoption=$dbconn->real_escape_string($_POST["levelsoption"]);
$gender=$dbconn->real_escape_string($_POST["gender"]);

   $retemail=sycamoresEmail($sycamoreid);
   $emails=validEmail($sycamoreid);
   $phoneNo=phoneNum($mobileno);

   $queries="SELECT email FROM users WHERE email='$sycamoreid'";
   $queriestmt=$dbconn->query($queries);
   $res=$queriestmt->num_rows;
  

   if($phoneNo!=1 || $retemail !=1 || $emails !=1)
   {
   $response=0;
   }
   else if(!$firstname || !$lastname || !$mobileno || !$sycamoreid || !$password || !$levelsoption || !$gender)
   {
    $response=0;
   }
   else if($res > 0)
   {  
      $response=4;
   }
   else{
	$query="INSERT INTO `users` (`fname`, `lname`, `mobileno`, `email`, `password`, `levels`, `gender`) VALUES ('$firstname', '$lastname', '$mobileno', '$sycamoreid', '$passwordwd', '$levelsoption', '$gender')";

   $stmt=$dbconn->query($query);
    if(!$stmt)
    {
     $response=0;
    }
    else
    {$response=1;}
  }
  return $response;
}
function phoneNum($mobileno)
{
	$response=1;
	$mobilematch=preg_match("/^[0-9]{3}[0-9]{3}[0-9]{4}$/", $mobileno);

	if(!$mobilematch)
	{$response=0;}
	else{$response=1;}
	return $response;
}
function sycamoresEmail($sycamoreid)
 {
 	$response=1;
 	$str=strpos($sycamoreid, "@sycamores.indstate.edu");

 	if($str >= 1)
 	{
 		$response=1;
 	}
 	else{
 		$response=0;
 	}
   return $response;
 }
 function validEmail($sycamoreid)
{
$response=1;
$emailvar=filter_var($sycamoreid, FILTER_VALIDATE_EMAIL);

if(!$emailvar)
{
$response=0;
}
else{$response=1;}
return $response;
}
?>