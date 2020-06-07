<?php
include_once "../config.php";

if (isset($_POST)) {
    // var_dump($_POST);
    // exit();
    $fName = cleanMe($_POST["fName"]);
    $lName = cleanMe($_POST["lName"]);
    $email = cleanMe($_POST["email"]);
    $phone = cleanMe($_POST["phone"]);
    $password = cleanMe($_POST["pass"]);

    if ($database->has("student", [
        "OR" => [
            "email" => $email,
            "phone" => $phone,
        ],
    ])) {
        echo '<div class="alert alert-danger">Email/Phone Already Exists</div>';
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $verifytoken = md5(rand(0, 1000));
        $database->insert("student", [
            "fName" => $fName,
            "lName" => $lName,
            "email" => $email,
            "phone" => $phone,
            "password" => $password_hash,
            "token" => $verifytoken,
        ]);
        // to send verification email send $verifytoken it is randonmly created for the firstime, So we can validate and activate user.
        // But for now it is directly activated
        // https://code.tutsplus.com/tutorials/how-to-implement-email-verification-for-new-members--net-3824
        // send->Email () //dummy placeholder
        echo '<div class="alert alert-success">Your Account is created successfully!! Please login to view dashboard <i class="fa fa-user-o"></i></div>';
    }

}
