<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Control Panel</title>

    <link href="{{ URL::asset('/') }}css/style.css" rel="stylesheet">
    <link href="{{ URL::asset('/') }}css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">
<meta name="_token" content="{{ csrf_token() }}"/>
<div class="container">

    <form class="form-signin" >
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">BDNACN IT system</h1>
        </div>
        <div class="login-wrap">
            <input id="Search-input" type="text" class="form-control" placeholder="Search mac or IP" autofocus>
            <button id="search-submit" class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>


        </div>

        <!-- Modal -->
        <!-- modal -->

    </form>


<div class="info-box">
        <div class="login-wrap">
<h3>00:50:56:1d:03:aa</h3>
                            <dl class='info-box-dl'>
                                <dt>IP</dt>
                                <dd>192.168.11.53</dd>
                                <dt>Device</dt>
                                <dd>ASUNCION</dd>
                                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                <dt>Malesuada porta</dt>
                                <dd>Ipsum Etiam porta sem malesuada magna mollis euismod.</dd>
                            </dl>


        </div>

</div>
<div class="tools-box">
        <div class="login-wrap">
            <button class="btn btn-primary" onClick="location='/device'" ><i class="fa fa-cloud"></i> Device</button>
            <button class="btn btn-primary" onClick="location='/assets'"><i class="fa fa-cloud"></i> Assets</button>
            <button class="btn btn-primary" onClick="location='/people'"><i class="fa fa-cloud"></i> People</button>
            <button class="btn btn-primary" onClick="location='/service'"><i class="fa fa-cloud"></i> Service</button>
        </div>
            


</div>
</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ URL::asset('/') }}js/jquery-1.10.2.min.js"></script>
<script src="{{ URL::asset('/') }}js/bootstrap.min.js"></script>
<script src="{{ URL::asset('/') }}js/modernizr.min.js"></script>
<script src='{{URL::asset('/') }}js/home.js'></script>
</body>
</html>

