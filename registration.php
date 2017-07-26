<?php

include('connection.php');

if (($_POST[submit])) {
    $name = $_POST[Firstname];
    $password = $_POST[Password];
    $email = $_POST[Email];
    $mobile = $_POST[Moblie];
    $gender = $_POST[Gender];
    $dob = $_POST[DOB];

    $address = $_POST[Address];
    
    echo $name;
    echo $password;
    echo $email;
   
    $selectquery = "insert into user_account(name,password,email,mobile,gender,dob,address)values('$name','$password','$email','$mobile','$gender','$dob','$address')";
    
    $result = mysqli_query($db,$selectquery) or die("Error");
    
    

    if ($result) {
        echo "Registered Successfully";
    } else {
        echo "Not Registered";
    }
}
?>
  