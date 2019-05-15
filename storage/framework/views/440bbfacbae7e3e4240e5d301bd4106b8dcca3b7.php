<?php $__env->startSection('content'); ?>

    <!-- start Home Slider -->
    <?php echo $__env->make('frontEnd.includes.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- end Home Slider -->


    <?php if(count($TextBanners)>0): ?>
        <?php $__currentLoopData = $TextBanners->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TextBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            try {
                $TextBanner_type = $TextBanner->webmasterBanner->type;
            } catch (Exception $e) {
                $TextBanner_type = 0;
            }
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
        $title_var = "title_" . trans('backLang.boxCode');
        $details_var = "details_" . trans('backLang.boxCode');
        $file_var = "file_" . trans('backLang.boxCode');

        $col_width = 12;
        if (count($TextBanners) == 2) {
            $col_width = 6;
        }
        if (count($TextBanners) == 3) {
            $col_width = 4;
        }
        if (count($TextBanners) > 3) {
            $col_width = 3;
        }
        ?>
        <section class="content-row-no-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" style="margin-bottom: 0;">
                            <?php $__currentLoopData = $TextBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TextBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-<?php echo e($col_width); ?>">
                                    <div class="box">
                                        <div class="box-gray aligncenter">
                                            <?php if($TextBanner->code !=""): ?>
                                                <?php echo $TextBanner->code; ?>

                                            <?php else: ?>
                                                <?php if($TextBanner->icon !=""): ?>
                                                    <div class="icon">
                                                        <i class="fa <?php echo e($TextBanner->icon); ?> fa-3x"></i>
                                                    </div>
                                                <?php elseif($TextBanner->$file_var !=""): ?>
                                                    <img src="<?php echo e(URL::to('uploads/banners/'.$TextBanner->$file_var)); ?>"
                                                         alt="<?php echo e($TextBanner->$title_var); ?>"/>
                                                <?php endif; ?>
                                                <h4><?php echo $TextBanner->$title_var; ?></h4>
                                                <?php if($TextBanner->$details_var !=""): ?>
                                                    <p><?php echo nl2br($TextBanner->$details_var); ?></p>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                        </div>
                                        <?php if($TextBanner->link_url !=""): ?>
                                            <div class="box-bottom">
                                                <a href="<?php echo $TextBanner->link_url; ?>"><?php echo e(trans('frontLang.moreDetails')); ?></a>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if(count($HomeTopics)>0): ?>
        <section class="content-row-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-row-head">
                            <h2 class="heading"><?php echo e(trans('frontLang.homeContents1Title')); ?></h2>
                            <small><?php echo e(trans('frontLang.homeContents1desc')); ?></small>
                        </div>
                        <div class="row">
                            <?php
                            $title_var = "title_" . trans('backLang.boxCode');
                            $title_var2 = "title_" . trans('backLang.boxCodeOther');
                            $details_var = "details_" . trans('backLang.boxCode');
                            $details_var2 = "details_" . trans('backLang.boxCodeOther');
                            $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
                            $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
                            $section_url = "";
                            ?>
                            <?php $__currentLoopData = $HomeTopics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HomeTopic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                if ($HomeTopic->$title_var != "") {
                                    $title = $HomeTopic->$title_var;
                                } else {
                                    $title = $HomeTopic->$title_var2;
                                }
                                if ($HomeTopic->$details_var != "") {
                                    $details = $details_var;
                                } else {
                                    $details = $details_var2;
                                }
                                if ($HomeTopic->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $section_url = url(trans('backLang.code') . "/" . $HomeTopic->webmasterSection->$slug_var);
                                    } else {
                                        $section_url = url($HomeTopic->webmasterSection->$slug_var);
                                    }
                                } else {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $section_url = url(trans('backLang.code') . "/" . $HomeTopic->webmasterSection->name);
                                    } else {
                                        $section_url = url($HomeTopic->webmasterSection->name);
                                    }
                                }

                                if ($HomeTopic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $topic_link_url = url(trans('backLang.code') . "/" . $HomeTopic->$slug_var);
                                    } else {
                                        $topic_link_url = url($HomeTopic->$slug_var);
                                    }
                                } else {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $HomeTopic->webmasterSection->name, "id" => $HomeTopic->id]);
                                    } else {
                                        $topic_link_url = route('FrontendTopic', ["section" => $HomeTopic->webmasterSection->name, "id" => $HomeTopic->id]);
                                    }
                                }

                                ?>
                                <div class="col-lg-4">
                                    <h4>
                                        <?php if($HomeTopic->icon !=""): ?>
                                            <i class="fa <?php echo $HomeTopic->icon; ?> "></i>&nbsp;
                                        <?php endif; ?>
                                        <?php echo e($title); ?>

                                    </h4>
                                    <?php if($HomeTopic->photo_file !=""): ?>
                                        <img src="<?php echo e(URL::to('uploads/topics/'.$HomeTopic->photo_file)); ?>"
                                             alt="<?php echo e($title); ?>"/>
                                    <?php endif; ?>

                                    
                                    <?php if(count($HomeTopic->webmasterSection->customFields) >0): ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <?php
                                                    $cf_title_var = "title_" . trans('backLang.boxCode');
                                                    $cf_title_var2 = "title_" . trans('backLang.boxCodeOther');
                                                    ?>
                                                    <?php $__currentLoopData = $HomeTopic->webmasterSection->customFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                        if ($customField->$cf_title_var != "") {
                                                            $cf_title = $customField->$cf_title_var;
                                                        } else {
                                                            $cf_title = $customField->$cf_title_var2;
                                                        }


                                                        $cf_saved_val = "";
                                                        $cf_saved_val_array = array();
                                                        if (count($HomeTopic->fields) > 0) {
                                                            foreach ($HomeTopic->fields as $t_field) {
                                                                if ($t_field->field_id == $customField->id) {
                                                                    if ($customField->type == 7) {
                                                                        // if multi check
                                                                        $cf_saved_val_array = explode(", ", $t_field->field_value);
                                                                    } else {
                                                                        $cf_saved_val = $t_field->field_value;
                                                                    }
                                                                }
                                                            }
                                                        }

                                                        ?>

                                                        <?php if(($cf_saved_val!="" || count($cf_saved_val_array) > 0) && ($customField->lang_code == "all" || $customField->lang_code == trans('backLang.boxCode'))): ?>
                                                            <?php if($customField->type ==12): ?>
                                                                
                                                            <?php elseif($customField->type ==11): ?>
                                                                
                                                            <?php elseif($customField->type ==10): ?>
                                                                
                                                            <?php elseif($customField->type ==9): ?>
                                                                
                                                            <?php elseif($customField->type ==8): ?>
                                                                
                                                            <?php elseif($customField->type ==7): ?>
                                                                
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        <?php echo $cf_title; ?> :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <?php
                                                                        $cf_details_var = "details_" . trans('backLang.boxCode');
                                                                        $cf_details_var2 = "details_en" . trans('backLang.boxCodeOther');
                                                                        if ($customField->$cf_details_var != "") {
                                                                            $cf_details = $customField->$cf_details_var;
                                                                        } else {
                                                                            $cf_details = $customField->$cf_details_var2;
                                                                        }
                                                                        $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                                        $line_num = 1;
                                                                        ?>
                                                                        <?php $__currentLoopData = $cf_details_lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cf_details_line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if(in_array($line_num,$cf_saved_val_array)): ?>
                                                                                <span class="badge">
                                                            <?php echo $cf_details_line; ?>

                                                        </span>
                                                                            <?php endif; ?>
                                                                            <?php
                                                                            $line_num++;
                                                                            ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                </div>
                                                            <?php elseif($customField->type ==6): ?>
                                                                
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        <?php echo $cf_title; ?> :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <?php
                                                                        $cf_details_var = "details_" . trans('backLang.boxCode');
                                                                        $cf_details_var2 = "details_en" . trans('backLang.boxCodeOther');
                                                                        if ($customField->$cf_details_var != "") {
                                                                            $cf_details = $customField->$cf_details_var;
                                                                        } else {
                                                                            $cf_details = $customField->$cf_details_var2;
                                                                        }
                                                                        $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                                        $line_num = 1;
                                                                        ?>
                                                                        <?php $__currentLoopData = $cf_details_lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cf_details_line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($line_num == $cf_saved_val): ?>
                                                                                <?php echo $cf_details_line; ?>

                                                                            <?php endif; ?>
                                                                            <?php
                                                                            $line_num++;
                                                                            ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div>
                                                                </div>
                                                            <?php elseif($customField->type ==5): ?>
                                                                
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        <?php echo $cf_title; ?> :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <?php echo date('Y-m-d H:i:s', strtotime($cf_saved_val)); ?>

                                                                    </div>
                                                                </div>
                                                            <?php elseif($customField->type ==4): ?>
                                                                
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        <?php echo $cf_title; ?> :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <?php echo date('Y-m-d', strtotime($cf_saved_val)); ?>

                                                                    </div>
                                                                </div>
                                                            <?php elseif($customField->type ==3): ?>
                                                                
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        <?php echo $cf_title; ?> :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <?php echo $cf_saved_val; ?>

                                                                    </div>
                                                                </div>
                                                            <?php elseif($customField->type ==2): ?>
                                                                
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        <?php echo $cf_title; ?> :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <?php echo $cf_saved_val; ?>

                                                                    </div>
                                                                </div>
                                                            <?php elseif($customField->type ==1): ?>
                                                                
                                                            <?php else: ?>
                                                                
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        <?php echo $cf_title; ?> :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <?php echo $cf_saved_val; ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <p class="text-justify"><?php echo e(str_limit(strip_tags($HomeTopic->$details), $limit = 400, $end = '...')); ?>

                                        &nbsp; <a href="<?php echo e($topic_link_url); ?>"><?php echo e(trans('frontLang.readMore')); ?>

                                            <i
                                                    class="fa fa-caret-<?php echo e(trans('backLang.right')); ?>"></i></a>
                                    </p>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="more-btn">
                            <a href="<?php echo e(url($section_url)); ?>" class="btn btn-theme"><i
                                        class="fa fa-angle-left"></i>&nbsp; <?php echo e(trans('frontLang.viewMore')); ?>

                                &nbsp;<i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    <?php endif; ?>


    <?php if(count($HomePhotos)>0): ?>
        <section class="content-row-no-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-row-head">
                            <h2 class="heading"><?php echo e(trans('frontLang.homeContents2Title')); ?></h2>
                            <small><?php echo e(trans('frontLang.homeContents2desc')); ?></small>
                        </div>
                        <div class="row">
                            <section id="projects">
                                <ul id="thumbs" class="portfolio">
                                    <?php
                                    $title_var = "title_" . trans('backLang.boxCode');
                                    $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                    $section_url = "";
                                    $ph_count = 0;
                                    ?>
                                    <?php $__currentLoopData = $HomePhotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HomePhoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($HomePhoto->$title_var != "") {
                                            $title = $HomePhoto->$title_var;
                                        } else {
                                            $title = $HomePhoto->$title_var2;
                                        }
                                        if ($HomePhoto->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $section_url = url(trans('backLang.code') . "/" . $HomePhoto->webmasterSection->$slug_var);
                                            } else {
                                                $section_url = url($HomePhoto->webmasterSection->$slug_var);
                                            }
                                        } else {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $section_url = url(trans('backLang.code') . "/" . $HomePhoto->webmasterSection->name);
                                            } else {
                                                $section_url = url($HomePhoto->webmasterSection->name);
                                            }
                                        }
                                        ?>
                                        <?php $__currentLoopData = $HomePhoto->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($ph_count<12): ?>
                                                <li class="col-lg-2 design" data-id="id-0" data-type="web">
                                                    <div class="relative">
                                                        <div class="item-thumbs">
                                                            <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                                               title="<?php echo e($title); ?>"
                                                               href="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>">
                                                                <span class="overlay-img"></span>
                                                                <span class="overlay-img-thumb"><i
                                                                            class="fa fa-search-plus"></i></span>
                                                            </a>
                                                            <!-- Thumb Image and Description -->
                                                            <img src="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                                 alt="<?php echo e($title); ?>">
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                            <?php
                                            $ph_count++;
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </section>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="more-btn">
                                    <a href="<?php echo e(url($section_url)); ?>" class="btn btn-theme"><i
                                                class="fa fa-angle-left"></i>&nbsp; <?php echo e(trans('frontLang.viewMore')); ?>

                                        &nbsp;<i
                                                class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if(count($HomePartners)>0): ?>
        <section class="content-row-no-bg top-line">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-row-head">
                            <h2 class="heading"><?php echo e(trans('frontLang.partners')); ?></h2>
                            <small><?php echo e(trans('frontLang.partnersMsg')); ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="partners_carousel slide" id="myCarousel" style="direction: ltr">
                        <div class="carousel-inner">
                            <div class="item active">
                                <ul class="thumbnails">
                                    <?php
                                    $ii = 0;
                                    $title_var = "title_" . trans('backLang.boxCode');
                                    $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                    ?>

                                    <?php $__currentLoopData = $HomePartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HomePartner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($HomePartner->$title_var != "") {
                                            $title = $HomePartner->$title_var;
                                        } else {
                                            $title = $HomePartner->$title_var2;
                                        }
                                        if ($HomePartner->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $section_url = url(trans('backLang.code') . "/" . $HomePartner->webmasterSection->$slug_var);
                                            } else {
                                                $section_url = url($HomePartner->webmasterSection->$slug_var);
                                            }
                                        } else {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $section_url = url(trans('backLang.code') . "/" . $HomePartner->webmasterSection->name);
                                            } else {
                                                $section_url = url($HomePartner->webmasterSection->name);
                                            }
                                        }

                                        if ($ii == 6) {
                                            echo "
                                                    </ul>
                                </div><!-- /Slide -->
                                <div class='item'>
                                    <ul class='thumbnails'>
                                                    ";
                                            $ii = 0;
                                        }
                                        ?>
                                        <li class="col-sm-2">
                                            <div>
                                                <div class="thumbnail">
                                                    <img src="<?php echo e(URL::to('uploads/topics/'.$HomePartner->photo_file)); ?>"
                                                         data-placement="bottom" title="<?php echo e($title); ?>"
                                                         alt="<?php echo e($title); ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                        </li>
                                        <?php
                                        $ii++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div><!-- /Slide -->
                        </div>
                        <nav>
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#myCarousel" class=""><i
                                                class="fa fa-angle-left"></i></a></li>
                                
                                
                                <li><a data-slide="next" href="#myCarousel" class=""><i
                                                class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                        <!-- /.control-box -->

                    </div><!-- /#myCarousel -->
                </div>

            </div>

        </section>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>