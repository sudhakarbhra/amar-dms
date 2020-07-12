<?php
require_once "./app/config.php";
$master = false;
if(!empty($_GET)){
	$datas = $database->select("COLLECTION_LIST", "*", ["customer_mobile" => cleanMe($_GET["ph"])]);
	if(empty($datas)){
		$datas = $database->select("CUSTOMER_MASTER", "*", ["mobile" => cleanMe($_GET["ph"])]);
		$master = true;
	}
$data = $datas[0];
	if(!empty($datas) && !empty($_GET["pay"]) && $master){
header('Location: upi://pay?pa=<?=$data["upi_id"]?>&pn=SRI%20AMAR%20BIKED&am=<?=$data["total_pay"]?>&tr=AMAR2020&tn=<?=$data["vehicle_no"]?>-Pay%20to%20SRI%20AMAR%20BIKED&cu=INR');
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
		<div class="container p-4">
			<div class="col-12 p-4">
				<!-- FORM -->
				
				<form method="GET">
					<label>Enter Your Phone number</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">+91</span>
						</div>
						<input type="text" class="form-control" name="ph" placeholder="Phone Number">
						
						<button class="btn btn-outline-secondary" type="submit" id="button-addon1">Get Customer Info ></button>
						
					</div>
				</form>
				
				<hr>
				<?php if(!empty($_GET) && !empty($_GET["ph"])){  ?>
				<div class="card">
					<div class="card-body">
						<?php if($master) { ?>
						<h5 mb-2 class="card-title"><?=$data["customer"]?></h5 mb-2>
						<?php } else { ?>
						<h5 mb-2 class="card-title"><?=$data["customer_name"]?></h5 mb-2>
						<?php } ?>
						<div class="card-text">
							<?php if($master) { ?>
							<div class="row">
								<div class="col h5 mb-2 mb-3">Finance Company</div>
								<div class="col"><?=$data["finance_company"]?></div>
							</div>
							<div class="row">
								<div class="col h5 mb-2">UPI Id</div>
								<div class="col"><?=$data["upi_id"]?></div>
							</div>
							<div class="row">
								<div class="col h5 mb-2">Agreement Date</div>
								<div class="col"><?=$data["agreement_date"]?></div>
							</div>
							<div class="row">
								<div class="col h5 mb-2">Mobile</div>
								<div class="col"><?=$data["mobile"]?></div>
							</div>
							<div class="row">
								<div class="col h5 mb-2">Vehicle No</div>
								<div class="col"><?=$data["vehicle_no"]?></div>
							</div>
							<div class="row">
								<div class="col h5 mb-2">Customer</div>
								<div class="col"><?=$data["customer"]?></div>
							</div>
							<div class="row">
								<div class="col h5 mb-2">Vehicle Type</div>
								<div class="col"><?=$data["vehicle_type"]?></div>
							</div>
							<div class="row">
								<div class="col h5 mb-2">EMI Amount</div>
								<div class="col"><?=$data["emi_amount"]?></div>
							</div>
							<div class="row">
								<div class="col h5 mb-2">Due Date</div>
								<div class="col"><?=$data["due_date"]?></div>
							</div>
							
							<?php } else { ?>
							
							<div class="row">
								<div class="col h5 mb-2">Company</div>
								<div class="col"><?=$data["company"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">UPI Id</div>
								<div class="col"><?=$data["upi_id"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Agreement Date</div>
								<div class="col"><?=$data["agreement_date"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Vehicle No</div>
								<div class="col"><?=$data["vehicle_no"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Customer Name</div>
								<div class="col"><?=$data["customer_name"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Customer Mobile</div>
								<div class="col"><?=$data["customer_mobile"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Vehicle Type</div>
								<div class="col"><?=$data["vehicle_type"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Pending Dues</div>
								<div class="col"><?=$data["pending_dues"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Due Amount</div>
								<div class="col"><?=$data["due_amount"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">LPI</div>
								<div class="col"><?=$data["lpi"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Handloan</div>
								<div class="col"><?=$data["handloon"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Total Pay</div>
								<div class="col"><?=$data["total_pay"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Last Paid Date</div>
								<div class="col"><?=$data["last_paid_date"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Last Paid Amount</div>
								<div class="col"><?=$data["last_paid_amount"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Upto Date</div>
								<div class="col"><?=$data["upto"]?></div>
							</div>
							
							<div class="row">
								<div class="col h5 mb-2">Message</div>
								<div class="col"><?=$data["message"]?></div>
							</div>
							
							<?php } ?>
						</div>
						<?php if($master) { ?>
						<div class="row py-4">
							<div class="col">
								<form method="GET">
									<label>Enter Your Phone number</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">₹</span>
										</div>
										<input type="hidden" name="ph" value="<?=$data["mobile"]?>">
										<input type="text" class="form-control" name="pay" placeholder="Enter Amount">
										<div class="input-group-prepend">
											<button class="btn btn-outline-success" type="submit" id="button-addon1">Pay Now ></button>
										</div>
									</div>
								</form>
							</div>
							<div class="col">
							</div>
							
						</div>
						<?php } else { ?>
						<a target="_blank" href="upi://pay?pa=<?=$data["upi_id"]?>&pn=SRI%20AMAR%20BIKED&am=<?=$data["total_pay"]?>&tr=AMAR2020&tn=<?=$data["vehicle_no"]?>-Pay%20to%20SRI%20AMAR%20BIKED&cu=INR" class="my-4 btn btn-primary">PAY NOW via UPI > </a>
						<?php } ?>
						
					</div>
				</div>
				<?php if($master) { ?>
				
				<a target="_blank" href="https://wa.me/+919840110005?text=<?=$data["mobile"]?> <?=$data["vehicle_no"]?> <?=$data["customer"]?> <?=$data["vehicle_type"]?>" class="btn btn-success my-4">
					<i class="mdi mdi-whatsapp h5 mb-2"></i> Contact Sri Amar Bikes for More Query
				</a>
				<?php }else{ ?>
				
				<a  target="_blank"href="https://wa.me/+919840110005?text=<?=$data["customer_mobile"]?> <?=$data["vehicle_no"]?> <?=$data["customer_name"]?> <?=$data["vehicle_type"]?>" class="btn btn-success my-4">
					<i class="mdi mdi-whatsapp h5 mb-2"></i> Contact Sri Amar Bikes for More Query
				</a>
				<?php } ?>
				<?php }else{ ?>
				<div class="card border-light mx-3">
					<div class="card-body">
						<h5 mb-2 class="card-title">Sri Amar Bikes - Paymeny Link</h5 mb-2>
						<p class="card-text">Enter Mobile Number in the above for and click "Get Customer Info" to get customer information</p>
						<a  target="_blank" href="https://wa.me/+919840110005?text=Hi!, Sri Amar Bikes. I have the following Query" class="btn btn-success my-4">
							<i class="mdi mdi-whatsapp h5 mb-2"></i> Contact Sri Amar Bikes for More Query
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<!--//////////////////////////////////////////////// -->
		
		
		
		
		<?php include "./views/shared/script-tag.php"; ?>
	</body>
</html>