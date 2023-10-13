<?php
    $con =mysqli_connect('127.0.0.1','root');

    if($con) {
        echo "connection successful";
    }
    else {
        echo "connection failed";
    }
    mysqli_select_db($con,'smhospital');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query ="INSERT INTO users (email,password) values ('$email','$password')";
    mysqli_query($con, $query);
    header('location:index.php');
?>