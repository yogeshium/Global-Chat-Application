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
        }
        .message{
            padding: 10px;
            background-color: black;
            color: white;
            width: fit-content;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .user_message{
            margin-left: auto;
            background-color: grey;
            color: white;
        }
        .footer form{
            display: flex;
        }
        form input{
            background-color: white;
            flex: 3;
            height: 30px;
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
    </style>

</head>
<body>
    <div class="container-chatArea">
        <div class="header">
            <h1>Mansi</h1>
        </div>
        <div class="body">
            <p class="message">Hii</p>
            <p class="user_message message">Heyy</p>
        </div>
        <div class="footer">
            <form action="" method="">
                <input type="text" placeholder="message">
                <button>SEND</button>
            </form>
        </div>
    </div>
    <!-- <div class="container-contacts">
         
    </div> -->
</body>
</html>