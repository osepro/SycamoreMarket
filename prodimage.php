<?php include("header.php"); ?>
<?php
// Start the session
session_start();
?>
<?php
$prodid=$_GET['prodid'];
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
<p style="font-size: 24px; text-align: center; font-family: Tahoma;">Post Product Image</p>
<form id="imageuploadform" class="home-post" enctype="multipart/form-data" method="Post">
<input type="hidden" id="sessidvar" name="sessidvar" value="<?php echo $_SESSION["userid"]; ?>">
<input type="hidden" id="prodid" name="prodid" value="<?php echo $prodid; ?>">
<table width="100%">
		<tbody>
		<tr>
        <td><strong>Upload product imaged</strong></td>
        </tr>
		<tr>

        <td>
        <div id="fileuploader">Upload

        <input type='file'" name="myfile" id="prodinfo" />
        </div>
<!--<div class="new_Btn">
<i class="fa fa-photo" style="font-size:48px;color:red;text-align: center;"></i><br>
<strong>Add Photos</strong></div><br>
<input id="html_btn" type='file'" name="prodinfo-2" /><br>-->
<p class="errormessage" id="sycamorepass">Please upload product image</p></td>
		</tr>
		<tr>
		<td><input type="submit" name="UploadProduct" value="Upload Image" class="posting-btn-login" id="product-image2"></td>
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
    <script src="js/scripts2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>