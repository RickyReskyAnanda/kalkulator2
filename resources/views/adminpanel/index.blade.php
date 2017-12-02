<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Dashboard</title>

    <link href="{{asset('1nb19/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('1nb19/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('1nb19/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('1nb19/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('1nb19/css/colorheader.css')}}" rel="stylesheet">

    <link href="{{asset('1nb19/css/plugins/iCheck/custom.css')}}" rel="stylesheet">

     <!-- Data Tables -->
    <link href="{{asset('1nb19/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('1nb19/css/plugins/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
    <link href="{{asset('1nb19/css/plugins/dataTables/dataTables.tableTools.min.css')}}" rel="stylesheet">



</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('1nb19/img/profile_small.jpg')}}" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{url('adminpanel/profil')}}">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('adminpanel')}}">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="{{url('adminpanel/dashboard')}}"><i class="fa fa-th"></i> <span class="nav-label">Dashboards</span> <span></span></a>                    
                </li> 
                <li>
                    <a href="{{url('adminpanel/profil')}}"><i class="fa fa-shield"></i> <span class="nav-label">Profil</span> <span></span></a>                    
                </li>
                <li>
                    <a href="{{url('adminpanel/manajemen-user')}}"><i class="fa fa-shield"></i> <span class="nav-label">Manajemen User</span> <span></span></a>               
                </li>
                <li>
                    <a href="javascript:;"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Data Master</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{url('adminpanel/data-master/acara')}}">Acara</a></li>
                        <li><a href="{{url('adminpanel/data-master/fasilitas')}}">Fasilitas</a></li>
                        <li><a href="{{url('adminpanel/data-master/langganan')}}">Langganan</a></li>
                    </ul>
                </li>            
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">                                        
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>                                            
                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>                
                </ul>

            </nav>
        </div>
        <div class="wrapper wrapper-content">
            @yield('content')


            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('1nb19/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('1nb19/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('1nb19/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/flot/jquery.flot.symbol.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/flot/jquery.flot.time.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('1nb19/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('1nb19/js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('1nb19/js/inspinia.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('1nb19/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- Jvectormap -->
    <script src="{{asset('1nb19/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- EayPIE -->
    <script src="{{asset('1nb19/js/plugins/easypiechart/jquery.easypiechart.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('1nb19/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('1nb19/js/demo/sparkline-demo.js')}}"></script>

     <!-- Data Tables -->
    <script src="{{asset('1nb19/js/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/dataTables/dataTables.responsive.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/dataTables/dataTables.tableTools.min.js')}}"></script>
    <script src="{{asset('1nb19/js/plugins/dataTables/man-user.js')}}"></script>
    


    <!-- iCheck -->
    <script src="{{asset('1nb19/js/plugins/iCheck/icheck.min.js')}}"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>



</body>

</html>
