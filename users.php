<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header("location: login.php");
    }

    include_once('php/config.php');

    $username = $_SESSION['username'];
    $conn= mysqli_connect("localhost","root","","chatapp");
    if(!$conn)
        die("Failed: To connect");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing : border-box;    
        }
        .body{
            height: 90vh;
            background: #eee;
            display: flex;
            font-family: sans-serif;
        }
        .container{
            margin: auto;
            width: 500px;
            max-width: 90%;
        }
        .container div{
            width: 100%;
            height: 90vh;
            overflow: auto;
            padding : 20px;
            background: white;
            border-radius: 4px;
            box-shadow : 0 2px 10px;
        }   
        .person{
            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            margin-bottom: 5px;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,.125);
            
            width: 100%;
            color: #495057;
            text-align: inherit;
            text-decoration: none;
            cursor: pointer;
        }
        .person:hover{
            background-color: #f7f7f9;
        }
        h4{
            border: 3px solid #46a5ff;
           
            color:#46a5ff;
            text-align: center;
            width : 100%;
            padding: 0.75rem 1.25rem;
        }
        .noactive{
            padding: 0.75rem 1.25rem;
            font-size: 10px;
            color: #818182;
            background-color: #fefefe;
            text-align: center ;
        }
        .nav{
            display:flex;
            width: 100%;
            height: 2.5rem; 
            background-color: #eee;
            justify-content: right;
        }
        .nav a{
            font-size: 20px;
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            text-decoration: none;
        }
        .nav a:hover{
            background-color: #282c31;
        }

    </style>
</head>

<body>
    <nav class="nav">
        <a href="#">Logout</a>
    </nav>
    <div class="body">
    <div class="container">
        <div>
            
            <h4 class="active">Active</h4>
                <!-- <a href="#" class="person" id="person">yogesh</a> -->
                <?php
                $sql="select username, status from user where status = 'Active' AND username <> '".$username."';";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                if($num==0)
                    echo "<p class=\"noactive\">EMPTY</p>";
                while($num--)
                {
                    $rows = mysqli_fetch_assoc($result);
                    echo "<a href=\"chat.php?username=".$rows['username']."\" class=\"person\" id=\"person\">".$rows['username']."</a>";
                }
                ?>
            
            <h4>Not Active</h4>
            <?php
                $sql="select username, status from user where status = 'Not Active';";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                if($num==0)
                    echo "<p class=\"noactive\">EMPTY</p>";
                while($num--)
                {
                    $rows = mysqli_fetch_assoc($result);
                    echo "<a href=\"chat.php?username=".$rows['username']."\" class=\"person\" id=\"person\">".$rows['username']."</a>";
                }
                ?>
         
         </div> 
    </div>
            </div>
</body>
</html>