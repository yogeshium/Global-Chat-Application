<?php
    session_start();
    if(!isset($_SESSION['username']))
    { header("location: login.php");}
    
    if(!isset($_GET['username']))
    { header("location: users.php");}

    include_once('php/config.php');

    $sender = $_SESSION['username'];
    $reciever = $_GET['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Area</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }
        body{
            height : 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container-chatArea{
            width: 50%;
            height: 80vh;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 2px 20px rgba(0,0,0,0.4);
        }
        .body{
            flex: 1;
            padding: 20px 30px;
            overflow: auto;
        }
        .body::-webkit-scrollbar {
                display: none;
                }
        
        .message{
            max-width: 90%;
            overflow: hidden;
            word-wrap: break-word;
            padding: 10px;
            background-color: black;
            color: white;
            width: fit-content;
            border-radius: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        .user_message{
            margin-left: auto;
            background-color: grey;
            color: white;
        }
        .footer form{
            display: flex;
        }
        #message{
            background-color: white;
            flex: 3;
            min-height:5vh;
            overflow: word-wrap;
            border: none;
            padding-left: 5px;
            font-size: 16px;
            border-radius: 2px;
        }
        input[type="text"]::placeholder{
            text-align: center;
            
        }
        form button{
             flex: 1;
             border-radius: 2px;
             border: none;
             outline:none;
             background-color: black;
             color: white;
             cursor: pointer;
        }
        form button:hover{
            background-color: grey;
        }
        h1{
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="container-chatArea">
        <div class="header">
            <h1><?php echo$reciever?></h1>
        </div>
        <div class="body" id="body">
            <!-- <p class="message"></p>
            <p class="user_message message"></p> -->
        </div>
        <div class="footer">
            <form action="#" method="" id="form">
                <input type="text" id ="sender" name="sender" value='<?php echo $sender ?>' hidden>
                <input type="text" id ="reciever" name="reciever" value='<?php echo $reciever ?>' hidden>
                <input type="text" id="message" name="message" value="" placeholder="message">
                <button type="submit" id="submit-btn">SEND</button>
            </form>
        </div>
    </div>
    <script src="chat.js"></script>
</body>
</html>