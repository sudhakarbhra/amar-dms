<?php
include_once "../config.php";
include_once "../classes/Account.class.php";

$Account = new AccountClass($database);
if (isset($_POST["action"])) {

    $req = $_POST;
    $moduleAction = cleanMe($_POST["action"]);
  
    $response = $Account->$moduleAction($req);// moduleAction is equal to $_POST["action"]
  
    echo json_encode($response);
    exit();

    } 
else {
    echo json_encode(array('s' => 0, 'm' => "Endpoints is not defined 🛑, Try Again"));
    exit();
}
