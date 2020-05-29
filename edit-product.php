<?php
include_once("header.php");
$id=$_GET['id']; 
$price=$_GET['price']; 
$product=$_GET['product']; 
?>
<body>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 bg-color">
        <p class="insert-product"> Dear admin </p>
        <p class="insert-product"> You can edit fruite prices here</p>
        <form action="edit-product-opration.php" method="POST" class="form-horizontal">
        <input type="hidden" name="id" value=<?php echo $id ?>>
        <input type="hidden" name="names" value=<?php echo $product ?>>
            <fieldset>
            <!-- Form Name -->
            <legend>PRODUCTS</legend>
		    <!-- Text input-->
            
           
		    <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name_fr">product_price</label>
                <div class="col-md-4">
                    <input id="product_name_fr" name="product_price" placeholder="product_price" class="form-control input-md" required="" value=<?php echo $price?> type="number">
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

?>