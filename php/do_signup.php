<?php
    session_start();

    require('config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    //username check
    $sql = "select * from user where username = '{$username}';";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0)
        die("Username already exists. Please try with another one");
    
    //password check
    if($password !== $re_password)
        die("Password didn't match. Try again");

    $sql = "insert into user values('{$username}','{$password}','Active');";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION["username"]=$username;
        echo "success";
    }
    
?>