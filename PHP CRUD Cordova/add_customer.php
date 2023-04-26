<?php
    require('Local_Settings.php');

    $CUS_LNAME = $_POST['CUS_LNAME'];
    $CUS_FNAME = $_POST['CUS_FNAME'];
    $CUS_INITIAL = $_POST['CUS_INITIAL'];
    $CUS_AREACODE = $_POST['CUS_AREACODE'];
    $CUS_PHONE = $_POST['CUS_PHONE'];
    $CUS_BALANCE = $_POST['CUS_BALANCE'];

    $createCustomerData = "Call add_customer('{$CUS_LNAME}','{$CUS_FNAME}','{$CUS_INITIAL}','{$CUS_AREACODE}','{$CUS_PHONE}','{$CUS_BALANCE}')";
    $resultFromCustomer = mysqli_query($conn, $createCustomerData);

    $lastInsertedPk = mysqli_insert_id($conn);

/*$createCharterData = "INSERT INTO charter VALUES ('','','','','','','','','',{$lastInsertedPk})";
    $resultFromCharter = mysqli_query($conn, $createCharterData);*/

    header('Location:customer_page.php?CUS_CODE='.$lastInsertedPk);
?>