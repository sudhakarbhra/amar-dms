<?php 
require_once "./app/config.php"; 
require_once "./login-check.php";

require_once "./app/classes/Account.class.php";

$Account  = new AccountClass($database);
$isEdit = false;
if (isset($_GET["action"]) && $_GET["action"] == "edit") {
    $user = $Account -> getUser(cleanMe($_GET["id"]));
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
                    <?php include "./views/members/createMemberForm.php"; ?>
                    <!--//////////////////////////////////////////////// -->
                    
                </div>
                <?php include "./views/shared/right-bar.php"; ?>
            </div>
        </div>
        <?php include "./views/shared/footer.php"; ?>
    </div>
    <?php include "./views/shared/script-tag.php"; ?>

<script type="text/javascript">
  $(document).ready(function(){

        // FORM SUBMISSION
        $( "#savePost" ).on( "click", function( event ) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?=BASE_URL_API?>account.php',
            data: $( "#formControl" ).serialize()
        })
        .done(function(data){
            data = JSON.parse(data);
            if(data.s) {
                toastr.success(data.m);
                $("input, textarea").val("");
                $("input[type=text], textarea").val("");
                window.history.back();
            }else{
                toastr.warning(data.m);
            } 
        })
        .fail(function(data){
            data = JSON.parse(data);
            toastr.error(data.m);
        });
        return false;
        });

  });
</script>
</body>
</html>
