<?php
include_once "../config.php";
include_once "../classes/Receipt.class.php";

$Receipt = new ReceiptClass($database);
if (isset($_POST["action"])) {

    $req = $_POST;
    $moduleAction = cleanMe($_POST["action"]);
  
    $response = $Receipt->$moduleAction($req);// moduleAction is equal to $_POST["action"]
  
    echo json_encode($response);
    exit();

    } 
else {
    echo json_encode(array('s' => 0, 'm' => "Endpoints is not defined 🛑, Try Again"));
    exit();
}
