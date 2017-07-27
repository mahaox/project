<?php

include('connection.php');

if (($_POST[submit])) {
    $name = $_POST[Firstname];
    $password = $_POST[Password];
    $email = $_POST[Email];
    $mobile = $_POST[Moblie];
    $gender = $_POST[Gender];
    $dob = $_POST[DOB];
    $target = "Image/";
    $address = $_POST[Address];
    move_uploaded_file($_FILES['picture']['tmp_name'], $target . $_FILES['picture']['name']);
    $pic = $target . $_FILES['picture']['name'];
    $selectquery = "insert into user_account(name,password,email,mobile,gender,dob,picture,address)values('$name','$password','$email','$mobile','$gender','$dob','$pic','$address')";
    $result = mysqli_query($db, $selectquery) or die("Error");
    if ($result) {
        header('location: login.php');
    } else {
        echo "Not Registered";
    }
}
?>
  