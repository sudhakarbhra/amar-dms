<?php
require_once "./app/config.php";
require_once "./login-check.php";
if(isset($_POST["submit"]))
{


$database->query("TRUNCATE `amar-dms`.`CUSTOMER_MASTER`");
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$c = 0;
while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
{
$finance_company = $filesop[0];
		$upi_id = $filesop[1];
		$agreement_date = $filesop[2];
		$mobile = $filesop[3];
		$vehicle_no = $filesop[4];
		$customer = $filesop[5];
		$vehicle_type = $filesop[6];
		$emi_amount = $filesop[7];
		$due_date = $filesop[8];
$database->insert("CUSTOMER_MASTER", [
	"finance_company" => cleanMe($finance_company),
"upi_id" => cleanMe($upi_id),
"agreement_date" => cleanMe($agreement_date),
"mobile" => cleanMe($mobile),
"vehicle_no" => cleanMe($vehicle_no),
"customer" => cleanMe($customer),
"vehicle_type" => cleanMe($vehicle_type),
"emi_amount" => cleanMe($emi_amount),
"due_date" => cleanMe($due_date)
]);
$c++;
}
}
$datas = $database->select("CUSTOMER_MASTER", "*")
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
										<a href="<?=BASE_URL?>assets/CUSTOMER_MASTER.csv" target="_blank" download="download"> Download Sample File</a>
									</div>
								</div>
							</div>
						</div>
						<!--//////////////////////////////////////////////// -->
						<div class="row">
							<div class="col-12">
								<div class="card card-default">
									<div class="card-body">
										<table id="data-table" class="table display nowrap" style="width:100%">
											<thead>
												<tr>
													<th>#</th>
													<th>finance_company</th>
													<th>upi_id</th>
													<th>agreement_date</th>
													<th>mobile</th>
													<th>vehicle_no</th>
													<th>customer</th>
													<th>vehicle_type</th>
													<th>emi_amount</th>
													<th>due_date</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($datas as $data){ ?>
												<tr>
													<td><a  target="_blank" href="https://wa.me/<?=cleanMe($data["mobile"])?>?text=This%20is%20an%20reminder%20from%20Sri%20Amar%20Bikes <?=BASE_URL?>pay-link.php?ph=<?=$data["mobile"]?>" class="btn btn-success btn-sm">
														<i class="mdi mdi-whatsapp"></i>
													</a></td>
													<td><?=$data["finance_company"]?></td>
													<td><?=$data["upi_id"]?></td>
													<td><?=$data["agreement_date"]?></td>
													<td><?=$data["mobile"]?></td>
													<td><?=$data["vehicle_no"]?></td>
													<td><?=$data["customer"]?></td>
													<td><?=$data["vehicle_type"]?></td>
													<td><?=$data["emi_amount"]?></td>
													<td><?=$data["due_date"]?></td>
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