<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MAXUTILITY | Buy Data</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/logo-primary.png" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="../assets/css/libs.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/logik.css?v=1.0.0">

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="  ">
    <?php include 'sidebar.php';?>
    <main class="main-content">
        <div class="position-relative">
            <!--Nav Start-->
            <?php include 'navbar.php';?>
            <!--Nav End-->
        </div>
        <div class="conatiner-fluid content-inner mt-5 py-0">
            <div class="row">
                <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                    <div class="d-flex align-items-center">
                        <h4>Buy Data</h4>
                    </div>
                    <a href="wallet-topup" type="button" class="btn btn-secondary">
                        Fund Wallet
                    </a>
                </div>
                <div class="col-md-7 mx-auto">
                    <div class="card" data-aos="fade-up" data-aos-delay="800">
                    <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Data Top Up</h4>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="container">
                                <form id="airtime-topup-form">
                                    <div class="alert alert-danger" id="error_message" style="display:none"></div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="fname">Choose a Network</label>
                                            <select class="form-control" name="network" id="network">
                                                <option selected value="">Choose..</option>
                                                <option value="mtn">MTN</option>
                                                <option>AIRTEL</option>
                                                <option>GLO</option>
                                                <option>ETISALAT</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="fname">Choose a Category</label>
                                            <select class="form-control" name="category" id="category">
                                                <option selected value="">Choose..</option>
                                                <option value="SME">SME</option>
                                                <option value="CG">CG</option>
                                                <option value="CG_LITE">CG_LITE</option>
                                                <option value="GIFTING">GIFTING</option>
                                                <option value="DIRECT">DIRECT</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="fname">Choose a Package</label>
                                            <select class="form-control" name="newpackage" id="newPackage">
                                                <option selected value="">Choose..</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="fname">Phone Number</label><br>
                                            <!-- <small>separated by comma, space or new line. Duplicate numbers won't be repeated</small> -->
                                            <input type="text" class="form-control" id="numbers" required />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="amount">Amount</label>
                                            <input type="number" class="form-control" id="amount-airtime" name="amount" readonly>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="pin">Pin</label>
                                            <input type="number" class="form-control" id="pin" name="pin" min="4">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary col-12" id="buy-airtime-button" onclick="processBuyAirtime(event)"><span id='buyAirtimeButtonpaySpan'></span> Buy Now <span id="total-span"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Footer Section Start -->
        <?php include 'footer.php';?>
        <!-- Footer Section End -->
    </main>
    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/libs.min.js"></script>

    <!-- Dashboard Charts JavaScript -->
    <script src="../assets/js/charts/dashboard.js"></script>
    <script src="../assets/js/charts/apexcharts.js"></script>

    <!-- fslightbox JavaScript -->
    <script src="../assets/js/fslightbox.js"></script>

    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>


</body>

</html>b