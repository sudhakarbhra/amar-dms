<div class="breadcrumb-wrapper  breadcrumb-contacts">
	<div>
		<h1>Customer</h1>						
	    <nav aria-label="breadcrumb">
	      <ol class="breadcrumb p-0">
	        <li class="breadcrumb-item">
	          <a href="index.php">
	            <span class="mdi mdi-home"></span>                
	          </a>
	        </li>
	        <li class="breadcrumb-item">
	          Customer
	        </li>
	        <li class="breadcrumb-item" aria-current="page">All Customers</li>
	      </ol>
	    </nav>
	</div>
  <div>
    <a href="./customer-form.php?action=create" class="btn btn-primary" >Add Customer</a>
  </div>
</div>



<div class="row">
	<div class="col-12">
		<div class="card card-default">
			<div class="card-body">
				<table id="data-table" class="table display nowrap" style="width:100%">
					   <thead>
					    <tr>
					     <th>#</th>
					     <th>Name</th>
					     <th>Phone</th>
					     <th>Area</th>
					     <th>Created by</th>
					     <th>Created At</th>
					     <th>Status</th>
					     <th></th>
					    </tr>
					   </thead>

					   <tbody>
						<?php foreach($customers as $data){ ?>
					    <tr>
					    <td><?=$data["id"]?></td>
					    <td><?=$data["name"]?></td>
					    <td><?=$data["phone"]?></td>
					    <td><?=$data["area"]?></td>
					    <td><?=$Account->getUserInfo($data["createdBy"], "name")?></td>
					    <td>
					     	<?=date_format(date_create($data["createdAt"]), "M d h:m a");?>	
				     	</td>
					    <td>
					     	<?php if ($data["isActive"] == 1) {?>
                           	<span class="badge badge-pill badge-success">Active</span>
                            <?php } else {?>
                            <span class="badge badge-pill badge-dark">Not Active</span>
                            <?php }?>
					    </td>
					     <td>
                        <div class="dropdown">
                            <a class="btn btn-sm btn-outline-secondary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false" >   
                            	<span class="mdi mdi-dots-horizontal-circle"></span>
                            </a>

                            <div  class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"  >
                                <a  class="dropdown-item"  href="./customer-form.php?action=edit&id=<?=$data["id"];?>" > 
                                	<i   class="mdi mdi-square-edit-outline"> </i> Edit </a>
                                <a  class="dropdown-item deletePost"   data-delete="<?=$data["id"]?>" href="javascript:void(0)" >
                                	<i  class="mdi mdi-trash-can-outline text-danger"></i> Delete </a>
                                <?php if ($data["isActive"] == 1) {?>
                                <a  class="dropdown-item toggleStatus" data-toggle="<?=$data["id"]?>" href="javascript:void(0)" > 
                                 <i  class="mdi mdi-checkbox-blank-circle-outline text-warning"></i> Disable </a>
                                <?php } else {?>
                                <a   class="dropdown-item toggleStatus"  data-toggle="<?=$data["id"]?>" href="javascript:void(0)">  <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i> Enable </a>
                                <?php }?>
                            </div>
                        </div>
					     </td>
					    </tr>
						<?php } ?>
					   </tbody>
				</table>
			</div>
		</div>
	</div>

</div>