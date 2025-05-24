<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MAXUTILITY | Wallet Topup</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/logo-primary.png" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="../assets/css/libs.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/logik.css?v=1.0.0">

    <!-- FontAwesome 5-->
    <link href="../vendor/fortawesome/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">

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
                        <h4>Wallet Topup</h4>
                    </div>
                    <a href="#" type="button" class="btn btn-secondary">
                        Transfer Funds
                    </a>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="card" data-aos="fade-up" data-aos-delay="800">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="header-title">
                                <h4 class="card-title">Topup Your Wallet</h4>
                                <p class="mb-0"></p>Select a payment channel to fund your wallet</p>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="container border rounded p-2 mb-2 ">
                                <h6>Manual Bank Transfer </h6>
                                <p class="my-0 small text-muted"><i class="fa fa-dot-circle"></i> Name: Abdulrashid Isah Musa</p>
                                <p class="my-0 small text-muted"><i class="fa fa-dot-circle"></i> Bank Name: Opay</p>
                                <p class="my-0 small text-muted"><i class="fa fa-dot-circle"></i> Account Number. 7036774566</p>
                                <p class="small mb-1 text-muted">Transaction Fee : &#8358; 30 </p>
                            </div>
                            <div class="container border rounded p-2 mb-2 ">
                                <h6>Manual Bank Transfer </h6>
                                <p class="my-0 small text-muted"><i class="fa fa-dot-circle"></i> Name: Abdulrashid Isah Musa</p>
                                <p class="my-0 small text-muted"><i class="fa fa-dot-circle"></i> Bank Name: Opay</p>
                                <p class="my-0 small text-muted"><i class="fa fa-dot-circle"></i> Account Number. 7036774566</p>
                                <p class="small mb-1 text-muted">Transaction Fee : &#8358; 30 </p>
                            </div>
                            <div class="container border rounded p-2 mb-2 ">
                                <h6>Pay With Card </h6>
                                <form id="paymentForm" action="monni.php" method="POST">
                                    <input type="email" id="email-address" name="email" hidden/>
                                    <input type="text" id="first-name" name="fname" hidden/>
                                    <input type="text" id="last-name" name="lname" hidden/>
                                    <input type="text" id="payUserName" name="username" hidden/>
                                    <input type="text" id="payWalletID" name="wallet" hidden/>
                                    <input type="text" id="payUserID" name="user" hidden/>
                                    <input type="text" id="payTotal" name="total" hidden/>
                                    <input type="text" id="payFees" name="fees" hidden/>
                                    <div class="mb-3">
                                        <input type="number" placeholder="Amount, at least N100" id="amount-before" name="amount" class="form-control mt-1">
                                        <input type="text" id="amount" hidden>
                                        <small id="message"></small>
                                    </div>
                                    <p class="my-1">Fee &#8358; <span id="paystackFees">0</span> | Total : &#8358; <span id="paystackTotal">0.00</span></p>
                                    <div id="payment-button-container col-12">
                                        <button type="submit" name="paywithMonnify" id="pay-button" class="btn btn-primary col-12"  disabled>Pay with Monnify</button>
                                    </div>
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

</html>