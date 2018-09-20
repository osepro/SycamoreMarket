$(function() {

$("#createBtn").click(
function(e)
 {
 	e.preventDefault();

    /*var firstname=$("#firstname").var().trim();
    var lastname=$("#lastname").var().trim();
    var password=$("#password").var().trim();*/

    var response=req();
    var res_phone=req_phoneno();
    var res_email=req_email();
    var res_gender=req_genlevels();
    var res_password=req_password();

    if(response==false)
    {
      $(".errorsel").fadeIn("slow").delay(1000).fadeOut("fast");
    }
    else if(res_phone==false)
    {$(".errorphone").fadeIn("slow").delay(1000).fadeOut("fast");}
    else if(res_password==false)
    //$(".errorsel").fadeIn("slow").delay(1000).fadeOut("fast");
    alert("Error");
    else if(res_email==false)
    {$(".erroremail").fadeIn("slow").delay(1000).fadeOut("fast");}
     else if(res_gender==false)
    {$(".errorgender").fadeIn("slow").delay(1000).fadeOut("fast");}
else {
             $.post("conf/actions.php",$("#sub-form").serialize(),function(data){
             	if(data==0)
             	{alert("Error!! Something went wrong creating your account. Please try again");}
               else if(data==4){$(".errorsyca").fadeIn("slow").delay(1000).fadeOut("fast");}
                 else{      	
                 	window.location.href = "loginpage.php";
                 	$("#sub-form")[0].reset(); 
                 	//alert("Successful registration");
                 }

             });

            }


 });
$(".posting-btn").click(
      function()
      {
      window.location.href = "postads.php";
      }
	);
$("#loginSubmit").click(
	function(e)
	{
		e.preventDefault();
		var userid=$("#userid").val().trim();
		var password=$("#password").val().trim();
   
       if(userid==''){
       	$("#sycamoreuser").fadeIn("100").fadeOut("50").fadeIn("fast");
       }
       	else if(password==''){$("#sycamorepass").fadeIn("100").fadeOut("50").fadeIn("fast");}
       		else
       		{
              $.post("conf/login.php",$("#login-form").serialize(),function(data){
                if(data==1){window.location.href="home.php?userid="+userid;$("#login-form")[0].reset(); }
                	else{alert("Login NOT successful");}
              });
       		}
	}
	);
$("#contactUs").click(function() {
        $("#dialog").dialog();
        return false;
    });

$("#loginSubmit-home").click(
  function(e)
  {
    e.preventDefault();
    var userid=$("#userid").val().trim();
    var password=$("#password").val().trim();
   
       if(userid==''){
        $("#sycamoreuser").fadeIn("100").fadeOut("50").fadeIn("fast");
       }
        else if(password==''){$("#sycamorepass").fadeIn("100").fadeOut("50").fadeIn("fast");}
          else
          {
              $.post("conf/login.php",$("#login-form-home").serialize(),function(data){
                if(data==1){window.location.href="home.php?userid="+userid;$("#login-form-home")[0].reset(); }
                  else{alert("Login NOT successful");}
              });
          }
  }
  );
$(".prod-listing li").click(
   function()
   {
   window.location.href="signin.php";
   }
  );


$("#product-upload").click(
	function(event)
	{
	event.preventDefault();

    var response=postreq();
    var price_check=priceCheck();
    var res=$("#sessionvar").val();


    if(response==false)
    {
      $(".errormessage").fadeIn("slow").delay(1000).fadeOut("fast");
    }
    else if(price_check==false)
    {
      $(".priceerror").fadeIn("slow").delay(1000).fadeOut("fast");
    }
   else
    {
    	$.post("conf/postad.php",$("#Uploadform").serialize(),function(data){
        var resp = $.parseJSON(data);
        //alert(res[1])
      if(resp[0]==1){	
                window.location.href = "prodimage.php?userid="+res+"&prodid="+resp[1];
              	$("#Uploadform")[0].reset(); 
                 	//alert("Successful registration");
                 }
                 else{
                   alert("Error!! Please an error occured. Try again");
              }

   });
    }		

	});
$('#myModal').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    var prod_id = $(e.relatedTarget).data('product-id');

    $.post("conf/prodsale.php",{prodid:prod_id},function(data){
    var resp = $.parseJSON(data);
    //populate the textbox
    var titlehead=$(".modal-title").text(resp[2]);
    var imgtitle=$(".prod-image").attr('src','adsuploads/'+resp[6]);
    var prodinfo=$("#prod-pr").text('$'+resp[3]);
    var prodcat=$("#prod-cat").text(resp[1]);
    var proddesc=$("#prod-desc").text(resp[5]);
    var buy_sell=$("#sell-info-id").val(prod_id);

    //$(e.currentTarget).find('input[name="prod-info"]').val(resp[1]);


    });
});
$("#contact-seller").click(
function()
{
  //e.preventDefault();
  var sell_info=$("#sell-info-id").val();
  var buy_info=$("#buy-info").val();

  //alert("Helloo");

  $.post("conf/contactseller.php",{seller:sell_info,buyer:buy_info},function(data){

    //alert(data);
   
   if(data==1)
   {
     $(".succmmessage").fadeIn("fast").delay(2000).fadeOut("fast");
     $("#myModal").modal("hide");
   }
   else
   {
alert("Error Error");
   }

  });
}
  );

