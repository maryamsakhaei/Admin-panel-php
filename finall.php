<?php
include_once("header.php");
include_once("db.php");
$final_price=$_POST['price']*$_POST['number'];
$track_code=rand(0000,9999);
?>
<body>
<div class='row'>
   <div class='col-md-3'></div>
   <div class='col-md-6'>
      <img  class=finall-img src="image/finall.jpg">
     <p>Your order has been registered</p>
<?php
    echo"'
    <div class='row'>
         <div class='col-md-2'></div>
         <div class='col-md-8 track-code'>
            All your orders is 
             $final_price
             Toman
             <br>
            Your tracking code
            $track_code
         </div>
         <div class='col-md-2'></div>
    </div>
  
    ";
?>
     <p></p>
   </div>
   <div class='col-md-3'></div>
   </div>
<?php
 include_once("footer.php");
 ?>	
  
   