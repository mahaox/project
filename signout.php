<?php

session_start();
$name = $_SESSION['name'];
if($name){
echo "User successfully login in";
echo "<a href='homepage.php'>Sign Out</a>";
}
else{
header('location:login.php');}
?>

