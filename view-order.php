<?php
include_once("header.php");
?>
<body>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 bg-color">
        <p class="insert-product"> Dear admin </p>
        <p class="insert-product"> You can view customer-orders here</p>
        <form action="view-order-opration.php" method="post" class="form-horizontal">
            <fieldset>
            <!-- Form Name -->
            <legend>orders-list</legend>
			<!-- Button -->
			<div class="form-group">
					<div class="col-md-4">
						<button id="submit" name="submit" class="btn">click here to view orders</button>
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