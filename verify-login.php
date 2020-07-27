<?php
require_once "./app/config.php";

//Your authentication key
$authKey = "292563AYydmSNo5d6f8e12";

//Multiple mobiles numbers separated by comma
$mobileNumber = "9994778985";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "SAMRBK";

// Generating OTP
$opt = mt_rand(1000,9999);

//Your message to send, Add URL encoding here.
$message = urlencode("Welcome to Sri Amar Bikes, You OTP is ".$opt.". Enter this to get Login");

//Define route 
$route = 4;
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo json_encode(array("error"=> curl_error($ch), "status" => true));
}

curl_close($ch);

echo json_encode(array("opt"=>$opt, "status" => true));


?>