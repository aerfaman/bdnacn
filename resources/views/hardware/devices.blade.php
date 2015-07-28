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
                <a href="javascript:;" class="fa fa-chevron-up"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        @if (count($errors)>0)
            <div class="panel-body" style="display: block;">
        @else
            <div class="panel-body" style="display: none;">
        @endif
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

            <form action="{{ URL('/createdevice')}}" method="POST" class="form-horizontal" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Name/Computer name/System name</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="name" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">MAC address</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="mac" class="form-control" placeholder="e.g. aa:bb:cc:dd:11:22">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">IP address</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="ip" class="form-control" placeholder="e.g. 192.168.1.1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Operating system</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="system" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">Type</label>
                                <div class='col-lg-4'>
                                    <select name="type" class="form-control m-bot15">
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
                                <input type="text" name='cpu' class="form-control" placeholder="e.g. adata111;adata222">
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
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Create at</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input name="createat" type="text"class="form-control" placeholder="YYYY-MM-DD">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" id='form-submit'>Create Now</button>
                                    </div>
                                </div>

                        </form>
        </div></div></div>
<div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Device
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table class="display table table-bordered" id="hidden-table-info">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>IP</th>
            <th>MAC</th>
            <th>System</th>
            <th>Type</th>
            <th >Status</th>
            <th >Time</th>
            <th >Remark</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
        <tr class="gradeX">
            <td>{{ $device->id }}</td>
            <td>{{ $device->name }}</td>
            <td>{{ $device->ip }}</td>
            <td>{{ $device->mac }}</td>
            <td>{{ $device->system }}</td>
            <td>{{ $device->type }}</td>
            <td>{{ $device->status }}</td>
            <td>{{ $device->created_at }}</td>
            <td>{{ $device->remark }}</td>
        </tr>

        @endforeach

        </tbody>
        </table>

        </div>
        </div>
        </section>
        </div>
        </div>
        </div>
@endsection

@section('js')
<script src="{{ URL::asset('/') }}js/dynamic_table_device.js"></script>
@endsection
