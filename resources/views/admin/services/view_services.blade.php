@extends('layouts.adminLayout.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Services</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">View Services</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-dismissible">
                        <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                    @endif
                    @if(Session::has('flash_message_error'))
                        <div class="alert alert-error alert-dismissible">
                            <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                            <strong>{!! session('flash_message_error') !!}</strong>
                        </div>
                    @endif
                    <div class="box box-danger">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="allusers-table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th>S.No</th>
                                    <th>Services Image</th>
                                    <th>Services Name</th>
                                    <th>Parent Service</th>
                                    <th>Url</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0 ?>
                                    @foreach($services as $service)
                                    <?php $i++ ?>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
                                        @if(!empty($service->service_image))
                                            <img src="{{ asset('/images/backend_images/service_images/large/'.$service->service_image) }}" class="thumb" style="width: 60px;">
                                        @endif
                                        </td>
                                        <td>{{ $service->service_name }}</td>
                                        <td>{{ $service->parent_id }}</td>
                                        <td><a href="{{url('/')}}/{{ $service->url }}" target="_blank">{{url('/')}}/{{ $service->url }}</a></td>
                                        <td>
                                        @if($service->status==1)
                                            <button class="btn btn-success btn-mini">Enable</button>
                                        @else
                                            <button class="btn btn-danger btn-mini">Disable</button>
                                        @endif
                                        </td>
                                        <td>
                                            <div id="donate">
                                                <button class="btn btn-warning btn-sm">Edit</button>
                                                @if($service->status==0)
                                                    <a href="/admin/senable/{{ $service->id }}" class="btn btn-success btn-sm">Enable</a>
                                                @else
                                                <a href="/admin/sdisable/{{ $service->id }}" class="btn btn-danger btn-sm">Disable</a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Services Image</th>
                                        <th>Services Name</th>
                                        <th>Parent Service</th>
                                        <th>Url</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection