<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database="propertymanagement";
    $conn = mysqli_connect($server, $username, $password,$database);
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `customer` (`id`, `name`, `surname`, `emailid`, `num`,`address`) VALUES
    ('$id', '$fname', '$lname', '$email', '$phoneNumber', '$address');";
    //echo $sql;
    $result=mysqli_query($conn, $sql);
    if($result){
        echo"data inserted";
    }
?>