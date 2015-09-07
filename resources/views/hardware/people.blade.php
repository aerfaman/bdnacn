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
<!--                 <div class="wrapper">
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
            <form action="{{ URL('/createpeople')}}" method="POST" class="form-horizontal" role="form">
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
                                <label class="col-lg-2 col-sm-2 control-label">Title</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="title" class="form-control" placeholder="e.g. aa:bb:cc:dd:11:22">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">Department</label>
                                <div class='col-lg-4'>
                                    <select name="department" class="form-control m-bot15">
                                        <option value="Engineering">Engineering</option>
                                        <option value="FP">FP</option>
                                        <option value="MarketResearch">MarketResearch</option>
                                        <option value="Office">Office</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Phone</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input type="text" name="phone" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <div class="iconic-input right">
                                        <input name="email" type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Create Now</button>
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
        <table class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Title</th>
            <th>Department</th>
            <th>Phone</th>
            <th>Email</th>
            <th >Remark</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($people as $p)
        <tr class="gradeX">
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->department }}</td>
            <td>{{ $p->phone }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->remark }}</td>
        </tr>

        @endforeach

        </tbody>
        </table>

        </div>
        </div>
        </section>
        </div>
        </div>
        </div> -->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    Editable Table
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <button id="editable-sample_new" class="btn btn-primary">
                            Add New <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Remark</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
<!--                 <tbody>
                <tr class="">
                    <td>Jonathan</td>
                    <td>Smith</td>
                    <td>3455</td>
                    <td class="center">Lorem ipsume</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>
                <tr class="">
                    <td>Mojela</td>
                    <td>Firebox</td>
                    <td>567</td>
                    <td class="center">new user</td>
                    <td><a class="edit" href="javascript:;">Edit</a></td>
                    <td><a class="delete" href="javascript:;">Delete</a></td>
                </tr>

                </tbody> -->
                <tbody>
            @foreach ($people as $p)
        <tr class="gradeX" id='{{$p->id}}'>
            <td>{{ $p->name }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->department }}</td>
            <td>{{ $p->phone }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->remark }}</td>
            <td><a class="edit" href="javascript:;">Edit</a></td>
            <td><a class="delete" href="javascript:;">Delete</a></td>
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
<script src="{{ URL::asset('/') }}js/editable-table.js"></script>
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>
@endsection
