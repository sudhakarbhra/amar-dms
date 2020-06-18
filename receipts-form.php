<?php 
require_once "./app/config.php"; 
require_once "./login-check.php";

require_once "./app/classes/Receipt.class.php";
require_once "./app/classes/Bike.class.php";
require_once "./app/classes/Color.class.php";
require_once "./app/classes/Customer.class.php";
require_once "./app/classes/Invoice.class.php";
require_once "./app/classes/Account.class.php";

$Account = new AccountClass($database);
$Receipt = new ReceiptClass($database);
$Bike = new BikeClass($database);
$Color = new ColorClass($database);
$Customer = new CustomerClass($database);
$Invoice = new InvoiceClass($database);

$isEdit = false;
if (isset($_GET["action"]) && $_GET["action"] == "edit") {
    $receipt = $Receipt->getReceipt($_GET["id"]);
    $invoices = $Invoice->fetchInvoiceByReceiptId($_GET["id"]);
    $isEdit = true;
}

$bikes = $Bike->fetchBikes();
$colors = $Color->fetchColors();
$customers = $Customer->fetchCustomers();

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
                    <?php include "./views/receipts/receipt-form.php";?>
                    <?php include "./views/receipts/invoice-list.php";?>
                    <!--//////////////////////////////////////////////// -->
                    
                </div>
                <?php include "./views/shared/right-bar.php"; ?>
            </div>
        </div>
        <?php include "./views/shared/footer.php"; ?>
    </div>
    <?php include "./views/shared/script-tag.php"; ?>

    
        <!-- MODALS -->
        <?php include "./views/receipts/addCustomerModal.php"; ?>
        <?php include "./views/receipts/addBikeModal.php"; ?>
        <?php include "./views/receipts/addColorModal.php"; ?>





<script type="text/javascript">
    function calculateTotal(){
       
        let vehicleCost = $('#vehicleCost').val();
        let downPayment = $('#downPayment').val();
        let regCharge = $('#regCharge').val();
        let fittings = $('#fittings').val();
        let insurance = $('#insurance').val();
        let discount = $('#discount').val();
        $('#total').val("");

        if(!downPayment){ downPayment = 0; }
        if(!vehicleCost){ vehicleCost = 0; }
        if(!downPayment){ downPayment = 0; }
        if(!regCharge){ regCharge = 0; }
        if(!fittings){ fittings = 0; }
        if(!insurance){ insurance = 0; }
        if(!discount){ discount = 0; }

        if(downPayment){
            vehicleCost =0;
        }
        let total =  (parseInt(vehicleCost) +  parseInt(downPayment) + parseInt(regCharge) + parseInt(fittings) + parseInt(insurance)) - parseInt(discount);
        $('#total').val(total);
         console.log(total);

    }

    function openModal(req){
        var modal = $(req).children("option:selected").data("modal");
        if(modal){ $(`#${modal}`).modal();}
    }
    function changeInput(){
        let paymentType = $("#paymentType").val();
        $('.paymentNotInput').hide(300);
        $('.paymentNotInput').find('input').val("");
        $("#"+paymentType).show(300);
    }


  $(document).ready(function(){



$('input[type="radio"]').click(function() { 
    var inputValue = $(this).attr("value"); 
    if( inputValue == "finance" ){
        $(".finaceData").show(300);
        $("#downPayment").val("");
        $("#chequeNo").val("");
        $("#bankName").val("");
        calculateTotal();

    }else{
        $(".finaceData").hide(300);
        $("#downPayment").val("0");
         calculateTotal();
    }
}); 



        // FORM SUBMISSION
        $( "#savePost" ).on( "click", function( event ) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?=BASE_URL_API?>receipt.php',
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

        // FORM SUBMISSION
        $( "#generateInvoice" ).on( "click", function( event ) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?=BASE_URL_API?>invoice.php',
            data: $( "#receiptForm" ).serialize()
        })
        .done(function(data){
            data = JSON.parse(data);
            if(data.success) {
                toastr.success(data.msg);
                $("input, textarea").val("");
                location.reload();
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
    });            $( ".deleteInvoice" ).on( "click", function( event ) {
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
