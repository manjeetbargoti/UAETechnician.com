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
        <h1>Add New Property</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Add Property</li>
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
                                        <div class="property_heading col-xs-12 col-md-12">
                                            <h4><strong>Property Basic Details</strong></h4>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Property For">Property For</label>
                                                <select name="property_for" id="property_for" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected>Properties</option>
                                                    @foreach($servicetype as $services)
                                                        <option value="{{ $services->id }}">{{ $services->service_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Name">Property Name</label>
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
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Type">Property Type</label>
                                                <select name="property_type" id="PropertyType" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected>Select Property Type</option>
                                                    @foreach($propertytype as $ptype)
                                                        <option value="{{ $ptype->property_type_code }}">{{ $ptype->property_type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4 hidden">
                                            <div class="form-group">
                                            <label name="Property Code">Property Code</label>
                                                <div class="input-group"> 
                                                    <input name="property_code" id="property_code" type="text" value="IPC<?php echo rand(00001, 9999999); ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label name="Expected Total Price">Expected Total Price</label>
                                                <input name="property_price" id="property_price" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <!-- <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label name="Booking Amount">Booking Amount</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rs</span>
                                                    <input name="booking_price" id="booking_price" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label name="Builder">Builder</label>
                                                <select name="builder" id="builder_name" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected>Select Builder</option>
                                                    <option value="addBuilder"> + Add New</option>
                                                    @foreach($getBuilder as $b)
                                                        <option value="{{ $b->id }}">{{ $b->first_name }} {{ $b->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label name="Builder">Agent</label>
                                                <select name="agent" id="agent" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected>Select Agent</option>
                                                    @foreach($getAgent as $a)
                                                        <option value="{{ $a->id }}">{{ $a->first_name }} {{ $a->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="AddBuilderData" class="builder_info col-sm-12 col-md-12 hidden">
                                        <div class="builder_heading col-xs-12 col-md-12">
                                            <h4><strong>Add Builder/Agent</strong></h4>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="First Name">First Name</label>
                                                <input type="text" name="first_name" id="first_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Last Name">Last Name</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Usertype">Usertype</label>
                                                <select name="usertype" id="usertype" class="form-control">
                                                    <option selected value="">Select Usertype</option>
                                                    <option value="B">Builder</option>
                                                    <option value="A">Agent</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="text" name="email" id="email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-6 hidden">
                                            <div class="form-group">
                                                <label for="Password">Password</label>
                                                <input type="password" name="password" id="password" value="<?php echo generate_string($permitted_chars, 20); ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-xs-4 col-md-2">
                                            <div class="form-group">
                                                <label>Code</label>
                                                <select name="phonecode" id="phonecode" class="form-control">
                                                @foreach($phonecode as $code)
                                                    <option value="{{ $code->phonecode }}">{{ $code->iso3 }} &nbsp;{{ $code->phonecode }}</option>
                                                @endforeach    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-md-4">
                                            <div class="form-group">
                                            <label>Phone</label>
                                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>

                                        <!-- <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                            <label>Projects</label>
                                                <textarea name="project_name" id="project_name" class="form-control"></textarea>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div id="PropertyInfo" class="property_info col-sm-12 col-md-12 hidden">
                                        <div class="property_heading col-xs-12 col-md-12">
                                            <h4><strong>Property Information</strong></h4>
                                        </div>
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label for="Description">Description</label>
                                                <textarea name="description" id="description" class="form-control my-editor"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="feature" id="feature" class="flat-green" value="1"> Featured  <small class="text-purple pl-1">( If you check this set Featured Property )</small>
                                                </label>
                                            </div>
                                        </div>

                                        <div id="MapPassed" class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Map Passed">Map Passed</label>
                                                <select name="map_passed" id="map_passed" class="form-control">
                                                    <option value="" selected>Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="OpenSides" class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Open Sides">No. of Open Sides</label>
                                                <select name="open_sides" id="open_sides" class="form-control">
                                                    <option value="" selected>Select Open Sides</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label name="Property Area">Property Area (in sq. ft)</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">sq/ft</span>
                                                    <input name="property_area" id="property_area" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div id="WidthRoadFacing" class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Width of Road Facing">Width of Road Facing the Plot</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">in Meters</span>
                                                    <input name="width_road_facing" id="width_road_facing" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Facing">Property Facing</label>
                                                <select name="property_facing" id="property_facing" class="form-control">
                                                    <option value="" selected>Select Property Facing</option>
                                                    <option value="East">East Facing</option>
                                                    <option value="West">West Facing</option>
                                                    <option value="North">North Facing</option>
                                                    <option value="South">South Facing</option>
                                                </select>
                                            </div>
                                        </div> -->

                                        <div id="FurnishStatus" class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Furnish Type">Furnish Type</label>
                                                <select name="furnish_type" id="furnish_type" class="form-control">
                                                    <option value="" selected>Select Furnish Type</option>
                                                    <option value="F">Fully Furnished</option>
                                                    <option value="S">Semi Furnished</option>
                                                    <option value="U">Unfurnished</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Transection Type">Transaction Type</label>
                                                <select name="transection_type" id="transection_type" class="form-control">
                                                    <option value="" selected>Select Transaction Type</option>
                                                    <option value="New Booking">New Booking</option>
                                                    <option value="Resale">Resale</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label>Construction Status</label>
                                                <select name="construction_status" id="construction_status" class="form-control">
                                                    <option value="" selected>Select Construction Status</option>
                                                    <option value="UC">Under Construction</option>
                                                    <option value="RM">Ready to Move</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="FloorNo" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Floor no.">Floor no.</label>
                                                <select name="floor_no" id="floor_no" class="form-control">
                                                    <option value="" selected>Select Floor no.</option>
                                                    <?php for($i=1; $i<165; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="TotalFloor" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Total Floors">Total Floors</label>
                                                <select name="total_floors" id="total_floors" class="form-control">
                                                    <option value="" selected>Select Total Floors</option>
                                                    <?php for($i=1; $i<165; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="AppleTrees" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Apple Trees">Trees</label>
                                                <select name="trees" id="trees" class="form-control">
                                                    <option value="" selected>Select Trees</option>
                                                    <?php for($i=1; $i<1001; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    
                                        <div id="Bedrooms" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Bedrooms">Bedrooms</label>
                                                <select name="bedrooms" id="bedrooms" class="form-control">
                                                    <option value="" selected>Select Bedrooms</option>
                                                    <?php for($i=1; $i<250; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="Bathrooms" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Bathrooms">Bathrooms</label>
                                                <select name="bathrooms" id="bathrooms" class="form-control">
                                                    <option value="" selected>Select Bathrooms</option>
                                                    <?php for($i=1; $i<150; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="Balconies" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Balconies">Balconies</label>
                                                <select name="balconies" id="balconies" class="form-control">
                                                    <option value="" selected>Select Balconies</option>
                                                    <?php for($i=1; $i<165; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="PWashroom" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Personal Washroom">Personal Washroom</label>
                                                <select name="p_washroom" id="p_washroom" class="form-control">
                                                    <option value="" selected>Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="Cafeteria" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Cafeteria">Pantry/Cafeteria</label>
                                                <select name="cafeteria" id="cafeteria" class="form-control">
                                                    <option value="" selected>Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="IsRoadFacing" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Main Road Facing">Is Main Road Facing</label>
                                                <select name="roadfacing" id="roadfacing" class="form-control">
                                                    <option value="" selected>Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="CornerShop" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Corner Shop">Corner Shop</label>
                                                <select name="corner_shop" id="corner_shop" class="form-control">
                                                    <option value="" selected>Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="BoundryWall" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Boundry Wall Madep">Boundry Wall Made</label>
                                                <select name="boundrywall" id="boundrywall" class="form-control">
                                                    <option value="" selected>Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="PShowroom" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Personal Showroom">Personal Showroom</label>
                                                <select name="pshowroom" id="pshowroom" class="form-control">
                                                    <option value="" selected>Select</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Property Age">Property Age</label>
                                                <select name="property_age" id="property_age" class="form-control">
                                                    <option value="" selected>Select</option>
                                                    <?php for($i=1; $i<100; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <div class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Plot no.">Plot no.</label>
                                                <div class="input-group"> 
                                                <input name="plot_no" id="plot_no" type="text" class="form-control block-level">
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="property_address col-sm-12 col-md-12">
                                        <div class="property_heading col-xs-12 col-md-12">
                                            <h4><strong>Property Address</strong></h4>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Address">Property Address 1</label>
                                                <textarea name="property_address1" id="property_address1" class="form-control" rows="3" placeholder="Address Line 1"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Address">Property Address 2</label>
                                                <textarea name="property_address2" id="property_address2" class="form-control" rows="3" placeholder="Address Line 2"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="Locality">Locality</label>
                                                <input type="text" name="locality" id="locality" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="Country">Country</label>
                                                <select name="country" id="country" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected>Select Country</option>
                                                    @foreach($countryname as $key => $country)
                                                    <option value="{{ $key }}">{{ $country }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="State">State</label>
                                                <select class="form-control select2 select2-hidden-accessible" name="state" id="state" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <option value="" selected>Select State</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="City">City</label>
                                                <select class="form-control select2 select2-hidden-accessible" name="city" id="city" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <option value="" selected>Select City</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="Zipcode/Postal Code">Zipcode/Postal Code</label>
                                                <input name="zipcode" id="zipcode" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Rows -->
                                <div class="property_images col-sm-12 col-md-12">
                                    <div class="property_heading">
                                        <h4><strong>Property Images</strong></h4>
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
                            
                            <div class="col-sm-12 col-md-3">
                                <div class="row">
                                    <div class="property_basic col-sm-12 col-md-12">
                                        <div class="property_heading col-xs-12 col-md-12">
                                            <h4><strong>Property Amenities</strong></h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="gym" id="gym" class="flat-green" value="1"> Gym
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="club_house" id="club_house" class="flat-green" value="1"> Club House
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="play_area" id="play_area" class="flat-green" value="1"> Play Area
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="water_supply" id="water_supply" class="flat-green" value="1"> Water Supply
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="geyser" id="geyser" class="flat-green" value="1"> Hot water / Geyser
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="visitor_arking" id="visitor_arking" class="flat-green" value="1"> Visitor's Parking
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="garden" id="garden" class="flat-green" value="1"> Garden/ Greenery
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="waste_disposal" id="waste_disposal" class="flat-green" value="1"> Waste Disposal
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="power_backup" id="power_backup" class="flat-green" value="1"> Power Backup
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="swimming_pool" id="swimming_pool" class="flat-green" value="1"> Swimming Pool
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="water_storage" id="water_storage" class="custom-control-input" value="1"> Water Storage
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="security_personnel" id="security_personnel" class="custom-control-input" value="1"> Security Personnel
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="gated_community" id="gated_community" class="custom-control-input" value="1"> Gated Community
                                                </label>
                                            </div>
                                        </div>

                                        <div class="box-footer">
                                            <input type="submit" class="btn btn-success btn-md btn-block" value="Submit Property">
                                        </div>
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
