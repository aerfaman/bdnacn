<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Horizontal menu Page</title>
    <link href="{{ URL::asset('/') }}js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="{{ URL::asset('/') }}js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ URL::asset('/') }}js/data-tables/DT_bootstrap.css" />

  <link href="{{ URL::asset('/') }}css/style.css" rel="stylesheet">
  <link href="{{ URL::asset('/') }}css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="{{ URL::asset('/') }}js/html5shiv.js"></script>
  <script src="{{ URL::asset('/') }}js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="horizontal-menu-page">

<section>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ URL::asset('/') }}images/logo.png" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li ><a href="index.html">Dashboard</a></li>
                    <li class="active"><a href="#">Components</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">UI Kits <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">General</a></li>
                            <li><a href="#">Buttons</a></li>
                            <li><a href="#">Widget</a></li>
                            <li><a href="#">Slider</a></li>
                            <li><a href="#">Many More</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Fontawesome</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Form Components <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Form Elements</a></li>
                            <li><a href="#">Advanced Components</a></li>
                            <li><a href="#">Form Wizard</a></li>
                            <li><a href="#">Form Validation</a></li>
                            <li><a href="#">Dropzone</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img alt="" src="{{ URL::asset('/') }}images/photos/user-avatar.png"> John Doe <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <!--body wrapper start-->
<div class="wrapper">
<div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            DataTables hidden row details example
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <div id="hidden-table-info_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="hidden-table-info_length" class="dataTables_length"><label><select class="form-control" size="1" name="hidden-table-info_length" aria-controls="hidden-table-info"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="hidden-table-info_filter"><label>Search: <input type="text" class="form-control" aria-controls="hidden-table-info"></label></div></div></div><table class="display table table-bordered dataTable" id="hidden-table-info" aria-describedby="hidden-table-info_info">
        <thead>
        <tr role="row"><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 20px;"></th><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 267px;">Rendering engine</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 382px;">Browser</th><th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 348px;">Platform(s)</th><th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 227px;">Engine version</th><th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="hidden-table-info" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 158px;">CSS grade</th></tr>
        </thead>
        
        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="gradeA odd"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Firefox 1.0</td>
            <td class="hidden-phone ">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone ">1.7</td>
            <td class="center hidden-phone ">A</td>
        </tr><tr class="gradeA even"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Firefox 1.5</td>
            <td class="hidden-phone ">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone ">1.8</td>
            <td class="center hidden-phone ">A</td>
        </tr><tr class="gradeA odd"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Firefox 2.0</td>
            <td class="hidden-phone ">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone ">1.8</td>
            <td class="center hidden-phone ">A</td>
        </tr><tr class="gradeA even"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Firefox 3.0</td>
            <td class="hidden-phone ">Win 2k+ / OSX.3+</td>
            <td class="center hidden-phone ">1.9</td>
            <td class="center hidden-phone ">A</td>
        </tr><tr class="gradeA odd"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Camino 1.0</td>
            <td class="hidden-phone ">OSX.2+</td>
            <td class="center hidden-phone ">1.8</td>
            <td class="center hidden-phone ">A</td>
        </tr><tr class="gradeA even"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Camino 1.5</td>
            <td class="hidden-phone ">OSX.3+</td>
            <td class="center hidden-phone ">1.8</td>
            <td class="center hidden-phone ">A</td>
        </tr><tr class="gradeA odd"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Netscape 7.2</td>
            <td class="hidden-phone ">Win 95+ / Mac OS 8.6-9.2</td>
            <td class="center hidden-phone ">1.7</td>
            <td class="center hidden-phone ">A</td>
        </tr><tr class="gradeA even"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Netscape Browser 8</td>
            <td class="hidden-phone ">Win 98SE+</td>
            <td class="center hidden-phone ">1.7</td>
            <td class="center hidden-phone ">A</td>
        </tr><tr class="gradeA odd"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Netscape Navigator 9</td>
            <td class="hidden-phone ">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone ">1.8</td>
            <td class="center hidden-phone ">A</td>
        </tr><tr class="gradeA even"><td class="center "><img src="images/details_open.png"></td>
            <td class=" sorting_1">Gecko</td>
            <td class=" ">Mozilla 1.0</td>
            <td class="hidden-phone ">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone ">1</td>
            <td class="center hidden-phone ">A</td>
        </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="hidden-table-info_info">Showing 1 to 10 of 57 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>

        </div>
        </div>
        </section>
        </div>
        </div>
        </div>
    <!--body wrapper end-->

    <!--footer section start-->
    <footer class="sticky-footer">
        Footer contents goes here
    </footer>
    <!--footer section end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ URL::asset('/') }}js/jquery-1.10.2.min.js"></script>
<script src="{{ URL::asset('/') }}js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="{{ URL::asset('/') }}js/jquery-migrate-1.2.1.min.js"></script>
<script src="{{ URL::asset('/') }}js/bootstrap.min.js"></script>
<script src="{{ URL::asset('/') }}js/modernizr.min.js"></script>
<script src="{{ URL::asset('/') }}js/jquery.nicescroll.js"></script>

<!--common scripts for all pages-->
<script src="{{ URL::asset('/') }}js/scripts.js"></script>
<script type="text/javascript" language="javascript" src="{{ URL::asset('/') }}js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{{ URL::asset('/') }}js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="{{ URL::asset('/') }}js/dynamic_table_init.js"></script>

<!--common scripts for all pages-->

</body>
</html>
