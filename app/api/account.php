<?php
include_once "../config.php";
include_once "../classes/Account.class.php";

$Account = new AccountClass($database);
if (isset($_POST["action"])) {
    // Cleaning the post data
    $req = $_POST;
    $moduleAction = $_POST["action"];
    cleanMe($moduleAction);

    // Based on the variable in the POST->action it will trigger its respective method from the function
    $response = $Account->$moduleAction($req);
    if ($response["success"] == 1) {
        echo json_encode(array('s' => 1, 'm' => $response["msg"], 'd' => $response["debug"]));
    } elseif ($response["success"] == 0) {
        echo json_encode(array('s' => 0, 'm' => $response["msg"]));
    } else {
        echo json_encode(array('s' => 0, 'm' => "Something went wrong, Try Again 🙁"));
    }

} else {
    echo json_encode(array('s' => 0, 'm' => "Endpoints is not defined 🛑, Try Again"));
}
