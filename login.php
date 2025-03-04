<?php
session_start();
require_once '../vendor/autoload.php';
    include 'functions.php';

    use Medoo\Medoo;

    $db = new Medoo();
if (isset($_REQUEST['submit'])) {
    

    $mobile_no = $_REQUEST['mobile_number'];
    $password = md5($_REQUEST['password']);
    $admin = $db->get("admin", "*", ["AND" => ['mobile_no' => $mobile_no, 'password' => $password]]);
    if ($admin) {
     
        if ($admin['is_blocked'] == '0') {
            $_SESSION['admin'] = $admin;
           
            header("location:index.php");
        } else {
            $error = "You are not allowed to login, Please contact admin.";
        }
    } else {

        $error = "Username or Password incorrect, Please try again.";
    }
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
    <head>

        <meta charset="utf-8" />
        <title>Online Ayurveda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="./assets/images/favicon.ico">

        <!-- Layout config Js -->
        <script src="./assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="./assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="./assets/js/jquery.validate.min.js" type="text/javascript"></script>

    </head>

    <body>

        <!-- auth-page wrapper -->
        <div class="auth-page-wrapper pt-5">
            <!-- auth page bg -->
            <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
                <div class="bg-overlay"></div>

                <div class="shape">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1440 120"
                        >
                    <path
                        d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"
                        ></path>
                    </svg>
                </div>
            </div>

            <!-- auth-page content -->
            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">
                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <div class="mb-4">
                                            <a href="#" class="d-block">
                                                <img src="./assets/images/logo-dark.png" alt="" height="38">
                                            </a>
                                        </div>
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p class="text-muted">Sign in to Online Ayurveda.</p>
                                    </div>
                                    <div class="text-center mt-2">
                                        <?php
                                        if (isset($error)) {
                                            echo "<span class='text-danger'>$error</span>";
                                        }
                                        ?>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form class="needs-validation" action="" method="post" id="login-form">

                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Mobile No <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter mobile number" required>
                                                <div class="invalid-feedback">
                                                    Please enter mobile number
                                                </div>
                                            </div>


                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" name="password-input" aria-describedby="passwordInput" required>
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    <div class="invalid-feedback">
                                                        Please enter password
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                <p class="mb-1 float-end"> <a href="#" class="fw-semibold text-primary text-decoration-underline"> Forgot Password?</a> </p>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" name="submit" type="submit">Sign In</button>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">
                                    Don't have an account ?
                                    <a
                                        href="auth-signup-basic.html"
                                        class="fw-semibold text-primary text-decoration-underline"
                                        >
                                        Signup
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0">&copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Online Ayurveda  Crafted with <i class="mdi mdi-heart text-danger"></i> by Proman
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->


    </body>


    <!-- JAVASCRIPT -->
    <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/simplebar.min.js"></script>
    <script src="./assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/libs/feather-icons/feather.min.js"></script>
    <script src="./assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="./assets/js/plugins.js"></script>

    <!-- password-addon init -->
    <script src="./assets/js/pages/password-addon.init.js"></script>
    <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/simplebar.min.js"></script>
    <script src="./assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/libs/feather-icons/feather.min.js"></script>
    <script src="./assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="./assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="./assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="./assets/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="./assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="./assets/js/pages/passowrd-create.init.js"></script>

    <script>
                                        $(document).keyup(function () {
                                            $("#login-form").validate({
                                                rules: {
                                                    mobile_number: {
                                                        required: true,
                                                        maxlength: 10,
                                                        minlength: 10,

                                                    }
                                                },
                                                // Specify validation error messages
                                                messages: {
                                                    mobile_number: {
                                                        remote: "Phone number already exists, Please contact mess owner"
                                                    }
                                                },
                                                // Make sure the form is submitted to the destination defined
                                                // in the "action" attribute of the form when valid
                                                submitHandler: function (form) {
                                                    //alert();
                                                    form.submit();
                                                }
                                            });

                                        });
    </script>
</html>