<?php
    require('Local_Settings.php');

    $CUS_CODE = $_GET['CUS_CODE'];

    $DeleteUserData = "Call delete_customer({$CUS_CODE})";
    $resultFromUserUpdate = mysqli_query($conn, $DeleteUserData);

    header('Location:customer_page.php');
?>