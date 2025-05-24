<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MAXUTILITY | Profile </title>

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
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Profile</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form id="registrationForm">
                                    <div id="status-message" class="alert"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="full-name" class="form-label">First Name*</label>
                                                <input type="text" class="form-control" name="first-name" id="first-name" placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="last-name" class="form-label">Last Name*</label>
                                                <input type="text" class="form-control" name="last-name" id="last-name" placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="username" class="form-label">Username*</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder=" " readonly>
                                                <small id="username-message"></small>
                                            </div>
                                        </div>
                                        <input name="userId" value="" type="hidden" id="customerId">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select class="form-control" name="gender" id="gender" placeholder=" ">
                                                    <option value="">Choose..</option>
                                                    <option>Female</option>
                                                    <option>Male</option>
                                                </select>
                                                <small id="gender-message"></small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email*</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder=" ">
                                                <small id="email-message"></small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="phone" class="form-label">Phone No.*</label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="state" class="form-label">State</label>
                                                <select class="form-control" name="state" id="state" placeholder=" ">
                                                    <option value="">Choose..</option>
                                                    <?php include 'state-list.php'; ?>
                                                </select>
                                                <small id="gender-message"></small>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" name="address" id="address" placeholder=" ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center ">
                                        <button type="submit" id="updateBtn" class="btn btn-primary col-12">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Update Password</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form id="updatePasswordForm">
                                    <div id="status-message2" class="alert"></div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" name="currentPassword" id="currentPassword" placeholder=" ">
                                        <small id="password-message"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder=" ">
                                        <small id="new-message"></small>
                                    </div>
                                    <input type="hidden" name="userId" value="" id="changePUserId">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder=" ">
                                        <small id="confirm-message"></small>
                                    </div>
                                    <div class="d-flex justify-content-center ">
                                        <button class="btn btn-primary col-12 mt-3" data-bs-toggle="modal" data-bs-target="#updatePassword">Change Password</button>
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