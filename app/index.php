<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UniPay | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/logo-primary.png" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="../assets/css/libs.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/logik.css?v=1.0.0">
    <link rel="stylesheet" href="../assets/css/extra.css">

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
            <h1 class="text-center mb-4">Welcome Abdul!</h1>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="card" style="text-decoration: none;" href="wallet">
                                <div class="card-header">
                                    <h5>Nulfund Wallet</h5>
                                </div>
                                <div class="card-body text-muted">                                    
                                    <p class="fw-lighter fs-3 mb-0 d-flex align-items-center text-success">&#8358; 120,000</p>
                                    <small>Funding balance</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="card" style="text-decoration: none;" href="#">
                                <div class="card-header">
                                    <h5>Fees Wallet</h5>
                                </div>
                                <div class="card-body text-muted">                                    
                                    <p class="fw-lighter fs-3 mb-0 d-flex align-items-center text-danger">&#8358; 105,000</p>
                                    <small>Outstanding balance</small>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Recent Transactions</h4>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <div class="table-responsive">
                                        <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
                                            <thead>
                                                <tr class="ligth">
                                                    <th>S/N</th>
                                                    <th>Type</th>
                                                    <th>Sender/Reciever</th>
                                                    <th>Amount</th>
                                                    <th>Note</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td><span class="text-success">Credit</span></td>
                                                    <td>NELFUND</td>
                                                    <td><span class="text-success">&#8358; 100,000</span></td>
                                                    <td>Grant for 2024/2025 Session</td>                                              
                                                    <td>12:00pm 2019/12/01</td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="btn btn-sm btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">
                                                                <span class="btn-inner">
                                                                    <i class="fa fa-eye"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td><span class="text-success">Credit</span></td>
                                                    <td>NELFUND</td>
                                                    <td><span class="text-success">&#8358; 110,000</span></td>
                                                    <td>Grant for 2023/2024 Session</td>                                              
                                                    <td>12:00pm 2019/12/01</td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="btn btn-sm btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">
                                                                <span class="btn-inner">
                                                                    <i class="fa fa-eye"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td><span class="text-danger">Debit</span></td>
                                                    <td>FUD</td>
                                                    <td><span class="text-danger">&#8358; 110,000</span></td>
                                                    <td>Registration Fee for 2024/2025</td>                                              
                                                    <td>12:00pm 2019/12/01</td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="btn btn-sm btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">
                                                                <span class="btn-inner">
                                                                    <i class="fa fa-eye"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td><span class="text-danger">Debit</span></td>
                                                    <td>FUD</td>
                                                    <td><span class="text-danger">&#8358; 110,000</span></td>
                                                    <td>Registration Fee for 2023/2025</td>                                              
                                                    <td>12:00pm 2019/12/01</td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="btn btn-sm btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">
                                                                <span class="btn-inner">
                                                                    <i class="fa fa-eye"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td><span class="text-success">Credit</span></td>
                                                    <td>NELFUND</td>
                                                    <td><span class="text-success">&#8358; 20,000</span></td>
                                                    <td>Upkeep for 2024/2025 Session</td>                                              
                                                    <td>12:00pm 2019/12/01</td>
                                                    <td>
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="btn btn-sm btn-icon btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="#">
                                                                <span class="btn-inner">
                                                                    <i class="fa fa-eye"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section Start -->
        <footer class="footer border-top">
            <div class="footer-body">
                <ul class="left-panel list-inline mb-0 p-0">
                    <li class="list-inline-item"><a href="../about">About Us</a></li>
                    <li class="list-inline-item"><a href="../contact">Contact Us</a></li>
                </ul>
                <div class="right-panel">
                    ©<script>
                        document.write(new Date().getFullYear())
                    </script> DiTaCS, Design
                    </span> by <a href="https://sgr.com.ng/">SGR</a>.
                </div>
            </div>
        </footer>
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