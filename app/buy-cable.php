<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MAXUTILITY | Buy Cable </title>

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
                        <h4>Buy Cable</h4>
                    </div>
                    <a href="wallet-topup" type="button" class="btn btn-secondary">
                        Fund Wallet
                    </a>
                </div>
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                            <h4 class="card-title">Buy Cable</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form>
                                    <div class="alert alert-danger" id="error_message" style="display:none"></div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="fname">Select Provider</label>
                                            <select class="form-control" id="disco" required>
                                                <option value="">Select..</option>
                                                <option value="GOTV">GOTV</option>
                                                <option value="DSTV">DSTV</option>
                                                <option value="STARTIMES">STARTIMES</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="fname">SmartCard Number</label>
                                            <input type="text" class="form-control" id="smartcard" name="smartcard" required/>
                                            <p class="small my-1">Customer Name : <span class="text-success" id="customer">Abdullahi Aminu Mudi</span></p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="package">Select Package</label>
                                            <select class="form-control" id="package" name="package" required>
                                                <option value="">Select..</option>
                                                <option value="01">PREPAID</option>
                                                <option value="01">PREPAID</option>
                                                <option value="02">POSTPAID</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="fname">Amount(&#8358;)</label>
                                            <input type="number" class="form-control" id="amount" min="500">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-label" for="pin">Pin</label>
                                            <input type="number" class="form-control" id="pin" name="pin" min="4">
                                        </div>
                                    </div>
                                    
                                    <center>
                                        <button id="buy-Electricity-button" type="submit" class="btn btn-primary" onclick="processBuyElectricity(event)"><span id='buyElectricityButtonSpan'></span>Submit<span id="totalSpan"></span></button>
                                    </center>
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