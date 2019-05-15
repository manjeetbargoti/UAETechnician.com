<?php $__env->startSection('content'); ?>

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(route("Home")); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i>
                        </li>
                        <?php if(@$WebmasterSection!="none"): ?>
                            <li class="active"><?php echo trans('backLang.'.$WebmasterSection->name); ?></li>
                        <?php elseif(@$search_word!=""): ?>
                            <li class="active"><?php echo e(@$search_word); ?></li>
                        <?php else: ?>
                            <li class="active"><?php echo e($User->name); ?></li>
                        <?php endif; ?>
                        <?php if($CurrentCategory!="none"): ?>
                            <?php if(count($CurrentCategory) >0): ?>
                                <?php
                                $category_title_var = "title_" . trans('backLang.boxCode');
                                ?>
                                <li class="active"><i
                                            class="icon-angle-right"></i><?php echo e($CurrentCategory->$category_title_var); ?>

                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-<?php echo e((count($Categories)>0)? "8":"12"); ?>">
                    <?php if($Topics->total() == 0): ?>
                        <div class="alert alert-warning">
                            <i class="fa fa-info"></i> &nbsp; <?php echo e(trans('frontLang.noData')); ?>

                        </div>
                    <?php else: ?>
                        <div class="row">
                            <?php if($Topics->total() > 0): ?>

                                <?php
                                $title_var = "title_" . trans('backLang.boxCode');
                                $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                $details_var = "details_" . trans('backLang.boxCode');
                                $details_var2 = "details_" . trans('backLang.boxCodeOther');
                                $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
                                $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
                                $i = 0;
                                ?>
                                <?php $__currentLoopData = $Topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if ($Topic->$title_var != "") {
                                        $title = $Topic->$title_var;
                                    } else {
                                        $title = $Topic->$title_var2;
                                    }
                                    if ($Topic->$details_var != "") {
                                        $details = $details_var;
                                    } else {
                                        $details = $details_var2;
                                    }
                                    $section = "";
                                    try {
                                        if ($Topic->section->$title_var != "") {
                                            $section = $Topic->section->$title_var;
                                        } else {
                                            $section = $Topic->section->$title_var2;
                                        }
                                    } catch (Exception $e) {
                                        $section = "";
                                    }

                                    // set row div
                                    if (($i == 1 && count($Categories) > 0) || ($i == 2 && count($Categories) == 0)) {
                                        $i = 0;
                                        echo "</div><div class='row'>";
                                    }
                                    if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                            $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                                        } else {
                                            $topic_link_url = url($Topic->$slug_var);
                                        }
                                    } else {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                            $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                        } else {
                                            $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                        }
                                    }
                                    ?>
                                    <div class="col-lg-<?php echo e((count($Categories)>0)? "12":"6"); ?>">

                                        <article>
                                            <?php if($Topic->webmasterSection->type==2 && $Topic->video_file!=""): ?>
                                                
                                                <div class="post-video">
                                                    <div class="post-heading">
                                                        <h3>
                                                            <a href="<?php echo e($topic_link_url); ?>">
                                                                <?php if($Topic->icon !=""): ?>
                                                                    <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                                                <?php endif; ?>
                                                                <?php echo e($title); ?>

                                                            </a></h3>
                                                    </div>
                                                    <div class="video-container">
                                                        <?php if($Topic->video_type ==1): ?>
                                                            <?php
                                                            $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                                                            ?>
                                                            <?php if($Youtube_id !=""): ?>
                                                                
                                                                <iframe allowfullscreen
                                                                        src="https://www.youtube.com/embed/<?php echo e($Youtube_id); ?>">
                                                                </iframe>
                                                            <?php endif; ?>
                                                        <?php elseif($Topic->video_type ==2): ?>
                                                            <?php
                                                            $Vimeo_id = Helper::Get_vimeo_video_id($Topic->video_file);
                                                            ?>
                                                            <?php if($Vimeo_id !=""): ?>
                                                                
                                                                <iframe allowfullscreen
                                                                        src="http://player.vimeo.com/video/<?php echo e($Vimeo_id); ?>?title=0&amp;byline=0">
                                                                </iframe>
                                                            <?php endif; ?>

                                                        <?php elseif($Topic->video_type ==3): ?>
                                                            <?php if($Topic->video_file !=""): ?>
                                                                
                                                                <?php echo $Topic->video_file; ?>

                                                            <?php endif; ?>

                                                        <?php else: ?>
                                                            <video width="100%" height="300" controls>
                                                                <source src="<?php echo e(URL::to('uploads/topics/'.$Topic->video_file)); ?>"
                                                                        type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        <?php endif; ?>


                                                    </div>
                                                </div>
                                            <?php elseif($Topic->webmasterSection->type==3 && $Topic->audio_file!=""): ?>
                                                
                                                <div class="post-video">
                                                    <div class="post-heading">
                                                        <h3>
                                                            <a href="<?php echo e($topic_link_url); ?>">
                                                                <?php if($Topic->icon !=""): ?>
                                                                    <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                                                <?php endif; ?>
                                                                <?php echo e($title); ?>

                                                            </a></h3>
                                                    </div>
                                                    <?php if($Topic->photo_file !=""): ?>
                                                        <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                                             alt="<?php echo e($title); ?>"/>
                                                    <?php endif; ?>
                                                    <div>
                                                        <audio controls>
                                                            <source src="<?php echo e(URL::to('uploads/topics/'.$Topic->audio_file)); ?>"
                                                                    type="audio/mpeg">
                                                            Your browser does not support the audio element.
                                                        </audio>

                                                    </div>
                                                </div>

                                            <?php elseif(count($Topic->photos)>0): ?>
                                                
                                                <div class="post-slider">
                                                    <div class="post-heading">
                                                        <h3>
                                                            <a href="<?php echo e($topic_link_url); ?>">
                                                                <?php if($Topic->icon !=""): ?>
                                                                    <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                                                <?php endif; ?>
                                                                <?php echo e($title); ?>

                                                            </a></h3>
                                                    </div>
                                                    <!-- start flexslider -->
                                                    <div class="p-slider flexslider">
                                                        <ul class="slides">
                                                            <?php if($Topic->photo_file !=""): ?>
                                                                <li>
                                                                    <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                                                         alt="<?php echo e($title); ?>"/>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php $__currentLoopData = $Topic->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li>
                                                                    <img src="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                                         alt="<?php echo e($photo->title); ?>"/>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </ul>
                                                    </div>
                                                    <!-- end flexslider -->
                                                </div>

                                            <?php else: ?>
                                                
                                                <div class="post-image">
                                                    <div class="post-heading">
                                                        <h3>
                                                            <a href="<?php echo e($topic_link_url); ?>">
                                                                <?php if($Topic->icon !=""): ?>
                                                                    <i class="fa <?php echo $Topic->icon; ?> "></i>&nbsp;
                                                                <?php endif; ?>
                                                                <?php echo e($title); ?>

                                                            </a></h3>
                                                    </div>
                                                    <?php if($Topic->photo_file !=""): ?>
                                                        <img src="<?php echo e(URL::to('uploads/topics/'.$Topic->photo_file)); ?>"
                                                             alt="<?php echo e($title); ?>"/>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>

                                            
                                            <?php if(count($Topic->webmasterSection->customFields) >0): ?>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-12">
                                                            <?php
                                                            $cf_title_var = "title_" . trans('backLang.boxCode');
                                                            $cf_title_var2 = "title_" . trans('backLang.boxCodeOther');
                                                            ?>
                                                            <?php $__currentLoopData = $Topic->webmasterSection->customFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php
                                                                if ($customField->$cf_title_var != "") {
                                                                    $cf_title = $customField->$cf_title_var;
                                                                } else {
                                                                    $cf_title = $customField->$cf_title_var2;
                                                                }


                                                                $cf_saved_val = "";
                                                                $cf_saved_val_array = array();
                                                                if (count($Topic->fields) > 0) {
                                                                    foreach ($Topic->fields as $t_field) {
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
                                            

                                            <p><?php echo e(str_limit(strip_tags($Topic->$details), $limit = 350, $end = '...')); ?></p>
                                            <div class="bottom-article">
                                                <ul class="meta-post">
                                                    <?php if($Topic->webmasterSection->date_status): ?>
                                                        <li><i class="fa fa-calendar"></i> <a><?php echo $Topic->date; ?></a>
                                                        </li>
                                                    <?php endif; ?>
                                                    <li><i class="fa fa-user"></i> <a
                                                                href="<?php echo e(route('FrontendUserTopics',$Topic->created_by)); ?>"><?php echo e($Topic->user->name); ?></a>
                                                    </li>
                                                    <li><i class="fa fa-eye"></i> <a><?php echo e(trans('frontLang.visits')); ?>

                                                            : <?php echo $Topic->visits; ?></a></li>
                                                    <?php if($Topic->webmasterSection->comments_status): ?>
                                                        <li><i class="fa fa-comments"></i><a
                                                                    href="<?php echo e(route('FrontendTopic',["section"=>$Topic->webmasterSection->name,"id"=>$Topic->id])); ?>#comments"><?php echo e(trans('frontLang.comments')); ?>

                                                                : <?php echo e(count($Topic->approvedComments)); ?> </a>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                                <a href="<?php echo e($topic_link_url); ?>"
                                                   class="pull-right"><?php echo e(trans('frontLang.readMore')); ?> <i
                                                            class="fa fa-caret-<?php echo e(trans('backLang.right')); ?>"></i></a>
                                            </div>
                                        </article>
                                    </div>
                                    <?php
                                    $i++;
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <?php echo $Topics->links(); ?>

                            </div>
                            <div class="col-lg-4 text-right">
                                <br>
                                <small><?php echo e($Topics->firstItem()); ?> - <?php echo e($Topics->lastItem()); ?> <?php echo e(trans('backLang.of')); ?>

                                    ( <?php echo e($Topics->total()); ?> ) <?php echo e(trans('backLang.records')); ?></small>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php if(count($Categories)>0): ?>
                    <?php echo $__env->make('frontEnd.includes.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>