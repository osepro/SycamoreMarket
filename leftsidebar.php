<div class="posting">
Hi, <strong><?php echo $results['fname']; ?></strong><br>
Do you have an item to sell today
<p></p>
<!--<p><input type="submit" name="selling" value="Post Item" class="posting-btn"></p>-->
<p><a href="postads.php?userid=<?php echo $_SESSION["userid"]; ?>" class="posting-btn">Post Item</a>
</div>
<ul class="browing">
<li class="active"><a href="#">Browsing</a></li>
<li><a href="#">Buying</a></li>
<li><a href="#">Selling</a></li>
</ul>
<p class="sideheader">Categories</p>

<ul class="category">
<li><a href="#"><i class="fa fa-book books-style" style="color:white;font-size:14px;"></i> Books</a></li>
<li><a href="#"><i class="fa fa-tv ent-style" style="color:white;font-size:14px;"></i> Entertainment</a></li>
<li><a href="#"><i class="fa fa-gamepad game-style" style="color:white;font-size:14px;"></i> Games</a></li>
<li><a href="#"><i class="fa fa-mobile phone-style" style="color:white;font-size:14px;"></i> Phones</a></li>
<li><a href="#"><i class="fa fa-bed bed-style" style="color:white;font-size:14px;"></i> Funitures</a></li>
<li><a href="#"><i class="fa fa-female female-style" style="color:white;font-size:14px;"></i> Clothing</a></li>
<li><a href="#"><i class="fa fa-cloud ac-style" style="color:white;font-size:14px;"></i> Accessories</a></li>
<li><a href="#"><i class="fa fa-car car-style" style="color:white;font-size:14px;"></i> Cars</a></li>
<li><a href="#"><i class="fa fa-clone other-style" style="color:white;font-size:14px;"></i> Others</a></li>
</ul>