<?php

// this function is to check if the user is logged in or not fom SESSION,
// If not redirecting the user to login page
if (isset($_SESSION) && !empty($_SESSION)) {
    $session_username = $_SESSION["username"];
    $session_token = $_SESSION["token"];

    $profile = $database->has("ACCOUNT", [
        "AND" => [
            "OR" => [
                "name" => "$session_username",
                "email" => "$session_username",
            ]],
        "token" => $session_token,
    ]);

    if ($profile == false) {
        session_destroy();
        header("Location: ./index.php");

    } elseif ($profile == true) {
        $user = $database->get("ACCOUNT", ["id", "name", "email"], [
            "AND" => [
                "OR" => [
                    "name" => "$session_username",
                    "email" => "$session_username",
                ]],
            "token" => $session_token,
        ]);
    }

} else {
    session_destroy();
    header("Location: ./index.php");
}
