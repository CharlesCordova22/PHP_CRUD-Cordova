<?php
    require("fetch_employee.php");
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="image/png" href="image/tab_logo.png">
        <title>Registration form</title>
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
        hr{
            
        }
        .logo img{
            width: 100%;
        }
        .container {
            padding: 40px;
            padding-bottom: 5px;
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
        .update {
            border: none;
            margin-left: 100px;;
            border-radius: 7px;
            font-size: 15px;
            height: 34px;
            outline: none;
            width: 45%;
            font-family: Arial, Helvetica, sans-serif;
            background: rgba(255,255,2555,0.7);
            cursor: pointer;
            transition: .3s;
            box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
            margin-bottom: -10px;
        }
        .delete{
            margin-left: 190px;
            margin-top: -41px;
            border: none;
            border-radius: 7px;
            font-size: 15px;
            height: 34px;
            outline: none;
            width: 45%;
            font-family: Arial, Helvetica, sans-serif;
            background: rgba(255,255,2555,0.7);
            cursor: pointer;
            transition: .3s;
            box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;

        }
        .input_Textbox{
            border-radius: 7px;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            height: 30px;
            color: black;
            margin-bottom: 6px;

            text-align: center;
            background: rgba(255,255,2555,0.7);
            box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;            
        }
        .welcomed_user{
            margin-top: -5px;
            margin-left: 40px;
            margin-bottom: -15px;
            font-size: 20px;
        }
        header {
        background-color: rgba(34,34,34);
        border-radius: 5px;
        height: 100px;
        padding: 7px;
        }

        nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
        }

        .logo img{
        padding-left: 30px;;
        width: 40%;
        }

        .menu {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
        }

        .menu li {
        margin: 0 10px;
        }

        .menu li a {
        color: #fff;
        text-decoration: none;
        }

        .menu-toggle {
        display: none;
        }

        @media (max-width: 768px) {
        .menu {
            display: none;
            }
        }
        .menu{
            font-size: 18px;
            color: white;
        }
        .menu a{
            text-decoration: none;
            background-image: linear-gradient(
                to right,
                white,
                #DDDDDD 100%,
                white 100%
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
        .menu a:before{
            content: '';
            background: #DDDDDD;
            display: block;
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 3px;
            transition: all 0.3s ease-in-out;
        }
        .menu a:hover{
            background-position: 0;
        }
        .menu a:hover::before{
            width: 100%;
        }
        .exit_button{
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            margin: 0;
            margin-right: 15px;
            padding: 0;
        }
        .exit_c{
            border-radius: 7px;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <img src="image/logo-air.png" alt="Logo">
                </div>
                <form class="exit_button" action="employee_page.php">
                    <input type="submit" class="exit_c" value="EXIT">
                </form>
            </nav>
        </header>
        <hr><br>

        <form method="POST" action="update_employee.php?EMP_NUM=<?php echo $userDetails['EMP_NUM']?>">
            <div class="container">

                <input name="EMP_TITLE" id="EMP_TITLE" placeholder="EMPLOYEE TITLE" class="input_Textbox" type="text" value="<?php echo $userDetails['EMP_TITLE']?>" required>
                <br><br>

                <input name="EMP_LNAME" id="EMP_LNAME" placeholder="EMPLOYEE LASTNAME"class="input_Textbox" type="text" value="<?php echo $userDetails['EMP_LNAME']?>" required>
                <br><br>

                <input name="EMP_FNAME" id="EMP_FNAME" placeholder="EMPLOYEE FIRSTNAME" class="input_Textbox" type="text" value="<?php echo $userDetails['EMP_FNAME']?>" required>
                <br><br>

                <input name="EMP_INITIAL" id="EMP_INITIAL" placeholder="EMPLOYEE INITIAL"class="input_Textbox" type="text" value="<?php echo $userDetails['EMP_INITIAL']?>" required>
                <br><br>

                <input name="EMP_JOB" id="EMP_JOB" placeholder="EMPLOYEE JOB" class="input_Textbox" type="text" value="<?php echo $userDetails['EMP_JOB']?>" required>
                <br><br>
                
                <input name="EMP_HIRE_DATE" id="EMP_HIRE_DATE" placeholder="EMPLOYEE HIRE DATE" class="input_Textbox" type="date" value="<?php echo $userDetails['EMP_HIRE_DATE']?>" required>
                <br><br>

                <input type="submit" class="update" value="&#10226;">
                <br><br><br>
        </form>
        
        </div>
    </body>
</html>