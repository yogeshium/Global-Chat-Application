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
        .body{
            height : 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .container-chatArea{
            width: 30%;
            height: 80vh;
            display: flex;
            flex-direction: column;

            box-shadow: 2px 2px 20px rgba(0,0,0,0.4);
        }
        .chatbody{
            flex: 1;
            padding: 20px 30px;
            overflow: auto;
            background-color: #f6f6f6;
        }
        .body::-webkit-scrollbar {
                display: none;
                }
        
        .message{
            max-width: 90%;
            overflow: hidden;
            word-wrap: break-word;
            padding: 10px;
            background-color: #fff;
            color:black;
            width: fit-content;
            margin-bottom: 15px;
            box-sizing: border-box;
            box-shadow: 0 0 2rem rgba(0, 0, 0, 0.075), 0rem 1rem 1rem -1rem rgba(0, 0, 0, 0.1);
            border-radius: 1.125rem 1.125rem 1.125rem 0;
        }
        .user_message{
            margin-left: auto;
            background-color: #343434;
            color: white;
            border-radius: 1.125rem 1.125rem 0 1.125rem;
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
       .contact-bar{
        padding-left: 5rem;
            height: 4.5rem;
            font-size: 18px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-weight: 400;
            line-height: 1.25em;
            box-sizing: border-box;
            /* border-top-left-radius: 10px;
            border-top-right-radius: 10px; */
            border-radius: 1rem;
       }
       .contact-name{
        font-weight: 500;
       }
        .nav{
            display:flex;
            width: 100%;
            height: 2.5rem; 
            /* background-color: #eee; */
            /* justify-content: right; */
            
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
        <a href="#">User</a>
        <a href="#">Logout</a>
    </nav>
    <div class="body">
    <div class="container-chatArea">
        <div class="contact-bar">
            <div class="contact-name"><?php echo$reciever?></div>
        </div>

        

        <div class="chatbody" id="chatbody">
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
    </div>
    <script src="chat.js"></script>
</body>
</html>