<form id="formControl">
<div class="row">
  <div class="col-sm-12 col-md-6">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom d-flex justify-content-between">
        <h2 class="text-capitalize"><?=$_GET["action"]?> Receipt</h2>
         <a 
        data-delete="<?=$receipt["id"]?>" 
        href="javascript:void(0)" 
        class="deletePost btn btn-danger btn-sm "
        data-toggle="tooltip"
        date-placement="top"
        data-original-title = "Delete <?=$receipt["name"]?>"
        >
        <i class="mdi mdi-trash-can-outline"></i> Delete
      </a>
      </div>
      <div class="card-body">
          <?php if($_GET["action"] == "edit"){ ?>
            <input type="hidden" name="action" value="editReceipt">
            <input type="hidden" name="id" value="<?=$receipt["id"]?>">
          <?php }else{ ?>
            <input type="hidden" name="action" value="createReceipt">
          <?php } ?>
        <div class="row mb-2">
          <div class="col-12">
            <div class="form-group">
              <label for="name">Receiptant's Name</label>
              <input type="text" class="form-control" id="name" name="name" <?php if ($isEdit) {?>value="<?=$receipt["name"]?>"<?php }?>>
            </div> 
          </div>
       
          <div class="col-12">
            <div class="form-group">
              <label for="fatherName">Father name</label>
              <input type="text" class="form-control" id="fatherName" name="fatherName" <?php if ($isEdit) {?>value="<?=$receipt["fatherName"]?>"<?php }?>>
            </div> 
          </div>
        
          <div class="col-12">
            <div class="form-group">
              <label for="address1">Address 1</label>
              <input type="text" class="form-control" id="address1" name="address1" <?php if ($isEdit) {?>value="<?=$receipt["address1"]?>"<?php }?>>
            </div> 
          </div>
       
          <div class="col-12">
            <div class="form-group">
              <label for="address2">Address 2</label>
              <input type="text" class="form-control" id="address2" name="address2" <?php if ($isEdit) {?>value="<?=$receipt["address2"]?>"<?php }?>>
            </div> 
          </div>
       
          <div class="col-12">
            <div class="form-group">
              <label for="area">Area</label>
              <input type="text" class="form-control" id="area" name="area" <?php if ($isEdit) {?>value="<?=$receipt["area"]?>"<?php }?>>
            </div> 
          </div>
       
          <div class="col-12">
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" id="city" name="city" <?php if ($isEdit) {?>value="<?=$receipt["city"]?>"<?php }?>>
            </div> 
          </div>
       
          <div class="col-12">
            <div class="form-group">
              <label for="pincode">Pincode</label>
              <input type="text" class="form-control" id="pincode" name="pincode" <?php if ($isEdit) {?>value="<?=$receipt["pincode"]?>"<?php }?>>
            </div> 
          </div>
       
          <div class="col-12">
            <div class="form-group">
              <label for="phone">Mobile Number</label>
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text">+91</span>
                  </div>
                 <input type="text" class="form-control" id="phone" name="phone" <?php if ($isEdit) {?>value="<?=$receipt["phone"]?>"<?php }?>  >
                </div>
            </div> 
          </div>
       
          <div class="col-12">
            <div class="form-group">
              <label for="phoneAlt">Alternative Number</label>
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text">+91</span>
                  </div>
                 <input type="text" class="form-control" id="phoneAlt" name="phoneAlt" <?php if ($isEdit) {?>value="<?=$receipt["phoneAlt"]?>"<?php }?>  >
                </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
          <h2 class="text-capitalize">Bike Infomation</h2>
         </div>
          <div class="card-body">
            <div class="row mb-2">

              <div class="col-12">
                <div class="form-group">
                  <label for="bikeModel">Bike Model</label><br>
                  <select class="selectpicker" class="form-control" id="bikeModel" data-live-search="true">
                    <?php foreach($bikes as $bike) { ?>
                      <option><?=$bike["name"]?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="bikeColor">Bike Color</label><br>
                  <select class="selectpicker" class="form-control" id="bikeColor" data-live-search="true">
                    <?php foreach($colors as $color) { ?>
                      <option><?=$color["colorName"]?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-12">
               
                <p class="text-dark my-3 text-bold">Cash Type</p>     
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
                <div class="form-group">
                  <label for="vehicleCost">Vechicle Cost</label>
                  <input type="text" class="form-control" id="vehicleCost" name="vehicleCost" <?php if ($isEdit) {?>value="<?=$receipt["vehicleCost"]?>"<?php }?>>
                </div> 
              </div>
           
              <div class="col-12">
                <div class="form-group">
                  <label for="regCharge">Reg Charges</label>
                  <input type="text" class="form-control" id="regCharge" name="regCharge" <?php if ($isEdit) {?>value="<?=$receipt["regCharge"]?>"<?php }?>>
                </div> 
              </div>
           
              <div class="col-12">
                <div class="form-group">
                  <label for="fittings">Fittings</label>
                  <input type="text" class="form-control" id="fittings" name="fittings" <?php if ($isEdit) {?>value="<?=$receipt["fittings"]?>"<?php }?>>
                </div> 
              </div>
           
              <div class="col-12">
                <div class="form-group">
                  <label for="insurance">Insurance</label>
                  <input type="text" class="form-control" id="insurance" name="insurance" <?php if ($isEdit) {?>value="<?=$receipt["insurance"]?>"<?php }?>>
                </div> 
              </div>
            
              <div class="col-12">
                <div class="form-group">
                  <label for="discount">Discount</label>
                  <input type="text" class="form-control" id="discount" name="discount" <?php if ($isEdit) {?>value="<?=$receipt["discount"]?>"<?php }?>>
                </div> 
              </div>
         
              <div class="col-12">
                <div class="form-group">
                  <label for="total">Total</label>
                  <input type="text" class="form-control" id="total" name="total" <?php if ($isEdit) {?>value="<?=$receipt["total"]?>"<?php }?>>
                </div> 
              </div>
            </div>
          <div class="row" id="finaceData" style="display:none;">

            <div class="col-12">
              <div class="form-group">
                <label for="downPayment">Down Payment</label>
                <input type="text" class="form-control" id="downPayment" name="downPayment" <?php if ($isEdit) {?>value="<?=$receipt["downPayment"]?>"<?php }?>>
              </div> 
            </div>

            <div class="col-12">
              <div class="form-group">
                <label for="chequeNo">Cheque No</label>
                <input type="text" class="form-control" id="chequeNo" name="chequeNo" <?php if ($isEdit) {?>value="<?=$receipt["chequeNo"]?>"<?php }?>>
              </div> 
            </div>

            <div class="col-12">
              <div class="form-group">
                <label for="bankName">Bank Name</label>
                <input type="text" class="form-control" id="bankName" name="bankName" <?php if ($isEdit) {?>value="<?=$receipt["bankName"]?>"<?php }?>>
              </div> 
            </div>

            <div class="col-12">
              <div class="form-group">
                <label for="remarks">Remarks</label>
                <textarea class="form-control" name="remarks" ><?php if ($isEdit) { echo $receipt["remarks"]; }?></textarea>
              </div> 
            </div>
          </div>


       

       
      </div>
  </div>
</div>
</div>

 <div class="row">
    <div class="col-12">
      <button class="btn btn-primary text-capitalize" id="savePost" type="button"><?=$_GET["action"]?> Receipt Data</button>
    </div>
 </div>
</form>