@extends('layouts.adminLayout.admin_design')
@section('content')

<?php
 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
?>

<style>
#filediv{display:inline-block !important;}
#file{color:green;padding:5px;border:1px dashed #123456;background-color:#f9ffe5}
#noerror{color:green;text-align:left}
#error{color:red;text-align:left}
#img{width:17px;border:none;height:17px;margin-left:10px;cursor: pointer;}
.abcd img{height:100px;width:100px;padding:5px;border-radius: 10px;border:1px solid #e8debd}
#close{vertical-align: top;background-color: red;color: white;border-radius: 5px;padding: 4px;margin-left: -13px;margin-top: 1px;}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add New Page</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Add Page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-12">
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
                <div class="box box-purple">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form enctype="multipart/form-data" method="post" action="{{ url('/admin/add-new-property') }}" name="add_property" id="add_property" novalidate="novalidate">
                        {{ csrf_field() }}
                            <div class="col-sm-12 col-md-9">
                                <div class="row">
                                    <div class="property_basic col-sm-12 col-md-12">
                                        
                                       
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Name">Page Title</label>
                                                <input type="text" name="property_name" id="property_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Url">Url</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">Url</span>
                                                    <input type="text" name="slug" id="slug" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                    
                                    </div>

                                      
                                    </div>

                                    <div class="property_address col-sm-12 col-md-12">
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                            <div class="form-group">
                                                <label for="Property Address">Add content</label>
                                                <textarea name="property_address1" id="property_address1" class="form-control" rows="25"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- Rows -->
                                <div class="property_images col-sm-12 col-md-12">
                                    <div class="property_heading">
                                        <h4><strong>banner Images</strong></h4>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="Property Images">Add Images</label> -->
                                        <!-- <input type="file" id="property_images" name="property_images"> -->
                                        <div class="add_image">
                                            <input type="button" id="add_more" class="btn btn-info" value="add image"/>
                                            <!-- <i class="fas fa-camera"></i> -->
                                            </div>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                    </div>
                                </div>
                            </div>
                    
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

@endsection
