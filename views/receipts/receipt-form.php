<form id="formControl">
  <div class="row">
    <div class="col-sm-12 col-md-4">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
          <h2 class="text-capitalize"><?=$_GET["action"]?> Receipt</h2>
        </div>

        <div class="card-body">
          <?php if($_GET["action"] == "edit"){ ?>
          <input type="hidden" name="action" value="editReceipt">
          <input type="hidden" name="id" value="<?=$receipt["id"]?>">
          <?php }else{ ?>
          <input type="hidden" name="action" value="createReceipt">
          <?php } ?>
          <input type="hidden" name="createdBy" value="<?=$_SESSION["uid"]?>">
          <div class="row mb-2">
            <div class="col-12">
              <div class="form-group">
                <label for="name">Receiptant's Name</label>
                <select class="selectpicker w-100" name="userId" id="name" onchange="openModal(this)" class="form-control input-sm" id="bikeColor" data-live-search="true">
                  <option selected default disabled>Select Customer</option>
                  <option data-modal="addCustomer">+ Add Customer</option>
                  <?php foreach($customers as $customer) { ?>
                  <option
                    <?php
                    if ($isEdit && ($customer["id"] == $receipt["userId"] )){
                        echo "selected";
                      }
                    ?>
                    value="<?=$customer["id"]?>">
                    <?=$customer["name"]." ".$customer["phone"]?>
                  </option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="bikeModel">Bike Model</label><br>
                <select class="selectpicker w-100" class="form-control"  onchange="openModal(this)"  name="vehicleModel" id="bikeModel" data-live-search="true">
                  <option selected default disabled>Select Bike</option>
                  <option data-modal="addBike">+ Add New Bike</option>
                  <?php foreach($bikes as $bike) { ?>
                  <option
                    <?php
                    if ($isEdit && ($bike["id"] == $receipt["vehicleModel"] )){
                    echo "selected";
                    }
                    ?>
                  value="<?=$bike["id"]?>"><?=$bike["name"]?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="bikeColor">Bike Color</label><br>
                <select class="selectpicker w-100" class="form-control input-sm" onchange="openModal(this)"  name="vehicleColor" id="bikeColor" data-live-search="true">
                  <option selected default disabled>Select Color</option>
                  <option data-modal="addColor">+ Add Color</option>
                  <?php foreach($colors as $color) { ?>
                  <option
                    <?php
                    if ($isEdit && ($color["id"] == $receipt["vehicleColor"] )){
                    echo "selected";
                    }
                    ?>
                  value="<?=$color["id"]?>"><?=$color["colorName"]?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="vehicleCost">Vechicle Cost</label>
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text sm-group">₹</span>
                  </div>
                  <input type="text" class="form-control input-sm" id="vehicleCost"  onkeyup="calculateTotal()"  name="vehicleCost" <?php if ($isEdit) {?>value="<?=$receipt["vehicleCost"]?>"<?php }?>>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
          <h2 class="text-capitalize">Bike Infomation</h2>
        </div>
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-12">
              <label>Payment Type</label><br>
              <label>
                <input type="radio" name="payType" class="card-input-element d-none w-50" checked="checked" value="cash">
                <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                  Cash
                </div>
              </label>
              <label >
                <input type="radio" name="payType" class="card-input-element d-none" value="finance">
                <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                  Finance
                </div>
              </label>
            </div>
            
            <div class="col-12">
              <div class="finaceData" style="display:none;" >
                <div class="form-group">
                  <label for="downPayment">Down Payment</label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text sm-group">₹</span>
                    </div>
                    <input type="number" class="form-control input-sm" onkeyup="calculateTotal()" id="downPayment" name="downPayment" <?php if ($isEdit) {?>value="<?=$receipt["downPayment"]?>"<?php }?>>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="regCharge">Reg Charges</label>
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text sm-group">₹</span>
                  </div>
                  <input type="number" class="form-control input-sm" onkeyup="calculateTotal()" id="regCharge" name="regCharge" <?php if ($isEdit) {?>value="<?=$receipt["regCharge"]?>"<?php }?>>
                </div>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="fittings">Fittings</label>
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text sm-group">₹</span>
                  </div>
                  <input type="number" class="form-control input-sm" onkeyup="calculateTotal()" id="fittings" name="fittings" <?php if ($isEdit) {?>value="<?=$receipt["fittings"]?>"<?php }?>>
                </div>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="insurance">Insurance</label>
                  <select class="form-control" onchange="calculateTotal()" id="insurance" name="insurance">
                    <option selected default value="0">Select Insurance</option>
                    <option 
                    <?php if ($isEdit) { if($receipt["insurance"] == 1){ echo "selected"; }}?>
                    value="200" data-cost="200" >1 + 4 (rs 200)</option>
                    <option 
                    <?php if ($isEdit) { if($receipt["insurance"] == 2){ echo "selected"; }}?>
                    value="500" data-cost="500" >5 + 5 (rs 500)</option>
                  </select>
              </div>
            </div>
            
            <div class="col-6">
              <div class="form-group">
                <label for="discount">Discount</label>
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text sm-group">₹</span>
                  </div>
                  <input type="number" class="form-control input-sm" onkeyup="calculateTotal()" id="discount" name="discount" <?php if ($isEdit) {?>value="<?=$receipt["discount"]?>"<?php }?>>
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <div class="form-group">
                <label for="total">Total</label>
                <div class="input-group input-group-mergeinput-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text sm-group">₹</span>
                  </div>
                  <input type="number" class="form-control input-sm" id="total" name="total" <?php if ($isEdit) {?>value="<?=$receipt["total"]?>"<?php }?>>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4">
      <div class="card card-default" >
        <div class="card-body row" >
          
          <div class="col-12 finaceData"  style="display:none;">
            <div class="form-group">
              <label for="chequeNo">Cheque No</label>
              <input type="text" class="form-control input-sm" id="chequeNo" name="chequeNo" <?php if ($isEdit) {?>value="<?=$receipt["chequeNo"]?>"<?php }?>>
            </div>
          </div>
          <div class="col-12 finaceData" style="display:none;">
            <div class="form-group">
              <label for="bankName">Bank Name</label>
              <input type="text" class="form-control input-sm" id="bankName" name="bankName" <?php if ($isEdit) {?>value="<?=$receipt["bankName"]?>"<?php }?>>
            </div>
          </div>
          
          <div class="col-12">
            <div class="form-group">
              <label for="remarks">Remarks</label>
              <textarea class="form-control input-sm" id="comment" name="comment" ><?php if ($isEdit) { echo $receipt["comment"]; }?></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="float-right">
          <a
            data-delete="<?=$receipt["id"]?>"
            href="javascript:void(0)"
            class="deletePost btn btn-danger btn-sm "
            data-toggle="tooltip"
            date-placement="top"
            data-original-title = "Delete Receipt"
            >
            <i class="mdi mdi-trash-can-outline"></i> Delete
          </a>
        <button class="btn btn-primary text-capitalize" id="savePost" type="button"><?=$_GET["action"]?> Receipt Data</button>
      </div>
    </div>
  </div>
</form>