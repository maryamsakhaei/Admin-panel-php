<?php
include_once("db.php");
include_once("header.php");
SESSION_start();

$sql = "SELECT id,product_name,product_price  FROM insertproduct LIMIT 50 ";
//echo"ok";
$result = $conn->query($sql); 
//echo"ok";
if ($result->num_rows > 0) {
//echo"okk";
    while($row = $result->fetch_assoc()) {
        //var_dump($row);
        echo " 
            <div class='row'>
                <div class='row'>
                    <div class='col-md-3'></div>
                    <div class='col-md-3 view-style'>
                        product_name: <a  class='view'href='edit-product.php'>" . $row["product_name"]. "</a> 
                    </div>
                    <div class='col-md-3 view-style'>
                        product_price: 
                        <a class='view' href=edit-product.php?id=".$row["id"]."&price=".$row["product_price"]."&product=".$row["product_name"].">" . $row["product_price"]. "</a> <br>
                    </div>
                    <div class='col-md-3'></div>
                </div>    
            </div>
        ";
    }
} else {
    echo "0 results";
    }
        echo"<div class='row'>
        <div class='col-md-3'></div>
        <div class='col-md-6 massage-box'>
        <a></a><br>
          <a  class='back-view'href='dashboard.php'>dashboard</a>
          <a  class='back-view'href='logout.php'>logout</a>
        </div>
        <div class='col-md-3'></div>
        </div>";
?>