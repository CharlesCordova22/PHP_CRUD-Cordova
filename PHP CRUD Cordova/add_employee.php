<?php
    require('Local_Settings.php');

    $EMP_TITLE = $_POST['EMP_TITLE'];
    $EMP_LNAME = $_POST['EMP_LNAME'];
    $EMP_FNAME = $_POST['EMP_FNAME'];
    $EMP_INITIAL = $_POST['EMP_INITIAL'];
    $EMP_JOB = $_POST['EMP_JOB'];
    $EMP_HIRE_DATE = $_POST['EMP_HIRE_DATE'];

    $createEmployeeData = "Call add_employee ('{$EMP_TITLE}','{$EMP_LNAME}','{$EMP_FNAME}','{$EMP_INITIAL}','{$EMP_JOB}','{$EMP_HIRE_DATE}')";
    $resultFromEmployee = mysqli_query($conn, $createEmployeeData);

    $lastInsertedPk = mysqli_insert_id($conn);

    /*$createPilotData = "INSERT INTO pilot VALUES ('{$lastInsertedPk}','','','','')";
    $resultFromPilot = mysqli_query($conn, $createPilotData);*/

    header('Location:employee_page.php?EMP_NUM='.$lastInsertedPk);
?>