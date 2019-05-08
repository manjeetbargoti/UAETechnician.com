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
        <h1>Edit Post</h1>
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
                                    
                                      
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="Property Name">Post Name</label>
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
            
                                    </div>

                                   


                                    <div class="property_address col-sm-12 col-md-12">
                                        
                                        <div class="col-xs-6 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="Property Address">Add Content</label>
                                                <textarea name="property_address1" id="property_address1" class="form-control" rows="25" placeholder="Address Line 1"><?php echo e($properties->address1); ?></textarea>
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

<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\uaetechnicianne\UAETechnician.com\resources\views/admin/property/edit_property.blade.php ENDPATH**/ ?>