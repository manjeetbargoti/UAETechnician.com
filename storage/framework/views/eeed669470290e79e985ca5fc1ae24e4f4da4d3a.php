<?php
$footer_style = "";
if (Helper::GeneralSiteSettings("style_footer_bg") != "") {
    $bg_file = URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_footer_bg"));
    $bg_color = Helper::GeneralSiteSettings("style_color1");
    $footer_style = "style='background: $bg_color url($bg_file) repeat-x center top'";
}
if (Helper::GeneralSiteSettings("style_footer") != 1) {
    $footer_style = "style=padding:0";
}
?>
<footer <?php echo $footer_style; ?>>
<div class="call_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="call_txt">
                        <h2>Call Us now for immediate support</h2>
                        <p>Uae Technician is not affiliated with any of the companies on this site. We do not have any 
                                official connections, relationships, or associations with the companies and brands listed on the site.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                <h1 class="callno">
                <?php if(Helper::GeneralSiteSettings("contact_t3") !=""): ?>
<p><i class="fa fa-phone"></i> &nbsp;<a href="call:<?php echo e(Helper::GeneralSiteSettings("contact_t3")); ?>"><span
dir="ltr"><?php echo e(Helper::GeneralSiteSettings("contact_t3")); ?></span></a></p>
<?php endif; ?>
</h1>
</div>
</div>
</div>
</div>
<?php if(Helper::GeneralSiteSettings("style_footer")==1): ?>
        <?php
        $bx1w = 3;
        $bx2w = 3;
        $bx3w = 3;
        $bx4w = 3;
        if (count($LatestNews) == 0 && Helper::GeneralSiteSettings("style_subscribe") == 0) {
            $bx1w = 6;
            $bx2w = 6;
            $bx3w = 6;
            $bx4w = 6;
        } elseif (count($LatestNews) == 0 || Helper::GeneralSiteSettings("style_subscribe") == 0) {
            $bx1w = 4;
            $bx2w = 4;
            $bx3w = 4;
            $bx4w = 4;
        }

        ?>
		<div class="footer">
        <div class="container">
            <div class="row">
            <div class="col-lg-2">
                    <div class="widget footer_box">
                        <?php
                        $link_title_var = "title_" . trans('backLang.boxCode');
                        $main_title_var = "FooterMenuLinks_name_" . trans('backLang.boxCode');
                        $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
                        $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
                        ?>
                        <h4 class="widgetheading"><i class="fa fa-bookmark"></i>&nbsp; <?php echo e($$main_title_var); ?></h4>
                        <ul class="link-list quicklink">
                            <?php $__currentLoopData = $FooterMenuLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $FooterMenuLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($FooterMenuLink->type==3 || $FooterMenuLink->type==2): ?>
                                    
                                    <li>
                                        <?php
                                        if ($FooterMenuLink->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $mmnnuu_link = url(trans('backLang.code') . "/" . $FooterMenuLink->webmasterSection->$slug_var);
                                            } else {
                                                $mmnnuu_link = url($FooterMenuLink->webmasterSection->$slug_var);
                                            }
                                        } else {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $mmnnuu_link = url(trans('backLang.code') . "/" . $FooterMenuLink->webmasterSection->name);
                                            } else {
                                                $mmnnuu_link = url($FooterMenuLink->webmasterSection->name);
                                            }
                                        }
                                        ?>
                                        <a href="<?php echo e($mmnnuu_link); ?>"><?php echo e($FooterMenuLink->$link_title_var); ?></a>
                                    </li>
                                <?php elseif($FooterMenuLink->type==1): ?>
                                    
                                    <?php
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $this_link_url = url(trans('backLang.code') . "/" . $FooterMenuLink->link);
                                    } else {
                                        $this_link_url = url($FooterMenuLink->link);
                                    }
                                    ?>
                                    <li>
                                        <a href="<?php echo e($this_link_url); ?>"><?php echo e($FooterMenuLink->$link_title_var); ?></a>
                                    </li>
                                <?php else: ?>
                                    
                                    <li><a><?php echo e($FooterMenuLink->$link_title_var); ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <?php if(count($LatestNews)>0): ?>
                    <?php
                    $footer_title_var = "title_" . trans('backLang.boxCode');
                    $footer_title_var2 = "title_" . trans('backLang.boxCodeOther');
                    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
                    $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
                    ?>
                    <div class="col-lg-4">
                 
                        <div class="footer_box">
                        <h4>POPULAR TAGS</h4>
                           
                            <ul class="link-list quicklink">
                                <?php $__currentLoopData = $LatestNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $LatestNew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if ($LatestNew->$footer_title_var != "") {
                                        $LatestNew_title = $LatestNew->$footer_title_var;
                                    } else {
                                        $LatestNew_title = $LatestNew->$footer_title_var2;
                                    }
                                    if ($LatestNew->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                            $topic_link_url = url(trans('backLang.code') . "/" . $LatestNew->$slug_var);
                                        } else {
                                            $topic_link_url = url($LatestNew->$slug_var);
                                        }
                                    } else {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                            $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $LatestNew->webmasterSection->name, "id" => $LatestNew->id]);
                                        } else {
                                            $topic_link_url = route('FrontendTopic', ["section" => $LatestNew->webmasterSection->name, "id" => $LatestNew->id]);
                                        }
                                    }
                                    ?>
                                    <li>
                                        <a href="<?php echo e($topic_link_url); ?>"><?php echo e($LatestNew_title); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                <!--social media start-->
                <div class="social_media mt-3">
                            <h4>Connect With Us</h4>
             
                <ul class="social-network">
                        <?php if($WebsiteSettings->social_link1): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link1); ?>" data-placement="top" title="Facebook"
                                   target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link2): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link2); ?>" data-placement="top" title="Twitter"
                                   target="_blank"><i
                                            class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if($WebsiteSettings->social_link3): ?>
                            <li><a href="<?php echo e($WebsiteSettings->social_link3); ?>" data-placement="top" title="Google+"
                                   target="_blank"><i
                                            class="fa fa-google-plus"></i></a></li>
                        <?php endif; ?>
                    
                       
                    </ul>

                    </div>
          
                <!--social media end-->

                        </div>
                    </div>
                <?php endif; ?>



                <div class="col-lg-3">
                    <div class="widget contacts">
                        <h4 class="widgetheading"><i
                                    class="fa fa-phone-square"></i>&nbsp; <?php echo e(trans('frontLang.contactDetails')); ?></h4>
                        <?php if(Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode')) !=""): ?>
                            <address>
                                <strong><?php echo e(trans('frontLang.address')); ?>:</strong><br>
                                <i class="fa fa-map-marker"></i>
                                &nbsp;<?php echo e(Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode'))); ?>

                            </address>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings("contact_t3") !=""): ?>
                            <p>
                                <strong><?php echo e(trans('frontLang.callUs')); ?>:</strong><br>
                                <i class="fa fa-phone"></i> &nbsp;<a
                                        href="call:<?php echo e(Helper::GeneralSiteSettings("contact_t3")); ?>"><span
                                            dir="ltr"><?php echo e(Helper::GeneralSiteSettings("contact_t3")); ?></span></a></p>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings("contact_t6") !=""): ?>
                            <p>
                                <strong><?php echo e(trans('frontLang.email')); ?>:</strong><br>
                                <i class="fa fa-envelope"></i> &nbsp;<a
                                        href="mailto:<?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?>"><?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?></a>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php echo $__env->make('frontEnd.includes.subscribe', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>
		</div>
    <?php endif; ?>
    <div class="container">
    <div class="popular_ser">
                <h5>POPULAR SERVICES</h5>
                <div class="row">
                    <div class="col-md-3">
                        <ul>
                            <li><a href="#">Data Recovery</a></li>
                            <li><a href="#">Desktop/PC Data Recovery</a></li>
                            <li><a href="#">Mac Data Recovery</a></li>
                            <li><a href="#">Laptop Data Recovery</a></li>
                            <li><a href="#">Hard Drive Data Recovery</a></li>
                            <li><a href="#">Flash / Memory Card Data Recovery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li><a href="#">SQL Data Recovery</a></li>
                            <li><a href="#">Server Data Recovery</a></li>
                            <li><a href="#">Smart Devices Data Recovery</a></li>
                            <li><a href="#">NAS / SAN Data Recovery</a></li>
                            <li><a href="#">Apple Data Recovery Service</a></li>
                            <li><a href="#">SSD Solid State Drives Data Recovery</a></li>
                            <li><a href="#">External Drive Data Recovery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li><a href="#">RAID Recovery</a></li>
                            <li><a href="#">Personal Data Recovery</a></li>
                            <li><a href="#">Ransomware Data Recovery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li><a href="#">Laptop Liquid Damage</a></li>
                            <li><a href="#">PC Clean-up & Tune-up</a></li>
                            <li><a href="#">OS Update Services</a></li>
                            <li><a href="#">MS Surface Support Services</a></li>
                            <li><a href="#">Alienware Support Service</a></li>
                        </ul>
                    </div>
                </div>
                
</div>

            </div>


    
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <?php
                        $site_title_var = "site_title_" . trans('backLang.boxCode');
                        ?>
                        &copy; <?php echo date("Y") ?> <a><?php echo e($WebsiteSettings->$site_title_var); ?></a>.  <?php echo e(trans('frontLang.AllRightsReserved')); ?>

                        . 
                    </div>
                </div>
                <div class="col-lg-6">
                  
                <div class="privecy">
                        <a href="<?php echo e(url('/privacy-policy')); ?>">Privacy Policy</a>
                        <a href="<?php echo e(url('/terms-and-conditions')); ?>">Terms & Conditions</a>
                        <a href="<?php echo e(url('/refund-policy')); ?>">Refund Policy</a>
                        <a href="<?php echo e(url('/disclaimer')); ?>">Disclaimer</a>
                    
                    </div>    
                </div>


            </div>
        </div>
    </div>
</footer>