<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>Admin - Ceklokasi.id</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="<?=asset('2b212/global/plugins/simple-line-icons/simple-line-icons.min.css')?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=asset('2b212/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=asset('2b212/global/plugins/morris/morris.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=asset('2b212/global/plugins/fullcalendar/fullcalendar.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=asset('2b212/global/plugins/jqvmap/jqvmap/jqvmap.css')?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=asset('2b212/global/css/components.min.css')?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=asset('2b212/global/css/plugins.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?=asset('2b212/pages/css/search.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?=asset('2b212/layouts/layout2/css/layout.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=asset('2b212/layouts/layout2/css/themes/blue.min.css')?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?=asset('2b212/layouts/layout2/css/custom.min.css')?>" rel="stylesheet" type="text/css" />
         <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=asset('2b212/global/plugins/datatables/datatables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=asset('2b212/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')?>" rel="stylesheet" type="text/css" />

        <link href="<?=asset('2b212/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=asset('2b212/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- END THEME LAYOUT STYLES -->
        <script src="<?=asset('2b212/global/plugins/jquery.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
        <link rel="shortcut icon" href="<?=url('favicon.ico')?>">
    
        </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="<?=asset('logo.png')?>" alt="logo" height="22px" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
                <div class="page-actions">
                    <div class="btn-group">
                        <button type="button" class="btn btn-circle red dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-plus"></i>&nbsp;
                            <span class="hidden-sm hidden-xs">Promo Baru</span>&nbsp;
                        </button>
                    </div>
                </div>
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE 

                TOP -->
                <div class="page-top">

                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form search-form-expanded"  method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class below "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"> 7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 pending</span> notifications</h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?=asset('2b212/layouts/layout2/img/avatar3_small.jpg')?>" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_todo_2.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="<?=url('vendor/dashboard')?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            </li>
                        <li class="nav-item  ">
                            <a href="<?=url('vendor/order')?>" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Reservasi</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?=url('vendor/room')?>" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Ruangan</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?=url('vendor/package')?>" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">Paket</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=url('vendor/venue')?>" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">Venue</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=url('vendor/venue-setting')?>" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Pengaturan Akun</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    @yield('halaman')
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                <a target="_blank" href="http://keenthemes.com/">Keenthemes</a> &nbsp;|&nbsp;
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
            <div class="quick-nav-overlay"></div>
            <!-- END QUICK NAV -->
            <!--[if lt IE 9]>
<script src="2b212/global/plugins/respond.min.js"></script>
<script src="2b212/global/plugins/excanvas.min.js"></script> 
<script src="2b212/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
            <!-- BEGIN CORE PLUGINS -->
            
            <script src="<?=asset('2b212/global/plugins/js.cookie.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/jquery.blockui.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')?>" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->

            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="<?=asset('2b212/global/plugins/moment.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/morris/morris.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/morris/raphael-min.js')?>" type="text/javascript"></script>

            <script src="<?=asset('2b212/global/plugins/counterup/jquery.waypoints.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/counterup/jquery.counterup.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/fullcalendar/fullcalendar.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/flot/jquery.flot.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/flot/jquery.flot.resize.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/flot/jquery.flot.categories.min.js')?>" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="<?=asset('2b212/global/scripts/datatable.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/datatables/datatables.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')?>" type="text/javascript"></script>


            <!-- BEGIN PAGE Detail Venue SCRIPTS -->
            
            <script src="<?=asset('2b212/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/fancybox/source/jquery.fancybox.pack.js')?>" type="text/javascript"></script>
            <script src="<?=asset('2b212/global/plugins/plupload/js/plupload.full.min.js')?>" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="<?=asset('2b212/pages/scripts/table-datatables-fixedheader.min.js')?>" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <script src="<?=asset('2b212/pages/scripts/ecommerce-products-edit.min.js')?>" type="text/javascript"></script>
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="<?=asset('2b212/global/scripts/app.min.js')?>" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="<?=asset('2b212/pages/scripts/dashboard.min.js')?>" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
           
<!-- End -->
</body>
</html>