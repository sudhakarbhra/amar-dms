<?php
require_once "../config.php";

if (isset($_POST)) {
    $username = cleanMe($_POST["username"]);
    $password = cleanMe($_POST["password"]);

    $accountData = $database->get("ACCOUNT", "*", ["AND" => ["OR" => ["name" => "$username", "email" => "$username"]]]);

    if (!empty($accountData["password"])) {

        if (password_verify($password, $accountData["password"])) {
            if ($accountData["isActive"] == '1') {
                $token = password_hash(uniqid('ndi_'), PASSWORD_BCRYPT);
                $data = $database->update("ACCOUNT", ["token" => $token], ["password" => $accountData["password"]]);

                $_SESSION["username"] = $accountData["name"];
                $_SESSION["email"] = $accountData["email"];
                $_SESSION["firstName"] = $accountData["firstName"];
                $_SESSION["lastName"] = $accountData["lastName"];
                $_SESSION["token"] = $token;
                $_SESSION["uid"] = $accountData["id"];

                setcookie("username", $username, time() + (86400 * 30), "/");
                setcookie("token", $token, time() + (86400 * 30), "/");

                echo true;
            } else {
                echo '<div class="alert alert-danger" role="alert">Your account in active, <a href="contact-us.php">contact admin for help <i class="fa fa-angle-right"></i></a> </div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Password Incorrect !<br>For the user ' . $username . ' </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">No user found with email/username ' . $username . ' </div>';
    }
}
