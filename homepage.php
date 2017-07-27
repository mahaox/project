
//<?php
//session_start();
//if($name=$_SESSION['name']){
//    header("location:signout.php");
//}
//?>
    <html>
    <head><link rel="stylesheet" type="text/css" href="csshome.css">
        <style>
            td {
                height: 150px;
                width: 150px;
                text-align: center;
            }
            img {
                height: 100%;
                width: 100%;
            }
            #tab {
                padding-left: 380px;
           }
        </style>
    </head>
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
        $selectquery = "select name,email,mobile,gender,dob,address,picture from user_account";
        $result = mysqli_query($db, $selectquery);
        ?>
        <div id="tab">
            <table border="2">           
                <tr bgcolor="grey">             
                    <th>Name </th>
                    <th>Email</th>
                    <th>Mobile </th> 
                    <th>Gender</th> 
                    <th> DOB </th> 
                    <th>Address </th>
                    <th>Picture </th>
                </tr>
                <tr>
                    <?php
                    if (mysqli_num_rows($result) != 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            $id = $row['Id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile = $row['mobile'];
                            $gender = $row['gender'];
                            $dob = $row['dob'];
                            $address = $row['address'];
                            $pic = $row['picture'];
                            ?>
                            <td> <?php echo $name; ?></td>   
                            <td> <?php echo $email; ?></td> 
                            <td><?php echo $mobile; ?></td>
                            <td><?php echo $gender; ?></td>
                            <td><?php echo $dob; ?></td>
                            <td><?php echo $address; ?></td> 
                            <td> <?php echo "<img src='" . $pic . "'/>"; ?></td>
                        </tr>  
                        <?php
                    }
                }
                ?>
            </table>
        </div>
    </body>
</html>