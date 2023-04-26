<?php
    require("fetch_customer.php");
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
        <link rel="icon" type="image/png" href="image/tab_logo.png">
        <title>EDIT CUSTOMER</title>
    </head>
    <style>
        body {
            background-color: #DDDDDD;
            font-family: 'Comfortaa';
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
            font-family: 'Comfortaa';
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
            font-family: 'Comfortaa';
            background: rgba(255,255,2555,0.7);
            cursor: pointer;
            transition: .3s;
            box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
            margin-bottom: -10px;
        }
        .input_Textbox{
            border-radius: 7px;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            height: 30px;
            color: black;
            margin-bottom: 6px;
            font-family: 'Comfortaa';
            text-align: center;
            background: rgba(255,255,2555,0.7);
            box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;            
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
            font-family: 'Comfortaa';
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
                <form class="exit_button" action="customer_page.php">
                    <input type="submit" class="exit_c" value="EXIT">
                </form>
            </nav>
        </header>
        <hr><br>

        <form method="POST" action="update_customer.php?CUS_CODE=<?php echo $userDetails['CUS_CODE']?>">
            <div class="container">

                <input name="CUS_LNAME" id="CUS_LNAME" placeholder="CUSTOMER LASTNAME" class="input_Textbox" type="text" value="<?php echo $userDetails['CUS_LNAME']?>" required>
                <br><br>

                <input name="CUS_FNAME" id="CUS_FNAME" placeholder="CUSTOMER FIRSTNAME"class="input_Textbox" type="text" value="<?php echo $userDetails['CUS_FNAME']?>" required>
                <br><br>

                <input name="CUS_INITIAL" id="CUS_INITIAL" placeholder="CUSTOMER INITIAL" class="input_Textbox" type="text" value="<?php echo $userDetails['CUS_INITIAL']?>" required>
                <br><br>

                <input name="CUS_AREACODE" id="CUS_AREACODE" placeholder="CUSTOMER AREACODE"class="input_Textbox" type="number" value="<?php echo $userDetails['CUS_AREACODE']?>" required>
                <br><br>

                <input name="CUS_PHONE" id="CUS_PHONE" placeholder="CUSTOMER PHONE" class="input_Textbox" type="number" value="<?php echo $userDetails['CUS_PHONE']?>" required>
                <br><br>
                
                <input name="CUS_BALANCE" id="CUS_BALANCE" placeholder="CUSTOMER BALANCE" class="input_Textbox" type="number" value="<?php echo $userDetails['CUS_BALANCE']?>" required>
                <br><br>

                <input type="submit" class="update" value="&#10226;">
                <br><br><br>
                </form>
            </div>
    </body>
</html>