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
        <?php include "./views/colors/colors-form-tag.php";?>
      </div>
    </div>
  </div>
</div>