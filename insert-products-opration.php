<?php
include_once("db.php");
include_once("header.php");
SESSION_start();
$product_name=$_POST["product_name"];
$product_price=$_POST["product_price"];
$sql="INSERT INTO insertproduct (product_name,product_price) value ('$product_name','$product_price')";
$_SESSION['product_name']=$product_name;
$_SESSION['product_price']=$product_price;
if($conn->query($sql) === TRUE){
      echo"<div class='row'>
      <div class='col-md-3'></div>
      <div class='col-md-6 massage-box'>
          <p class='record'>Record successfully</p>
          <a></a><br>
          <div class='record-link'>
          <a class='back-view'href='dashboard.php'>dashboard</a>
          <a class='back-view'href='logout.php'>logout</a>
          </div>
      </div>
      <div class='col-md-3'></div>
      </div>
      ";
}
else{
        echo "Error: " . $sql . "<br>" . $conn->error;
}
include_once("footer.php");
?>