<?php
include_once("header.php");
?>
<body>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 bg-color">
        <p class="insert-product"> Dear admin </p>
        <p class="insert-product"> You can view customers here</p>
        <form action="view-customer-opration.php" method="post" class="form-horizontal">
            <fieldset>
            <!-- Form Name -->
            <legend>customer-list</legend>
			<!-- Button -->
			<div class="form-group">
					<div class="col-md-4">
						<button id="submit" name="submit" class="btn">click here to view customers</button>
					</div>
				</div>
			</div>
		    </div>
	    </fieldset>
        </form>
    </div><!-- md4 -->
    <div class="col-md-4"></div>
    
    </div>
<?php
include_once("footer.php");
?>