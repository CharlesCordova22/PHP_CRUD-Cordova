<?php

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="image/png" href="image/tab_logo.png">
        <title>ADD EMPLOYEE</title>
    </head>
    <style>
        body {
            background-color: #DDDDDD;
        }
        p {
            color: #eeeeee; 
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            padding-left: 80px;
            margin-bottom: -15px;
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
            margin-top: 40px;
            color: #eeeeee;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
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
            font-family: Arial, Helvetica, sans-serif;
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
            background: rgba(255,255,2555,0.7);
            box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
        }
        .userAcc{
            text-decoration: none;
            font-size: 14px;
            padding-left: 238px;
            color: #ff5722;
        }
        .login{
            font-size: 16px;
            color: white;
            margin-left: 88px;
            margin-bottom: -30px;
        }
        .login a{
            text-decoration: none;
            font-weight: bold;
            background-image: linear-gradient(
                to right,
                white,
                white 50%,
                white 50%
            );
            background-size: 200% 100%;
            background-position: -100%;
            display: inline-block;
            padding: 5px 0;
            position: relative;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: all 0.3s ease-in-out;
        }
        .login a:before{
            content: '';
            background: black;
            display: block;
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 3px;
            transition: all 0.3s ease-in-out;
        }
        .login a:hover{
            background-position: 0;
        }
        .login a:hover::before{
            width: 100%;
        }
    </style>

    <body>
        <form method="POST" action="add_employee.php">
            <div class="container">
            <div class="logo">
                <img src="image/logo-air.png">
            </div>
            <br><hr><br>

                <input name="EMP_TITLE" placeholder="EMPLOYEE TITLE" class="input_Textbox" type="text" required>
                <br><br>

                <input name="EMP_LNAME" placeholder="EMPLOYEE LASTNAME" class="input_Textbox" type="text" required>
                <br><br>

                <input name="EMP_FNAME" placeholder="EMPLOYEE FIRSTNAME" class="input_Textbox" type="text" required>
                <br><br>

                <input name="EMP_INITIAL" placeholder="EMPLOYEE INITIAL" class="input_Textbox" type="text" required>
                <br><br>
                
                <input name="EMP_JOB" placeholder="EMPLOYEE JOB" class="input_Textbox" type="text" required>
                <br><br>

                <input name="EMP_HIRE_DATE" placeholder="EMPLOYEE HIRE DATE" class="input_Textbox" type="date" required>
                <br><br>


                <input type="submit" class="user_Signup" value="ADD EMPLOYEE&nbsp;&nbsp;&#x2714;">
                <br><br>
        </form>
        <form action="employee_page.php">
            <input type="submit" class="user_Signup" value="EXIT">
        </form>
        </div>
    </body>
</html>