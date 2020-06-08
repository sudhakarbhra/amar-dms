<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.bundle.js"></script>
<script src="assets/plugins/toastr/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jdenticon@2.2.0" async></script>

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



});
</script>
