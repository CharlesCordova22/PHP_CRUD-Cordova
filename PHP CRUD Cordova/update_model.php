<?php
    require('Local_Settings.php');

    $MOD_MANUFACTURER = $_POST['MOD_MANUFACTURER'];
    $MOD_NAME = $_POST['MOD_NAME'];
    $MOD_CHG_MILE = $_POST['MOD_CHG_MILE'];
    $MOD_CODE = $_GET['MOD_CODE'];

    $UpdateModelData = "Call update_model('$MOD_MANUFACTURER','$MOD_NAME','$MOD_CHG_MILE',$MOD_CODE)";

    $resultFromModelUpdate = mysqli_query($conn, $UpdateModelData);

    header('Location:model_page.php?MOD_CODE='.$MOD_CODE);
?>