<?php
require_once "./app/config.php";
require_once "./login-check.php";
if(isset($_POST["submit"]))
{


$database->query("TRUNCATE `amar-dms`.`COLLECTION_LIST`");
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$c = 0;
while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
{

		$company = $filesop[0];
		$upi_id = $filesop[1];
		$agreement_date = $filesop[2];
		$vehicle_no = $filesop[3];
		$customer_name = $filesop[4];
		$customer_mobile = $filesop[5];
		$vehicle_type = $filesop[6];
		$pending_dues = $filesop[7];
		$due_amount = $filesop[8];
		$lpi = $filesop[9];
		$handloon = $filesop[10];
		$total_pay = $filesop[11];
		$last_paid_date = $filesop[12];
		$last_paid_amount = $filesop[13];
		$upto = $filesop[14];
		$message = $filesop[15];
$database->insert("COLLECTION_LIST", [
	"company" => cleanMe($company),
	"upi_id" => cleanMe($upi_id),
	"agreement_date" => cleanMe($agreement_date),
	"vehicle_no" => cleanMe($vehicle_no),
	"customer_name" => cleanMe($customer_name),
	"customer_mobile" => cleanMe($customer_mobile),
	"vehicle_type" => cleanMe($vehicle_type),
	"pending_dues" => cleanMe($pending_dues),
	"due_amount" => cleanMe($due_amount),
	"handloon" => cleanMe($handloon),
	"lpi" => cleanMe($lpi),
	"total_pay" => cleanMe($total_pay),
	"last_paid_date" => cleanMe($last_paid_date),
	"last_paid_amount" => cleanMe($last_paid_amount),
	"upto" => cleanMe($upto),
	"message" => cleanMe($message)
]);
$c++;
}
}
$datas = $database->select("COLLECTION_LIST", "*")
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<?php include "./views/shared/head-tag.php"; ?>
	</head>
	<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
		<?php include "./views/shared/page-spinner.php"; ?>
		
		<div class="wrapper">
			<?php include "./views/shared/side-bar.php"; ?>
			<div class="page-wrapper">
				<?php include "./views/shared/header.php"; ?>
				<div class="content-wrapper">
					<div class="content">
						<div class="row my-2">
							<div class="col-12">
								<div class="card card-default">
									<div class="card-body">
										<form enctype="multipart/form-data" method="post" role="form">
											<div class="form-group">
												<label for="exampleInputFile">File Upload</label>
												<input type="file" name="file" id="file" size="150">
												<p class="help-block">Only Excel/CSV File Import.</p>
											</div>
											<button type="submit" class="btn btn-primary" name="submit" value="submit">Upload</button>
										</form>
										<a href="<?=BASE_URL?>assets/COLLECTION_LIST.csv" target="_blank" download="download"> Download Sample File</a>
									</div>
								</div>
							</div>
						</div>
						<!--//////////////////////////////////////////////// -->
						<div class="row">
							<div class="col-12">
								<div class="card card-default">
									<div class="card-body" style="overflow-x: scroll;">
										<table id="data-table" class="table display nowrap" style="width:100%">
											<thead>
												<tr>
													<th>#</th>
													<th>company</th>
													<th>upi_id</th>
													<th>agreement_date</th>
													<th>vehicle_no</th>
													<th>customer_name</th>
													<th>customer_mobile</th>
													<th>vehicle_type</th>
													<th>pending_dues</th>
													<th>due_amount</th>
													<th>lpi</th>
													<th>handloon</th>
													<th>total_pay</th>
													<th>last_paid_date</th>
													<th>last_paid_amount</th>
													<th>upto</th>
													<th>message</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($datas as $data){ ?>
												<tr>
													<td><a target="_blank" href="https://wa.me/<?=cleanMe($data["customer_mobile"])?>?text=<?=$data["message"]?> <?=BASE_URL?>pay-link.php?ph=<?=$data["customer_mobile"]?>" class="btn btn-success btn-sm">
														<i class="mdi mdi-whatsapp"></i>
													</a></td>
													<td><?=$data["company"]?></td>
													<td><?=$data["upi_id"]?></td>
													<td><?=$data["agreement_date"]?></td>
													<td><?=$data["vehicle_no"]?></td>
													<td><?=$data["customer_name"]?></td>
													<td><?=$data["customer_mobile"]?></td>
													<td><?=$data["vehicle_type"]?></td>
													<td><?=$data["pending_dues"]?></td>
													<td><?=$data["due_amount"]?></td>
													<td><?=$data["lpi"]?></td>
													<td><?=$data["handloon"]?></td>
													<td><?=$data["total_pay"]?></td>
													<td><?=$data["last_paid_date"]?></td>
													<td><?=$data["last_paid_amount"]?></td>
													<td><?=$data["upto"]?></td>
													<td><?=$data["message"]?></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--//////////////////////////////////////////////// -->
						
					</div>
					<?php include "./views/shared/right-bar.php"; ?>
				</div>
			</div>
			<?php include "./views/shared/footer.php"; ?>
		</div>
		<?php include "./views/shared/script-tag.php"; ?>
		<script>
		$(document).ready(function() {
		$("#data-table").on( "click",  ".deletePost" , function( event ) {
		event.preventDefault();
		swal({
		title: "Are you sure?",
		text: "Once deleted, you will not be able to recover this data!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
		})
		.then((willDelete) => {
		if (willDelete) {
		$.ajax({
		type: 'POST',
		url: '<?=BASE_URL_API?>receipt.php',
		data: {
		action:"deleteReceipt",
		id:$( this ).data("delete")
		}
		})
		.done(function(data){
		data = JSON.parse(data);
		if(data.success) {
		toastr.success(data.msg);
		location.reload();
		}else{
		toastr.warning(data.msg);
		}
		})
		.fail(function(data){
		data = JSON.parse(data);
		toastr.error(data.m);
		});
		}
		});
		return false;
		});
		$("#data-table").on( "click",  ".toggleStatus" , function( event ) {
		event.preventDefault();
		$.ajax({
		type: 'POST',
		url: '<?=BASE_URL_API?>receipt.php',
		data: {
		action:"toggleStatus",
		id:$( this ).data("toggle")
		}
		})
		.done(function(data){
		data = JSON.parse(data);
		if(data.success) {
		toastr.success(data.msg);
		location.reload();
		}else{
		toastr.warning(data.msg);
		}
		})
		.fail(function(data){
		data = JSON.parse(data);
		toastr.error(data.m);
		});
		return false;
		});
		});
		</script>
	</body>
</html>