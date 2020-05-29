
<?php
include_once("db.php");
include_once("header.php");
// Set session variables
session_start();
 if(isset($_SESSION["username"])){
 $user=$_SESSION["username"];
 $delete= "DELETE FROM user WHERE name=$user";
     echo "password: " . $row["password"]." / email :". $row["email"]."<a href='remove.php?id=".$row["id"]."'>حذف کاربر</a><br>";
     echo "
        <div class='row'>
        <div class='col-md-3'></div>
        <div class='col-md-6 massage-box'>
            <p class='record'>User deleted</p>
            <a></a><br>
            <a class='back-view'href='dashboard.php'>dashboard</a>
            <a class='back-view'href='logout.php'>logout</a>
        </div>
        <div class='col-md-3'></div>
        </div>
     ";
    
        if ($conn->query($delete) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
    else{
      echo "
        <div class='row'>
        <div class='col-md-3'></div>
        <div class='col-md-6 massage-box'>
            <p class='record'> Cant User deleted</p>
            <a></a><br>
            <div class='link'>
                <a class='back-view'href='dashboard.php'>dashboard</a>
                <a class='back-view'href='logout.php'>logout</a>
            </div>
        </div>
        <div class='col-md-3'></div>
        </div>
      ";
    }
    
?>
