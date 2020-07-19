<?php
require_once "./app/config.php";
$master = false;
if(!empty($_GET)){
	$datas = $database->select("COLLECTION_LIST", "*", ["customer_mobile" => cleanMe($_GET["ph"])]);
	if(empty($datas)){
		$datas = $database->select("CUSTOMER_MASTER", "*", ["mobile" => cleanMe($_GET["ph"])]);
		$master = true;
	}
	if($datas){

		$data = $datas[0];
	}

	if(!empty($datas) && !empty($_GET["pay"])){
header('Location: upi://pay?pa=<?=$data["upi_id"]?>&pn=SRI%20AMAR%20BIKED&am=<?=$_GET["pay"]?>&tr=AMAR2020&tn=<?=$data["vehicle_no"]?>-Pay%20to%20SRI%20AMAR%20BIKED&cu=INR');
echo "<h1>Please wait processing your payment</h1>";
exit();
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include "./views/shared/head-tag.php"; ?>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <?php include "./views/shared/page-spinner.php"; ?>

    <!--//////////////////////////////////////////////// -->
    <div class="container py-2">
        <div class="row justify-content-center	">
            <div class="col-xs-12 col-md-6 px-0">
                <!-- FORM -->
                <?php if(empty($_GET) && empty($_GET["ph"])){  ?>
                <form method="GET">
                    <label>Enter Your Phone number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+91</span>
                        </div>
                        <input type="text" class="form-control" name="ph" placeholder="Phone Number">


                    </div>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Get Customer Info
                        ></button>
                </form>
                <hr>
                <?php } ?>

                <?php if(!empty($_GET) && !empty($_GET["ph"])){  ?>
                <div class="card">
                    <div class="card-header">
                        <?php if($master) { ?>
                        <h5 mb-2 class="card-title"><?=$data["customer"]?> ( <?=$data["vehicle_no"]?> ) </h5 mb-2>
                        <?php } else { ?>
                        <h5 mb-2 class="card-title"><?=$data["customer_name"]?> ( <?=$data["vehicle_no"]?> ) </h5 mb-2>
                        <?php } ?>
                    </div>
                    <div class="card-body">

                        <div class="card-text">
                            <?php if($master) { ?>
                            <?php if(!empty($data["finance_company"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2 mb-3">Finance Company</div>
                                <div class="col"><?=$data["finance_company"]?></div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["upi_id"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">UPI Id</div>
                                <div class="col"><?=$data["upi_id"]?></div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["agreement_date"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Agreement Date</div>
                                <div class="col"><?=$data["agreement_date"]?></div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["mobile"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Mobile</div>
                                <div class="col"><?=$data["mobile"]?></div>
                            </div>
                            <?php } ?>

                            <!--<div class="row">-->
                            <!--	<div class="col h5 mb-2">Vehicle No</div>-->
                            <!--	<div class="col"><?=$data["vehicle_no"]?></div>-->
                            <!--</div>-->
                            <!--<div class="row">-->
                            <!--	<div class="col h5 mb-2">Customer</div>-->
                            <!--	<div class="col"><?=$data["customer"]?></div>-->
                            <!--</div>-->
                            <?php if(!empty($data["vehicle_type"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Vehicle Type</div>
                                <div class="col"><?=$data["vehicle_type"]?></div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["emi_amount"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">EMI Amount</div>
                                <div class="col"><?=$data["emi_amount"]?></div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["due_date"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Due Date</div>
                                <div class="col"><?=$data["due_date"]?></div>
                            </div>
                            <?php } ?>

                            <?php } else { ?>

                            <?php if(!empty($data["company"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Company</div>
                                <div class="col"><?=$data["company"]?></div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($data["upi_id"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">UPI Id</div>
                                <div class="col"><?=$data["upi_id"]?></div>
                            </div>
                            <?php } ?>
                            <?php if(!empty($data["agreement_date"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Agreement Date</div>
                                <div class="col"><?=$data["agreement_date"]?></div>
                            </div>
                            <?php } ?>

                            <!--<div class="row">-->
                            <!--	<div class="col h5 mb-2">Vehicle No</div>-->
                            <!--	<div class="col"><?=$data["vehicle_no"]?></div>-->
                            <!--</div>-->

                            <!--<div class="row">-->
                            <!--	<div class="col h5 mb-2">Customer Name</div>-->
                            <!--	<div class="col"><?=$data["customer_name"]?></div>-->
                            <!--</div>-->
                            <!-- <?php if(!empty($data["customer_mobile"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Customer Mobile</div>
                                <div class="col"><?=$data["customer_mobile"]?></div>
                            </div>
                            <?php } ?> -->

                            <?php if(!empty($data["vehicle_type"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Vehicle Type</div>
                                <div class="col"><?=$data["vehicle_type"]?></div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($data["pending_dues"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Pending Dues</div>
                                <div class="col"><?=$data["pending_dues"]?></div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($data["due_amount"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Due Amount</div>
                                <div class="col"><?=$data["due_amount"]?></div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($data["lpi"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">LPI</div>
                                <div class="col"><?=$data["lpi"]?></div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($data["handloon"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Handloan</div>
                                <div class="col"><?=$data["handloon"]?></div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($data["total_pay"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Total Pay</div>
                                <div class="col h5">Rs. <?=$data["total_pay"]?> /-</div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($data["last_paid_date"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Last Paid Date</div>
                                <div class="col"><?=$data["last_paid_date"]?></div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($data["last_paid_amount"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Last Paid Amount</div>
                                <div class="col"><?=$data["last_paid_amount"]?></div>
                            </div>
                            <?php } ?>

                            <?php if(!empty($data["upto"])){ ?>
                            <div class="row">
                                <div class="col h5 mb-2">Upto Date</div>
                                <div class="col"><?=$data["upto"]?></div>
                            </div>
                            <?php } ?>

                            <!--<div class="row">-->
                            <!--	<div class="col h5 mb-2">Message</div>-->
                            <!--	<div class="col"><?=$data["message"]?></div>-->
                            <!--</div>-->

                            <?php } ?>
                        </div>



                        <form method="GET" class="mt-2">
                            <label>Partial Amount </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">₹</span>
                                </div>
                                <input type="hidden" name="ph" value="<?=$_GET["ph"]?>">
                                <input type="text" class="form-control w-100" name="pay" placeholder="Enter Amount">
                            </div>
                            <button class="btn btn-outline-success" type="submit" id="button-addon1">Pay Now ></button>
                        </form>
                    </div>

                    <a target="_blank"
                        href="upi://pay?pa=<?=$data["upi_id"]?>&pn=SRI%20AMAR%20BIKED&am=<?=$data["total_pay"]?>&tr=AMAR2020&tn=<?=$data["vehicle_no"]?>-Pay%20to%20SRI%20AMAR%20BIKED&cu=INR"
                        class="mt-4 card-footer bg-primary text-white text-center">PAY Rs. <?=$data["total_pay"]?> /-
                    </a>
                </div>

                <div class="d-flex justify-content-center">

                    <?php if($master) { ?>

                    <a target="_blank"
                        href="https://wa.me/+919840110005?text=<?=$data["mobile"]?> <?=$data["vehicle_no"]?> <?=$data["customer"]?> <?=$data["vehicle_type"]?>"
                        class="btn btn-success my-4">
                        <i class="mdi mdi-whatsapp h5 mb-2"></i> Contact Sri Amar Bikes for More Query
                    </a>
                    <?php }else{ ?>

                    <a target="_blank"
                        href="https://wa.me/+919840110005?text=<?=$data["customer_mobile"]?> <?=$data["vehicle_no"]?> <?=$data["customer_name"]?> <?=$data["vehicle_type"]?>"
                        class="btn btn-success my-4">
                        <i class="mdi mdi-whatsapp h5 mb-2"></i> Contact Sri Amar Bikes for More Query
                    </a>
                </div>
                <?php } ?>
                <?php }else{ ?>
                <div class="card border-light mx-3">
                    <div class="card-body">
                        <h5 mb-2 class="card-title">Sri Amar Bikes - Paymeny Link</h5 mb-2>
                        <p class="card-text">Enter Mobile Number in the above for and click "Get Customer Info" to
                            get
                            customer information</p>
                        <a target="_blank"
                            href="https://wa.me/+919840110005?text=Hi!, Sri Amar Bikes. I have the following Query"
                            class="btn btn-success my-4">
                            <i class="mdi mdi-whatsapp h5 mb-2"></i> Contact Sri Amar Bikes for More Query
                        </a>
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