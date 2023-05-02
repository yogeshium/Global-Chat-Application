<?php 
session_start();
if(isset($_SESSION['username']))
{
    require('config.php');
    $sender = $_SESSION['username'];
    $reciever = $_GET['username'];

    $sql = "SELECT * from message where (sender='{$sender}' AND reciever='{$reciever}') OR (sender='{$reciever}' AND reciever='{$sender}') ;";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    while($num--)
    {
        $row = mysqli_fetch_assoc($result);

        if($row['sender']==$sender && $row['reciever']==$reciever)
        {
            echo "<p class='user_message message'>{$row['msg']}</p>";
        }
        else
        {
            echo "<p class='message'>{$row['msg']}</p>";
            
        }
    }
}
else{
    header("location: login.php");
}

?>