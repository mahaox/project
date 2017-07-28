<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if ($name = $_SESSION['name']) {
    header("location:account.php");
}
?>
<html>
    <head> 
        <title>form </title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cssreg.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="jqreg.js"></script>
    </head>
    <body>
        <h1> REGISTRATION  FORM</h1>
        <div id="content">
            <form method="post" action="registration.php" enctype="multipart/form-data">   <table align="center">
                    <tr><td>1.Name :</td><td><input type="text" id="name" name="Firstname"  value="">
                            <span class="hidden" id="nameu"></span></td></tr>
                    <tr><td>2.Password :</td><td><input type="password" id="pwd" name="Password"  value="">
                            <span class="hidden" id="pwrd"></span></td></tr>
                    <tr><td>3.Email:</td><td><input type="text" id="email" name="Email" value="">
                            <span class="hidden" id="mail"></span></td></tr>
                    <tr><td>4.Mobile :</td><td> <input type="text" id="mobile" name="Moblie" value="">
                            <span class="" id="mob"></span></td></tr>    
                    <tr><td>5.Gender :</td><td>  <input type="radio" name="Gender" value="male" > Male
                            <input type="radio" name="Gender" value="female"> Female<span class="error" id="gen"></span></td></tr>
                    <tr><td>6.Date of Birth</td><td> <input type="date" id="date" name="DOB" value="">
                            <span class="" id="dob"></span></td></tr>
                    <tr><td>7.picture:</td><td> <input type="file" id="picture" name="picture">
                    <tr><td>8.Address :</td><td> <input type="text" id="address" name="Address" value="">
                            <span class="" id="add"></span></td></tr>
                    <tr><td><input type="submit" name="submit" id="submit"></td></tr>
                </table> 
            </form> 
            <div >
                <p>already register<a href="login.php">Login</a></p></div>
        </div>  

    </body>

</html>
