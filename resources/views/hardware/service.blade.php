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
            Create a new service
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

            <form id="create_service" action="{{ URL('/createservice')}}" method="POST" class="form-horizontal" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="name" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Type</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="type" class="form-control" placeholder="web/ssh/vSphere">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Address</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="address" class="form-control" placeholder="192.168.1.1:22">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Username</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="username" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="password" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Belong to IP</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="ip" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Remark</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="remark" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
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
                                <label class="col-sm-2 control-label col-lg-2">Status</label>
                                <div class='col-lg-2'>
                                    <select class="form-control m-bot15">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <label class="col-sm-2 control-label col-lg-2">Owner</label>
                                <div class='col-lg-4'>
                                    <select name="owner" class="form-control m-bot15">
                                        
                                    </select>
                                </div>
                            </div> -->
                            
                            

                        </form>
                        <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" id='form-submit'>Create Now</button>
                                    </div>
                                </div>
        </div></div></div>
<div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Service
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
            <th>ConnectType</th>
            <th>ConnectAddress</th>
            <th>Username</th>
            <th>Password</th>
            <th>Remark</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($service as $ser)
        <tr class="gradeX">
            <td>{{ $ser->id }}</td>
            <td>{{ $ser->name }}</td>
            <td>{{ $ser->type }}</td>
            <td>{{ $ser->controladdress }}</td>
            <td>{{ $ser->loginusername }}</td>
            <td>{{ $ser->loginpassword }}</td>
            <td>{{ $ser->remark }}</td>
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
<script src="{{ URL::asset('/') }}js/dynamic_table_service.js"></script>
@endsection
