<?php
    require('config.php');
    
    $sender = $_POST['sender'];
    $reciever = $_POST['reciever'];
    $msg = $_POST['message'];

    $sql = "INSERT into message values('{$sender}','{$reciever}','{$msg}');";
    $result = mysqli_query($conn, $sql);
    if(!$result)
        echo"Failed";
    else   
        echo"success";
?>