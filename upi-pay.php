<?php
if(!empty($_POST) && !empty($_POST["upi_id"]) && !empty($_POST["pay"])  && !empty($_POST["vehicle_no"])  && !empty($_POST["company"]) ){
    echo "<h1>Please wait processing your payment</h1>";
    $redirect = "upi://pay?pa=".$_POST["upi_id"]."&pn=SRI%20AMAR%20BIKED&am=".$_POST["pay"]."&tr=AMAR2020&tn=".$_POST["vehicle_no"]."%20".$_POST["company"]."&cu=INR";
    header('Location: '.$redirect);
    exit();
}else{
    header('Location: ./pay-link.php');
}
?>