$("#userid").focus(
	function()
	{
		$("#sycamoreuser").fadeOut("fast");
	}
	);
$("#password").focus(
	function()
	{
		$("#sycamorepass").fadeOut("fast");
	}
	);
$(".itemtoedit").click(
  function(eq)
  {
    eq.preventDefault();
    //$("span").closest("input").toggleClass("highlight");
    //$("tr").closest("td").find(".price-edit").show("fast");
    //$("span").closest("input").css({"border":"solid 2px #000000"});
  }
  );
$(".homeheader li.useredit").click(
   function()
    {
      //$(".arrow-up").slideToggle("fast");
    	//$(".user-info").slideToggle("fast");
      $(".top-messagelist").hide("fast");
      $(".main-edit-top").slideToggle("fast");
    }
	);
$(".homeheader li.unmsg").click(
   function()
   {
    $(".main-edit-top").hide("fast");
    $(".top-messagelist").slideToggle("fast");
   }
  );
$('.new_Btn').bind("click" , function () {
        $('#html_btn').click();
    });
function postreq()
{
	valid=true;
	$("#Uploadform input[type='text']").each(
             function()
             {
           if($(this).val().trim()=='')
           	  {
           	  	$(this).css({
                    "border": "1px solid red","background-image":"url(images/error-flat.png)","background-size":"21px 21px","background-repeat":"no-repeat",
                   "background-position":"right 5px bottom 10px"
                });
       

		valid=false;
             }
           	  }
			);

	return valid;
}
function priceCheck()
{
  valid=true;
  var price=$("#addprice").val();

  if($.isNumeric(price))
  {
   valid=true;
  }
  else
  {
    valid=false;
  }
  return valid;
}
function req()
{
	//var emailcheck=validateEmail($("#sycamoreid").val().trim());  
    //var gender=$("input[name=gender]:checked").val();

    //var levels=$("levels").val();
	var valid=true;
	$(".createtbl input[type='text']").each(
function()
{
	if($(this).val().trim()=='')
	{
		$(this).css({
                    "border": "1px solid red","background-image":"url(images/error-flat.png)","background-size":"21px 21px","background-repeat":"no-repeat",
                   "background-position":"right 5px bottom 10px"
                });

		valid=false;
		}	
}
	);
	return valid;
 }
 function req_phoneno()
 {
 	var phoneinput=validatePhoneNumber($("#mobileno").val().trim());
	var valid=true;

if(!phoneinput)
{
  valid=false;
}
else{
	valid=true;
}
 return valid;
}
function req_email()
 {
 	var emailcheck=validateEmail($("#sycamoreid").val().trim());
	var valid=true;

if(!emailcheck)
{
  valid=false;
}
else{
	valid=true;
}
 return valid;
}
function req_genlevels()
 {
 	var gender=$("input[name=gender]:checked").val();
    var levels=$("#levels").val();

	var valid=true;

if(!gender || !levels)
{
  valid=false;
}
else{
	valid=true;
}
 return valid;
}
function req_password()
{
	var password=$("#passwords").val();
	var valid=true;

if(password=='')
{
  valid=false;
}
else{
	valid=true;
}
 return valid;
}
 function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email.toLowerCase());
}
function validatePhoneNumber(elementValue){
var phoneNumberPattern = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
return phoneNumberPattern.test(elementValue);
}

});