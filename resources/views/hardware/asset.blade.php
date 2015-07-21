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
<div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Assets
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
            <th>Type</th>
            <th >Status</th>
            <th >Time</th>
            <th >Remark</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($assets as $asset)
        <tr class="gradeX">
            <td>{{ $asset->id }}</td>
            <td>{{ $asset->name }}</td>
            <td>{{ $asset->type }}</td>
            <td>{{ $asset->status }}</td>
            <td>{{ $asset->created_at }}</td>
            <td>{{ $asset->remark }}</td>
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
<script src="{{ URL::asset('/') }}js/dynamic_table_asset.js"></script>
@endsection
