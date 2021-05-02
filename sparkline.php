<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sparkline | Kiaalap - Kiaalap Admin Template</title>
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
        <!-- Small chart Start-->
        <div class="sparkline-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="about-sparkline responsive-mg-b-30">
                            <div class="sparkline-hd">
                                <div class="main-spark-hd">
                                    <h1>Sparkline </h1>
                                </div>
                            </div>
                            <div class="sparkline-content">
                                <p>This jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript.You need to include both on your page to generate sparklines.</p>
                                <p>The plugin is compatible with most modern browsers and has been tested with <span class="table-dis-n-pro dk-res-t-d-n">Firefox 2+, Safari 3+, Opera 9, Google Chrome and Internet Explorer 6, 7, 8, 9 & 10 as well as Android.</span></p>
                                <a target="_blank" href="https://omnipotent.net/jquery.sparkline/#s-about">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="sparkline-list">
                            <div class="smart-sparkline-hd">
                                <div class="smart-main-spark-hd">
                                    <h1>Smart Sparkline javascript</h1>
                                </div>
                            </div>
                            <div class="smart-sparkline-list">
                                <table class="table table-bordered table-edu">
                                    <thead>
                                        <tr>
                                            <th>Graph</th>
                                            <th>Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span id="sparkline1"></span>
                                            </td>
                                            <td>
                                                Inline line chart
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span id="sparkline2"></span>
                                            </td>
                                            <td>
                                                Bar chart
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="sparklineedu"></span>
                                            </td>
                                            <td>
                                                Bar chart Positive
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span id="sparkline3"></span>
                                            </td>
                                            <td>
                                                Pie chart
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span id="sparkline4"></span>
                                            </td>
                                            <td>
                                                Long inline chart
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span id="sparkline5"></span>
                                            </td>
                                            <td>
                                                Tristate chart
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span id="sparkline6"></span>
                                            </td>
                                            <td>
                                                Discrete chart
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
        <!-- Small chart end-->
        <!-- custom chart start-->
        <div class="pie-bar-line-area mg-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline7-list responsive-mg-b-30">
                            <div class="sparkline7-hd">
                                <div class="main-spark7-hd">
                                    <h1>Pie Big size Example</h1>
                                </div>
                            </div>
                            <div class="sparkline7-graph">
                                <span id="sparkline7"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline8-list responsive-mg-b-30">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Bar Big size Example</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <span id="sparkline8"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline9-list">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>Bar Big size Example</h1>
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <span id="sparkline9"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- custom chart end-->
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
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
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