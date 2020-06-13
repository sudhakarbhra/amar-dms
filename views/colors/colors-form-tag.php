<form id="formControl" class="colorForm">
	<?php if($_GET["action"] == "edit"){ ?>
	<input type="hidden" name="action" value="editColor">
	<input type="hidden" name="id" value="<?=$color["id"]?>">
	<?php }else{ ?>
	<input type="hidden" name="action" value="createColor">
	<?php } ?>
	<div class="row mb-2">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="firstName">Color name</label>
				<input type="text" class="form-control" id="firstName" name="colorName" <?php if ($isEdit) {?>value="<?=$color["colorName"]?>"<?php }?>>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label for="lastName">Color Code</label>
				<input type="color" class="form-control" id="lastName" name="colorCode" <?php if ($isEdit) {?>value="<?=$color["colorCode"]?>"<?php }?>>
			</div>
		</div>
	</div>
	<button class="btn btn-primary text-capitalize colorSubmit" id="savePost" type="button"><?=$_GET["action"]?> Color Data</button>
</form>