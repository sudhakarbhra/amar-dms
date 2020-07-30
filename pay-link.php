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
                        <input type="tel" class="form-control" name="ph" placeholder="Phone Number">
                    </div>
                    <div class="row justify-content-center ">
                        <button class="btn btn-outline-danger btn-sm" type="submit" id="button-addon1">GET EMI INFO
                        </button>
                    </div>
                </form>
                <hr>
                <div class="card border-light">
                    <div class="card-body">
                        <h5 mb-2 class="card-title">Loan Through -- Sri Amar Bikes</h5 mb-2>
                        <p class="card-text">Enter Mobile Number in the above for and click <span class="text-danger">"GET EMI INFO"</span> to
                            get EMI Details</p>
                            <br/>
                            <h6>Note:</h6>
                            <ul style="padding-left: 20px;" >
                                <li style="list-style-type: circle;">Please Pay Your Emi Ondate to avoid late payment.</li>
                                <li style="list-style-type: circle;">Late payment additional charges please avoid it.</li>
                                <li style="list-style-type: circle;">Please share compulsory your screenshot of successful transaction to us.</li>
                            </ul>
                        <a target="_blank" href="https://wa.me/+919994778985?text=Hi!, Sri Amar Bikes. I have the following Query" class="btn btn-outline-success btn-sm my-4">
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