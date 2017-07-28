<?php
session_start();
$name = $_SESSION['name'];
if($name){
echo "User successfully login in";
echo "<a href='logout.php'>Sign Out</a>";
}
else{
header('location:login.php');
}
?>

