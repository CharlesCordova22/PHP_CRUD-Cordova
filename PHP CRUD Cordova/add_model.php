<?php
    require('Local_Settings.php');

    $MOD_MANUFACTURER = $_POST['MOD_MANUFACTURER'];
    $MOD_NAME = $_POST['MOD_NAME'];
    $MOD_CHG_MILE = $_POST['MOD_CHG_MILE'];

    $createModelData = "Call add_model ('{$MOD_MANUFACTURER}','{$MOD_NAME}','{$MOD_CHG_MILE}')";
    $resultFromModel = mysqli_query($conn, $createModelData);

    $lastInsertedPk = mysqli_insert_id($conn);

    /*$createAircraftData = "INSERT INTO aircraft VALUES ('','{$lastInsertedPk}','','','')";
    $resultFromAircraft = mysqli_query($conn, $createAircraftData);*/

    header('Location:model_page.php?MOD_CODE='.$lastInsertedPk);
?>