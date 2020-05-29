<?php
 include_once( "header.php");
 ?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form action="register-opration.php" method="post">
 			 <div class="register-forms">
			<label for="username" class="text-form" ><b>username</b></label><br>
			<input type="email" name="username"  class= "place-bg-color"required><br>
			<label for="password" class="text-form"><b>password</b></label><br>
			<input type="password" name="password" class= "place-bg-color" required><br>
			<label for="password-repeat" class="password"><b>Confirm-password</b></label><br>
			<input type="password" name="confirmpassword" class= "place-bg-color" required><br>
			<button type="submit" class="registerbtn" class= "place-bg-color"> Register</button>
		</form>
		</div>
			<div class="shakehand">
				<img  class="shakehand"src="image/shakehands.png"><br>
				<a class="register-login" href="login.php">If you registed before,click here</a>
			</div>
	</div>
	
	<div class="col-md-4"></div>
</div>
<?php
 include_once( "footer.php");
  ?>