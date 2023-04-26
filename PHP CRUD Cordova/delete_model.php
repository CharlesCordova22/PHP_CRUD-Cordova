<?php
    require('Local_Settings.php');

    $MOD_CODE = $_GET['MOD_CODE'];

    $DeleteModelData = "Call delete_model({$MOD_CODE})";
    $resultFromModelUpdate = mysqli_query($conn, $DeleteModelData);

    header('Location:model_page.php');
?>