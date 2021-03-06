<div class="breadcrumb-wrapper breadcrumb-contacts">
  <div>
    <h1>Bike Models</h1>
    
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.php">
                <span class="mdi mdi-home"></span>                
              </a>
            </li>
            <li class="breadcrumb-item">
              Inventory
            </li>
            <li class="breadcrumb-item" aria-current="page">All Bikes</li>
          </ol>
        </nav>

  </div>
  <div>
    <a href="./bike-form.php?action=create" class="btn btn-primary" >Add Bike</a>
  </div>
</div>



<div class="row">


<!-- Listing all Users -->
<?php foreach ($bikes as $bike) { ?>
  <div class="col-lg-6 col-xl-4">
    <div class="card card-default p-2">
      <a 
        data-delete="<?=$bike["id"]?>" 
        href="javascript:void(0)" 
        class="deletePost btn btn-sm btn-default text-danger trash-icon"
        data-toggle="tooltip"
        date-placement="top"
        data-original-title = "Delete <?=$bike["name"]?>"
        >
        <i class="mdi mdi-trash-can-outline"></i>
      </a>

      <a href="./bike-form.php?action=edit&id=<?=$bike["id"]?>" class="media text-secondary">
        <div class="media-body">
          <h5 class="mt-0 mb-2 text-capitalize text-dark"><?=$bike["name"]?></h5>
          <small><?=$bike["createdAt"]?></small>

        </div>
      </a>

    </div>
  </div>
<?php } ?>


</div>