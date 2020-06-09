<div class="row justify-content-center">
  <div class="col-sm-12 col-md-10">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom d-flex justify-content-between">
        <h2 class="text-capitalize"><?=$_GET["action"]?> Color</h2>
         <a 
        data-delete="<?=$color["id"]?>" 
        href="javascript:void(0)" 
        class="deletePost btn btn-danger btn-sm "
        data-toggle="tooltip"
        date-placement="top"
        data-original-title = "Delete <?=$color["colorName"]?>"
        >
        <i class="mdi mdi-trash-can-outline"></i> Delete
      </a>
      </div>
      <div class="card-body">
      <form id="formControl">
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
        <button class="btn btn-primary text-capitalize" id="savePost" type="button"><?=$_GET["action"]?> Color Data</button>
      </form>
      </div>
    </div>
  </div>
</div>