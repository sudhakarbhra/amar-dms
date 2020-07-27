<?php
require_once "./app/config.php";
$master = false;
if(!empty($_POST)){
    $data = $database->get("COLLECTION_LIST", "*", ["customer_mobile" => cleanMe($_POST["ph"])]);
    if(empty($data)){
        $data = $database->get("CUSTOMER_MASTER", "*", ["mobile" => cleanMe($_POST["ph"])]);
        $master = true;
    }

if(!empty($data)){

//Your authentication key
$authKey = "292563AYydmSNo5d6f8e12";

//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST["ph"];

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "SAMRBK";

// Generating OTP
$opt = mt_rand(1000,9999);
echo opt;

// //Your message to send, Add URL encoding here.
// $message = urlencode("Welcome to Sri Amar Bikes, You OTP is ".$opt.". Enter this to get EMI Information");

// //Define route 
// $route = 4;
// //Prepare you post parameters
// $postData = array(
//     'authkey' => $authKey,
//     'mobiles' => $mobileNumber,
//     'message' => $message,
//     'sender' => $senderId,
//     'route' => $route
// );

// //API URL
// $url="http://api.msg91.com/api/sendhttp.php";

// // init the resource
// $ch = curl_init();
// curl_setopt_array($ch, array(
//     CURLOPT_URL => $url,
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_POST => true,
//     CURLOPT_POSTFIELDS => $postData
//     //,CURLOPT_FOLLOWLOCATION => true
// ));


// //Ignore SSL certificate verification
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


// //get response
// $output = curl_exec($ch);

// //Print error if any
// if(curl_errno($ch))
// {
//     echo 'error:' . curl_error($ch);
// }

// curl_close($ch);

// // echo $output;

$otpsent = true;

}else{ 
    $otpsent = false;
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include "./views/shared/head-tag.php"; ?>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <?php include "./views/shared/page-spinner.php"; ?>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <h3 class="mb-4 text-center">Sri Amar Bikes</h3>
                <?php if($otpsent) {?>
                <form action="./customer-info.php" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>OTP has been sent you your phone number,</label>
                                <input type="text" placeholder="Enter your OTP here" maxlength="4" name="otp" class="form-control mb-3 text-center" />
                                <input type="hidden" name="opt1" value="<?=$opt?>" />
                                <input type="hidden" name="ph" value="<?=$mobileNumber?>" />
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary">Verify</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <?php }else{ ?>
            <h3 class="mb-3">Something went wrong while sending OTP</h3>
            <p>Check whether you have entered</p>
            <ul>
                <li>Correct mobile number, eg.9875679499</li>
                <li>Dont't add +91, or 0, or any country code before</li>
                <li>If still presists contact <a target="_blank" href="https://wa.me/+919840110005?text=I have the following query" class="text-danger my-4">
                        <i class="mdi mdi-whatsapp h5 mb-2"></i> Contact Sri Amar Bikes
                    </a>
                <li>
            </ul>
            <?php } ?>
        </div>
    </div>
    </div>
    <?php include "./views/shared/script-tag.php"; ?>
</body>

</html>