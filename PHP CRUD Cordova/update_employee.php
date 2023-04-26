<?php
    require('Local_Settings.php');

    $EMP_TITLE = $_POST['EMP_TITLE'];
    $EMP_LNAME = $_POST['EMP_LNAME'];
    $EMP_FNAME = $_POST['EMP_FNAME'];
    $EMP_INITIAL = $_POST['EMP_INITIAL'];
    $EMP_JOB = $_POST['EMP_JOB'];
    $EMP_HIRE_DATE = $_POST['EMP_HIRE_DATE'];
    $EMP_NUM = $_GET['EMP_NUM'];

    $UpdateUserData = "Call update_employee('$EMP_TITLE','$EMP_LNAME','$EMP_FNAME','$EMP_INITIAL','$EMP_JOB','$EMP_HIRE_DATE',$EMP_NUM)";

    $resultFromUserUpdate = mysqli_query($conn, $UpdateUserData);

    header('Location:employee_page.php?EMP_NUM='.$EMP_NUM);
?>