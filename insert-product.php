<?php
include_once("header.php");
?>
<body>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 bg-color">
        <p class="insert-product"> Dear admin </p>
        <p class="insert-product"> You can insert fruite prices here</p>
        <form action="insert-products-opration.php" method="post" class="form-horizontal">
            <fieldset>
            <!-- Form Name -->
            <legend>PRODUCTS</legend>
		    <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">product_name</label>
                <div class="col-md-4">
                    <input id="product_name" name="product_name" placeholder="product_name" class="form-control input-md" required="" type="text">
                </div>
		   </div>
		    <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name_fr">product_price</label>
                <div class="col-md-4">
                    <input id="product_name_fr" name="product_price" placeholder="product_price" class="form-control input-md" required="" type="number">
                </div>
            </div>
			<!-- Button -->
			<div class="form-group">
					<label class="col-md-4 control-label" for="submit"> submit</label>
					<div class="col-md-4">
						<button id="submit" name="submit" class="btn">submit</button>
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