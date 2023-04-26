<?php
    require('Local_Settings.php');

    $CUS_LNAME = $_POST['CUS_LNAME'];
    $CUS_FNAME = $_POST['CUS_FNAME'];
    $CUS_INITIAL = $_POST['CUS_INITIAL'];
    $CUS_AREACODE = $_POST['CUS_AREACODE'];
    $CUS_PHONE = $_POST['CUS_PHONE'];
    $CUS_BALANCE = $_POST['CUS_BALANCE'];
    $CUS_CODE = $_GET['CUS_CODE'];

    $UpdateUserData = "Call update_customer('$CUS_LNAME','$CUS_FNAME','$CUS_INITIAL','$CUS_AREACODE','$CUS_PHONE','$CUS_BALANCE','$CUS_CODE')";
    $resultFromUserUpdate = mysqli_query($conn, $UpdateUserData);

    header('Location:customer_page.php?CUS_CODE='.$CUS_CODE);
?>