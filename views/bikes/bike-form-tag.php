        <form id="formControl" class="bikeForm">
          <?php if($_GET["action"] == "edit"){ ?>
          <input type="hidden" name="action" value="editBike">
          <input type="hidden" name="id" value="<?=$bike["id"]?>">
          <?php }else{ ?>
          <input type="hidden" name="action" value="createBike">
          <?php } ?>
          <div class="row mb-2">
            <div class="col-12">
              <div class="form-group">
                <label for="name">Bike name</label>
                <input type="text" class="form-control" id="name" name="name" <?php if ($isEdit) {?>value="<?=$bike["name"]?>"<?php }?>>
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-12">
              <div class="form-group">
                <label for="name">Bike Colors</label><br>
                <select class="js-example-basic-multiple form-control w-100" name="colors[]" multiple="multiple">
                  <?php
                  $bikeColors = json_decode($bike["colors"]);
                  foreach ($colors as $color) { ?>
                  <option
                    value="<?=$color["id"]?>"
                    <?php
                    if ($isEdit && !empty($bikeColors)){
                    if(in_array($color["id"], $bikeColors)){
                    echo "selected";
                    }
                    }
                    ?>
                  ><?=$color["colorName"]?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <button class="btn btn-primary text-capitalize bikeSubmit" id="savePost" type="button"><?=$_GET["action"]?> Bike Data</button>
        </form>