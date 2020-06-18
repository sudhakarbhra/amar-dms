<div class="container px-0">
	<div class="card table-responsive">
		<table class="table table-striped text-justify">
			<thead>
				<tr>
					<th>Receipt No</th>
					<th>Receipt Date</th>
					<th>Amount Paid</th>
					<th>Payment Type</th>
					<th>Comment</th>
					<th>Created By</th>
					<th>Created On</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if(!empty($invoices)){
				foreach($invoices as $invoice){ ?>
				
				<tr>
					<td><?="AMABKS".$invoice["id"]?></td>
					
					<td>
						<?=date_format(date_create($invoice["receiptDate"]), "M d h:m a");?>
						<td>₹ <?=$invoice["amountReceived"]?></td>
						<td>
							<?=$invoice["paymentType"]?>
							<?php
								if($invoice["paymentType"] == "CASH" ) echo $invoice["paymentType"];
								if($invoice["paymentType"] == "CHEQUE" ) echo $invoice["chequeNo"];
								if($invoice["paymentType"] == "UPI" ) echo $invoice["upiNo"];
								if($invoice["paymentType"] == "BANK" ) echo $invoice["bankName"];
							?>
						</td>
						<td>
							<button
							class="btn btn-default btn-sm"
							data-toggle="tooltip"
							date-placement="top"
							data-original-title = "<?=$invoice["comment"]?>" >
							View Comment
							</button>
						</td>
						<td><?=$Account->getUserInfo($invoice["createdBy"], "name")?></td>
						<td>
							<?=date_format(date_create($invoice["createdAt"]), "M d h:m a");?>
							<td>
								<button class="btn btn-danger btn-sm deleteInvoice" data-delete="<?=$invoice["id"]?>">
								<i class="mdi mdi-trash-can-outline"></i>
								</button>
							</td>
						</tr>
						<?php } }else{?>
						<p>No Invoices Present</p>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>