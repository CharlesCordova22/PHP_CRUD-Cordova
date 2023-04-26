<?php

require('Local_Settings.php');

$EMP_NUM = $_GET['EMP_NUM'];
$userDetails = array();

$fetchQuery = "SELECT * 
    FROM employee WHERE EMP_NUM = {$EMP_NUM}";

$result = mysqli_query($conn, $fetchQuery);

if (mysqli_num_rows($result) > 0) {
    while($userResult = mysqli_fetch_array($result)) {
        $userDetails['EMP_NUM'] = $userResult['EMP_NUM'];
        $userDetails['EMP_TITLE'] = $userResult['EMP_TITLE'];
        $userDetails['EMP_LNAME'] = $userResult['EMP_LNAME'];
        $userDetails['EMP_FNAME'] = $userResult['EMP_FNAME'];
        $userDetails['EMP_INITIAL'] = $userResult['EMP_INITIAL'];
        $userDetails['EMP_JOB'] = $userResult['EMP_JOB'];
        $userDetails['EMP_HIRE_DATE'] = $userResult['EMP_HIRE_DATE'];
    }
}
?>