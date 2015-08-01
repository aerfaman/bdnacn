@extends('app')
@section('content')
<meta name="_token" content="{{ csrf_token() }}"/>
<!-- <div class="page-heading">
            <h3>
                Dynamic Table
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Data Tables</a>
                </li>
                <li class="active"> Dynamic Table </li>
            </ul>
        </div> -->
        <!-- header section start-->

        <!-- header section end-->
                <div class="wrapper">
<div class='row'><div class="col-sm-12"><section class="panel">
        <header class="panel-heading">
            Create a new device
            <span class="tools pull-right">
                <div class="btn-group">
                    <button onclick="location.href='/deletedeviceall/{{ $devices->id }}'" class="btn btn-danger" type="button">完全删除这个设备</button>
                    <button onclick="location.href='/deletedevice/{{ $devices->id }}'" class="btn btn-warning " type="button">删除设备保留硬件</button>
                                
             </span>
        </header>
            <div class="panel-body" style="display: block;">
            @if (count($errors)>0)
            <div class="alert alert-block alert-danger fade in">
                                <button type="button" class="close close-sm" data-dismiss="alert">
                                    <i class="fa fa-times"></i>
                                </button>
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
            @endif

            <form action="/editdevice/{{ $devices->id }}" method="POST" class="form-horizontal" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label"><B>Name/Computer name/System name</B></label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="name" class="form-control" value='{{ $devices->name }}'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label"><b>MAC address</b></label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="mac" class="form-control" value='{{ $devices->mac }}'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">IP address</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="ip" class="form-control" value='{{ $devices->ip }}'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Operating system</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="system" class="form-control" value='{{ $devices->system }}'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">Type</label>
                                <div class='col-lg-4'>
                                    <select name="type" class="form-control m-bot15">
                                        <option value="{{ $devices->type }}">{{ $devices->type }}</option>
                                        <option value="Desktop">Desktop</option>
                                        <option value="Notebook">Notebook</option>
                                        <option value="Database">Database</option>
                                        <option value="VM host">VM host</option>
                                        <option value="Route">Route</option>
                                        <option value="Switch">Switch</option>
                                    </select>
                                </div>
                                <!-- <label class="col-sm-2 control-label col-lg-2">Status</label>
                                <div class='col-lg-2'>
                                    <select class="form-control m-bot15">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div> -->
                                <label class="col-sm-2 control-label col-lg-2">Owner</label>
                                <div class='col-lg-4'>
                                    <select name="owner" class="form-control m-bot15">
                                        <option value="{{ $devices->owner['id'] }}">{{ $devices->owner['name'] }}</option>
                                        @foreach ( $people as $p )

                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">CPU</label>
                                <div class="col-lg-10">
                                    <div class="input-group m-bot15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Idle assets  <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        @foreach ( $cpu as $c )
                                        <li><a class='idle_asset'>{{ $c->id }}##{{ $c->name}}</a></li>
                                        @endforeach
                                        <!-- <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                         <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li> -->
                                    </ul>
                                </div>
                                <input type="text" name='cpu' class="form-control" >
                            </div>
                                <div>

                                    @foreach ( $asset['cpu'] as $c)
                                    {{ $c->name }}  <a href="/deleteasset/{{ $c->id }}">Delete</a><br>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Memory</label>
                                <div class="col-lg-10">
                                <div class="input-group m-bot15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Idle assets  <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        @foreach ( $memory as $c )
                                        <li><a class='idle_asset'>{{ $c->id }}##{{ $c->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <input type="text" name='memory' class="form-control" placeholder="e.g. adata111;adata222">
                            </div>
                            <div>

                                    @foreach ( $asset['memory'] as $c)
                                    {{ $c->name }}  <a href="/deleteasset/{{ $c->id }}">Delete</a><br>
                                    @endforeach
                                </div>
                        </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Mainboard</label>
                                <div class="col-lg-10">
                                    <div class="input-group m-bot15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Idle assets  <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        @foreach ( $mainboard as $c )
                                        <li><a class='idle_asset'>{{ $c->id }}##{{ $c->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <input type="text" name='mainboard' class="form-control" placeholder="e.g. adata111;adata222">
                            </div>
                            <div>

                                    @foreach ( $asset['mainboard'] as $c)
                                    {{ $c->name }}  <a href="/deleteasset/{{ $c->id }}">Delete</a><br>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Harddisk</label>
                                <div class="col-lg-10">
                                    <div class="input-group m-bot15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Idle assets <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        @foreach ( $harddisk as $c )
                                        <li><a class='idle_asset'>{{ $c->id }}##{{ $c->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <input id="aa" type="text" name='harddisk' class="form-control" placeholder="e.g. adata111;adata222">
                            </div>
                            <div>

                                    @foreach ( $asset['harddisk'] as $c)
                                    {{ $c->name }}  <a href="/deleteasset/{{ $c->id }}">Delete</a><br>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-info" id='form-submit'>确定修改</button>
                                    </div>
                                </div>

                        </form>
        </div></div></div>
        </div>
@endsection

@section('js')
<!-- <script src="{{ URL::asset('/') }}js/dynamic_table_device.js"></script> -->
@endsection
