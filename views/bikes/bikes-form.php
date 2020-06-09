<div class="row justify-content-center">
  <div class="col-sm-12 col-md-10">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom d-flex justify-content-between">
        <h2 class="text-capitalize"><?=$_GET["action"]?> Bike</h2>
         <a 
        data-delete="<?=$bike["id"]?>" 
        href="javascript:void(0)" 
        class="deletePost btn btn-danger btn-sm "
        data-toggle="tooltip"
        date-placement="top"
        data-original-title = "Delete <?=$bike["colorName"]?>"
        >
        <i class="mdi mdi-trash-can-outline"></i> Delete
      </a>
      </div>
      <div class="card-body">
      <form id="formControl">
          <?php if($_GET["action"] == "edit"){ ?>
            <input type="hidden" name="action" value="editBike">
            <input type="hidden" name="id" value="<?=$bike["id"]?>">
          <?php }else{ ?>
            <input type="hidden" name="action" value="createBike">
          <?php } ?>
        <div class="row mb-2">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="name">Bike name</label>
              <input type="text" class="form-control" id="name" name="name" <?php if ($isEdit) {?>value="<?=$bike["name"]?>"<?php }?>>
            </div> 
          </div>

        </div>
        <button class="btn btn-primary text-capitalize" id="savePost" type="button"><?=$_GET["action"]?> Bike Data</button>
      </form>
      </div>
    </div>
  </div>
</div>