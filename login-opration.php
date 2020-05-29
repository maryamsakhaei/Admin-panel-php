<?php
   include_once("db.php");  
   include_once( "header.php");
   session_start();  
   $username=$_POST['username'];
   $password =$_POST['password']; 
   

    if(!$username==null&&!$password==null){
      $query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
       $result = mysqli_query($conn,$query) or die(mysql_error());
       $rows = mysqli_num_rows($result);
      if($rows==1){
          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;
            // header("Location: http://http://localhost/php/project10/main-fruite/admin-edit.php")
             header("Location: http://http://localhost/php/project10/admin-edit.php");
      }
      else{
        include_once("header.php");
        echo"<div class='row'>
        <div class='col-md-3'></div>
        <div class='col-md-6 massage-box2'>
        <p class='massage-text2'>در وارد کردن رمز بیشتر دقت کنید!!!  </p>
        </div>
        <div class='col-md-3'></div>
        </div>
        ";
      }
}
else{
    echo "your form is not fill ";    
  }
include_once( "footer.php");
?>