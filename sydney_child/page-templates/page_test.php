<?php
/*
Template Name: Test Page
*/
get_header();?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="css/jvfloat.css">
</head>
<body>


 <div class="container">
 	<h1 class="text-primary">General Infor</h1>
 	<form>
 	<div class="floating-placeholder">
 		<input type="text" name="fname" id="fname" >
 		<label for="fname">
 			<span>*</span>
 			First Name:
 		</label>
 	</div>
 	
 	<div>
 		<!-- <label class for="lname">
 			<span>*</span>
 			Last Name:
 		</label> -->
 		<input type="text" name="lname" id="lname" placeholder="* last Name">
 	</div>
 	<div>
 		<!-- <label class for="email">
 			<span>*</span>
 			Email Name:
 		</label> -->
 		<input type="text" name="email" id="email" placeholder="* Email">
 	</div>
 	<div>
 		<!-- <label class for="link">
 			<span>*</span>
 			LinkedIn Name:
 		</label> -->
 		<input type="text" name="link" id="link" placeholder="* LinkedIn Name">
 	</div>
 	<div class="g-recaptcha" data-sitekey="6Lfd1VMUAAAAAJW4mZgELMfwlJMVl36Nku7PAHvg"></div>
 	<button id="btn">JOIN US</button>
 	</form>

 </div>


<script>
$(document).ready(function(){
  function updateText(event){
    var input=$(this);
    setTimeout(function(){
      var val=input.val();
      if(val!="")
        input.parent().addClass("floating-placeholder-float");
      else
        input.parent().removeClass("floating-placeholder-float");
    },1)
  }
  $(".floating-placeholder input").keydown(updateText);
  $(".floating-placeholder input").change(updateText);
});
</script>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script src="js/jquery.label_better.js"></script>

</body>
</html>



<?php
get_footer();?>



