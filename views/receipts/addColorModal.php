<!-- Modal -->
<div class="modal fade" id="addColor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Bike</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php include "./views/colors/colors-form-tag.php";?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
          $( ".colorSubmit" ).on( "click", function( event ) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?=BASE_URL_API?>color.php',
            data: $( ".colorForm" ).serialize()
        })
        .done(function(data){
            data = JSON.parse(data);
            if(data.success) {
                toastr.success(data.msg);
                $('.colorForm').find("input, textarea").val("");
                $("#addColor").modal('hide')
            }else{
                toastr.warning(data.msg);
                $("#addColor").modal('hide')
            } 
        })
        .fail(function(data){
            data = JSON.parse(data);
            toastr.error(data.msg);
        });
        return false;
        });
</script>