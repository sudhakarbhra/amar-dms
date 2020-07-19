<?php
if(!empty($_GET)){
if($_GET["ph"] == "9840110005"){$name="Jhon"; $ve = "TN04V3561";$due = 3;$lPay = 20;$tlt = 23;$upi="sriamarbikes@upi"; $re="TN04V3561";}
if($_GET["ph"] == "9994778985"){$name="Sam"; $ve = "TN04V3561";$due = 4;$lPay = 20;$tlt = 4;$upi="mehulmotors@upi"; $re="TN04V3561";}
if($_GET["ph"] == "9894993285"){$name="Joe"; $ve = "TN04V3561";$due = 5;$lPay = 10;$tlt = 65;$upi="sriamarbikes@upi"; $re="TN04V3561";}
}else{
	{$name=""; $ve = "";$due = 0;$lPay = 0;$tlt = 0;$upi=""; $re="";}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<title>Sri Amar Paylinks</title>
	</head>
	<body>
		
		<div class="container p-4">
			<div class="col-12 p-4">
				<!-- FORM -->
				
				<form method="GET">
					<label>Enter Your Phone number ( 9840110005, 9994778985, 9894993285 )</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">+91</span>
						</div>
						<input type="text" class="form-control" name="ph" placeholder="Phone Number">
						<div class="input-group-prepend">
							<button class="btn btn-outline-secondary" type="submit" id="button-addon1">Get Customer Info ></button>
						</div>
					</div>
				</form>
				<a class="btn btn-outline-secondary btn-sm" href="./link.php">clear</a>
				<hr>
				<?php if(!empty($_GET) && !empty($_GET["ph"])){  ?>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title"><?=$name?></h5>
						<div class="card-text">
							<div class="row">
								<div class="col">Vechile Number</div>
								<div class="col"><?=$ve?></div>
							</div>
							<div class="row">
								<div class="col">Due Amount</div>
								<div class="col">Rs: <?=$ve?></div>
							</div>
							<div class="row">
								<div class="col">late Fee</div>
								<div class="col">Rs: <?=$lPay?></div>
							</div>
							<div class="row">
								<div class="col">Total Amount</div>
								<div class="col">Rs: <h4><?=$tlt?></h4></div>
							</div>
							<div class="row">
								<div class="col">UPI Name</div>
								<div class="col"><?=$upi?></div>
							</div>
							<div class="row">
								<div class="col">Remarks</div>
								<div class="col"><?=$re?></div>
							</div>
						</div>
						<a href="upi://pay?pa=<?=$upi?>&pn=SRI%20AMAR%20BIKED&am=<?=$tlt?>&tr=AMAR2020&tn=<?=$ve?>-Pay%20to%20SRI%20AMAR%20BIKED&cu=INR" class="my-4 btn btn-primary">PAY NOW via UPI > </a>
					</div>
				</div>
				<?php }else{ ?>
				<div class="card border-light mx-3">
					<div class="card-body">
						<h5 class="card-title">Sri Amar Bikes - Pay Link Demo</h5>
						<p class="card-text">Enter Mobile Number in the above for and click "Get Customer Info" to get customer information</p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</body>
</html>