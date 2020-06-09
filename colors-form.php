<?php 
require_once "./app/config.php"; 
require_once "./login-check.php";


require_once "./app/classes/Color.class.php";

$Color  = new ColorClass($database);
$isEdit = false;
if (isset($_GET["action"]) && $_GET["action"] == "edit") {
    $color = $Color -> getColor(cleanMe($_GET["id"]));
    $isEdit = true;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php include "./views/shared/head-tag.php"; ?>
</head>
<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body"> 
<?php include "./views/shared/page-spinner.php"; ?>

  

    <div class="wrapper">
    <?php include "./views/shared/side-bar.php"; ?>
        <div class="page-wrapper">
        <?php include "./views/shared/header.php"; ?>
            <div class="content-wrapper">
                <div class="content">	

                    <!--//////////////////////////////////////////////// -->
                    <?php include "./views/colors/colors-form.php"; ?>
                    <!--//////////////////////////////////////////////// -->
                    
                </div>
                <?php include "./views/shared/right-bar.php"; ?>
            </div>
        </div>
        <?php include "./views/shared/footer.php"; ?>
    </div>
    <?php include "./views/shared/script-tag.php"; ?>\
<script type="text/javascript">
  $(document).ready(function(){

        // FORM SUBMISSION
        $( "#savePost" ).on( "click", function( event ) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?=BASE_URL_API?>color.php',
            data: $( "#formControl" ).serialize()
        })
        .done(function(data){
            data = JSON.parse(data);
            if(data.success) {
                toastr.success(data.msg);
                $("input, textarea").val("");
                window.history.back();
            }else{
                toastr.warning(data.msg);
            } 
        })
        .fail(function(data){
            data = JSON.parse(data);
            toastr.error(data.msg);
        });
        return false;
        });
            $( ".deletePost" ).on( "click", function( event ) {
    event.preventDefault();
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                        type: 'POST',
                        url: '<?=BASE_URL_API?>color.php',
                        data: {
                        action:"deleteColor",
                        id:$( this ).data("delete")
                        }
                    })
                    .done(function(data){
                        data = JSON.parse(data);
                       if(data.success) {
                            toastr.success(data.msg);
                            window.history.back();
                        }else{
                            toastr.warning(data.msg);
                        } 
                    })
                    .fail(function(data){
                    data = JSON.parse(data);
                    toastr.error(data.m);
                    });
        }
        });
    return false;
    });

  });
</script>
</body>
</html>
