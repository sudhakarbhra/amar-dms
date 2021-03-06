<?php
require_once "./app/config.php";
$master = false;
if(!empty($_POST)){
    // CHECKING IF OTP MATCH
    if($_POST["otp"] == $_POST["opt1"]){ $otpVerified = true;
        $phone = $_POST["ph"];
        // CHECKING IF THE USER IS COLLECTION_LIST
        $datas = $database->select("COLLECTION_LIST", "*", ["customer_mobile" => cleanMe($_POST["ph"])]);
        if(empty($datas)){
            // CHECKING IF THE USER IN CUSTOMER MASTER IF IT ISN'T IN CUSTOMER_LIST
            $datas = $database->select("CUSTOMER_MASTER", "*", ["mobile" => cleanMe($_POST["ph"])]);
            // INCREMENTING VIEWS OF THIS USER
            $database->query("UPDATE `CUSTOMER_MASTER` SET `views` = views+1  WHERE mobile = $phone ");
            $master = true;
        }else{
            // INCREMENTING VIEWS OF THIS USER
            $database->query("UPDATE `COLLECTION_LIST` SET `views` = views+1  WHERE customer_mobile = $phone ");
        }
    }else{$otpVerified = false;}


    // TO TRACK HOW MAY TIMES A USER ACCESS THIS PAGE
    $database->insert("ACTIVITY", ["phone" => $_POST["ph"]] );
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include "./views/shared/head-tag.php"; ?>
    <style type="text/css">
    body {
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
                <?php foreach($datas as $data ){ ?>
                <div class="card mb-4">
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
                        <form method="POST" action="./upi-pay.php" class="mt-2">
                            <label>Partial Amount </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text py-1" id="basic-addon1">₹</span>
                                </div>
                                <input type="tel" required class="form-control form-control-sm w-100" name="pay" placeholder="Enter Amount">
                            </div>
                            <input type="hidden" name="vehicle_no" value="<?=$data["vehicle_no"]?>">
                            <input type="hidden" name="phone" value="<?=$_POST["ph"]?>">
                            <input type="hidden" name="upi_id" value="<?=$data["upi_id"]?>">
                            <?php if($master){ ?>
                            <input type="hidden" name="company" value="<?=$data["finance_company"]?>">
                            <?php }else{ ?>
                            <input type="hidden" name="company" value="<?=$data["company"]?>">
                            <?php }?>
                            <button class="btn btn-sm btn-outline-success" type="submit" id="button-addon1">Pay Now
                                ></button>
                        </form>
                    </div>
                    <!-- FULL AMOUNT PAYMENT START -->
                    <form method="POST" action="./upi-pay.php">
                        <input type="hidden" name="vehicle_no" value="<?=$data["vehicle_no"]?>">
                        <input type="hidden" name="phone" value="<?=$_POST["ph"]?>">
                        <input type="hidden" name="upi_id" value="<?=$data["upi_id"]?>">
                        <?php if($master){ ?>
                        <input type="hidden" name="pay" value="<?=$data["emi_amount"]?>">
                        <input type="hidden" name="company" value="<?=$data["finance_company"]?>">
                        <input type="hidden" name="role" value="MASTER">
                        <?php }else{ ?>
                        <input type="hidden" name="pay" value="<?=$data["total_pay"]?>">
                        <input type="hidden" name="company" value="<?=$data["company"]?>">
                        <input type="hidden" name="role" value="CUSTOMER">
                        <?php }?>
                        <button class="mt-2 card-footer bg-primary w-100 text-white text-center" type="submit" id="button-addon1">
                            PAY FULL AMOUNT ₹
                            <?php if($master){ ?>
                            <?=$data["emi_amount"]?> /-
                            <?php }else{ ?>
                            <?=$data["total_pay"]?> /-
                            <?php }?>
                        </button>
                    </form>
                    <!-- FULL AMOUNT PAYMENT END -->
                </div>
                <?php  } ?>
                <div class="d-flex justify-content-center">
                    <?php if($master) { ?>
                    <a target="_blank" href="https://wa.me/+919994778985?text=<?=$data["mobile"]?>
                        <?=$data["vehicle_no"]?>
                        <?=$data["customer"]?>
                        <?=$data["vehicle_type"]?>" class="btn btn-sm btn-success my-4">
                        <i class="mdi mdi-whatsapp text-bold mb-2"></i> Contact Sri Amar Bikes
                    </a>
                    <?php }else{ ?>
                    <a target="_blank" href="https://wa.me/+919994778985?text=<?=$data["customer_mobile"]?>
                        <?=$data["vehicle_no"]?>
                        <?=$data["customer_name"]?>
                        <?=$data["vehicle_type"]?>" class="btn btn-sm btn-success my-4">
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