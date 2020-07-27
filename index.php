<?php
require_once "./app/config.php"; 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include "./views/shared/head-tag.php"; ?>
</head>

<body id="body">
    <!--//////////////////////////////////////////////// -->
    <?php include "./views/signin/signin.php"; ?>
    <!--//////////////////////////////////////////////// -->
    <?php include "./views/shared/script-tag.php"; ?>
    <script>
    var generatedOTP;


    $("#OTP_submit").click(function() {
        $.ajax({
            url: './verify-login.php',
            type: 'get',
            success: function(response) {
                var res = JSON.parse(response);
                console.log(res);
                if (res.status) {
                    generatedOTP = res.opt;
                    $("#otpInputContainer").show();
                    $("#OTP_submit").hide();
                } else {
                    alert("Someting Went wrong, OTP cannot be sent")
                }
            }
        });

    });


    $("#login_submit").click(function() {
        var username = $("#login_uname").val().trim();
        var password = $("#login_pwd").val().trim();
        $("#message").html("");
        if (username != "" && password != "") {
            $.ajax({
                url: '<?=BASE_URL?>app/api/checkUser.php',
                type: 'post',
                data: { username: username, password: password },
                success: function(response) {
                    var msg = "";
                    if (response == true) {
                        $("#message").html('<div class="alert alert-success" role="alert">Successfull! Login </div>');
                        window.location = "dashboard.php";
                    } else {
                        $("#message").html(response);
                    }
                }
            });
        } else {
            $("#message").html('<div class="alert alert-warning" role="alert">Empty! username and password </div>');
        }
    });

    function verifyOTP(otpInput) {
        if (otpInput == generatedOTP) {
            $("#login_submit").show();
        } else {
            $("#login_submit").hide();
        }
    }
    </script>
</body>

</html>