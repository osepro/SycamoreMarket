$(function() {
	var width="100px";
	var height="100px";
    var sessid=$("#sessidvar").val();
    var prodid=$("#prodid").val();

	$("#fileuploader").uploadFile({
	url:"conf/uploads.php",
	fileName:"myfile",
	acceptFiles:"image/*",
showPreview:true,
 previewHeight: width,
 previewWidth: height,
 formData: {"prodiddd":prodid}
	});

	$("#product-image2").click(
     function(e)
     {
     	e.preventDefault();
      var email=$("#sessidvar").val();

      $.post("conf/finalads.php",$("#imageuploadform").serialize(),function(data){
                if(data==1){
                window.location.href="home.php?userid="+email;
                //alert("THIS IS A TEST");
                $("#imageuploadform")[0].reset(); }
                	else{alert("Upload NOT completed");}
              });
     }
		);

  $("#product-image3").click(
     function(e)
     {
      //alert("THIS IS A TEST");
     }
    );

  $("#update-profile").click(
     function(ex)
     {
      ex.preventDefault();
      var email=$("#sessionvar").val();

      $.post("conf/profileedit.php",$("#EditUpdate").serialize(),function(data){
                if(data==1){
                $(".succupdate").fadeIn("fast").delay(2000).fadeOut("fast");
                //window.location.href="home.php?userid="+email;
                //alert("THIS IS A TEST");
                //alert("Successful");
                //alert(data);
               // $("#EditProfile")[0].reset(); 
              }
                  else{
                    alert(data);
                    //alert("Error!! Update NOT successful");
                }
              });
     }
    );
  $(".itemtodel").click(
    function()
    {
      var confres=confirm("Are you sure you want to delete this item");

      if(confres)
      {
     var userid=$("#userid").val();
      var useremail=$("#useremail").val();

      $.post("conf/delete.php",{userid:userid},function(data)
        {
          if(data==1)
          {
            $(".succpost").fadeIn("fast").delay(2000).fadeOut("fast");
            window.location.href="editpost.php?userid="+useremail;
          }
          else
          {
             $(".delerrmssg").fadeIn("fast").delay(2000).fadeOut("fast");
          }
        }
        )
      }
    }
    );



});