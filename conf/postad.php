<?php
include("db.php");

$userid=$dbconn->real_escape_string($_POST["sessionvar"]);

$gen=rand(10,6987);
$array=rand(0,25);
$str=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","X","Y","Z");
$userid=$dbconn->real_escape_string($_POST["sessionvar"]);

$identi=$userid.$str[$array].$gen;

$resp=postad($dbconn);

if(!$resp){echo 0;}
else{
  echo json_encode(array(1,$identi));
}


function postad($dbconn)
{
  global $identi;
	$response =1;
	//$gen=rand(10,6987);
  //$aray=rand(0,25);
  //$str=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","X","Y","Z");



$prodcategory=$dbconn->real_escape_string($_POST["prodcategory"]);
$prodname=$dbconn->real_escape_string($_POST["prodname"]);
$prodprice=$dbconn->real_escape_string($_POST["prodprice"]);
$prodlocation=$dbconn->real_escape_string($_POST["prodlocation"]);
$proddesc=$dbconn->real_escape_string($_POST["proddesc"]);
$userid=$dbconn->real_escape_string($_POST["sessionvar"]);

//$identi=$userid.$str[$array].$gen;


if(empty($prodcategory) || empty($prodname) || empty($prodprice) || empty($prodlocation) || empty($proddesc))
   {
    $response=0;
   }
   else{

	$query="INSERT INTO `postedads` (`prodcategory`, `prodname`, `prodprice`, `prodlocation`, `prodesc`,`email`,`prodid`) VALUES ('$prodcategory', '$prodname', '$prodprice', '$prodlocation', '$proddesc','$userid','$identi')";

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
 
?>