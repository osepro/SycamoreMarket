<?php include("header.php");
include("conf/db.php");
?>
<div class="container-fluid main-home">
<div class="row toprow">
<div class="container main-container">
<div class="row">
<div class="col-md-6"><h4 class="logo">sycamore market</h4></div>
<div class="col-md-6 main-login">
<form id="login-form-home">
<table>
		<tbody>
		<tr>
		<td><label class="idtitle">Sycamore Id#</label></td>
		<td><label class="idtitle">Password</label></td>
		</tr>
		<tr>
		<td><input type="text" name="userid" id="userid" value=" "><p class="errormessage" id="sycamoreuser">Please enter your sycamore ID</p></td>
		<td><input type="Password" id="password" name="passwords" value=""><p class="errormessage" id="sycamorepass">Please enter your password</p></td>
		<td><input type="submit" name="loginSubmit-home" value="Log In" class="loginSubmit" id="loginSubmit-home"></td>
		</tr>
		</tbody>
	</table>
	</form>
	</div>
</div>
</div>
</div>
<?php
 $prodrec="SELECT prodimage FROM postedads ORDER BY userid DESC LIMIT 4";
 $queryprod=$dbconn->query($prodrec);
?>
<div class="container main-body">
<div class="row">
<div class="col-md-7 nopadding">
	<h1 class="large-header">Recent Listing</h1>
	<ul class="prod-listing">
	<?php while($row=$queryprod->fetch_array()) { ?>
    <li><img src="adsuploads/<?php echo $row['prodimage']; ?>" width="214px" height="225px"></li>
    <?php } ?>
	</ul>
</div>
<div class="col-md-5 nopadding temp-account">
	<h1 class="large-header">Create Account</h1>
	<span>Fill form below to create account</span>
 <form id="sub-form">
	<input type="hidden" name="action" value="">
	<p class="errorsel">Please all field are compulsory</p>
	<p class="errorphone">Error!!! Invalid phone number</p>
	<p class="erroremail">Error!!! Invalid email address</p>
	<p class="errorgender">Error!!! Levels or Gender not selected</p>
	<p class="errorsyca">Error!!! Sycamore email already exist!!!</p>

	
	<table class="createtbl">
		<tbody>
			<tr>
			<td><input type="text" name="firstname" placeholder="First name" id="firstname"></td>
			<td><input type="text" name="lastname" placeholder="Last name" id="lastname"></td>
			</tr>
			<tr>
			<td colspan="2"><input type="text" class="longcol" name="mobileno" id="mobileno" placeholder="Mobile number"></td>
			</tr>
			<tr>
			<td colspan="2"><input type="text" class="longcol" name="sycamoreid" id="sycamoreid" placeholder="Sycamore Email"></td>
			</tr>
			<tr>
			<td colspan="2"><input type="password" class="longcol passwordnew" name="passwordss" id="passwords" placeholder="Password"></td>
			</tr>
			<tr>
			<td colspan="2"><h4>Level</h4></td>
			</tr>
			<tr>
			<td colspan="2">
			<select class="levelsoption" id="levels" name="levelsoption">
				<option>Select Level</option>
				<option value="Freshman">Freshman</option>
				<option value="Sophomore">Sophomore</option>
				<option value="Junior">Junior</option>
				<option value="Senior">Senior</option>
				<option value="Masters">Masters</option>
				<option value="PhD">PhD</option>
				<option value="Others">Others</option>
			</select>	
			</td>
			</tr>
			<tr>
				<td><span class="genderspec"><input type="radio" name="gender" id="gender" value="Female"> Female <input type="radio" name="gender" id="gender" value="Male"> Male</span></td>
			</tr>
			<tr>
			<td></td>
			</tr>
		</tbody>
	</table>

	<p class="termscond">By clicking Create Account, you agree to our Terms and that you using this website for the sole purpose of testing, including our Cookie Use. You may receive SMS Notifications from us just for test and can opt out at any time.</p>

	<p class="create-btn"><input type="submit" name="submit" value="Create Account" id="createBtn"></p>
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
<?php include("footer.php"); ?>
