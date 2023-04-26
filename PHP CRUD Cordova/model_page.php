<?php
    require('Local_Settings.php');

    $fetchQuery = "Call view_model";
    $result = mysqli_query($conn, $fetchQuery);
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
        <link rel="icon" type="image/png" href="image/tab_logo.png">
        <title>MODEL PAGE</title>
    </head>
    <style>
        body {
            background-color: #DDDDDD;
            font-family: 'Comfortaa'
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
        padding-left: -10px;
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
        .add_button{
            margin: 0;
            margin-right: 15px;
            padding: 0;
        }
        .add_c{
            font-family: 'Comfortaa';
            border-radius: 7px;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .cus_btn{
            margin: 0;
            margin-right: 5px;
            padding: 0;
        }
        .cus_c{
            font-family: 'Comfortaa';
            border-radius: 7px;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .emp_btn{
            margin: 0;
            margin-right: 5px;
            padding: 0;
        }
        .emp_c{
            font-family: 'Comfortaa';
            border-radius: 7px;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .edit_btn{
            display: flex;
            justify-content: center;
        }
        .delete_btn{
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
            <form class="search_btn" action="search_model_page.php">
                    <input type="submit" class="search_c" value="SEARCH MODEL">
                </form>
            <form class="cus_btn" action="customer_page.php">
                <input type="submit" class="cus_c" value="CUSTOMER">
            </form>
            <form class="emp_btn" action="employee_page.php">
                <input type="submit" class="emp_c" value="EMPLOYEE">
            </form>
            <form class="add_button" action="add_model_page.php">
                <input type="submit" class="add_c" value="ADD+">
            </form>
            </nav>
        </header>
        <hr><br>
        <table>
            <tr>
                <th>MODEL CODE</th>
                <th>MODEL MANUFACTURER</th>
                <th>MODEL NAME</th>
                <th>MODEL CHARGE PER MILE</th>
                <th>ACTIONS</th>
            </tr>
            <?php
                while($itemResult = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $itemResult['MOD_CODE']; ?></td>
                    <td><?php echo $itemResult['MOD_MANUFACTURER']; ?></td>
                    <td><?php echo $itemResult['MOD_NAME']; ?></td>
                    <td><?php echo $itemResult['MOD_CHG_MILE']; ?></td>
                    <td>
                        <br>
                        <form class="edit_btn">
                            <button><a href="edit_model_page.php?MOD_CODE='<?php echo $itemResult['MOD_CODE']; ?>'">&#10226;</a></button>
                        </form>
                        <form class="delete_btn">
                            <button><a href="delete_model.php?MOD_CODE='<?php echo $itemResult['MOD_CODE']; ?>'">&#x2716;</a></button>
                        </form>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>

        <br><hr><br>
        
        </div>
    </body>
</html>