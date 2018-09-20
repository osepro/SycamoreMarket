<?php include("header.php"); ?>
<?php
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

<div class="container main-body">
<div class="row">
<div class="col-md-6 nopadding temp-account col-centered">
<form id="Uploadform" class="edit-post" enctype="multipart/form-data" method="Post">
<input type="hidden" id="sessionvar" name="sessionvar" value="<?php echo $_SESSION["userid"]; ?>">
<table width="100%">
		<tbody>
		<tr>
		<td>
		<ul class="page-edit">
		<a href="editprofile.php?userid=<?php echo $_SESSION["userid"]; ?>"><li><i class="fa fa-user-plus" style="font-size:48px;color:lightblue"></i> Edit Profile</li></a>
		<a href="editpost.php?userid=<?php echo $_SESSION["userid"]; ?>"><li><i class="fa fa-edit" style="font-size:48px;color:orange"></i> Edit Post</li></a>
		</ul>
		</td>
		</tr>
		<tr>
		<td></td>
		</tr>
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
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>