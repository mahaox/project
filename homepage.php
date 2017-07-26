<html>
    <head><link rel="stylesheet" type="text/css" href="csshome.css"></head>
    <body>
        <div class='outbox'>
            <h2>Welcome to user portal...</h2>
            <div class='innerbox'>
        <a href="register.php"><button type="submit" class='Reg'>Register</button></a>
         <a href="login.php"><button type="submit" class='log'>Login</button></a>
            </div>
        </div>
         <?php
         include 'connection.php';
         ?>
        <?php
    include 'connection.php';

    $selectquery = "select * from user_account";
    $result = mysqli_query($db, $selectquery);
    $row = mysqli_fetch_array($result);
    ?>
    <br><br><br>
    <table align="center" width="80%" border="4" cellpadding="2" cellspacing="1" style="border-collapse:collapse">           
        <tr bgcolor="#3a6070">             
             <th><font color = "white" size = "3">S.no </font>
            <th><font color = "white" size = "3">Name </font>
            <th><font color = "white" size = "3">Email </font>
            <th><font color = "white" size = "3">Mobile </font></th> 
            <th><font color = "white" size = "3">Gender </font></th> 
            <th><font color = "white" size = "3"> DOB </font></th> 
            <th><font color = "white" size = "3">Address </font></th>
        </tr>
        <tr>
            <?php
            if (mysqli_num_rows($result) != 0) {

                while ($row = mysqli_fetch_array($result)) {

              $id=$row['Id'];
                    $name = $row['name'];
                  
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $gender = $row['gender'];
                    $dob = $row['dob'];
                      $address = $row['address'];
                    ?>
            <td> <?php echo $id; ?></td> 
                    <td><div align="middle"> <?php echo $name; ?></div></td>   

                    <td> <?php echo $email; ?></td> 
                    

                    <td><?php echo $mobile; ?></td>

                    <td><?php echo $gender; ?></td>

                    <td><?php echo $dob; ?></td>

                    <td><?php echo $address; ?></td> </tr>  
                <?php
            }
        }
        ?>
    </body>
</html>