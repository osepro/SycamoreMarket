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

<div class="container main-body">
<div class="row">
<div class="col-md-6 nopadding temp-account col-centered">
<p style="font-size: 24px; text-align: center; font-family: Tahoma;">Post A Product To The Sycamore Market</p>

<form id="Uploadform" class="home-post" enctype="multipart/form-data" method="Post">
<input type="hidden" id="sessionvar" name="sessionvar" value="<?php echo $_SESSION["userid"]; ?>">
<table width="100%">
		<tbody>
		<tr>
		<td><input type="text" name="prodcategory" id="userid" value="" class="innertext" placeholder="Select a Category" list="list">
       <datalist id="list">
       	<option>Books</option>
       	<option>Entertainment</option>
       	<option>Games</option>
       	<option>Phones</option>
       	<option>Furniture</option>
       	<option>Clothing</option>
       	<option>Accessories</option>
       	<option>Cars</option>
       	<option>Others</option>
       </datalist>
		<p class="errormessage" id="sycamoreuser">Please select a category</p></td>
		</tr>
		<tr>
		<td><input type="text" name="prodname" id="sellingwhat" value="" class="innertext" placeholder="What are you selling"><p class="errormessage" id="sycamoreuser">Please enter product name</p></td>
		</tr>
		<tr>
		<td><input type="text" name="prodprice" id="addprice" value="" class="innertext" placeholder="Add price"><p class="errormessage" id="sycamoreuser">Please enter price</p><p class="priceerror" id="sycamoreuser">Error!!! Invalid price entered</p></td>
		</tr>
		<tr>
		<td><input type="text" name="prodlocation" id="prodlocate" value="" class="innertext" placeholder="Location"><p class="errormessage" id="sycamoreuser">Please enter location</p></td>
		</tr>
		<tr>
		<td><textarea placeholder="Description" name="proddesc" rows="4" cols="51" class="textfieldeid"></textarea><p class="errormessage" id="sycamorepass">Please enter product description</p></td>
		</tr>
		<tr>
        <td>
      
</td>
		</tr>
		<tr>
		<td><input type="submit" name="UploadProduct" value="Upload Product" class="posting-btn-login" id="product-upload"></td>
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