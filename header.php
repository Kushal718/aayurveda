<?php
session_start();
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo();

if (!isset($_SESSION['admin'])) {
     header('location:login.php');
}

include './functions.php';
date_default_timezone_set("asia/kolkata");
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

    <head>
        <meta charset="utf-8" />
        <title>Aayurveda medicine </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="./assets/images/favicon.ico">



        <!-- jsvectormap css -->
        <link href="./assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="./assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="./assets/libs/dropzone/dropzone.css" type="text/css" />

        <!-- Filepond css -->
        <link rel="stylesheet" href="./assets/libs/filepond/filepond.min.css" type="text/css" />
        <link rel="stylesheet" href="./assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
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
        <link href="./assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="info.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="./assets/images/logo-dark.png" alt="" height="37">
                                </span>
                            </a>

                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="./assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="./assets/images/logo-light.png" alt="" height="37">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                    id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div class="data-simplebar" id="search-data" style="max-height: 320px;">

                                </div>


                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>



                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        onerror='this.style.display = "none"' alt="Image not inserted yet :(" src="<?php
                                        echo "./info.png";
                                        ?>">
                                    <!--<img  width="35" height="35"-->
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">
                                            <?php echo $_SESSION['admin']['name']; ?>
                                        </span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">
                                            <?php echo ucfirst($_SESSION['admin']['type']); ?>
                                        </span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome To
                                    <?php echo $_SESSION['admin']['name'] ?>
                                </h6>

                                <div class="dropdown-divider"></div>


                                <a class="dropdown-item" href="logout.php"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="info.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="info.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="./assets/images/infoplanet.png" alt="" height="22">
                    </span>
                    <span class="logo-lg p">

                        <h3 class="text-white fw-bold mt-4 border border-3 px-4 py-1 border-white rounded-pill">Online Aayurveda</h3>
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#masters" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="masters">
                                <i class="ri-apps-fill"></i> <span data-key="t-authentication">Masters</span>
                            </a>
                            <div class="collapse menu-dropdown" id="masters">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="slides.php">
                                            <span>Slides</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="blog.php">
                                            <span>Blogs</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link menu-link" href="users.php">
                                <i class="ri-apps-fill"></i> <span data-key="t-widgets">Users</span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link menu-link" href="symptoms.php">
                                <i class="ri-apps-fill"></i> <span data-key="t-widgets">Symptoms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="medicines.php">
                                <i class="ri-apps-fill"></i> <span data-key="t-widgets">Medicines</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="diseases.php">
                                <i class="ri-apps-fill"></i> <span data-key="t-widgets">Diseases</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="symptoms.php">
                                <i class="ri-apps-fill"></i> <span data-key="t-widgets">Symptoms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="blogs.php">
                                <i class="bx bxs-file-find"></i>
                                <span>Blogs</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarAuth">
                                <i class="ri-settings-3-fill"></i> <span data-key="t-authentication">Feedbacks</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAuth">
                                <ul class="nav nav-sm flex-column">




                                    <li class="nav-item">
                                        <a class="nav-link collapsed" data-bs-target="#forms-nav"
                                            href="feedback-all.php">

                                            <span>All Feddbacks</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="feedback-verified.php">

                                            <span>Verified Feedbacks</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="feedback-unverified.php">

                                            <span>Unverified Feedbacks</span>
                                        </a>
                                    </li>


                                </ul>


                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="reports.php">
                                <i class="bx bxs-report"></i> <span data-key="t-widgets">Reports</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarAuth">
                                <i class="ri-settings-3-fill"></i> <span data-key="t-authentication">Settings</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAuth">
                                <ul class="nav nav-sm flex-column">




                                    <li class="nav-item">
                                        <a class="nav-link collapsed" data-bs-target="#forms-nav"
                                            href="change-password.php">

                                            <span>Change Password</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="logout.php">

                                            <span>Logout</span>
                                        </a>
                                    </li>


                                </ul>


                            </div>
                        </li>



                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

    </div>
    <!-- Sidebar -->
    </div>



    <!-- Left Sidebar End -->
