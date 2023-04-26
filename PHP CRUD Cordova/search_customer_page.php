<?php
    require('Local_Settings.php');

    error_reporting(0);
    $conn = mysqli_connect("localhost","root","","cordova_database2");
    if(count($_POST)>0) {
    $CUS_FNAME=$_POST['CUS_FNAME'];
    $result = mysqli_query($conn,"Call search_customer('$CUS_FNAME')");
    }
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
        <link rel="icon" type="image/png" href="image/tab_logo.png">
        <title>CUSTOMER PAGE</title>
    </head>
    <style>
        body {
            background-color: #DDDDDD;
            font-family: 'Comfortaa';
        }

        header {
        background-color: rgba(34,34,34);
        border-radius: 5px;
        height: 100px;
        padding: 7px;
        }

        nav {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 100%;
        }
        .logo img{
            padding-left: 10px;
            width: 40%;
        }
        
        table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
        }

        td, th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
        .exit_button{
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
        .search_btn{
            display: flex;
            justify-content: center;
        }
        .search_c{
            margin: 0;
            margin-top: 15px;;
            margin-right: 5px;
            padding: 0;
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
                <form class="search_btn" method="POST" action="search_customer_page.php">
                    <input type="text" name="CUS_FNAME" class="search_c" placeholder="SEARCH CUSTOMER">
                    
                </form>
                <form class="exit_button" action="customer_page.php">
                    <input type="submit" class="exit_c" value="EXIT">
                </form>

            </nav>
        </header>
        <hr><br>
        <table>
            <tr>
                <th>CUSTOMER CODE</th>
                <th>CUSTOMER LASTNAME</th>
                <th>CUSTOMER FIRSTNAME</th>
                <th>CUSTOMER INITIAL</th>
                <th>CUSTOMER AREACODE</th>
                <th>CUSTOMER PHONE</th>
                <th>CUSTOMER BALANCE</th>
            </tr>
            <?php
                $i=0;
                while($userDetails = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><a><?php echo $userDetails['CUS_CODE']; ?></a></td>
                <td><a><?php echo $userDetails['CUS_LNAME']; ?></a></td>
                <td><a><?php echo $userDetails['CUS_FNAME']; ?></a></td>
                <td><a><?php echo $userDetails['CUS_INITIAL']; ?></a></td>
                <td><a><?php echo $userDetails['CUS_AREACODE']; ?></a></td>
                <td><a><?php echo $userDetails['CUS_PHONE']; ?></a></td>
                <td><a><?php echo $userDetails['CUS_BALANCE']; ?></a></td>
            </tr>
            <?php
            $i++;
            }
            ?>
        </table>

        <br><hr><br>
        
        </div>
    </body>
</html>