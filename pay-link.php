<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include "./views/shared/head-tag.php"; ?>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <?php include "./views/shared/page-spinner.php"; ?>
    <!--//////////////////////////////////////////////// -->
    <div class="container py-2">
        <div class="row justify-content-center  ">
            <div class="col-xs-12 col-md-6">
                <!-- FORM -->
                <h3 class="mb-4">Sri Amar Bikes</h3>
                <form action="./send-otp.php" method="POST">
                    <label>Enter Your Phone number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+91</span>
                        </div>
                        <input type="text" class="form-control" name="ph" placeholder="Phone Number">
                    </div>
                    <div class="row justify-content-center ">
                        <button class="btn btn-outline-danger btn-sm" type="submit" id="button-addon1">Get Customer Info
                        </button>
                    </div>
                </form>
                <hr>
                <div class="card border-light">
                    <div class="card-body">
                        <h5 mb-2 class="card-title">Sri Amar Bikes - Paymeny Link</h5 mb-2>
                        <p class="card-text">Enter Mobile Number in the above for and click "Get Customer Info" to
                            get
                            customer information</p>
                        <a target="_blank" href="https://wa.me/+919840110005?text=Hi!, Sri Amar Bikes. I have the following Query" class="btn btn-outline-success btn-sm my-4">
                            <i class="mdi mdi-whatsapp h5 mb-2"></i> Contact Sri Amar Bikes
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////////////// -->
    <?php include "./views/shared/script-tag.php"; ?>
</body>

</html>