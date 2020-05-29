<?php
session_start();
include_once("header.php");
include_once("validate.php");
?>
<body>
    <div class="row">
        <div class="row ">
            <div class="col-md-4"></div>
            <div class="col-md-4 bg-color">
            <div class="admin-wellcome">
                    <p class="wellcome-admin">Wellcome Dear Admin</p>
                </div>   
                <div class="admins-pic"> 
                    <img class="admin-pic" src="image/user2.jpg">
                </div> 
            </div>
            <div class="col-md-4"></div>
        </div><!--admin-row--> 
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10  bg-color">
                <div class="row">
                    <div class="col-md-2">
                        <div class="uls">
                            <ul class="ul-propertise">
                                <li class="li-propertise"><a>Visit the site</a></li>
                                <li class="li-propertise"><a href="insert-product.php">Insert new products</a></li>
                                <li class="li-propertise"><a href="view-product.php">View products<a></li>
                                <li class="li-propertise"><a href="view-customer.php">View customer</a></li>
                                <li class="li-propertise"><a>View all orders</a></li>
                                <li class="li-propertise"><a>View all payments</a></li>
                                <li class="li-propertise"><a href="remove.php">Remove user</a></li>

                                
                                <li class="li-propertise"> <a href="register.php">Exit</li>
                            </ul>
                        </div>
                    </div><!--3-row-->
                    <div class="col-md-7"></div>
                    <div class="col-md-3"></div>

                </div><!--10-row-->
               
            </div>
            <div class="col-md-1"></div>
        </div><!--page-row--> 
        
    
        
    </div><!--main-row-->

<?php
include_once("footer.php");
?>
