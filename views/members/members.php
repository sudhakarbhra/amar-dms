<div class="breadcrumb-wrapper breadcrumb-contacts">
  <div>
    <h1>Contacts</h1>
    
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-0">
        <li class="breadcrumb-item">
          <a href="index.php">
            <span class="mdi mdi-home"></span>
          </a>
        </li>
        <li class="breadcrumb-item">
          Members
        </li>
        <li class="breadcrumb-item" aria-current="page">All Members</li>
      </ol>
    </nav>
  </div>
  <div>
    <a href="./members-form.php?action=create" class="btn btn-primary" >Add Member</a>
  </div>
</div>
<div class="row">
  <!-- Listing all Users -->
  <?php foreach ($users as $user) { ?>
  <div class="col-lg-6 col-xl-4">
    <div class="card card-default p-4">
      <a
        data-delete="<?=$user["id"]?>"
        href="javascript:void(0)"
        class="deletePost btn btn-sm btn-default text-danger trash-icon"
        data-toggle="tooltip"
        date-placement="top"
        data-original-title = "Delete <?=$user["name"]?>"
        >
        <i class="mdi mdi-trash-can-outline"></i>
      </a>
      <a href="./members-form.php?action=edit&id=<?=$user["id"]?>" class="media text-secondary">
        <svg  data-jdenticon-value="<?=$user["email"]?>"
          class="mr-3 img-fluid rounded"
          alt="<?=$user["name"]?>"
          width="100" height="100">
          Fallback text or image for browsers not supporting inline svg.
        </svg>
        <div class="media-body">
          <h5 class="mt-0 mb-2 text-capitalize text-dark"><?=$user["name"]?></h5>
          <ul class="list-unstyled">
            <?php if(!empty($user["location"])){?>
            <li class="d-flex mb-1">
              <i class="mdi mdi-map mr-1"></i>
              <span><?=$user["location"]?></span>
            </li>
            <?php } ?>
            <?php if(!empty($user["email"])){?>
            <li class="d-flex mb-1">
              <i class="mdi mdi-email mr-1"></i>
              <span><?=$user["email"]?></span>
            </li>
            <?php } ?>
            <?php if(!empty($user["phone"])){ ?>
            <li class="d-flex mb-1">
              <i class="mdi mdi-phone mr-1"></i>
              <span><?=$user["phone"]?></span>
            </li>
            <?php } ?>
          </ul>
        </div>
      </a>
    </div>
  </div>
  <?php } ?>
</div>