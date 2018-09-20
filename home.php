<div class="container-fluid main-home">
<div class="row toprow">
<div class="container main-container">
<div class="row">
<?php include("homeheader.php"); ?>
</div>
</div>
</div>
<div class="row main-body-home nopadding">
<div class="col-md-2">
<?php include("leftsidebar.php"); ?>
</div>
<div class="col-md-8 nopadding temp-account">
<div class="col-md-12">
<?php include("topsearch.php"); ?>
<!--<ul class="prod-listing-home"> -->

<span class="succmmessage">Message successfully sent to buyer</span>

<?php while($row=$display->fetch_array()) { ?>
<a href="#myModal" data-toggle="modal" class="prod-link" data-product-id="<?php echo $row['prodid']; ?>"><div class="col-md-3 posted-prod"><p class="main-prodimage"><img src="adsuploads/<?php echo $row['prodimage']; ?>" width="210px" height="220px"></p>
<p class="prod-price">$<?php echo $row['prodprice']; ?></p>
    <p class="main-prodname"><?php echo $row['prodname']; ?></p>
    <p class="main-prodloc"><?php echo date('Y:m:d', strtotime($row['date_posted'])); echo " - ".$row['prodlocation']; ?></p>
    </div>
    <?php } ?>
	<!--</ul> -->
</div>
</div>
<div class="col-md-2 nopadding">
<?php include("rightsidebar.php"); ?>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <span class="modal-title"></span>
        </div>
        <div class="modal-body">
          <img src="" class="prod-image pull-left" width="60%" height="350">
          <div class="content-info pull-right">
          <p id="prod-pr"></p>
          <p id="prod-cat"></p>
          <p id="prod-desc"></p>
          <p></p>
          <input type="hidden" id="buy-info" name="buy-info" value="<?php echo $userid; ?>">
          <input type="hidden" id="sell-info-id" name="sell-info-id">
          <a href="#" id="contact-seller"><p id="sellerbutton">Contact Seller</p></a>
          </div>
        </div>
        <div class="clearfix"><br /></div>
       <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

</body>
</html>