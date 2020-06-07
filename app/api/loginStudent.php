<?php
include_once "../config.php";

if (isset($_POST)) {
    $username = cleanMe($_POST["username"]);
    $password = cleanMe($_POST["password"]);

    $studentData = $database->get("student", "*", ["AND" => ["OR" => ["name" => "$username", "email" => "$username"]]]);

    if (!empty($studentData["password"])) {

        if (password_verify($password, $studentData["password"])) {
            if ($studentData["isActive"] == '1') {
                $token = password_hash(uniqid('ndi_'), PASSWORD_BCRYPT);
                $data = $database->update("student", ["token" => $token], ["password" => $studentData["password"]]);

                $_SESSION["username"] = $studentData["fName"] . $studentData["lName"];
                $_SESSION["token"] = $token;
                $_SESSION["uid"] = $studentData["id"];

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
