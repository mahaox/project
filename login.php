
<?php

if (isset($_POST['submit'])) {
    include ('connection.php');
    $name = $_POST['username'];
    $pwd = $_POST['password'];
    if (empty($name) || empty($pwd)) {
        echo '<script language="javascript">';
        echo 'alert("Must filled the all details..")';
        echo '</script>';
    }
    $myquery = "select * from user_account where name='$name' AND password='$pwd'";
    $result = mysqli_query($db, $myquery);
    if (mysqli_num_rows($result)== 1) {
       session_start();
      
               $_SESSION['name']=$name;
        header('location: signout.php');
     }
       else
    {
        echo 'Incorrect UserId or Password';
         }
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="csslogin.css">
    </head>
    <body>
        <form method="post">
            <div class="outbox">
                <h2>Login Form</h2>
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username">
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password">
               <button name="submit" type="submit">Login</button>
                <p>user not already register<a href="register.php">Register Here?</a></p>
            </div> 
        </form>
    </body>
</html>
  