
<?php $__env->startSection('content'); ?>

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
        <h1>Edit Property</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Edit Property</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="box box-purple">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form enctype="multipart/form-data" method="post" action="<?php echo e(url('/admin/edit-property/'.$properties->id)); ?>" name="edit_property" id="edit_property" novalidate="novalidate">
                        <?php echo e(csrf_field()); ?>

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
                                                    <?php echo $propertyfor_dropdown; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Name">Property Name</label>
                                                <input type="text" name="property_name" id="property_name" class="form-control" value="<?php echo e($properties->property_name); ?>">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Url">Url</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">Url</span>
                                                    <input type="text" name="slug" id="slug" class="form-control" value="<?php echo e($properties->property_url); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Type">Property Type</label>
                                                <select name="property_type" id="PropertyType" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <?php echo $propertytype_dropdown; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4 hidden">
                                            <div class="form-group">
                                            <label name="Property Code">Property Code</label>
                                                <div class="input-group"> 
                                                    <input name="property_code" id="property_code" type="text" value="<?php echo e($properties->property_code); ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label name="Expected Total Price">Expected Total Price</label>
                                                <input name="property_price" id="property_price" type="text" class="form-control" value="<?php echo e($properties->property_price); ?>">
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
                                                    <?php echo $builder_dropdown; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label name="Builder">Agent</label>
                                                <select name="agent" id="agent" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <?php echo $agent_dropdown; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div id="AddBuilderData" class="builder_info col-sm-12 col-md-12 hidden">
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
                                                <?php $__currentLoopData = $phonecode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($code->phonecode); ?>"><?php echo e($code->iso3); ?> &nbsp;<?php echo e($code->phonecode); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-md-4">
                                            <div class="form-group">
                                            <label>Phone</label>
                                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div> -->

                                    <div id="PropertyInfo" class="property_info col-sm-12 col-md-12 hidden">
                                        <div class="property_heading col-xs-12 col-md-12">
                                            <h4><strong>Property Information</strong></h4>
                                        </div>
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label for="Description">Description</label>
                                                <textarea name="description" id="description" class="form-control my-editor"><?php echo e($properties->description); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="feature" id="feature" class="flat-green" <?php if($properties->featured=='1'): ?> checked <?php endif; ?> value="1"> Featured  <small class="text-purple pl-1">( If you check this set Featured Property )</small>
                                                </label>
                                            </div>
                                        </div>

                                        <div id="MapPassed" class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Map Passed">Map Passed</label>
                                                <select name="map_passed" id="map_passed" class="form-control">
                                                    <option <?php if($properties->map_pass == ''): ?> selected <?php endif; ?> value="">Select</option>
                                                    <option <?php if($properties->map_pass == '1'): ?> selected <?php endif; ?>  value="1">Yes</option>
                                                    <option <?php if($properties->map_pass == '0'): ?> selected <?php endif; ?> value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="OpenSides" class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Open Sides">No. of Open Sides</label>
                                                <select name="open_sides" id="open_sides" class="form-control">
                                                    <option value="" <?php if($properties->open_sides == ''): ?> selected <?php endif; ?>>Select Open Sides</option>
                                                    <option <?php if($properties->open_sides == '1'): ?> selected <?php endif; ?> value="1">1</option>
                                                    <option <?php if($properties->open_sides == '2'): ?> selected <?php endif; ?> value="2">2</option>
                                                    <option <?php if($properties->open_sides == '3'): ?> selected <?php endif; ?> value="3">3</option>
                                                    <option <?php if($properties->open_sides == '4'): ?> selected <?php endif; ?> value="4">4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label name="Property Area">Property Area (in sq. ft)</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">sq/ft</span>
                                                    <input name="property_area" id="property_area" value="<?php echo e($properties->parea); ?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div id="WidthRoadFacing" class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Width of Road Facing">Width of Road Facing the Plot</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">in Meters</span>
                                                    <input name="width_road_facing" id="width_road_facing" type="text" value="<?php echo e($properties->widthroad); ?>" class="form-control">
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
                                                    <option value="" <?php if($properties->furnish_type == ''): ?> selected <?php endif; ?>>Select Furnish Type</option>
                                                    <option value="F" <?php if($properties->furnish_type == 'F'): ?> selected <?php endif; ?>>Fully Furnished</option>
                                                    <option value="S" <?php if($properties->furnish_type == 'S'): ?> selected <?php endif; ?>>Semi Furnished</option>
                                                    <option value="U" <?php if($properties->furnish_type == 'U'): ?> selected <?php endif; ?>>Unfurnished</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label for="Transection Type">Transaction Type</label>
                                                <select name="transection_type" id="transection_type" class="form-control">
                                                    <option value="" <?php if($properties->transaction_type == ''): ?> selected <?php endif; ?>>Select Transaction Type</option>
                                                    <option value="New Booking" <?php if($properties->transaction_type == 'New Booking'): ?> selected <?php endif; ?>>New Booking</option>
                                                    <option value="Resale" <?php if($properties->transaction_type == 'Resale'): ?> selected <?php endif; ?>>Resale</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                                <label>Construction Status</label>
                                                <select name="construction_status" id="construction_status" class="form-control">
                                                    <option value="" <?php if($properties->construction_status == ''): ?> selected <?php endif; ?>>Select Construction Status</option>
                                                    <option value="UC" <?php if($properties->construction_status == 'UC'): ?> selected <?php endif; ?>>Under Construction</option>
                                                    <option value="RM" <?php if($properties->construction_status == 'RM'): ?> selected <?php endif; ?>>Ready to Move</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="FloorNo" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Floor no.">Floor no.</label>
                                                <select name="floor_no" id="floor_no" class="form-control">
                                                    <option value="" selected>Select Floor no.</option>
                                                    <?php for($i=1; $i<165; $i++) { ?>
                                                        <option <?php if($properties->floorno == $i): ?> selected <?php endif; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                                                        <option <?php if($properties->total_floors == $i): ?> selected <?php endif; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                                                        <option <?php if($properties->apple_trees == $i): ?> selected <?php endif; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                                                        <option <?php if($properties->bedrooms == $i): ?> selected <?php endif; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                                                        <option <?php if($properties->bathrooms == $i): ?> selected <?php endif; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                                                        <option <?php if($properties->balconies == $i): ?> selected <?php endif; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="PWashroom" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Personal Washroom">Personal Washroom</label>
                                                <select name="p_washroom" id="p_washroom" class="form-control">
                                                    <option <?php if($properties->p_washrooms == ''): ?> selected <?php endif; ?> value="" selected>Select</option>
                                                    <option <?php if($properties->p_washrooms == '1'): ?> selected <?php endif; ?> value="1">Yes</option>
                                                    <option <?php if($properties->p_washrooms == '0'): ?> selected <?php endif; ?> value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="Cafeteria" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Cafeteria">Pantry/Cafeteria</label>
                                                <select name="cafeteria" id="cafeteria" class="form-control">
                                                    <option <?php if($properties->cafeteria == ''): ?> selected <?php endif; ?> value="" selected>Select</option>
                                                    <option <?php if($properties->cafeteria == '1'): ?> selected <?php endif; ?> value="1">Yes</option>
                                                    <option <?php if($properties->cafeteria == '0'): ?> selected <?php endif; ?> value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="IsRoadFacing" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Main Road Facing">Is Main Road Facing</label>
                                                <select name="roadfacing" id="roadfacing" class="form-control">
                                                    <option <?php if($properties->road_facing == ''): ?> selected <?php endif; ?> value="" selected>Select</option>
                                                    <option <?php if($properties->road_facing == '1'): ?> selected <?php endif; ?> value="1">Yes</option>
                                                    <option <?php if($properties->road_facing == '0'): ?> selected <?php endif; ?> value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="CornerShop" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Corner Shop">Corner Shop</label>
                                                <select name="corner_shop" id="corner_shop" class="form-control">
                                                    <option <?php if($properties->c_shop == ''): ?> selected <?php endif; ?> value="" selected>Select</option>
                                                    <option <?php if($properties->c_shop == '1'): ?> selected <?php endif; ?> value="1">Yes</option>
                                                    <option <?php if($properties->c_shop == '0'): ?> selected <?php endif; ?> value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="BoundryWall" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Boundry Wall Madep">Boundry Wall Made</label>
                                                <select name="boundrywall" id="boundrywall" class="form-control">
                                                    <option <?php if($properties->wall_made == ''): ?> selected <?php endif; ?> value="" selected>Select</option>
                                                    <option <?php if($properties->wall_made == '1'): ?> selected <?php endif; ?> value="1">Yes</option>
                                                    <option <?php if($properties->wall_made == '0'): ?> selected <?php endif; ?> value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="PShowroom" class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Personal Showroom">Personal Showroom</label>
                                                <select name="pshowroom" id="pshowroom" class="form-control">
                                                    <option <?php if($properties->p_showroom == ''): ?> selected <?php endif; ?> value="" selected>Select</option>
                                                    <option <?php if($properties->p_showroom == '1'): ?> selected <?php endif; ?> value="1">Yes</option>
                                                    <option <?php if($properties->p_showroom == '0'): ?> selected <?php endif; ?> value="0">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="Property Age">Property Age</label>
                                                <select name="property_age" id="property_age" class="form-control">
                                                    <option value="" selected>Select</option>
                                                    <?php for($i=1; $i<100; $i++) { ?>
                                                        <option <?php if($properties->property_age == $i): ?> selected <?php endif; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                                                <textarea name="property_address1" id="property_address1" class="form-control" rows="3" placeholder="Address Line 1"><?php echo e($properties->address1); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Address">Property Address 2</label>
                                                <textarea name="property_address2" id="property_address2" class="form-control" rows="3" placeholder="Address Line 2"><?php echo e($properties->address2); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="Locality">Locality</label>
                                                <input type="text" name="locality" id="locality" value="<?php echo e($properties->locality); ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="Country">Country</label>
                                                <select name="country" id="country" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <?php if(!empty($country_dropdown)): ?>
                                                        <?php echo $country_dropdown; ?>
                                                    <?php else: ?>
                                                    <option value="" selected>Select Country</option>
                                                        <?php $__currentLoopData = $countryname; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($key); ?>"><?php echo e($country); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="State">State</label>
                                                <select class="form-control select2 select2-hidden-accessible" name="state" id="state" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <?php echo $state_dropdown; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="City">City</label>
                                                <select class="form-control select2 select2-hidden-accessible" name="city" id="city" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                    <?php echo $city_dropdown; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="Zipcode/Postal Code">Zipcode/Postal Code</label>
                                                <input name="zipcode" id="zipcode" type="text" value="<?php echo e($properties->zipcode); ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Rows -->
                                <div class="property_images col-sm-12 col-md-12">
                                    <div class="property_heading">
                                        <h4><strong>Property Images</strong></h4>
                                    </div>
                                    <div class="form-group">
                                        <?php $__currentLoopData = $propertyImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propImages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="hidden" name="current_image[]" multiple id="image" value="<?php echo e($propImages->image_name); ?>">
                                        <img width="150" style="padding: 0.5em 0.5em 0.5em 0;" src="<?php echo e(asset('/images/backend_images/property_images/large/'.$propImages->image_name)); ?>" alt="<?php echo e($propImages->property_name); ?>">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <input type="submit" class="btn btn-success btn-md pull-right" value="Update Property">
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
                                                    <input type="checkbox" name="gym" id="gym" class="flat-green" <?php if(!empty($properties->gym)): ?> <?php if($properties->gym =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Gym
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="club_house" id="club_house" class="flat-green" <?php if(!empty($properties->club_house)): ?> <?php if($properties->club_house =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Club House
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="play_area" id="play_area" class="flat-green" <?php if(!empty($properties->play_area)): ?> <?php if($properties->play_area =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Play Area
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="water_supply" id="water_supply" class="flat-green" <?php if(!empty($properties->water_supply)): ?> <?php if($properties->water_supply =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Water Supply
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="geyser" id="geyser" class="flat-green" <?php if(!empty($properties->geyser)): ?> <?php if($properties->geyser =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Hot water / Geyser
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="visitor_arking" id="visitor_arking" class="flat-green" <?php if(!empty($properties->visitor_arking)): ?> <?php if($properties->visitor_arking =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Visitor's Parking
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="garden" id="garden" class="flat-green" <?php if(!empty($properties->garden)): ?> <?php if($properties->garden =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Garden/ Greenery
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="waste_disposal" id="waste_disposal" class="flat-green" <?php if(!empty($properties->waste_disposal)): ?> <?php if($properties->waste_disposal =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Waste Disposal
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="power_backup" id="power_backup" class="flat-green" <?php if(!empty($properties->power_backup)): ?> <?php if($properties->power_backup =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Power Backup
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="swimming_pool" id="swimming_pool" class="flat-green" <?php if(!empty($properties->swimming_pool)): ?> <?php if($properties->swimming_pool =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Swimming Pool
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="water_storage" id="water_storage" class="custom-control-input" <?php if(!empty($properties->water_storage)): ?> <?php if($properties->water_storage =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Water Storage
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="security_personnel" id="security_personnel" class="custom-control-input" <?php if(!empty($properties->security_personnel)): ?> <?php if($properties->security_personnel =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Security Personnel
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="gated_community" id="gated_community" class="custom-control-input" <?php if(!empty($properties->gated_community)): ?> <?php if($properties->gated_community =='1'): ?> checked <?php endif; ?> <?php endif; ?> value="1"> Gated Community
                                                </label>
                                            </div>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gqufoc2n7p3n/public_html/property.devirvine.com/resources/views/admin/property/edit_property.blade.php ENDPATH**/ ?>