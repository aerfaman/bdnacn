<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>IT</title>

  <link href="{{ URL::asset('/') }}css/style.css" rel="stylesheet">
  <link href="{{ URL::asset('/') }}css/style-responsive.css" rel="stylesheet">
  <link href="{{ URL::asset('/') }}js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="{{ URL::asset('/') }}js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ URL::asset('/') }}js/data-tables/DT_bootstrap.css" />
  <link href="{{ URL::asset('/') }}css/style-responsive.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="{{ URL::asset('/') }}js/html5shiv.js"></script>
  <script src="{{ URL::asset('/') }}js/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
  .content_mark{ width:100%; height:100%; position:fixed; left:0; top:0; z-index:10000; background:#000; opacity:0.5;filter:alpha(opacity=50); display:none;}
  </style>
</head>

<body class="sticky-header left-side-collapsed">
<div class='content_mark'></div>
<section>


    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="{{ URL::asset('/') }}images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="{{ URL::asset('/') }}images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="{{ URL::asset('/') }}images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ URL('/device')}}"> Device Table</a></li>
                        <li><a href="{{ URL('/assets')}}"> Asset Table</a></li>
                        <li><a href="{{ URL('/people')}}"> People Table</a></li>
                    </ul>
                </li>
                <li class="menu-list nav-active"><a href=""><i class="fa fa-laptop"></i> <span>Layouts</span></a>
                    <ul class="sub-menu-list">
                        <li ><a href="blank_page.html"> Blank Page</a></li>
                        <li><a href="boxed_view.html"> Boxed Page</a></li>
                        <li class="active"><a href="leftmenu_collapsed_view.html"> Sidebar Collapsed</a></li>
                        <li><a href="horizontal_menu.html"> Horizontal Menu</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="general.html"> General</a></li>
                        <li><a href="buttons.html"> Buttons</a></li>
                        <li><a href="tabs-accordions.html"> Tabs & Accordions</a></li>
                        <li><a href="typography.html"> Typography</a></li>
                        <li><a href="slider.html"> Slider</a></li>
                        <li><a href="panels.html"> Panels</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grids.html"> Grids</a></li>
                        <li><a href="gallery.html"> Media Gallery</a></li>
                        <li><a href="calendar.html"> Calendar</a></li>
                        <li><a href="tree_view.html"> Tree View</a></li>
                        <li><a href="nestable.html"> Nestable</a></li>

                    </ul>
                </li>

                <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="mail.html"> Inbox</a></li>
                        <li><a href="mail_compose.html"> Compose Mail</a></li>
                        <li><a href="mail_view.html"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="form_layouts.html"> Form Layouts</a></li>
                        <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                        <li><a href="form_wizard.html"> Form Wizards</a></li>
                        <li><a href="form_validation.html"> Form Validation</a></li>
                        <li><a href="editors.html"> Editors</a></li>
                        <li><a href="inline_editors.html"> Inline Editors</a></li>
                        <li><a href="pickers.html"> Pickers</a></li>
                        <li><a href="dropzone.html"> Dropzone</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="flot_chart.html"> Flot Charts</a></li>
                        <li><a href="morris.html"> Morris Charts</a></li>
                        <li><a href="chartjs.html"> Chartjs</a></li>
                        <li><a href="c3chart.html"> C3 Charts</a></li>
                    </ul>
                </li>


                <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google_map.html"> Google Map</a></li>
                        <li><a href="vector_map.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="profile.html"> Profile</a></li>
                        <li><a href="invoice.html"> Invoice</a></li>
                        <li><a href="pricing_table.html"> Pricing Table</a></li>
                        <li><a href="timeline.html"> Timeline</a></li>
                        <li><a href="blog_list.html"> Blog List</a></li>
                        <li><a href="blog_details.html"> Blog Details</a></li>
                        <li><a href="directory.html"> Directory </a></li>
                        <li><a href="chat.html"> Chat </a></li>
                        <li><a href="404.html"> 404 Error</a></li>
                        <li><a href="500.html"> 500 Error</a></li>
                        <li><a href="registration.html"> Registration Page</a></li>
                        <li><a href="lock_screen.html"> Lockscreen </a></li>
                    </ul>
                </li>
                <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" >

        <!--body wrapper end-->
@yield('content')
        <!--footer section start-->
        <footer class="sticky-footer">
            Footer contents goes here
        </footer>
        <!--footer section end-->
<div id='all-cover-box' style='display:none;width:100%;height:100%;background-color:#000000;top:0px;left:0px;position:fixed;z-index:10000;background:rgba(0,0,0,0.4);TEXT-ALIGN:center;float:left;'>
<div id='all-cover-text' style="z-index:10001;MARGIN-RIGHT:auto;MARGIN-LEFT:auto;color:#ffffff;text-align:center;"><h2>assssssfsdfsdfsdfsdfaa</h2></div>
<div style='margin-top:10%;z-index:10001;MARGIN-RIGHT:auto;MARGIN-LEFT:auto;'><button id='all-cover-yes' class='btn btn-danger btn-lg' >你确定???</button>
<button id='all-cover-no' class='btn btn-warning btn-lg'>再等等!!!</button>
</div>
</div>
    </div>
    <!-- main content end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ URL::asset('/') }}js/jquery-1.10.2.min.js"></script>
<script src="{{ URL::asset('/') }}js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="{{ URL::asset('/') }}js/jquery-migrate-1.2.1.min.js"></script>
<script src="{{ URL::asset('/') }}js/bootstrap.min.js"></script>
<script src="{{ URL::asset('/') }}js/modernizr.min.js"></script>
<script src="{{ URL::asset('/') }}js/jquery.nicescroll.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="{{ URL::asset('/') }}js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{{ URL::asset('/') }}js/data-tables/DT_bootstrap.js"></script>
<script src="{{ URL::asset('/') }}js/scripts.js"></script>
<!--dynamic table initialization -->

@yield('js')
<!--common scripts for all pages-->



</body>

</html>
