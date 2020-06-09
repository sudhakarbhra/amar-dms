<div class="row justify-content-center">
  <div class="col-sm-12 col-md-10">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom d-flex justify-content-between">
        <h2 class="text-capitalize"><?=$_GET["action"]?> New Member</h2>
         <a 
        data-delete="<?=$user["id"]?>" 
        href="javascript:void(0)" 
        class="deletePost btn btn-danger btn-sm "
        data-toggle="tooltip"
        date-placement="top"
        data-original-title = "Delete <?=$user["name"]?>"
        >
        <i class="mdi mdi-trash-can-outline"></i> Delete
      </a>
      </div>
      <div class="card-body">
      <?php if($_SESSION["email"] == $user["email"]){ ?>
        <div class="alert alert-danger" role="alert"><b>Note: </b>You will be logged off after editing your profile</div>
      <?php } ?>
      <form id="formControl">
          <?php if($_GET["action"] == "edit"){ ?>
            <input type="hidden" name="action" value="editUser">
            <input type="hidden" name="id" value="<?=$user["id"]?>">
          <?php }else{ ?>
            <input type="hidden" name="action" value="createUser">
          <?php } ?>
        <div class="row mb-2">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" <?php if ($isEdit) {?>value="<?=$user["firstName"]?>"<?php }?>>
            </div> 
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" <?php if ($isEdit) {?>value="<?=$user["lastName"]?>"<?php }?>>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group mb-4">
              <label for="userName">User name</label>
              <input type="text" class="form-control" id="userName" name="userName" <?php if ($isEdit) {?>value="<?=$user["name"]?>"<?php }?>>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group mb-4">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" <?php if ($isEdit) {?>value="<?=$user["email"]?>"<?php }?>>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group mb-4">
              <label for="password">Password</label>
              <div class="input-group input-group-merge input-group-alternative">
                 <input type="password" class="form-control input-lg pwd" id="password" name="password" <?php if ($isEdit) {?>value="<?=$user["passString"]?>"<?php }?>>
                  <span class="input-group-append">
                      <button class="theme-btn reveal" type="button"> <i class="mdi mdi-eye-outline"></i></button>
                    </span>
                </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group mb-4">
              <label for="branch">Branch</label>
              <input type="text" class="form-control" id="branch" name="location" <?php if ($isEdit) {?>value="<?=$user["location"]?>"<?php }?>>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group mb-4">
              <label for="branch">Phone</label>
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text">+91</span>
                  </div>
                 <input type="text" class="form-control" id="branch" name="phone" <?php if ($isEdit) {?>value="<?=$user["phone"]?>"<?php }?>  >
                </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary text-capitalize" id="savePost" type="button"><?=$_GET["action"]?> Member Data</button>
      </form>
      </div>
    </div>
  </div>
</div>