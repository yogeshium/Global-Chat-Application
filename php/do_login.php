<?php
    session_start();
    $conn= mysqli_connect("localhost","root","","chatapp");
    if(!$conn)
        die("Failed: To connect");
    
    $username = $_POST['username'];
    $password= $_POST['password'];
    $sql = "Select * from user where username = '{$username}';";
    $result = mysqli_query($conn,$sql);
    
    $num = mysqli_num_rows($result);
    if($num>0)
    {
        while($num--)
        {
            $rows=mysqli_fetch_assoc($result);
            if($rows['password']===$password)
            {
                $_SESSION["username"]=$username;
                echo"success";
            }
            else
            {
                die("Password does not match");
            }
        }
    }
    else
    {
        die("Username does not exist");
    }

?>