<?php
    session_start();
    include("db_config/connect.php");
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from users where email = '$email' && password = '$password' ";
    $result= mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){


        $row=mysqli_fetch_assoc($result);
        $_SESSION['user_info']=$row;

        header('location:profile.php');
    }else{
        header("location:login.php?flag=1");
    }

?>