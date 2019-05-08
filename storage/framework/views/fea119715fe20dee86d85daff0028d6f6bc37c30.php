
<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="smart_container">
    <div class="property_viewsec">
        <div class="container">
            <?php if(Session::has('flash_message_success')): ?>
                <div class="alert alert-success alert-dismissible">
                    <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                    <strong><?php echo session('flash_message_success'); ?></strong>
                </div>
            <?php endif; ?>
                <div class="header_breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/properties')); ?>">Properties</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e($property->property_name); ?></li>
                        </ol>
                    </nav>
                    <p><span><?php if(!empty($property->city_name)): ?> <?php echo e($property->city_name); ?>,<?php endif; ?> <a href="<?php echo e(url('/view-properties/country_id='.$property->country)); ?>"><?php if(!empty($property->country_name)): ?> <?php echo e($property->country_name); ?> <?php endif; ?></a> </span> | All Residential for Sale in <a href="<?php echo e(url('/view-properties/state_id='.$property->state)); ?>"><?php if(!empty($property->state_name)): ?> <?php echo e($property->state_name); ?> <?php endif; ?></a> </p>
                </div>
            <div class="row">
            
            <div class="col-12 col-xl-8">
                    <div class="outer">
                    
                            <div id="big" class="owl-carousel owl-theme">
                            <?php $__currentLoopData = $propertyImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carousal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($property->id==$carousal->property_id): ?>
                                    <div class="item"><img src="<?php echo e(asset('/images/backend_images/property_images/large/'.$carousal->image_name)); ?>"></div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div id="thumbs" class="owl-carousel owl-theme">
                            <?php $__currentLoopData = $propertyImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carousal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($property->id==$carousal->property_id): ?>
                                    <div class="item"><img src="<?php echo e(asset('/images/backend_images/property_images/large/'.$carousal->image_name)); ?>"></div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            
                            </div>
            </div>
           
            <div class="col-12 col-xl-4">
                <div class="overview_property">
                    <h1><i class="fas fa-map-marker-alt"></i> <a href="<?php echo e(url('/view-properties/city_id='.$property->city)); ?>"><?php if(!empty($property->city_name)): ?> <?php echo e($property->city_name); ?>,<?php endif; ?> <?php if(!empty($property->country_name)): ?> <?php echo e($property->country_name); ?> <?php endif; ?></a></h1>
                    <h5>Plot Area: <span><?php echo e($property->parea); ?> Square Ft</span></h5>
                    <h6><?php echo e($property->property_name); ?></h6>
                    <h5>Age of Property: <span>Under Cinstrection</span></h5>
                    <h5>Facing: <span><?php echo e($property->pfacing); ?></span></h5>
                    
                    <p><?php echo e(strip_tags(str_limit($property->description, $limit=350))); ?></p>
                    <!-- <h3><?php echo e($property->currency); ?> <?php echo e($property->property_price); ?></h3> -->
                    
                    <?php if(!empty($property->property_price)): ?>
                    <h3><span><?php echo e($property->currency); ?></span> <?php echo e($property->property_price); ?></h3>
                    <?php else: ?>
                        <p><a href="javascript:avoid();" data-toggle="modal" data-target="#agentContact" class="btn_fullinfo">Get Price</a></p>
                    <?php endif; ?>
                    
                    <div class="protxt_top">
                        <ul>
                            <li><i><img src="/images/frontend_images/images/room.svg"></i><p><span><?php echo e($property->rooms); ?></span>Rooms</p></li>
                            <li><i><img src="/images/frontend_images/images/bedroom.svg"></i><p><span><?php echo e($property->bedrooms); ?></span>Bedrooms</p></li>
                            <li><i><img src="/images/frontend_images/images/bathroom.svg"></i><p><span><?php echo e($property->bathrooms); ?></span>Bathroom</p></li>
                        </ul>
                    </div>
                    <div class="agent_sec">
                        <div class="agent_profile">
                            <i class="fa fa-user fa-2x"></i>
                            <!-- <img src="/images/frontend_images/images/user1.jpg">  -->
                        </div>
                        <div class="agent_txt">
                        <?php if(!empty($property->builder_name)): ?>
                        <h6><a href="#"><?php echo e($property->builder_name); ?></a></h6>
                        <?php elseif(!empty($property->addby_name)): ?>
                        <h6><?php echo e($property->addby_name); ?></h6>
                        <?php endif; ?>
                        <a class="agent_contact" href="javascript:avoid();" data-toggle="modal" data-target="#agentContact">AGENT Contact</a>
                        <a class="agent_contact contactbtn" href="javascript:avoid();" data-toggle="modal" data-target="#contactModal"><i class="fas fa-phone-volume"></i> View Mobile Number</a>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="spaceification_sec">
        <div class="container">
            <div class="row">
                <div class="col-12 xl-12 spaceification_secinn">
                    <div class="spaccei_tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="amenities-tab" data-toggle="tab" href="#amenities" role="tab" aria-controls="amenities" aria-selected="true">Amenities</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="specifications-tab" data-toggle="tab" href="#specifications" role="tab" aria-controls="specifications" aria-selected="false">Specifications</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Location</a>
                                </li>
                            </ul>
                            <div class="tab-content custom_tabcon" id="myTabContent">
                                <div class="tab-pane fade show active" id="amenities" role="tabpanel" aria-labelledby="amenities-tab">
                                    <div class="amenities_item">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                                                <ul>
                                                    <li>Gym</li>
                                                    <li>Club House</li>
                                                    <li>Visitor's Parking</li>
                                                    <li>Waste Disposal</li>
                                                    <li>Rain Water Harvesting</li>
                                                    <li>Water Storage</li>
                                                    <li>Security Personnel</li>
                                                    <li>Gated Community</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                                                <ul>
                                                    <li>Play Area</li>
                                                    <li>AC - Not Included</li>
                                                    <li>Hot water / Geyser</li>
                                                    <li>Garden/Greenery</li>
                                                    <li>Swimming Pool</li>
                                                    <li>Furnished - Fully Furnished</li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                                                <ul>
                                                    <li>Water Supply Type - Municipal</li>
                                                    <li>No Of Floors - 1</li>
                                                    <li>Balcony - 1</li>
                                                    <li>Power Backup</li>
                                                    <li>Electricity type - Phase III</li>
                                                </ul>
                                            </div>
                                        </div>    
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                    <div class="spaceification_box">
                                        <?php echo $property->description; ?>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>Plot no: <?php echo e($property->plotno); ?></li>
                                            <li>Address: <?php echo e($property->address1); ?> <?php echo e($property->address2); ?></li>
                                            <li>Locality: <?php echo e($property->locality); ?></li>
                                            <li>City: <?php echo e($property->city_name); ?></li>
                                            <li>State: <?php echo e($property->state_name); ?></li>
                                            <li>Country: <?php echo e($property->country_name); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Property Agent Contact -->
