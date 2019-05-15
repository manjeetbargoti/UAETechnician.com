<header>
    <div class="top_header">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="contact_top">
							<?php if(Helper::GeneralSiteSettings("contact_t3") !=""): ?>
                         <a class="call_no" href="tel:<?php echo e(Helper::GeneralSiteSettings("contact_t5")); ?>"> <i class="fas fa-phone-square"></i><?php echo e(Helper::GeneralSiteSettings("contact_t5")); ?></a>
                    <?php endif; ?>
                    <?php if(Helper::GeneralSiteSettings("contact_t6") !=""): ?>

                    <a href="mailto:<?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?>"><i class="fas fa-envelope"></i> <?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?></a>
                    <?php endif; ?>
							
						</div>
					</div>
					<div class="col-xl-6">
						<?php if(Helper::GeneralSiteSettings("contact_t3") !=""): ?>
                         <a class="contact_no" href="tel:<?php echo e(Helper::GeneralSiteSettings("contact_t5")); ?>"><?php echo e(Helper::GeneralSiteSettings("contact_t5")); ?><span>Call Us</span></a>
                    <?php endif; ?>
					</div>
				</div>
		
		
		
                <!-- <div class="pull-right">
                    <strong>
                        <a href="<?php echo e(route("adminHome")); ?>"><i class="fa fa-cog"></i> <?php echo e(trans('frontLang.dashboard')); ?>

                        </a>
                    </strong>
                    <?php if($WebmasterSettings->languages_count ==2): ?>
                        &nbsp; | &nbsp;
                        <strong>
                            <?php if(trans('backLang.code')=="ar"): ?>
                                <a href="<?php echo e(URL::to('lang/en')); ?>"><i
                                            class="fa fa-language "></i> <?php echo e(str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.englishBox'))))); ?>

                                </a>
                            <?php else: ?>
                                <a href="<?php echo e(URL::to('lang/ar')); ?>"><i
                                            class="fa fa-language "></i> <?php echo e(str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.arabicBox'))))); ?>

                                </a>
                            <?php endif; ?>

                        </strong>
                    <?php endif; ?>
                </div> -->
				
                
        </div>
    </div>
	
    <nav class="navbar navbar-expand-lg navbar-light custom_nav offcanvas-desktop">
        <div class="container">
                <a class="navbar-brand"  href="<?php echo e(route("Home")); ?>">
					<?php if(Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode')) !=""): ?>
                        <img alt=""
                             src="<?php echo e(URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode')))); ?>">
                    <?php else: ?>
                        <img alt="" src="<?php echo e(URL::to('uploads/settings/nologo.png')); ?>">
                    <?php endif; ?>
				</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
               
            <?php echo $__env->make('frontEnd.includes.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </nav>
</header>