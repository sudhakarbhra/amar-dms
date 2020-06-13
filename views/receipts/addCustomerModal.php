<!-- Modal -->
<div class="modal fade" id="addCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include "./views/customers/customer-form-tag.php"; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
  
        // FORM SUBMISSION
        $( ".customerSubmit" ).on( "click", function( event ) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?=BASE_URL_API?>customer.php',
            data: $( ".customerForm" ).serialize()
        })
        .done(function(data){
            data = JSON.parse(data);
            if(data.success) {
                toastr.success(data.msg);
                $('.customerForm').find("input, textarea").val("");
                 $("#addCustomer").modal('hide')
            }else{
                toastr.warning(data.msg);
                 $("#addCustomer").modal('hide')
            } 
        })
        .fail(function(data){
            data = JSON.parse(data);
            toastr.error(data.msg);
        });
        return false;
        });
</script>