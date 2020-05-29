<?php
if(isset($username['username'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location: http://localhost/project10/main-fruite/register.php");
}
?>

<?php
include_once("db.php");
// Set session variables
session_start();
//get data
// $name="maryam";
// $Lastname="sakhaei";
// $Email="maryamsakhaei66@yahoo.com";
// $pwd="123456";
// $confirmpwd="123456";


if(isset($_SESSION["name"])){
    $user=$_SESSION["name"];
    $delete = "DELETE FROM login WHERE name=$user";

    if ($conn->query($delete) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
else{
  echo "you can not remove user";
}


?>