<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?> - Draco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="skin/default_skin/css/theme.css">

    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="admin-tools/admin-plugins/admin-panels/adminpanels.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>


</head>

<body class="dashboard-page sb-l-o sb-r-c" <?php echo $__env->yieldContent('body-attr'); ?>>
    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-primary">
            <div class="navbar-branding bg-primary dark">
                <a class="navbar-brand" href="dashboard.html"> <b>Draco</b>Library
                </a>
                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                <ul class="nav navbar-nav pull-right hidden">
                    <li>
                        <a href="#" class="sidebar-menu-toggle">
                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden-xs">
                    <a class="request-fullscreen toggle-active" href="#">
                        <span class="octicon octicon-screen-full fs18"></span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-item-slide">
                    <a class="dropdown-toggle pl10 pr10" data-toggle="dropdown" href="#">
                        <span class="octicon octicon-radio-tower fs18"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-hover dropdown-persist pn w350 bg-white animated animated-shorter fadeIn" role="menu">
                        <li class="bg-light p8">
                            <span class="fw600 pl5 lh30"> Notifications</span>
                            <span class="label label-warning label-sm pull-right lh20 h-20 mt5 mr5">12</span>
                        </li>
                        <li class="p10 br-t item-1">
                            <div class="media">
                                <a class="media-left" href="#"> <img src="img/avatars/2.jpg" class="mw40" alt="holder-img"> </a>
                                <div class="media-body va-m">
                                    <h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by
                                    <a class="text-system" href="#"> Max </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="ph10 pv20"> <i class="fa fa-circle text-tp fs8"></i>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="<?php echo e(Auth::user()->image); ?>" alt="avatar" class="mw30 br64 mr15">
                        <span><?php echo e(Auth::user()->name); ?></span>
                        <span class="caret caret-tp"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                        <li class="br-t of-h">
                            <a href="/account" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-gear pr5"></span> Account Settings </a>
                        </li>
                        <li class="br-t of-h">
                            <a class="fw600 p12 animated animated-short fadeInDown" onclick="document.getElementById('logout-form').submit()">
                                <form id="logout-form" method="post" action="/logout" class="logoutHover">
                                    <?php echo e(csrf_field()); ?>

                                    <span class="fa fa-power-off pr5"></span> Logout
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">
                <!-- sidebar menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>
                    <li id="menu-dashboard">
                        <a href="/home">
                            <span class="fa fa-home"></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Start: Content -->
        <section id="content_wrapper">
            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <?php echo $__env->yieldContent('breadcrumb'); ?>
                        </li>
                        <li class="crumb-icon">
                            <a href="/home">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                    </ol>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- End: Content -->
        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="/vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>

    <!-- Sparklines CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Chart Plugins -->
    <script type="text/javascript" src="/vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="/vendor/plugins/circles/circles.js"></script>
    <script type="text/javascript" src="/vendor/plugins/raphael/raphael.js"></script>

    <!-- Holder js  -->
    <script type="text/javascript" src="/js/bootstrap/holder.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="/js/utility/utility.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/demo.js"></script>

    <!-- Admin Panels  -->
    <script type="text/javascript" src="/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="/js/pages/widgets.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";
            // Init Theme Core      
            Core.init({
                sbm: "sb-l-c",
            });
    
        });


            // Attach handler to navbar fullscreen button
            $('.request-fullscreen').click(function() {

                 // Fullscreen Functionality
            var screenCheck = $.fullscreen.isNativelySupported();

                // Check for fullscreen browser support
                if (screenCheck) {
                    if ($.fullscreen.isFullScreen()) {
                    $.fullscreen.exit();
                    } else {
                    $('html').fullscreen({
                        overflow: 'visible'
                    });
                    }
                } else {
                    alert('Your browser does not support fullscreen mode.')
                }
            });
    </script>

    <!-- END: PAGE SCRIPTS -->

    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