<div class="modal fade bd-example-modal-sm" id="agentContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agentModalCenterTitle">
                  User Name
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo e(url('/properties/'.$property->property_url)); ?>" name="agent_contact" id="agent_contact">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="I am.."><strong>I am..</strong></label>
                        <select name="user_type" id="user_type" class="form-control">
                            <option value="Individual" selected>Individual</option>
                            <option value="Dealer">Dealer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input required type="text" name="name" id="name" class="form-control"  placeholder="Name*">
                    </div>
                    <div class="form-group">
                        <input required type="email" name="email" id="email" class="form-control" placeholder="Email*">
                    </div>
                    <div class="form-group">
                        <input required type="tel" name="phone" id="phone" class="form-control" placeholder="Phone Number*">
                    </div>
                    <div class="form-group">
                        <input required type="hidden" name="queryforname" id="queryforname" class="form-control" value="<?php echo e($property->property_name); ?>">
                    </div>
                    <div class="form-group">
                        <input required type="hidden" name="queryfor" id="queryfor" class="form-control" value="<?php echo e(url('/properties/'.$property->property_url)); ?>">
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="1" name="accept_condition" id="accept_condition" required>
                        <label class="form-check-label" for="defaultCheck1">
                                I agree to be contacted by India Property Clinic and others for similar properties or related services
                        </label>
                    </div>
                    <div class="form-group">
                        <button class="btn submit_btn" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Model Property Agent Contact end -->

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayout.frontend_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gqufoc2n7p3n/public_html/property.devirvine.com/resources/views/frontend/view_single_property.blade.php ENDPATH**/ ?>