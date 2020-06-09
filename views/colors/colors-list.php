<div class="breadcrumb-wrapper breadcrumb-contacts">
  <div>
    <h1>Colors</h1>
    
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
            <li class="breadcrumb-item" aria-current="page">All Colors</li>
          </ol>
        </nav>

  </div>
  <div>
    <a href="./colors-form.php?action=create" class="btn btn-primary" >Add Color</a>
  </div>
</div>

<div class="row">

	<?php foreach($colors as $color ) { ?>
	<div class="col-xs-6 col-sm-4 col-md-2 mb-2">
		<a href="./colors-form.php?action=edit&id=<?=$color["id"]?>">
			<div class="card">
			<div class="card-body">
				<div class="rounded color-card mb-1" style="background-color: <?=$color["colorCode"]?> !important;"></div>
				<h5 class="card-title text-dark text-capitalo=ize">
					<?=$color["colorName"]?>	
				</h5>
				<p class="card-text text-secondary">
					<?=$color["colorCode"]?>	
				</p>
			</div>
		</div>
		</a>
	</div>
	<?php } ?>

</div>