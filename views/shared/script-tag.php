<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/js/sleek.bundle.js"></script> 
<!-- TEMPLATE IMPORTS -->
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/toastr/toastr.min.js"></script>
<script src="assets/plugins/data-tables/jquery.datatables.min.js"></script>
<script src="assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>

<!-- CDN IMPORTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jdenticon@2.2.0" async></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>



<script type="text/javascript">
$(document).ready(function(){
// TOASTER OPTIONS
toastr.options = {
      closeButton: true,
      debug: false,
      newestOnTop: false,
      progressBar: true,
      positionClass: "toast-top-right",
      preventDuplicates: false,
      onclick: null,
      showDuration: "300",
      hideDuration: "1000",
      timeOut: "5000",
      extendedTimeOut: "1000",
      showEasing: "swing",
      hideEasing: "linear",
      showMethod: "fadeIn",
      hideMethod: "fadeOut"
    };
	
// Password View and hide
   	$(".reveal").on("click", function() {
        var $pwd = $(".pwd");
        if ($pwd.attr("type") === "password") {
            $pwd.attr("type", "text");
            $(this).html('<i class="mdi mdi-eye-off-outline" aria-hidden="true"></i>');
        } else {
            $pwd.attr("type", "password");
            $(this).html('<i class="mdi mdi-eye-outline" aria-hidden="true"></i>');
        }
    });

// Select Picker Initialization
  $('.selectpicker').selectpicker();
  
// Datatable Initilazation
  $('#data-table').DataTable({
    "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
    "pageLength": 50,
    "order": [0,'desc']
   });

 function format () {
  return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
         '<tr>'+
           '<td>Full name:</td>'+
           '<td>Name...</td>'+
          '<tr>'+
         '<tr>'+
           '<td>Extension number:</td>'+
           '<td>123</td>'+
          '<tr>'+
          '<tr>'+
           '<td>Extra info:</td>'+
           '<td>And any further details here (images etc)...</td>'+
          '<tr>'+
        '</table>';
     }
     
     $(document).ready(function() {
      var table = $('#expendable-data-table').DataTable( {
      "className":  'details-control',
      "order": [[0, 'asc']],
      "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
      "pageLength": 20,
      "dom": '<"row align-items-center justify-content-between top-information"lf>rt<"row align-items-center justify-content-between bottom-information"ip><"clear">'
  });

  $('#expendable-data-table tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = table.row( tr );
    if ( row.child.isShown() ) {
      row.child.hide();
      tr.removeClass('shown');
    }
    else {
      row.child( format(row.data()) ).show();
      tr.addClass('shown');
    }
   });
 });

});
</script>
