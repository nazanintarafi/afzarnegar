<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Notifications | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- notifications CSS
		============================================ -->
    <link rel="stylesheet" href="css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="css/notifications/notifications.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php include_once "./php/left-menu.php";?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <!--header top erea start-->
            <?php include_once "./php/menu.php";?>
            <!--header top ereea end-->
            <!-- Mobile Menu start -->
            <?php include_once "./php/mobile-menu.php";?>
            <!-- Mobile Menu end -->
            <!--breadcome-area start-->
            <?php include_once "./php/breadcome-area.php";?>
            <!--breadcome-area end-->
        </div>
        <!-- Notification start-->
        <div class="notification-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Basic notifications</h2>
                                <p>Basic notifications Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicDefault" class="btn btn-default">Default</button>
                                <button id="basicInfo" class="btn btn-info">Info</button>
                                <button id="basicWarning" class="btn btn-warning">Warning</button>
                                <button id="basicError" class="btn btn-danger">Error</button>
                                <button id="basicSuccess" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Notifications With image</h2>
                                <p>Notifications With image Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicDefaultImage" class="btn btn-default">Default</button>
                                <button id="basicInfoImage" class="btn btn-info">Info</button>
                                <button id="basicWarningImage" class="btn btn-warning">Warning</button>
                                <button id="basicErrorImage" class="btn btn-danger">Error</button>
                                <button id="basicSuccessImage" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Notifications Disable sound</h2>
                                <p>Notifications Disable sound Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicInfoNoSound" class="btn btn-info">Info</button>
                                <button id="basicWarningNoSound" class="btn btn-warning">Warning</button>
                                <button id="basicErrorNoSound" class="btn btn-danger">Error</button>
                                <button id="basicSuccessNoSound" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Notifications Custom title</h2>
                                <p>Notifications Custom title Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicDefaultCustomTitle" class="btn btn-default">Default</button>
                                <button id="basicInfoCustomTitle" class="btn btn-info">Info</button>
                                <button id="basicWarningCustomTitle" class="btn btn-warning">Warning</button>
                                <button id="basicErrorCustomTitle" class="btn btn-danger">Error</button>
                                <button id="basicSuccessCustomTitle" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Notifications Without icon and image</h2>
                                <p>Notifications Without icon and image Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicDefaultNoIcon" class="btn btn-default">Default</button>
                                <button id="basicInfoNoIcon" class="btn btn-info">Info</button>
                                <button id="basicWarningNoIcon" class="btn btn-warning">Warning</button>
                                <button id="basicErrorNoIcon" class="btn btn-danger">Error</button>
                                <button id="basicSuccessNoIcon" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Notifications Increase delay time</h2>
                                <p>Notifications Increase delay time Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicDefaultCustomDelay" class="btn btn-default">Default</button>
                                <button id="basicInfoCustomDelay" class="btn btn-info">Info</button>
                                <button id="basicWarningCustomDelay" class="btn btn-warning">Warning</button>
                                <button id="basicErrorCustomDelay" class="btn btn-danger">Error</button>
                                <button id="basicSuccessCustomDelay" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Notifications Sticky (without delay)</h2>
                                <p>Notifications Sticky (without delay) Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicDefaultNoDelay" class="btn btn-default">Default</button>
                                <button id="basicInfoNoDelay" class="btn btn-info">Info</button>
                                <button id="basicWarningNoDelay" class="btn btn-warning">Warning</button>
                                <button id="basicErrorNoDelay" class="btn btn-danger">Error</button>
                                <button id="basicSuccessNoDelay" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Notifications Alternative position</h2>
                                <p>Notifications Alternative position Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicInfoPosition" class="btn btn-info">Info</button>
                                <button id="basicWarningPosition" class="btn btn-warning">Warning</button>
                                <button id="basicErrorPosition" class="btn btn-danger">Error</button>
                                <button id="basicSuccessPosition" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Notifications Custom Width</h2>
                                <p>Notifications Custom Width Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicInfoWidth" class="btn btn-info">Info</button>
                                <button id="basicWarningWidth" class="btn btn-warning">Warning</button>
                                <button id="basicErrorWidth" class="btn btn-danger">Error</button>
                                <button id="basicSuccessWidth" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30">
                            <div class="alert-title">
                                <h2>Notifications Change Animation</h2>
                                <p>Can be closed by clicking on it. You can use any animate.css classes</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="basicInfoAnimation" class="btn btn-info">Info</button>
                                <button id="basicWarningAnimation" class="btn btn-warning">Warning</button>
                                <button id="basicErrorAnimation" class="btn btn-danger">Error</button>
                                <button id="basicSuccessAnimation" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner res-mg-b-30">
                            <div class="alert-title">
                                <h2>Large Notifications</h2>
                                <p>Large Notifications Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="largeInfoBasic" class="btn btn-info">Info</button>
                                <button id="largeWarningBasic" class="btn btn-warning">Warning</button>
                                <button id="largeErrorBasic" class="btn btn-danger">Error</button>
                                <button id="largeSuccessBasic" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner">
                            <div class="alert-title">
                                <h2>Mini notifications</h2>
                                <p>Mini notifications Can be closed by clicking on it.</p>
                            </div>
                            <div class="notification-bt responsive-btn">
                                <button id="miniDefaultAnimation" class="btn btn-default">Default</button>
                                <button id="miniInfoAnimation" class="btn btn-info">Info</button>
                                <button id="miniWarningAnimation" class="btn btn-warning">Warning</button>
                                <button id="miniErrorAnimation" class="btn btn-danger">Error</button>
                                <button id="miniSuccessAnimation" class="btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification End-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- notification JS
		============================================ -->
    <script src="js/notifications/Lobibox.js"></script>
    <script src="js/notifications/notification-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>