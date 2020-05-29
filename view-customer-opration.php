<?php
include_once("db.php");
include_once("header.php");
SESSION_start();
//$name=$_SESSION["name"];
//$tel=$_SESSION["tel"];
$sql = "SELECT name,tel  FROM user LIMIT 50 ";
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
                    name: <a  class='view'href='edit.php'>" . $row["name"]. "</a> 
                </div>
                <div class='col-md-3 view-style'>
                   tel: <a class='view' href='edit.php'>" . $row["tel"]. "</a> <br>
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
          <form action='remove-user.php' method=post class='form-horizontal'>
          <button id=submit name='submit' class='remove-user-btn'>click here to Remove user</button>
        </div>
        <div class='col-md-3'></div>
        </div>";
        //چرا خط 5 و 6 رو نزاشتیم ولی اعمال شد؟
?>