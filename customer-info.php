<?php
require_once "./app/config.php";
$master = false;
if(!empty($_POST)){

// CHECKING IF OTP MATCH
if($_POST["otp"] == $_POST["opt1"]){ $otpVerified = true;


$data = $database->get("COLLECTION_LIST", "*", ["customer_mobile" => cleanMe($_POST["ph"])]);
if(empty($data)){
    $data = $database->get("CUSTOMER_MASTER", "*", ["mobile" => cleanMe($_POST["ph"])]);
    $master = true;
}

}else{$otpVerified = false;}

if(!empty($data) && !empty($_POST["pay"])){

$redirect = "upi://pay?pa=".$data["upi_id"]."&pn=SRI%20AMAR%20BIKED&am=".$_POST["pay"]."&tr=AMAR2020&tn=".$data["vehicle_no"]."%20".$data["finance_company"].$data["company"]."&cu=INR";


header('Location: '.$redirect);
echo "<h1>Please wait processing your payment</h1>";
exit();
}


}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include "./views/shared/head-tag.php"; ?>
    <style type="text/css">
        body{
            font-size: 12px;
        }
    </style>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <?php include "./views/shared/page-spinner.php"; ?>
    <!--//////////////////////////////////////////////// -->
    <div class="container py-2">
        <div class="row justify-content-center  ">
            <div class="col-xs-12 col-md-6">
                <!-- FORM -->

                <?php if(!empty($_POST) && !empty($_POST["ph"]) && $otpVerified){  ?>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <?php if($master) { ?>
                        <h5 mb-2 class="card-title mb-0">
                            <?=$data["customer"]?><br /> (
                            <?=$data["vehicle_no"]?> ) </h5>
                        <?php } else { ?>
                        <h5 mb-2 class="card-title mb-0">
                            <?=$data["customer_name"]?><br /> (
                            <?=$data["vehicle_no"]?> )
                        </h5>
                        <?php } ?>
                        <small><b>Last Update</b><br />
                            <?=date_format(date_create($data["updatedAt"]), "M d Y");?></small>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <?php if($master) { ?>
                            <?php if(!empty($data["finance_company"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2 mb-3">Finance Company</div>
                                <div class="col">
                                    <?=$data["finance_company"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["upi_id"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">UPI Id</div>
                                <div class="col">
                                    <?=$data["upi_id"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["agreement_date"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Agreement Date</div>
                                <div class="col">
                                    <?=$data["agreement_date"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["mobile"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Mobile</div>
                                <div class="col">
                                    <?=$data["mobile"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <!--<div class="row">-->
                            <!--    <div class="col text-bold mb-2">Vehicle No</div>-->
                            <!--    <div class="col"><?=$data["vehicle_no"]?></div>-->
                            <!--</div>-->
                            <!--<div class="row">-->
                            <!--    <div class="col text-bold mb-2">Customer</div>-->
                            <!--    <div class="col"><?=$data["customer"]?></div>-->
                            <!--</div>-->
                            <?php if(!empty($data["vehicle_type"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Vehicle Type</div>
                                <div class="col">
                                    <?=$data["vehicle_type"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["emi_amount"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">EMI Amount</div>
                                <div class="col">₹
                                    <?=$data["emi_amount"]?> /-</div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["due_date"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Due Date</div>
                                <div class="col">
                                    <?=$data["due_date"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } else { ?>
                            <?php if(!empty($data["company"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Company</div>
                                <div class="col">
                                    <?=$data["company"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["upi_id"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">UPI Id</div>
                                <div class="col">
                                    <?=$data["upi_id"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["agreement_date"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Agreement Date</div>
                                <div class="col">
                                    <?=$data["agreement_date"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <!--<div class="row">-->
                            <!--    <div class="col text-bold mb-2">Vehicle No</div>-->
                            <!--    <div class="col"><?=$data["vehicle_no"]?></div>-->
                            <!--</div>-->
                            <!--<div class="row">-->
                            <!--    <div class="col text-bold mb-2">Customer Name</div>-->
                            <!--    <div class="col"><?=$data["customer_name"]?></div>-->
                            <!--</div>-->
                            <!-- <?php if(!empty($data["customer_mobile"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Customer Mobile</div>
                                <div class="col"><?=$data["customer_mobile"]?></div>
                            </div>
                            <?php } ?> -->
                            <?php if(!empty($data["vehicle_type"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Vehicle Type</div>
                                <div class="col">
                                    <?=$data["vehicle_type"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["pending_dues"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Pending Dues</div>
                                <div class="col">
                                    <?=$data["pending_dues"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["due_amount"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Due Amount</div>
                                <div class="col">₹
                                    <?=$data["due_amount"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["lpi"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">LPI</div>
                                <div class="col">₹
                                    <?=$data["lpi"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["handloon"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Handloan</div>
                                <div class="col">₹
                                    <?=$data["handloon"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["total_pay"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Total Pay</div>
                                <div class="col h5">₹
                                    <?=$data["total_pay"]?> /-</div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["last_paid_date"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Last Paid Date</div>
                                <div class="col">
                                    <?=$data["last_paid_date"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["last_paid_amount"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Last Paid Amount</div>
                                <div class="col">
                                    <?=$data["last_paid_amount"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["upto"])){ ?>
                            <div class="row">
                                <div class="col text-bold mb-2">Upto Date</div>
                                <div class="col">
                                    <?=$data["upto"]?>
                                </div>
                            </div>
                            <?php } ?>
                            <!--<div class="row">-->
                            <!--    <div class="col text-bold mb-2">Message</div>-->
                            <!--    <div class="col"><?=$data["message"]?></div>-->
                            <!--</div>-->
                            <?php } ?>
                        </div>
                        <form method="POST" class="mt-2">
                            <label>Partial Amount </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text py-1" id="basic-addon1">₹</span>
                                </div>
                                <input type="hidden" name="ph" value="<?=$_POST["ph"]?>">
                                <input type="tel" class="form-control form-control-sm w-100" name="pay" placeholder="Enter Amount">
                            </div>
                            <button class="btn btn-sm btn-outline-success" type="submit" id="button-addon1">Pay Now ></button>
                        </form>
                    </div>
                    <a target="_blank" href="upi://pay?pa=<?=$data[" upi_id"]?>&pn=SRI%20AMAR%20BIKED&am=
                        <?=$data["total_pay"]?>&tr=AMAR2020&tn=
                        <?=$data["vehicle_no"]?>%20
                        <?=$data["finance_company"]?>
                        <?=$data["company"]?>&cu=INR"
                        class="mt-2 card-footer bg-primary  text-white text-center">PAY ₹
                        <?=$data["total_pay"]?> /-
                    </a>
                </div>
                <div class="d-flex justify-content-center">
                    <?php if($master) { ?>
                    <a target="_blank" href="https://wa.me/+919840110005?text=<?=$data["mobile"]?>
                        <?=$data["vehicle_no"]?>
                        <?=$data["customer"]?>
                        <?=$data["vehicle_type"]?>"
                        class="btn btn-sm btn-success my-4">
                        <i class="mdi mdi-whatsapp text-bold mb-2"></i> Contact Sri Amar Bikes
                    </a>
                    <?php }else{ ?>
                    <a target="_blank" href="https://wa.me/+919840110005?text=<?=$data["customer_mobile"]?>
                        <?=$data["vehicle_no"]?>
                        <?=$data["customer_name"]?>
                        <?=$data["vehicle_type"]?>"
                        class="btn  btn-sm btn-success my-4">
                        <i class="mdi mdi-whatsapp text-bold mb-2"></i> Contact Sri Amar Bikes
                    </a>
                </div>
                <?php } ?>
                <?php }else{ ?>
                        <h3>Sri Amar Bikes</h3>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-danger mb-3">OTP Don't Match </h4>
                            <a class="btn btn-info btn-sm" href="./pay-link.php">click here to try again</a>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <!--//////////////////////////////////////////////// -->
    <?php include "./views/shared/script-tag.php"; ?>
</body>

</html>