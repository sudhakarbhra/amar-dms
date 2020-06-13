<?php 
require_once "./app/config.php"; 
require_once "./login-check.php";

require_once "./app/classes/Receipt.class.php";
require_once "./app/classes/Customer.class.php";
require_once "./app/classes/Color.class.php";
require_once "./app/classes/Bike.class.php";
require_once "./app/classes/Account.class.php";

$Receipt = new ReceiptClass($database);
$Customer = new CustomerClass($database);
$Bike = new BikeClass($database);
$Color = new ColorClass($database);
$Account = new AccountClass($database);

$receipts = $Receipt->fetchReceipts();

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
                    <?php include "./views/receipts/receipts-list.php";?>
                    <!--//////////////////////////////////////////////// -->
                    
                </div>
                <?php include "./views/shared/right-bar.php"; ?>
            </div>
        </div>
        <?php include "./views/shared/footer.php"; ?>
    </div>
    <?php include "./views/shared/script-tag.php"; ?>

 <script>
              $(document).ready(function() {
                $("#data-table").on( "click",  ".deletePost" , function( event ) {
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
                                            url: '<?=BASE_URL_API?>receipt.php',
                                            data: {
                                            action:"deleteReceipt",
                                            id:$( this ).data("delete")
                                            }
                                        })
                                        .done(function(data){
                                            data = JSON.parse(data);
                                                if(data.success) {
                                                    toastr.success(data.msg);
                                                    location.reload();
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
                        $("#data-table").on( "click",  ".toggleStatus" , function( event ) {
                        event.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: '<?=BASE_URL_API?>receipt.php',
                            data: {
                              action:"toggleStatus",
                              id:$( this ).data("toggle")
                            }
                        })
                        .done(function(data){
                            data = JSON.parse(data);
                            if(data.success) {
                                toastr.success(data.msg);
                                location.reload();
                            }else{
                                toastr.warning(data.msg);
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
