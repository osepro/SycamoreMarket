<?php include("header.php"); ?>
<?php
// Start the session
session_start();
?>
<div class="container-fluid main-home">
<div class="row toprow">
<div class="container main-container">
<div class="row">
<?php include("homeheader.php"); ?>
</div>
</div>
</div>
<?php
$usered=$_GET['userid'];
$profile="SELECT * FROM postedads WHERE email='$usered'";
$profilequery=$dbconn->query($profile);
?>

<div class="container main-body">
<div class="row">
<div class="col-md-8 nopadding temp-account col-centered">
<p style="font-size: 24px; text-align: center; font-family: Tahoma;">Edit Posted Item</p>

<span class="succpost succmmessage">Post successfully deleted.</span>

<span class="delerrmssg">Error!!Post NOT deleted.</span>


<form id="EditUpdate" class="home-post" enctype="multipart/form-data" method="Post">
<input type="hidden" id="sessionvar" name="sessionvar" value="<?php echo $usered; ?>">
<table width="100%">
		<tbody>
		<?php while($row=$profilequery->fetch_array()) { ?>
		<tr class="editpost-p">
		<input type="hidden" name="userid" id="userid" value="<?php echo $row[0]; ?>">
		<input type="hidden" name="useremail" id="useremail" value="<?php echo $row[8]; ?>">
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
 <td><input type="text" name="price" class="price-edit" value="<?php echo $row[3]; ?>"><span class="prod-edit-price">$ <?php echo $row[3]; ?></span></td>
		<td><a href="#" class="itemtoedit"><i class="fa fa-edit edittty" style="font-size: 17px;"></i></a> | <a href="#" class="itemtodel"><i class="fa fa-remove edittty" style="color:red;font-size: 17px;"></i></a></td>
		</tr>
<?php } ?>
		</tbody>
	</table>
	</form>
</div>
</div>
</div>


<footer class="page-footer bottompage">
<div class="container nopadding"><label class="footerlabel">
This website was developed by <a href="https://www.linkedin.com/in/jagbadu/" target="_blank">Ose Agbadu</a> for the sole purpose of practice and demonstration of his awesome programming skills</label>
</div>
</footer>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="js/uploads.js"></script>
    <script src="js/scripts2.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>