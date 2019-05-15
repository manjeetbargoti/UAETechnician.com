<a href="#" title="<?php echo e(trans('frontLang.toTop')); ?>" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<script src="<?php echo e(URL::asset('frontEnd/js/jquery.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/jquery.easing.1.3.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/jquery.fancybox.pack.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/jquery.fancybox-media.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/google-code-prettify/prettify.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/portfolio/jquery.quicksand.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/portfolio/setting.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/jquery.flexslider.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/animate.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/custom.js')); ?>"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->
<script src="<?php echo e(URL::asset('frontEnd/js/slidebars.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('frontEnd/js/component-slidebars.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('frontEnd/js/jquery.fadeImg.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('frontEnd/js/owl.carousel.min.js')); ?>"></script>
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






<?php if(Helper::GeneralSiteSettings("style_subscribe")): ?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        "use strict";

        //Subscribe
        $('form.subscribeForm').submit(function () {

            var f = $(this).find('.form-group'),
                    ferror = false,
                    emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

            f.children('input').each(function () { // run all inputs

                var i = $(this); // current input
                var rule = i.attr('data-rule');

                if (rule !== undefined) {
                    var ierror = false; // error flag for current input
                    var pos = rule.indexOf(':', 0);
                    if (pos >= 0) {
                        var exp = rule.substr(pos + 1, rule.length);
                        rule = rule.substr(0, pos);
                    } else {
                        rule = rule.substr(pos + 1, rule.length);
                    }

                    switch (rule) {
                        case 'required':
                            if (i.val() === '') {
                                ferror = ierror = true;
                            }
                            break;

                        case 'minlen':
                            if (i.val().length < parseInt(exp)) {
                                ferror = ierror = true;
                            }
                            break;

                        case 'email':
                            if (!emailExp.test(i.val())) {
                                ferror = ierror = true;
                            }
                            break;

                        case 'checked':
                            if (!i.attr('checked')) {
                                ferror = ierror = true;
                            }
                            break;

                        case 'regexp':
                            exp = new RegExp(exp);
                            if (!exp.test(i.val())) {
                                ferror = ierror = true;
                            }
                            break;
                    }
                    i.next('.validation').html('<i class=\"fa fa-info\"></i> &nbsp;' + ( ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '' )).show();
                    !ierror ? i.next('.validation').hide() : i.next('.validation').show();
                }
            });
            if (ferror) return false;
            else var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo route("subscribeSubmit"); ?>",
                data: str,
                success: function (msg) {
                    if (msg == 'OK') {
                        $("#subscribesendmessage").addClass("show");
                        $("#subscribeerrormessage").removeClass("show");
                        $("#subscribe_name").val('');
                        $("#subscribe_email").val('');
                    }
                    else {
                        $("#subscribesendmessage").removeClass("show");
                        $("#subscribeerrormessage").addClass("show");
                        $('#subscribeerrormessage').html(msg);
                    }

                }
            });
            return false;
        });

    });
</script>
<?php endif; ?>
<?php
if($PageTitle==""){
    $PageTitle = Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode'));
}
?>
<?php echo Helper::SaveVisitorInfo($PageTitle); ?>

