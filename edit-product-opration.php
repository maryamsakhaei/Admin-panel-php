<?php 
session_start(); 
include_once("header.php");
include_once("db.php");
    $price=$_POST['product_price'];
    $nameproduct=$_POST['names'];
    $id=$_POST['id'];
                 $sql = "UPDATE insertproduct SET product_price=$price WHERE id=$id";
                 if (mysqli_query($conn, $sql)) {
                    echo"<div class='row'>
                    <div class='col-md-3'></div>
                    <div class='col-md-6 edit-box'>
                      <p class='edit-text'>Edited successfully</p>
                      <a></a>
                      <a  class='edit-back'href='view-products-opration.php'>view product</a>
                      <a  class='back-view'href='logout.php'>logout</a>
                    </div>
                    <div class='col-md-3'></div>
                    </div>
                    ";
                } else {
                     echo "Error updating record: " . mysqli_error($conn);
                }
       
    
 ?>
 
 
 















