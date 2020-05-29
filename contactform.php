<?php
include_once("header.php");
?>
 <body> 
<div class="row">
	<div class="col-md-4">
		
	</div>
	<div class="col-md-4">
		<form action="contactform-opration.php" method="post">
 			 <div class="login-forms">
			<label for="Name" class="text-form" ><b>Name</b></label><br>
			<input type="text" name="name"  class= "place-bg-color" placeholder=" Enter your name" required><br>
			<label for="tel" class="text-form"><b>Tel</b></label><br>
			<input type="number" name="tel" class= "place-bg-color" placeholder=" Enter your phone unmber " required><br>
			<button type="submit" class="registerbtn" class= "place-bg-color"> submit</button>
		</form>
		</div>
	</div>
	
	<div class="col-md-4"></div>
</div>
<?php
 include_once("footer.php");
 ?>	
 