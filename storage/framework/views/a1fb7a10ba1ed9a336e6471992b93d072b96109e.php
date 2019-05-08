<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/frontend_css/bootstrap.min.css')); ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/frontend_css/style.css')); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="<?php echo e(URL::asset('css/frontend_css/component-slidebars.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/frontend_css/owl.carousel.min.css')); ?>" rel="stylesheet">

<title>UAE Technician</title>
  </head>
  <body>

<?php echo $__env->make('layouts.frontLayout.header_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.frontLayout.footer_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="<?php echo e(URL::asset('js/frontend_js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/frontend_js/custom.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/frontend_js/slidebars.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/frontend_js/component-slidebars.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/frontend_js/jquery.fadeImg.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/frontend_js/owl.carousel.min.js')); ?>"></script>

    <script>
    
    $('.loop').owlCarousel({
    center: true,
    items:3,
    loop:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        800:{
            items:3
        }
    }
   
});

$('.testimonials_carousel').owlCarousel({
    loop:true,
    margin:10,
    items:1
    
})
    </script>


</body>
</html><?php /**PATH D:\uaetechnicianne\UAETechnician.com\resources\views/layouts/frontLayout/frontend_design.blade.php ENDPATH**/ ?>