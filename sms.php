<?php
session_start();
include_once "db.php";
$otp = mt_rand(10000, 99999);
$mobile = $_POST['mobile'];
setcookie("mobile", $mobile);
setcookie("otp", $otp);
$fields = array(
    "variables_values" => $otp,
    "route" => "otp",
    "numbers" => $mobile,
);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($fields),
    CURLOPT_HTTPHEADER => array(
        "authorization: vBf7oE9dpaltLmgsb6Pe4AYyMuiVQOSrCc0hTHnX38ZkIqWUwGFX9opiaY65LNnqxehtJg8Sr1HfB0sw",
        "accept: */*",
        "cache-control: no-cache",
        "content-type: application/json"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
?>