<?php
include("db.php");

$seller=$dbconn->real_escape_string($_POST["seller"]);
$buyer=$dbconn->real_escape_string($_POST["buyer"]);

$qu="SELECT * FROM postedads WHERE prodid='$seller'";
$query=$dbconn->query($qu);
$query2=$query->fetch_array();
$email=$query2['email'];
$prodname=$query2['prodname'];
$prodprice=$query2['prodprice'];
$prodimage=$query2['prodimage'];

$sequery="INSERT INTO `cus_order` (`seller_email`,`prodid`,`prodname`, `prodprice`, `prodimage`, `buyer_email`) VALUES ('$email','$seller', '$prodname', '$prodprice', '$prodimage', '$buyer')";

$runquery=$dbconn->query($sequery);

//echo json_encode($runquery);

if(!$runquery)
{
	echo 0;
}
else
{
	echo 1;
}

?>