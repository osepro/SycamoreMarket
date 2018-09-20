<?php include("header.php"); ?>
<?php
// Start the session
session_start();
?>
<?php 
$userid=$dbconn->real_escape_string($_GET['userid']);
$_SESSION["userid"] = $userid;
if(!empty($_SESSION['userid']))
{     
$quest="SELECT * FROM `users` WHERE email='$userid'";
$homequery=$dbconn->query($quest);
$results=$homequery->fetch_array();
}
else
{
    header("location:index.php");
}
$proddisplay="SELECT * FROM postedads WHERE status=1 ORDER BY userid DESC";
$display=$dbconn->query($proddisplay);
 ?>
<div class="container-fluid main-home">
<div class="row toprow">
<div class="container main-container">
<div class="row">
<?php include("homeheader.php"); ?>
</div>
</div>
</div>

<div class="container main-body">
<div class="row">
<div class="col-md-12 nopadding buy-order col-centered">
<div class="col-md-8">
<p style="font-size: 24px; text-align: center; font-family: Tahoma;">Post A Product To The Sycamore Market</p>
sjkdfjdf idjfiodfj odfijdf dfj dfdjfidjfjfd ijdf
</div>
<div class="col-md-4">

</div>
</div>
</div>
</div>


<footer class="page-footer bottompage">
<div class="container nopadding"><label class="footerlabel">
This website was develop by <a href="https://www.linkedin.com/in/jagbadu/" target="_blank">Ose Agbadu</a> for the sole purpose of practice and demonstration of his awesome programming skills</label>
</div>
</footer>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="js/uploads.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>