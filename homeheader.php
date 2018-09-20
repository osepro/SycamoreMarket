<?php include("conf/db.php"); ?>
<?php
// Start the session
session_start();
?>
<?php //session_start(); ?>
<?php include("header.php"); ?>
<?php 
$userid=$dbconn->real_escape_string($_GET['userid']);
$_SESSION["userid"] = $userid;
if(!empty($_SESSION['userid']))
{     
$quest="SELECT * FROM `users` WHERE email='$userid'";
$homequery=$dbconn->query($quest);
$results=$homequery->fetch_array();

$messages="SELECT * FROM `cus_order` WHERE seller_email='$userid' AND seen=0";
$msgquery=$dbconn->query($messages);
$msqres=$msgquery->num_rows;
}
else
{
    header("location:index.php");
}
$proddisplay="SELECT * FROM postedads WHERE status=1 ORDER BY userid DESC";
$display=$dbconn->query($proddisplay);
 ?>
<div class="col-md-6"><h4 class="logo">sycamore market</h4></div>
<div class="col-md-6 main-login">
	<ul class="homeheader">
	<li><a href="home.php?userid=<?php echo $userid; ?>">Home</a></li>
    <li><a href="#">Orders</a></li>
    <span class="unread-msg"><?php echo $msqres; ?></span>
    <li class="unmsg">Messages</li>
    <li class="useredit"><?php echo substr($results["fname"],0,1); ?></li>
</ul>
</div>
<div class="main-edit-top">
<div class="arrow-up"></div>
<div class="user-info">
<ul class="inneredit">
<li style="color: #3666b6;"><strong><?php echo $results["email"]; ?></strong></li>
<li><i class="fa fa-pencil icon-edit"></i> <a href="edits.php?userid=<?php echo $_SESSION["userid"]; ?>">Edit</a></li>
<li><i class="fa fa-cog icon-edit"></i> <a href="#">Settings</a></li>
<li><i class="fa fa-power-off icon-edit"></i> <a href="logout.php">Logout</a></li>
</ul>
</div>
</div>

<div class="top-messagelist">
<div class="arrow-up2"></div>
<div class="buy-messages">
<ul class="list-msg">
<?php while($row=$msgquery->fetch_array()) { ?>
<li><a href="#">This user with email <strong><?php echo $row['buyer_email']; ?></strong> is interested in buying your product <strong> <?php echo $row['prodname']; ?></strong></a></li>
<?php } ?>
</ul>
</div>
</div>