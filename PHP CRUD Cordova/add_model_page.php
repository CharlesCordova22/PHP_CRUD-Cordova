<?php

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
        <link rel="icon" type="image/png" href="image/tab_logo.png">
        <title>ADD MODEL</title>
    </head>
    <style>
        body {
            background-color: #DDDDDD;
            font-family: 'Comfortaa';
        }
        .logo img{
            width: 100%;
        }
        .container {
            padding: 40px;
            padding-left: 50px; 
            padding-right: 50px;
            width: 362px; 
            border: 8px solid rgba(34,34,34,0.8);
            margin: auto; 
            margin-top: 110px;
            color: #eeeeee;
            font-size: 14px;
            font-family: 'Comfortaa';
            border-radius: 15px 50px 30px;
            background-color: #434242;
            box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
        }
        .user_Signup {
            border: none;
            border-radius: 7px;
            font-size: 15px;
            height: 34px;
            outline: none;
            width: 100%;
            font-family: 'Comfortaa';
            background: rgba(255,255,2555,0.7);
            cursor: pointer;
            transition: .3s;
            box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
            margin-bottom: 5px;
        }
        .input_Textbox{
            border-radius: 7px;
            width: 100%;
            height: 30px;
            color: black;
            margin-bottom: 6px;
            text-align: center;
            font-family: 'Comfortaa';
            background: rgba(255,255,2555,0.7);
            box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
        }
    </style>

    <body>
        <form method="POST" action="add_model.php">
            <div class="container">
            <div class="logo">
                <img src="image/logo-air.png">
            </div>
            <br><hr><br>

                <input name="MOD_MANUFACTURER" placeholder="MODEL MANUFACTURER" class="input_Textbox" type="text" required>
                <br><br>

                <input name="MOD_NAME" placeholder="MODEL NAME" class="input_Textbox" type="text" required>
                <br><br>

                <input name="MOD_CHG_MILE" placeholder="MODEL CHARGE PER MILE" class="input_Textbox" type="number" required>
                <br><br>

                <input type="submit" class="user_Signup" value="ADD MODEL&nbsp;&nbsp;&#x2714;">
                <br><br>
        </form>
        <form action="model_page.php">
            <input type="submit" class="user_Signup" value="EXIT">
        </form>
        </div>
    </body>
</html>