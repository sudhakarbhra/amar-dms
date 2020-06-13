    <form id="formControl" class="customerForm">
          <?php if($_GET["action"] == "edit"){ ?>
          <input type="hidden" name="action" value="editCustomer">
          <input type="hidden" name="id" value="<?=$customer["id"]?>">
          <?php }else{ ?>
          <input type="hidden" name="action" value="createCustomer">
          <?php } ?>
          <input type="hidden" name="createdBy" value="<?=$_SESSION["uid"]?>">
          <div class="row mb-2">
            <div class="col-6">
              <div class="form-group">
                <label for="name">Customer's Name</label>
                <input type="text" class="form-control input-sm" id="name" name="name" <?php if ($isEdit) {?>value="<?=$customer["name"]?>"<?php }?>>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="fatherName">Father name</label>
                <input type="text" class="form-control input-sm" id="fatherName" name="fatherName" <?php if ($isEdit) {?>value="<?=$customer["fatherName"]?>"<?php }?>>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="address1">Address 1</label>
                <input type="text" class="form-control input-sm" id="address1" name="address1" <?php if ($isEdit) {?>value="<?=$customer["address1"]?>"<?php }?>>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="address2">Address 2</label>
                <input type="text" class="form-control input-sm" id="address2" name="address2" <?php if ($isEdit) {?>value="<?=$customer["address2"]?>"<?php }?>>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="area">Area</label>
                <input type="text" class="form-control input-sm" id="area" name="area" <?php if ($isEdit) {?>value="<?=$customer["area"]?>"<?php }?>>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control input-sm" id="city" name="city" <?php if ($isEdit) {?>value="<?=$customer["city"]?>"<?php }?>>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" class="form-control input-sm" id="pincode" name="pincode" <?php if ($isEdit) {?>value="<?=$customer["pincode"]?>"<?php }?>>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="phone">Mobile Number</label>
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text">+91</span>
                  </div>
                  <input type="text" class="form-control input-sm" id="phone" name="phone" <?php if ($isEdit) {?>value="<?=$customer["phone"]?>"<?php }?>  >
                </div>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="phoneAlt">Alternative Number</label>
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text">+91</span>
                  </div>
                  <input type="text" class="form-control input-sm" id="phoneAlt" name="phoneAlt" <?php if ($isEdit) {?>value="<?=$customer["phoneAlt"]?>"<?php }?>  >
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary text-capitalize customerSubmit" id="savePost" type="button"><?=$_GET["action"]?> customer Data</button>
        </form>