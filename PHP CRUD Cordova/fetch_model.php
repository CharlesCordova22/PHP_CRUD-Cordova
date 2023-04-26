<?php

require('Local_Settings.php');

$MOD_CODE = $_GET['MOD_CODE'];
$userDetails = array();

$fetchQuery = "SELECT * 
    FROM model WHERE MOD_CODE = {$MOD_CODE}";

$result = mysqli_query($conn, $fetchQuery);

if (mysqli_num_rows($result) > 0) {
    while($userResult = mysqli_fetch_array($result)) {
        $userDetails['MOD_CODE'] = $userResult['MOD_CODE'];
        $userDetails['MOD_MANUFACTURER'] = $userResult['MOD_MANUFACTURER'];
        $userDetails['MOD_NAME'] = $userResult['MOD_NAME'];
        $userDetails['MOD_CHG_MILE'] = $userResult['MOD_CHG_MILE'];
    }
}

?>