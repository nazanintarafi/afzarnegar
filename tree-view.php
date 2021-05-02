<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tree View | Kiaalap - Kiaalap Admin Template</title>
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
    <!-- tree viewer CSS
		============================================ -->
    <link rel="stylesheet" href="css/tree-viewer/tree-viewer.css">
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
        <div class="tree-viewer-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline9-list shadow-reset responsive-mg-b-30">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>Tree Viewer Style 1</h1>
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div class="edu-content res-tree-ov">
                                    <div id="jstree1">
                                        <ul>
                                            <li class="jstree-open">Admin Template
                                                <ul>
                                                    <li>css
                                                        <ul>
                                                            <li data-jstree='"type":"css"}'>bootstrap.min.css</li>
                                                            <li data-jstree='"type":"css"}'>font-awesome.min.css</li>
                                                            <li data-jstree='"type":"css"}'>responsive.css</li>
                                                            <li data-jstree='"type":"css"}'>tree-viewer.css</li>
                                                        </ul>
                                                    </li>
                                                    <li>sounds
                                                        <ul>
                                                            <li data-jstree='"type":"ogg"}'>sound1.ogg</li>
                                                            <li data-jstree='"type":"ogg"}'>sound2.ogg</li>
                                                            <li data-jstree='"type":"ogg"}'>sound3.ogg</li>
                                                            <li data-jstree='"type":"ogg"}'>sound4.ogg</li>
                                                            <li data-jstree='"type":"ogg"}'>sound5.ogg</li>
                                                            <li data-jstree='"type":"ogg"}'>sound6.ogg</li>
                                                        </ul>
                                                    </li>
                                                    <li>fonts
                                                        <ul>
                                                            <li data-jstree='"type":"ttf"}'>edu-icon.ttf</li>
                                                            <li data-jstree='"type":"woff"}'>edu-icon.woff</li>
                                                            <li data-jstree='"type":"otf"}'>FontAwesome.otf</li>
                                                            <li data-jstree='"type":"ttf"}'>fontawesome-webfont.ttf</li>
                                                            <li data-jstree='"type":"woff"}'>fontawesome-webfont.woff</li>
                                                            <li data-jstree='"type":"woff"}'>glyphicons-halflings-regular.woff</li>
                                                        </ul>
                                                    </li>
                                                    <li class="jstree-open">img
                                                        <ul>
                                                            <li data-jstree='"type":"png"}'>logo.png</li>
                                                            <li data-jstree='"type":"ico"}'>favicon.ico</li>
                                                            <li class="text-navy" data-jstree='"type":"img"}'>notification.png</li>
                                                            <li class="text-navy" data-jstree='"type":"img"}'>message.png</li>
                                                        </ul>
                                                    </li>
                                                    <li class="jstree-open">js
                                                        <ul>
                                                            <li data-jstree='"type":"js"}'>bootstrap.min.js</li>
                                                            <li data-jstree='"type":"js"}'>jquery-ui.min.js</li>
                                                            <li data-jstree='"type":"js"}'>jquery.meanmenu.js</li>
                                                            <li data-jstree='"type":"js"}'>jquery-1.11.3.min.js</li>
                                                            <li data-jstree='"type":"js"}'>modernizr-2.8.3.min.js</li>
                                                            <li class="text-navy" data-jstree='"type":"js"}'>jquery.mCustomScrollbar.concat.min.js</li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='"type":"html"}'> dashboard.html</li>
                                                    <li data-jstree='"type":"html"}'> dashboard-2.html</li>
                                                    <li data-jstree='"type":"html"}'> analytics.html</li>
                                                    <li data-jstree='"type":"html"}'> widgets.html</li>
                                                    <li data-jstree='"type":"html"}'> tree-view.html</li>
                                                    <li data-jstree='"type":"html"}'> tinymc.html</li>
                                                    <li class="text-navy" data-jstree='"type":"html"}'> sparkline.html</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline10-list sparkel-pro-mg-t-30 shadow-reset">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Tree Viewer Style 2</h1>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div class="edu-content">
                                    <div id="using_json"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- Tree Viewer JS
		============================================ -->
    <script src="js/tree-line/jstree.min.js"></script>
    <script src="js/tree-line/jstree.active.js"></script>
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