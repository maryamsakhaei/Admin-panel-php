<?php
//اگر شخص از قبل ثبت نام کرده بود،مثلا صفحعه سوم بود یه دفعه میره صفحه login.
//این شخص دیگه نیازی نیست بره فرم لاگین رو پر کنه،میگیم اگر اسمش در حافظه موقت بود .هدر بشه و بره صفحه مورد نظر
if (!isset($_SESSION['username'])){ 
  header("Location: http://localhost/php/project10/main-fruite/login.php");
}
?>