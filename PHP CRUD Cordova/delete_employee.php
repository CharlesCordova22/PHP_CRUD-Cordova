<?php
    require('Local_Settings.php');

    $EMP_NUM = $_GET['EMP_NUM'];

    $DeleteUserData = "Call delete_employee({$EMP_NUM})";
    $resultFromUserUpdate = mysqli_query($conn, $DeleteUserData);

    header('Location:employee_page.php');
?>