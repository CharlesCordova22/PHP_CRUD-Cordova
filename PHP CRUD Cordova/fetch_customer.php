<?php

require('Local_Settings.php');

$CUS_CODE = $_GET['CUS_CODE'];
$userDetails = array();

$fetchQuery = "SELECT * 
    FROM customer WHERE CUS_CODE = {$CUS_CODE}";

$result = mysqli_query($conn, $fetchQuery);

if (mysqli_num_rows($result) > 0) {
    while($userResult = mysqli_fetch_array($result)) {
        $userDetails['CUS_CODE'] = $userResult['CUS_CODE'];
        $userDetails['CUS_LNAME'] = $userResult['CUS_LNAME'];
        $userDetails['CUS_FNAME'] = $userResult['CUS_FNAME'];
        $userDetails['CUS_INITIAL'] = $userResult['CUS_INITIAL'];
        $userDetails['CUS_AREACODE'] = $userResult['CUS_AREACODE'];
        $userDetails['CUS_PHONE'] = $userResult['CUS_PHONE'];
        $userDetails['CUS_BALANCE'] = $userResult['CUS_BALANCE'];
    }
}

?>