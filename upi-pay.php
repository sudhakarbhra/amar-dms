<?php
require_once "./app/config.php";
// FOR ANALYTICS PURPOSES
if(!empty($_POST)){

    $phone = $_POST["phone"];
	if($_POST["role"] === "MASTER"){
		$database->query("UPDATE `CUSTOMER_MASTER` SET `views` = views+1  WHERE mobile = $phone ");
	}else{
		$database->query("UPDATE `COLLECTION_LIST` SET `views` = views+1  WHERE customer_mobile = $phone ");
	}

	// TO TRACK HOW MAY TIMES A USER ACCESS THIS PAGE
	$database->insert("ACTIVITY", ["amount" => $_POST["pay"], "phone" => $_POST["phone"]] );

	if(!empty($_POST["upi_id"]) && !empty($_POST["pay"])  && !empty($_POST["vehicle_no"])  && !empty($_POST["company"]) ){
	    echo "<h1>Please wait processing your payment...</h1>";
	    $redirect = "upi://pay?pa=".$_POST["upi_id"]."&pn=SRI%20AMAR%20BIKED&am=".$_POST["pay"]."&tr=AMAR2020&tn=".$_POST["vehicle_no"]."%20".$_POST["company"]."&cu=INR";
	    header('Location: '.$redirect);
	    exit();
	}else{
	    header('Location: ./pay-link.php');
	}

}

?>