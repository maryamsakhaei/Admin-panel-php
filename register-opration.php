<?php
include_once("db.php");
include_once("header.php");
session_start();
  $username=$_POST["username"];
 $password=$_POST["password"]; 
if(!$username==null&&!$password==null){
   //echo"ok";
    $sql="INSERT INTO admin (username,password)value ('$username','$password')";
    //echo"ok";
        if($conn->query($sql) === TRUE) {
       //echo"okkk";
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
          
            header("Location: http://localhost/php/project10/dashboard.php");  
        }else{
            echo"Enter correct data";
        } 
}else{
    echo"You are wrong";
}  
 include_once("footer.php");
?>	     