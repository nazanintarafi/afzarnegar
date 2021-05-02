<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>X-editable | Kiaalap - Kiaalap Admin Template</title>
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
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
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
        <!-- x-editable Start-->
        <div class="x-editable-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="x-editable-list">
                            <div class="alert-title">
                                <h2>X-editable</h2>
                                <p>There are a few classes working together for editable. Base class editableform is form with single input and two buttons. Input can be one of several input types (text, textarea, etc). Form markup is performed in plain
                                    HTML or can be extended by some library (bootstrap, jquery-ui). editableContainer includes editableform and shows it in popup or inline mode. When popup it can use any container for display (popover, tooltip, etc).
                                    Final class editable binds editableContainer to DOM element storing value and being updated after user submits new value.</p>
                            </div>
                            <table id="user" class="table table-bordered table-striped x-editor-custom">
                                <tbody>
                                    <tr>
                                        <td>Simple text field</td>
                                        <td><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Empty text field, required</td>
                                        <td>
                                            <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Select, local array, custom display</td>
                                        <td>
                                            <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Select, remote array, no buttons</td>
                                        <td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Select, error while loading</td>
                                        <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Datepicker</td>
                                        <td>
                                            <a href="#" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-title="When you want vacation to start?">25.02.2013</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Combodate (date)</td>
                                        <td>
                                            <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Combodate (datetime)</td>
                                        <td>
                                            <a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bootstrap Datetimepicker</td>
                                        <td><a href="#" id="meeting_start" data-type="datetime" data-pk="1" data-url="/post" data-placement="right" title="Set date & time">15/03/2013 12:45</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Textarea, buttons below. Submit by <i>ctrl+enter</i>
                                        </td>
                                        <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Checklist</td>
                                        <td>
                                            <a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Select2 (tags mode)</td>
                                        <td><a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags">html, javascript</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Select2 (dropdown mode)</td>
                                        <td>
                                            <a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
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