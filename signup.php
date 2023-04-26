<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing : border-box;    
        }
        body{
            min-height: 100vh;
            background: #eee;
            display: flex;
            font-family: sans-serif;
        }
        .container{
            margin: auto;
            width: 500px;
            max-width: 90%;
        }
        .container form{
            width: 100%;
            height: 100%;
            padding : 20px;
            background: white;
            border-radius: 4px;
            box-shadow : 0 8px 16px;
        }
        .container form h1{
            text-align: center;
            margin-bottom : 24px;
            color: #222;
        }
        .container form .form-control
        {
            width: 100%;
            height : 40px;
            background: white;
            border-radius: 4px;
            border: 1px solid silver;
            margin : 10px 0 18px 0;
            padding : 0 10px;
        }
        .container form .btn{
            margin-left : 50%;
            transform : translateX(-50%);
            width: 120px;
            height: 34px;
            border: none;
            outline : none;
            background: #27a327;
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
            color: white;
            border-radius: 4px;
            transition : .3s;
        }
        .container form .btn:hover{
            opacity: .7;
        }
        .btn-acnt{
            text-align: center;
            margin-top : 12px;
            margin-bottom: 24px;
            color: #222;
        }
        .show_password
        {
            font-size: 0.84em;
        }
        #errormsg{
            
            background-color: #f8d7da;
            padding: 0.5em;
            color: #9d1c24;
            margin: auto;
            width: 90%;
            border-radius: 0.25rem;
            height: 5vh;
            text-align: center;
            display: none;
        }
        #successmsg{
            background-color: #d4edda;
            color: #155724;
            padding: 0.5em;
            margin: auto;
            width: 90%;
            border-radius: 0.25rem;
            height: 5vh;
            text-align: center;
            display: none;
        }
        a{
            color:blue;
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
        
        
    </style>
    <script>
        function password_show()
        {
            var pass=document.getElementById("password");
            if(pass.type==="password")
                pass.type="text";
            else
                pass.type="password";
        }
        function re_password_show()
        {
            var re_pass=document.getElementById("re_password");
            if(re_pass.type==="password")
                re_pass.type="text";
            else
                re_pass.type="password";
        } 
        
    </script>
</head>
<body>
    <div class="container">
        <form action="php/do_signup.php" method="POST" id="form">
            <h1>Sign Up</h1>
            <div id="errormsg"></div>
            <div id="successmsg"></div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" id="username" value = "" required>
            </div>
    
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
                <label for="" class="show_password"><input type="checkbox" onclick="password_show()" > Show Password</label>
                <br> 
            </div>
            
            <div class="form-group">
                <br>
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="re_password" id="re_password" required>
                <label for="" class="show_password"><input type="checkbox" onclick="re_password_show()" > Show Password</label>
            </div>
            <input type="submit" class="btn" id="submit-btn">
            <div class="btn-acnt">Already a Member? <a href="login.php">Log In</a></div>
        </form>
    </div>
    
    <script src="signup.js"></script>
</body>
</html>