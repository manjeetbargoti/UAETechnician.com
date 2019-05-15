<?php $__env->startSection('headerInclude'); ?>
    <link href="<?php echo e(URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.min.css")); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box m-b-0">
            <div class="box-header dker">
                <h3><i class="material-icons">
                        &#xe3c9;</i> <?php echo e(trans('backLang.topicEdit')); ?> <?php echo trans('backLang.'.$WebmasterSection->name); ?>

                </h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <a><?php echo trans('backLang.'.$WebmasterSection->name); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route('topics',$WebmasterSection->id)); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>


        <?php
        $tab_1 = "active";
        $tab_2 = "";
        $tab_3 = "";
        $tab_4 = "";
        $tab_5 = "";
        $tab_6 = "";
        $tab_7 = "";
        if (Session::has('activeTab')) {
            if (Session::get('activeTab') == "seo") {
                $tab_1 = "";
                $tab_2 = "active";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "photos") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "active";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "comments") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "active";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "maps") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "active";
                $tab_6 = "";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "files") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "active";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "related") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "active";
            }
        }
        ?>
        <div class="box nav-active-border b-info">
            <ul class="nav nav-md">
                <li class="nav-item inline">
                    <a class="nav-link <?php echo e($tab_1); ?>" href data-toggle="tab" data-target="#tab_details">
                        <span class="text-md"><i class="material-icons">
                                &#xe31e;</i> <?php echo e(trans('backLang.topicTabDetails')); ?></span>
                    </a>
                </li>

                <?php if($WebmasterSection->multi_images_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_3); ?>" href data-toggle="tab" data-target="#tab_photos">
                    <span class="text-md"><i class="material-icons">
                            &#xe251;</i>
                        <?php echo e(trans('backLang.topicAdditionalPhotos')); ?>

                        <?php if(count($Topics->photos)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->photos)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if($WebmasterSection->extra_attach_file_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_6); ?>" href data-toggle="tab" data-target="#tab_files">
                    <span class="text-md"><i class="material-icons">
                            &#xe226;</i> <?php echo e(trans('backLang.additionalFiles')); ?>

                        <?php if(count($Topics->attachFiles)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->attachFiles)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($WebmasterSection->comments_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_4); ?>" href data-toggle="tab" data-target="#tab_comments">
                    <span class="text-md"><i class="material-icons">
                            &#xe0b9;</i> <?php echo e(trans('backLang.comments')); ?>

                        <?php if(count($Topics->comments)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->comments)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if($WebmasterSection->maps_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_5); ?>" id="mapTabLink" href data-toggle="tab"
                           data-target="#tab_maps">
                    <span class="text-md"><i class="material-icons">
                            &#xe0c8;</i> <?php echo e(trans('backLang.topicGoogleMaps')); ?>

                        <?php if(count($Topics->maps)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->maps)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($WebmasterSection->related_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_7); ?>" href data-toggle="tab" data-target="#tab_related">
                    <span class="text-md"><i class="material-icons">
                            &#xe867;</i> <?php echo e(trans('backLang.relatedTopics')); ?>

                        <?php if(count($Topics->relatedTopics)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->relatedTopics)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_2); ?>" href data-toggle="tab" data-target="#tab_seo">
                    <span class="text-md"><i class="material-icons">
                            &#xe8e5;</i> <?php echo e(trans('backLang.seoTabTitle')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
            <div class="tab-content clear b-t">
                <div class="tab-pane  <?php echo e($tab_1); ?>" id="tab_details">
                    <div class="box-body">
                        <?php echo e(Form::open(['route'=>['topicsUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id],'method'=>'POST', 'files' => true])); ?>


                        <?php if($WebmasterSection->date_status): ?>
                            <div class="form-group row">
                                <label for="date"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicDate'); ?>

                                </label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                format: 'YYYY-MM-DD',
                icons: {
                  time: 'fa fa-clock-o',
                  date: 'fa fa-calendar',
                  up: 'fa fa-chevron-up',
                  down: 'fa fa-chevron-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                }
              }">
                                            <?php echo Form::text('date',$Topics->date, array('placeholder' => '','class' => 'form-control','id'=>'date','required'=>'')); ?>

                                            <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php else: ?>
                            <?php echo Form::hidden('date',$Topics->date, array('placeholder' => '','class' => 'form-control','id'=>'date')); ?>

                        <?php endif; ?>


                        <?php if($WebmasterSection->expire_date_status): ?>
                            <div class="form-group row">
                                <label for="date"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.expireDate'); ?>

                                </label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                format: 'YYYY-MM-DD',
                icons: {
                  time: 'fa fa-clock-o',
                  date: 'fa fa-calendar',
                  up: 'fa fa-chevron-up',
                  down: 'fa fa-chevron-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                }
              }">
                                            <?php echo Form::text('expire_date',$Topics->expire_date, array('placeholder' => '','class' => 'form-control','id'=>'expire_date')); ?>

                                            <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->sections_status!=0): ?>
                            <div class="form-group row">
                                <label for="section_id"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.hasCategories'); ?> </label>
                                <div class="col-sm-10">
                                    <select name="section_id[]" id="section_id" class="form-control select2-multiple"
                                            multiple
                                            ui-jp="select2"
                                            ui-options="{theme: 'bootstrap'}" required>
                                        <?php
                                        $title_var = "title_" . trans('backLang.boxCode');
                                        $title_var2 = "title_" . trans('backLang.boxCodeOther');

                                        $t_arrow = "&laquo;";
                                        if (trans('backLang.direction') == "ltr") {
                                            $t_arrow = "&raquo;";
                                        }
                                        $categories = array();
                                        foreach ($Topics->categories as $category) {
                                            $categories[] = $category->section_id;
                                        }
                                        ?>
                                        <?php $__currentLoopData = $fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($fatherSection->$title_var != "") {
                                                $ftitle = $fatherSection->$title_var;
                                            } else {
                                                $ftitle = $fatherSection->$title_var2;
                                            }
                                            ?>
                                            <option value="<?php echo e($fatherSection->id); ?>" <?php echo e((in_array($fatherSection->id,$categories)) ? "selected='selected'":""); ?>><?php echo e($ftitle); ?></option>
                                            <?php $__currentLoopData = $fatherSection->fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subFatherSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                if ($subFatherSection->$title_var != "") {
                                                    $title = $subFatherSection->$title_var;
                                                } else {
                                                    $title = $subFatherSection->$title_var2;
                                                }
                                                ?>
                                                <option value="<?php echo e($subFatherSection->id); ?>" <?php echo e((in_array($subFatherSection->id,$categories)) ? "selected='selected'":""); ?>> <?php echo e($ftitle); ?> <?php echo e($t_arrow); ?> <?php echo e($title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php echo Form::hidden('section_id',$Topics->section_id); ?>

                        <?php endif; ?>

                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                            <div class="form-group row">
                                <label for="title_ar"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                </label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('title_ar',$Topics->title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar','required'=>'', 'dir'=>trans('backLang.rtl'))); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                            <div class="form-group row">
                                <label for="title_en"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                </label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('title_en',$Topics->title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en','required'=>'', 'dir'=>trans('backLang.ltr'))); ?>

                                </div>
                            </div>
                        <?php endif; ?>



                        <?php if($WebmasterSection->longtext_status): ?>

                            <?php if($WebmasterSection->editor_status): ?>
                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                    <div class="form-group row">
                                        <label for="details_ar"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerDetails'); ?>

                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <div class="box p-a-xs">
                                                <?php echo Form::textarea('details_ar',$Topics->details_ar, array('ui-jp'=>'summernote','placeholder' => '','class' => 'form-control summernote', 'dir'=>trans('backLang.rtl'),'ui-options'=>'{height: 300}')); ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                    <div class="form-group row">
                                        <label for="details_en"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerDetails'); ?>

                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <div class="box p-a-xs">
                                                <?php echo Form::textarea('details_en',$Topics->details_en, array('ui-jp'=>'summernote','placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'ui-options'=>'{height: 300}')); ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                    <div class="form-group row">
                                        <label for="details_ar"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerDetails'); ?>

                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <?php echo Form::textarea('details_ar',$Topics->details_ar, array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.rtl'),'rows'=>'5')); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                    <div class="form-group row">
                                        <label for="details_en"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerDetails'); ?>

                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                        </label>
                                        <div class="col-sm-10">
                                            <?php echo Form::textarea('details_en',$Topics->details_en, array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'rows'=>'5')); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>


                        <?php if($WebmasterSection->type==2): ?>
                            <div class="form-group row">
                                <label for="video_type"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoType'); ?></label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','0',($Topics->video_type==0) ? true : false, array('id' => 'video_type1','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="block";document.getElementById("youtube_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.bannerVideoType1')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','1',($Topics->video_type==1) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("youtube_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.bannerVideoType2')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','2',($Topics->video_type==2) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="block";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("vimeo_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.bannerVideoType3')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','3',($Topics->video_type==3) ? true : false, array('id' => 'video_type3','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("embed_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            Embed
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div id="files_div" style="display: <?php echo e(($Topics->video_type ==0) ? "block" : "none"); ?>">
                                <div class="form-group row">
                                    <label for="video_file"
                                           class="col-sm-2 form-control-label"><?php echo trans('backLang.topicVideo'); ?></label>
                                    <div class="col-sm-10">
                                        <?php if($Topics->video_type==0 && $Topics->video_file!=""): ?>
                                            <div class="box p-a-xs">

                                                <video width="380" height="230" controls>
                                                    <source src="<?php echo e(URL::to('uploads/topics/'.$Topics->video_file)); ?>"
                                                            type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <br>
                                                <a target="_blank"
                                                   href="<?php echo e(URL::to('uploads/topics/'.$Topics->video_file)); ?>">
                                                    <?php echo e($Topics->video_file); ?> </a>
                                            </div>
                                        <?php endif; ?>
                                        <?php echo Form::file('video_file', array('class' => 'form-control','id'=>'video_file','accept'=>'*')); ?>

                                    </div>
                                </div>

                                <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <small>
                                            <i class="material-icons">&#xe8fd;</i>
                                            <?php echo trans('backLang.videoTypes'); ?>

                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="youtube_link_div"
                                 style="display: <?php echo e(($Topics->video_type==1) ? "block" : "none"); ?>">
                                <label for="youtube_link"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl'); ?></label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('youtube_link',$Topics->video_file, array('placeholder' => 'https://www.youtube.com/watch?v=JQs4QyKnYMQ','class' => 'form-control','id'=>'youtube_link', 'dir'=>trans('backLang.ltr'))); ?>

                                </div>
                            </div>
                            <div class="form-group row" id="vimeo_link_div"
                                 style="display: <?php echo e(($Topics->video_type ==2) ? "block" : "none"); ?>">
                                <label for="youtube_link"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl2'); ?></label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('vimeo_link',$Topics->video_file, array('placeholder' => 'https://vimeo.com/131766159','class' => 'form-control','id'=>'vimeo_link', 'dir'=>trans('backLang.ltr'))); ?>

                                </div>
                            </div>

                            <div class="form-group row" id="embed_link_div"
                                 style="display: <?php echo e(($Topics->video_type ==3) ? "block" : "none"); ?>">
                                <label for="embed_link"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.bannerVideoUrl2'); ?></label>
                                <div class="col-sm-10">
                                    <?php echo Form::textarea('embed_link',$Topics->video_file, array('placeholder' => '','class' => 'form-control','id'=>'embed_link', 'dir'=>trans('backLang.ltr'),'rows'=>'3')); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->type==3): ?>
                            <div class="form-group row">
                                <label for="audio_file"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicAudio'); ?></label>
                                <div class="col-sm-10">
                                    <?php if($Topics->audio_file!=""): ?>
                                        <div class="box p-a-xs">
                                            <audio controls>
                                                <source src="<?php echo e(URL::to('uploads/topics/'.$Topics->audio_file)); ?>"
                                                        type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                            <a target="_blank"
                                               href="<?php echo e(URL::to('uploads/topics/'.$Topics->audio_file)); ?>"> <?php echo e($Topics->audio_file); ?> </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo Form::file('audio_file', array('class' => 'form-control','id'=>'audio_file','accept'=>'audio/*')); ?>

                                </div>
                            </div>

                            <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <small>
                                        <i class="material-icons">&#xe8fd;</i>
                                        <?php echo trans('backLang.audioTypes'); ?>

                                    </small>
                                </div>
                            </div>
                        <?php endif; ?>


                        <div class="form-group row">
                            <label for="photo_file"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicPhoto'); ?></label>
                            <div class="col-sm-10">
                                <?php if($Topics->photo_file!=""): ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="topic_photo" class="col-sm-4 box p-a-xs">
                                                <a target="_blank"
                                                   href="<?php echo e(URL::to('uploads/topics/'.$Topics->photo_file)); ?>"><img
                                                            src="<?php echo e(URL::to('uploads/topics/'.$Topics->photo_file)); ?>"
                                                            class="img-responsive">
                                                    <?php echo e($Topics->photo_file); ?>

                                                </a>
                                                <br>
                                                <a onclick="document.getElementById('topic_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';"
                                                   class="btn btn-sm btn-default"><?php echo trans('backLang.delete'); ?></a>
                                            </div>
                                            <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                                <a onclick="document.getElementById('topic_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                                    <i class="material-icons">
                                                        &#xe166;</i> <?php echo trans('backLang.undoDelete'); ?></a>
                                            </div>

                                            <?php echo Form::hidden('photo_delete','0', array('id'=>'photo_delete')); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php echo Form::file('photo_file', array('class' => 'form-control','id'=>'photo_file','accept'=>'image/*')); ?>


                            </div>
                        </div>

                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                            <div class="col-sm-offset-2 col-sm-10">
                                <small>
                                    <i class="material-icons">&#xe8fd;</i>
                                    <?php echo trans('backLang.imagesTypes'); ?>

                                </small>
                            </div>
                        </div>

                        <?php if($WebmasterSection->icon_status): ?>
                            <div class="form-group row">
                                <label for="icon"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionIcon'); ?></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <?php echo Form::text('icon',$Topics->icon, array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'icon', 'data-placement'=>'bottomRight')); ?>

                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->attach_file_status): ?>
                            <div class="form-group row">
                                <label for="attach_file"
                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicAttach'); ?></label>
                                <div class="col-sm-10">
                                    <?php if($Topics->attach_file!=""): ?>
                                        <div id="topic_attach" class="col-sm-4 box p-a-xs">
                                            <a target="_blank"
                                               href="<?php echo e(URL::to('uploads/topics/'.$Topics->attach_file)); ?>"> <?php echo e($Topics->attach_file); ?> </a>
                                            <br>
                                            <a onclick="document.getElementById('topic_attach').style.display='none';document.getElementById('attach_delete').value='1';document.getElementById('undo2').style.display='block';"
                                               class="btn btn-sm btn-default"><?php echo trans('backLang.delete'); ?></a>
                                        </div>
                                        <div id="undo2" class="col-sm-4 p-a-xs" style="display: none">
                                            <a onclick="document.getElementById('topic_attach').style.display='block';document.getElementById('attach_delete').value='0';document.getElementById('undo2').style.display='none';">
                                                <i class="material-icons">
                                                    &#xe166;</i> <?php echo trans('backLang.undoDelete'); ?></a>
                                        </div>
                                        <?php echo Form::hidden('attach_delete','0', array('id'=>'attach_delete')); ?>

                                    <?php endif; ?>
                                    <?php echo Form::file('attach_file', array('class' => 'form-control','id'=>'attach_file')); ?>

                                </div>
                            </div>
                            <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <small>
                                        <i class="material-icons">&#xe8fd;</i>
                                        <?php echo trans('backLang.attachTypes'); ?>

                                    </small>
                                </div>
                            </div>
                        <?php endif; ?>


                        
                        <?php if(count($WebmasterSection->customFields) >0): ?>
                            <?php
                            $cf_title_var = "title_" . trans('backLang.boxCode');
                            $cf_title_var2 = "title_" . trans('backLang.boxCodeOther');
                            ?>
                            <?php $__currentLoopData = $WebmasterSection->customFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                if ($customField->$cf_title_var != "") {
                                    $cf_title = $customField->$cf_title_var;
                                } else {
                                    $cf_title = $customField->$cf_title_var2;
                                }

                                // check field language status
                                $cf_land_identifier = "";
                                $cf_land_active = false;
                                $cf_land_dir = trans('backLang.direction');
                                if (Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")) {
                                    if ($customField->lang_code == "ar") {
                                        $cf_land_identifier = trans('backLang.arabicBox');
                                    } elseif ($customField->lang_code == "en") {
                                        $cf_land_identifier = trans('backLang.englishBox');
                                    }
                                }
                                if (Helper::GeneralWebmasterSettings("ar_box_status") && $customField->lang_code == "ar") {
                                    $cf_land_active = true;
                                    $cf_land_dir = "rtl";
                                }
                                if (Helper::GeneralWebmasterSettings("en_box_status") && $customField->lang_code == "en") {
                                    $cf_land_active = true;
                                    $cf_land_dir = "ltr";
                                }
                                if ($customField->lang_code == "all") {
                                    $cf_land_active = true;
                                }
                                // required Status
                                $cf_required = "";
                                if ($customField->required) {
                                    $cf_required = "required";
                                }

                                $cf_saved_val = "";
                                $cf_saved_val_array = array();
                                if (count($Topics->fields) > 0) {
                                    foreach ($Topics->fields as $t_field) {
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

                                <?php if($cf_land_active): ?>
                                    <?php if($customField->type ==12): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?> <i class="fa fa-vimeo"></i>
                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>'ltr')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==11): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?> <i class="fa fa-youtube"></i>
                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>'ltr')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==10): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <?php if($cf_saved_val !=""): ?>
                                                    <?php
                                                    $file_name_id = 'topic_file_' . $customField->id;
                                                    $file_del_id = 'file_delete_' . $customField->id;
                                                    $file_old_id = 'file_old_' . $customField->id;
                                                    $file_undo_id = 'undo_' . $customField->id;
                                                    ?>
                                                    <div id="<?php echo e($file_name_id); ?>" class="col-sm-4 box p-a-xs">
                                                        <video width="380" height="230" controls>
                                                            <source src="<?php echo e(URL::to('uploads/topics/'.$cf_saved_val)); ?>"
                                                                    type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                        <a target="_blank"
                                                           href="<?php echo e(URL::to('uploads/topics/'.$cf_saved_val)); ?>">
                                                            <?php echo e($cf_saved_val); ?>

                                                        </a>
                                                        <br>
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='none';document.getElementById('<?php echo e($file_del_id); ?>').value='1';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='block';"
                                                           class="btn btn-sm btn-default"><?php echo trans('backLang.delete'); ?></a>
                                                    </div>
                                                    <div id="<?php echo e($file_undo_id); ?>" class="col-sm-4 p-a-xs"
                                                         style="display: none">
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='block';document.getElementById('<?php echo e($file_del_id); ?>').value='0';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='none';">
                                                            <i class="material-icons">
                                                                &#xe166;</i> <?php echo trans('backLang.undoDelete'); ?></a>
                                                    </div>

                                                    <?php echo Form::hidden($file_del_id,'0', array('id'=>$file_del_id)); ?>

                                                    <?php echo Form::hidden($file_old_id,$cf_saved_val, array('id'=>$file_old_id)); ?>

                                                <?php endif; ?>
                                                <?php echo Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'*')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==9): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <?php if($cf_saved_val !=""): ?>
                                                    <?php
                                                    $file_name_id = 'topic_file_' . $customField->id;
                                                    $file_del_id = 'file_delete_' . $customField->id;
                                                    $file_old_id = 'file_old_' . $customField->id;
                                                    $file_undo_id = 'undo_' . $customField->id;
                                                    ?>
                                                    <div id="<?php echo e($file_name_id); ?>" class="col-sm-4 box p-a-xs">
                                                        <a target="_blank"
                                                           href="<?php echo e(URL::to('uploads/topics/'.$cf_saved_val)); ?>">
                                                            <?php echo e($cf_saved_val); ?>

                                                        </a>
                                                        <br>
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='none';document.getElementById('<?php echo e($file_del_id); ?>').value='1';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='block';"
                                                           class="btn btn-sm btn-default"><?php echo trans('backLang.delete'); ?></a>
                                                    </div>
                                                    <div id="<?php echo e($file_undo_id); ?>" class="col-sm-4 p-a-xs"
                                                         style="display: none">
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='block';document.getElementById('<?php echo e($file_del_id); ?>').value='0';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='none';">
                                                            <i class="material-icons">
                                                                &#xe166;</i> <?php echo trans('backLang.undoDelete'); ?></a>
                                                    </div>

                                                    <?php echo Form::hidden($file_del_id,'0', array('id'=>$file_del_id)); ?>

                                                    <?php echo Form::hidden($file_old_id,$cf_saved_val, array('id'=>$file_old_id)); ?>

                                                <?php endif; ?>
                                                <?php echo Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'*')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==8): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <?php if($cf_saved_val !=""): ?>
                                                    <?php
                                                    $file_name_id = 'topic_file_' . $customField->id;
                                                    $file_del_id = 'file_delete_' . $customField->id;
                                                    $file_old_id = 'file_old_' . $customField->id;
                                                    $file_undo_id = 'undo_' . $customField->id;
                                                    ?>
                                                    <div id="<?php echo e($file_name_id); ?>" class="col-sm-4 box p-a-xs">
                                                        <a target="_blank"
                                                           href="<?php echo e(URL::to('uploads/topics/'.$cf_saved_val)); ?>"><img
                                                                    src="<?php echo e(URL::to('uploads/topics/'.$cf_saved_val)); ?>"
                                                                    class="img-responsive">
                                                            <?php echo e($cf_saved_val); ?>

                                                        </a>
                                                        <br>
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='none';document.getElementById('<?php echo e($file_del_id); ?>').value='1';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='block';"
                                                           class="btn btn-sm btn-default"><?php echo trans('backLang.delete'); ?></a>
                                                    </div>
                                                    <div id="<?php echo e($file_undo_id); ?>" class="col-sm-4 p-a-xs"
                                                         style="display: none">
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='block';document.getElementById('<?php echo e($file_del_id); ?>').value='0';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='none';">
                                                            <i class="material-icons">
                                                                &#xe166;</i> <?php echo trans('backLang.undoDelete'); ?></a>
                                                    </div>

                                                    <?php echo Form::hidden($file_del_id,'0', array('id'=>$file_del_id)); ?>

                                                    <?php echo Form::hidden($file_old_id,$cf_saved_val, array('id'=>$file_old_id)); ?>

                                                <?php endif; ?>

                                                <?php echo Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'image/*')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==7): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <select name="<?php echo e('customField_'.$customField->id); ?>[]"
                                                        id="<?php echo e('customField_'.$customField->id); ?>"
                                                        class="form-control select2-multiple" multiple
                                                        ui-jp="select2"
                                                        ui-options="{theme: 'bootstrap'}" <?php echo e($cf_required); ?>>
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
                                                        <option value="<?php echo e($line_num); ?>" <?php echo e((in_array($line_num,$cf_saved_val_array)) ? "selected='selected'":""); ?>><?php echo e($cf_details_line); ?></option>
                                                        <?php
                                                        $line_num++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==6): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <select name="<?php echo e('customField_'.$customField->id); ?>"
                                                        id="<?php echo e('customField_'.$customField->id); ?>"
                                                        class="form-control c-select" <?php echo e($cf_required); ?>>
                                                    <option value="">- - <?php echo $cf_title; ?> - -</option>
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
                                                        <option value="<?php echo e($line_num); ?>" <?php echo e(($cf_saved_val == $line_num) ? "selected='selected'":""); ?>><?php echo e($cf_details_line); ?></option>
                                                        <?php
                                                        $line_num++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==5): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <div>
                                                    <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                format: 'YYYY-MM-DD hh:mm A',
                icons: {
                  time: 'fa fa-clock-o',
                  date: 'fa fa-calendar',
                  up: 'fa fa-chevron-up',
                  down: 'fa fa-chevron-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                }
              }">
                                                        <?php echo Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)); ?>

                                                        <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==4): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                format: 'YYYY-MM-DD',
                icons: {
                  time: 'fa fa-clock-o',
                  date: 'fa fa-calendar',
                  up: 'fa fa-chevron-up',
                  down: 'fa fa-chevron-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                }
              }">
                                                        <?php echo Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)); ?>

                                                        <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==3): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::email('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)); ?>

                                            </div>
                                        </div>

                                    <?php elseif($customField->type ==2): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::number('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','min'=>0, 'dir'=>$cf_land_dir)); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==1): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::textarea('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control',$cf_required=>'', 'dir'=>$cf_land_dir,'rows'=>'5')); ?>

                                            </div>
                                        </div>
                                    <?php else: ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        

                        <div class="form-group row">
                            <label for="link_status"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.status'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','1',($Topics->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.active')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','0',($Topics->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.notActive')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row m-t-md">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                        &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                <a href="<?php echo e(route('topics',$WebmasterSection->id)); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>
                </div>


                <?php if($WebmasterSection->multi_images_status): ?>
                    <div class="tab-pane  <?php echo e($tab_3); ?>" id="tab_photos">

                        <div class="box-body">

                            <div>
                                <?php echo e(Form::open(['route'=>['topicsPhotosEdit',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id],'method'=>'POST','class'=>'dropzone white', 'files' => true])); ?>

                                <div class="dz-message" ui-jp="dropzone"
                                     ui-options="{ url: '<?php echo e(URL::to('backEnd/api/dropzone')); ?>' }">
                                    <h4 class="m-t-lg m-b-md"><?php echo e(trans('backLang.topicDropFiles')); ?></h4>
                                    <span class="text-muted block m-b-lg">( <?php echo e(trans('backLang.topicDropFiles2')); ?>

                                        )</span>
                                </div>
                                <?php echo e(Form::close()); ?>

                                <br>
                            </div>
                            <?php if(count($Topics->photos)>0): ?>
                                <div class="row">
                                    <?php echo e(Form::open(['route'=>['topicsPhotosUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                                    <?php $__currentLoopData = $Topics->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <div class="box p-a-xs">
                                                <div class="pull-right">
                                                    <?php echo Form::text('row_no_'.$photo->id,$photo->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no','style'=>'margin:0;margin-bottom:5px')); ?>

                                                </div>
                                                <label class="ui-check m-a-0">
                                                    <input type="checkbox" name="ids[]" value="<?php echo e($photo->id); ?>"><i
                                                            class="dark-white"></i>
                                                    <?php echo Form::hidden('row_ids[]',$photo->id, array('class' => 'form-control row_no')); ?>

                                                </label>
                                                <img src="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                     alt="<?php echo e($photo->title); ?>" title="<?php echo e($photo->title); ?>"
                                                     style="height: 150px"
                                                     class="img-responsive">
                                                <div class="p-a-sm">
                                                    <div class="text-ellipsis">
                                                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                            <button class="btn btn-sm warning pull-right"
                                                                    data-toggle="modal"
                                                                    data-target="#mx-<?php echo e($photo->id); ?>"
                                                                    ui-toggle-class="bounce"
                                                                    ui-target="#animate"
                                                                    title="<?php echo e(trans('backLang.delete')); ?>"
                                                                    style="padding: 0 5px 2px;">
                                                                <small><i class="material-icons">&#xe872;</i></small>
                                                            </button>
                                                        <?php endif; ?>
                                                        <a style="display: block;overflow: hidden;"
                                                           href="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                           target="_blank">
                                                            <small><?php echo e(($photo->title !="") ? $photo->title:$photo->file); ?></small>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!-- .modal -->
                                                <div id="mx-<?php echo e($photo->id); ?>" class="modal fade" data-backdrop="true">
                                                    <div class="modal-dialog" id="animate">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                            </div>
                                                            <div class="modal-body text-center p-lg">
                                                                <p>
                                                                    <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                    <br>
                                                                    <strong>[ <?php echo e(($photo->title !="") ? $photo->title:$photo->file); ?>

                                                                        ]</strong>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn dark-white p-x-md"
                                                                        data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                <a href="<?php echo e(route("topicsPhotosDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"photo_id"=>$photo->id])); ?>"
                                                                   class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div>
                                                </div>
                                                <!-- / .modal -->
                                            </div>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <!-- .modal -->
                                        <div id="mx-all" class="modal fade" data-backdrop="true">
                                            <div class="modal-dialog" id="animate">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                    </div>
                                                    <div class="modal-body text-center p-lg">
                                                        <p>
                                                            <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn dark-white p-x-md"
                                                                data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                        <button type="submit"
                                                                class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <!-- / .modal -->

                                        <label class="ui-check m-a-0">
                                            <input id="checkAll"
                                                   type="checkbox"><i></i> <?php echo e(trans('backLang.checkAll')); ?>

                                        </label>
                                        <div class="pull-right">
                                            <select name="action" id="action"
                                                    class="input-sm form-control w-sm inline v-middle" required>
                                                <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                                <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                    <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                                                <?php endif; ?>
                                            </select>
                                            <button type="submit" id="submit_all"
                                                    class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                                            <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal"
                                                    style="display: none"
                                                    data-target="#mx-all" ui-toggle-class="bounce"
                                                    ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                                            </button>
                                        </div>
                                    </div>

                                    <?php echo e(Form::close()); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($WebmasterSection->comments_status): ?>
                    <div class="tab-pane  <?php echo e($tab_4); ?>" id="tab_comments">

                        <div class="box-body">
                            <?php if(Session::has('commentST')): ?>
                                <?php if(Session::get('commentST') == "create"): ?>

                                    <div>
                                        <?php echo e(Form::open(['route'=>['topicsCommentsStore',$WebmasterSection->id,$Topics->id],'method'=>'POST', 'files' => true ])); ?>



                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicCommentName'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('name','', array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicCommentEmail'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::email('email','', array('placeholder' => '','class' => 'form-control','id'=>'email','required'=>'')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="comment"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicComment'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::textarea('comment','', array('placeholder' => '','class' => 'form-control','id'=>'comment','required'=>'','rows'=>'5')); ?>

                                            </div>
                                        </div>


                                        <div class="form-group row m-t-md">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary m-t"><i
                                                            class="material-icons">
                                                        &#xe31b;</i> <?php echo trans('backLang.add'); ?></button>
                                                <a href="<?php echo e(route('topicsComments',[$WebmasterSection->id,$Topics->id])); ?>"
                                                   class="btn btn-default m-t"><i class="material-icons">
                                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                            </div>
                                        </div>

                                        <?php echo e(Form::close()); ?>

                                    </div>

                                <?php endif; ?>

                                <?php if(Session::get('commentST') == "edit"): ?>
                                    <div>
                                        <?php echo e(Form::open(['route'=>['topicsCommentsUpdate',$WebmasterSection->id,$Topics->id,Session::get('Comment')->id],'method'=>'POST', 'files' => true ])); ?>



                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicCommentName'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('name',Session::get('Comment')->name, array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicCommentEmail'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::email('email',Session::get('Comment')->email, array('placeholder' => '','class' => 'form-control','id'=>'email','required'=>'')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="comment"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicComment'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::textarea('comment',Session::get('Comment')->comment, array('placeholder' => '','class' => 'form-control','id'=>'comment','required'=>'','rows'=>'5')); ?>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="link_status"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.status'); ?></label>
                                            <div class="col-sm-10">
                                                <div class="radio">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('status','1',(Session::get('Comment')->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.active')); ?>

                                                    </label>
                                                    &nbsp; &nbsp;
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('status','0',(Session::get('Comment')->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.notActive')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row m-t-md">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary m-t"><i
                                                            class="material-icons">
                                                        &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                                <a href="<?php echo e(route('topicsComments',[$WebmasterSection->id,$Topics->id])); ?>"
                                                   class="btn btn-default m-t"><i class="material-icons">
                                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                            </div>
                                        </div>

                                        <?php echo e(Form::close()); ?>

                                    </div>
                                <?php endif; ?>
                            <?php else: ?>

                                <?php if(count($Topics->comments)>0): ?>
                                    <div class="row p-a">
                                        <div class="col-sm-12">
                                            <a class="btn btn-fw primary"
                                               href="<?php echo e(route("topicsCommentsCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                                <i class="material-icons">&#xe02e;</i>
                                                &nbsp; <?php echo e(trans('backLang.topicNewComment')); ?>

                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(count($Topics->comments) == 0): ?>
                                    <div class="row p-a">
                                        <div class="col-sm-12">
                                            <div class=" p-a text-center light ">
                                                <?php echo e(trans('backLang.noData')); ?>

                                                <br>
                                                <br>
                                                <a class="btn btn-fw primary"
                                                   href="<?php echo e(route("topicsCommentsCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                                    <i class="material-icons">&#xe02e;</i>
                                                    &nbsp; <?php echo e(trans('backLang.topicNewComment')); ?>

                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(count($Topics->comments)>0): ?>
                                    <?php echo e(Form::open(['route'=>['topicsCommentsUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                                    <div class="row">
                                        <table class="table table-striped  b-t">
                                            <thead>
                                            <tr>
                                                <th style="width:20px;">
                                                    <label class="ui-check m-a-0">
                                                        <input id="checkAll2" type="checkbox"><i></i>
                                                    </label>
                                                </th>
                                                <th><?php echo e(trans('backLang.topicCommentName')); ?></th>
                                                <th><?php echo e(trans('backLang.topicComment')); ?></th>
                                                <th class="text-center"
                                                    style="width:50px;"><?php echo e(trans('backLang.status')); ?></th>
                                                <th class="text-center"
                                                    style="width:200px;"><?php echo e(trans('backLang.options')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $Topics->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><label class="ui-check m-a-0">
                                                            <input type="checkbox" name="ids[]"
                                                                   value="<?php echo e($comment->id); ?>"><i
                                                                    class="dark-white"></i>
                                                            <?php echo Form::hidden('row_ids[]',$comment->id, array('class' => 'form-control row_no')); ?>

                                                        </label>
                                                    </td>
                                                    <td>
                                                        <?php echo Form::text('row_no_'.$comment->id,$comment->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no2')); ?>

                                                        <?php echo e($comment->name); ?>

                                                        <div>
                                                            <small>
                                                                <?php echo e($comment->email); ?>

                                                            </small>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <small><?php echo e($comment->date); ?></small>
                                                        <div>
                                                            <small><?php echo e($comment->comment); ?></small>
                                                        </div>
                                                    </td>

                                                    <td class="text-center">
                                                        <i class="fa <?php echo e(($comment->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-sm success"
                                                           href="<?php echo e(route("topicsCommentsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"comment_id"=>$comment->id])); ?>">
                                                            <small><i class="material-icons">
                                                                    &#xe3c9;</i> <?php echo e(trans('backLang.edit')); ?></small>
                                                        </a>
                                                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                            <button class="btn btn-sm warning" data-toggle="modal"
                                                                    data-target="#mc-<?php echo e($comment->id); ?>"
                                                                    ui-toggle-class="bounce"
                                                                    ui-target="#animate">
                                                                <small><i class="material-icons">
                                                                        &#xe872;</i> <?php echo e(trans('backLang.delete')); ?>

                                                                </small>
                                                            </button>
                                                        <?php endif; ?>

                                                    </td>
                                                </tr>
                                                <!-- .modal -->
                                                <div id="mc-<?php echo e($comment->id); ?>" class="modal fade" data-backdrop="true">
                                                    <div class="modal-dialog" id="animate">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                            </div>
                                                            <div class="modal-body text-center p-lg">
                                                                <p>
                                                                    <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                    <br>
                                                                    <strong>[ <?php echo $comment->name; ?> ]</strong>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn dark-white p-x-md"
                                                                        data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                <a href="<?php echo e(route("topicsCommentsDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"comment_id"=>$comment->id])); ?>"
                                                                   class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div>
                                                </div>
                                                <!-- / .modal -->
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs">
                                            <!-- .modal -->
                                            <div id="mc-all" class="modal fade" data-backdrop="true">
                                                <div class="modal-dialog" id="animate">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                        </div>
                                                        <div class="modal-body text-center p-lg">
                                                            <p>
                                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark-white p-x-md"
                                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                            <button type="submit"
                                                                    class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div>
                                            </div>
                                            <!-- / .modal -->

                                            <select name="action" id="action2"
                                                    class="input-sm form-control w-sm inline v-middle" required>
                                                <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                                <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                                <option value="activate"><?php echo e(trans('backLang.activeSelected')); ?></option>
                                                <option value="block"><?php echo e(trans('backLang.blockSelected')); ?></option>
                                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                    <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                                                <?php endif; ?>
                                            </select>
                                            <button type="submit" id="submit_all2"
                                                    class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                                            <button id="submit_show_msg2" class="btn btn-sm white" data-toggle="modal"
                                                    style="display: none"
                                                    data-target="#mc-all" ui-toggle-class="bounce"
                                                    ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php echo e(Form::close()); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>


                

                <?php if($WebmasterSection->extra_attach_file_status): ?>
                    <div class="tab-pane  <?php echo e($tab_6); ?>" id="tab_files">

                        <div class="box-body">
                            <?php if(Session::has('fileST')): ?>
                                <?php if(Session::get('fileST') == "create"): ?>

                                    <div>
                                        <?php echo e(Form::open(['route'=>['topicsFilesStore',$WebmasterSection->id,$Topics->id],'method'=>'POST', 'files' => true ])); ?>


                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                            <div class="form-group row">
                                                <label for="file_title_ar"
                                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

                                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                </label>
                                                <div class="col-sm-10">
                                                    <?php echo Form::text('title_ar','', array('placeholder' => '','class' => 'form-control','id'=>'file_title_ar','required'=>'', 'dir'=>trans('backLang.rtl'))); ?>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                            <div class="form-group row">
                                                <label for="file_title_en"
                                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

                                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                </label>
                                                <div class="col-sm-10">
                                                    <?php echo Form::text('title_en','', array('placeholder' => '','class' => 'form-control','id'=>'file_title_en','required'=>'', 'dir'=>trans('backLang.ltr'))); ?>

                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-group row">
                                            <label for="files_file"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicAttach'); ?></label>
                                            <div class="col-sm-10">
                                                <?php echo Form::file('file', array('class' => 'form-control','id'=>'attach_file','required'=>'')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <small>
                                                    <i class="material-icons">&#xe8fd;</i>
                                                    <?php echo trans('backLang.attachTypes'); ?>

                                                </small>
                                            </div>
                                        </div>


                                        <div class="form-group row m-t-md">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary m-t"><i
                                                            class="material-icons">
                                                        &#xe31b;</i> <?php echo trans('backLang.add'); ?></button>
                                                <a href="<?php echo e(route('topicsFiles',[$WebmasterSection->id,$Topics->id])); ?>"
                                                   class="btn btn-default m-t"><i class="material-icons">
                                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                            </div>
                                        </div>

                                        <?php echo e(Form::close()); ?>

                                    </div>

                                <?php endif; ?>

                                <?php if(Session::get('fileST') == "edit"): ?>
                                    <div>
                                        <?php echo e(Form::open(['route'=>['topicsFilesUpdate',$WebmasterSection->id,$Topics->id,Session::get('AttachFile')->id],'method'=>'POST', 'files' => true ])); ?>



                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                            <div class="form-group row">
                                                <label for="file_title_ar"
                                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

                                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                </label>
                                                <div class="col-sm-10">
                                                    <?php echo Form::text('title_ar',Session::get('AttachFile')->title_ar, array('placeholder' => '','class' => 'form-control','id'=>'file_title_ar','required'=>'', 'dir'=>trans('backLang.rtl'))); ?>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                            <div class="form-group row">
                                                <label for="file_title_en"
                                                       class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

                                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                </label>
                                                <div class="col-sm-10">
                                                    <?php echo Form::text('title_en',Session::get('AttachFile')->title_en, array('placeholder' => '','class' => 'form-control','id'=>'file_title_en','required'=>'', 'dir'=>trans('backLang.ltr'))); ?>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="form-group row">
                                            <label for="files_file"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicAttach'); ?></label>
                                            <div class="col-sm-10">
                                                <div class="col-sm-4 box p-a-xs">
                                                    <a target="_blank"
                                                       href="<?php echo e(URL::to('uploads/topics/'.Session::get('AttachFile')->file)); ?>"> <?php echo Helper::GetIcon(URL::to('uploads/topics/'),Session::get('AttachFile')->file); ?> <?php echo e(Session::get('AttachFile')->file); ?> </a>
                                                </div>
                                                <?php echo Form::file('file', array('class' => 'form-control','id'=>'files_file')); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <small>
                                                    <i class="material-icons">&#xe8fd;</i>
                                                    <?php echo trans('backLang.attachTypes'); ?>

                                                </small>
                                            </div>
                                        </div>

                                        <div class="form-group row m-t-md">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary m-t"><i
                                                            class="material-icons">
                                                        &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                                <a href="<?php echo e(route('topicsFiles',[$WebmasterSection->id,$Topics->id])); ?>"
                                                   class="btn btn-default m-t"><i class="material-icons">
                                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                            </div>
                                        </div>

                                        <?php echo e(Form::close()); ?>

                                    </div>
                                <?php endif; ?>
                            <?php else: ?>

                                <?php if(count($Topics->attachFiles)>0): ?>
                                    <div class="row p-a">
                                        <div class="col-sm-12">
                                            <a class="btn btn-fw primary"
                                               href="<?php echo e(route("topicsFilesCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                                <i class="material-icons">&#xe02e;</i>
                                                &nbsp; <?php echo e(trans('backLang.topicAttach')); ?>

                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(count($Topics->attachFiles) == 0): ?>
                                    <div class="row p-a">
                                        <div class="col-sm-12">
                                            <div class=" p-a text-center light ">
                                                <?php echo e(trans('backLang.noData')); ?>

                                                <br>
                                                <br>
                                                <a class="btn btn-fw primary"
                                                   href="<?php echo e(route("topicsFilesCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                                    <i class="material-icons">&#xe02e;</i>
                                                    &nbsp; <?php echo e(trans('backLang.topicAttach')); ?>

                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(count($Topics->attachFiles)>0): ?>
                                    <?php echo e(Form::open(['route'=>['topicsFilesUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                                    <div class="row">
                                        <table class="table table-striped  b-t">
                                            <thead>
                                            <tr>
                                                <th style="width:20px;">
                                                    <label class="ui-check m-a-0">
                                                        <input id="checkAll4" type="checkbox"><i></i>
                                                    </label>
                                                </th>
                                                <th><?php echo e(trans('backLang.topicAttach')); ?></th>
                                                <th><?php echo e(trans('backLang.topicName')); ?></th>
                                                <th class="text-center"
                                                    style="width:200px;"><?php echo e(trans('backLang.options')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $title_var = "title_" . trans('backLang.boxCode');
                                            $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                            ?>
                                            <?php $__currentLoopData = $Topics->attachFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                if ($file->$title_var != "") {
                                                    $file_title = $file->$title_var;
                                                } else {
                                                    $file_title = $file->$title_var2;
                                                }
                                                ?>
                                                <tr>
                                                    <td><label class="ui-check m-a-0">
                                                            <input type="checkbox" name="ids[]"
                                                                   value="<?php echo e($file->id); ?>"><i
                                                                    class="dark-white"></i>
                                                            <?php echo Form::hidden('row_ids[]',$file->id, array('class' => 'form-control row_no')); ?>

                                                        </label>
                                                    </td>
                                                    <td>
                                                        <?php echo Form::text('row_no_'.$file->id,$file->row_no, array('class' => 'pull-left form-control row_no')); ?>

                                                        <a href="<?php echo e(URL::to('uploads/topics/'.$file->file)); ?>"
                                                           target="_blank">
                                                            <?php echo Helper::GetIcon(URL::to('uploads/topics/'),$file->file); ?>

                                                            <?php echo e($file->file); ?></a>
                                                    </td>
                                                    <td>
                                                        <small>
                                                            <?php echo $file_title; ?>

                                                        </small>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-sm success"
                                                           href="<?php echo e(route("topicsFilesEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"file_id"=>$file->id])); ?>">
                                                            <small><i class="material-icons">
                                                                    &#xe3c9;</i> <?php echo e(trans('backLang.edit')); ?></small>
                                                        </a>
                                                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                            <button class="btn btn-sm warning" data-toggle="modal"
                                                                    data-target="#mf-<?php echo e($file->id); ?>"
                                                                    ui-toggle-class="bounce"
                                                                    ui-target="#animate">
                                                                <small><i class="material-icons">
                                                                        &#xe872;</i> <?php echo e(trans('backLang.delete')); ?>

                                                                </small>
                                                            </button>
                                                        <?php endif; ?>

                                                    </td>
                                                </tr>
                                                <!-- .modal -->
                                                <div id="mf-<?php echo e($file->id); ?>" class="modal fade" data-backdrop="true">
                                                    <div class="modal-dialog" id="animate">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                            </div>
                                                            <div class="modal-body text-center p-lg">
                                                                <p>
                                                                    <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                    <br>
                                                                    <strong>[ <?php echo $file_title; ?> ]</strong>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn dark-white p-x-md"
                                                                        data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                <a href="<?php echo e(route("topicsFilesDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"file_id"=>$file->id])); ?>"
                                                                   class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div>
                                                </div>
                                                <!-- / .modal -->
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs">
                                            <!-- .modal -->
                                            <div id="mf-all" class="modal fade" data-backdrop="true">
                                                <div class="modal-dialog" id="animate">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                        </div>
                                                        <div class="modal-body text-center p-lg">
                                                            <p>
                                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark-white p-x-md"
                                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                            <button type="submit"
                                                                    class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div>
                                            </div>
                                            <!-- / .modal -->

                                            <select name="action" id="action4"
                                                    class="input-sm form-control w-sm inline v-middle" required>
                                                <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                                <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                    <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                                                <?php endif; ?>
                                            </select>
                                            <button type="submit" id="submit_all4"
                                                    class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                                            <button id="submit_show_msg4" class="btn btn-sm white" data-toggle="modal"
                                                    style="display: none"
                                                    data-target="#mf-all" ui-toggle-class="bounce"
                                                    ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php echo e(Form::close()); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                


                

                <?php if($WebmasterSection->related_status): ?>
                    <div class="tab-pane  <?php echo e($tab_7); ?>" id="tab_related">

                        <div class="box-body">
                            <?php if(Session::has('relatedST')): ?>
                                <?php if(Session::get('relatedST') == "create"): ?>

                                    <div>
                                        <?php echo e(Form::open(['route'=>['topicsRelatedStore',$WebmasterSection->id,$Topics->id],'method'=>'POST' ])); ?>


                                        <div class="form-group row">
                                            <label for="file_title_ar"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.siteSectionsSettings'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <select name="related_section_id" id="related_section_id"
                                                        class="form-control c-select">
                                                    <option value="0">- - <?php echo trans('backLang.topicSelectSection'); ?>

                                                        - -
                                                    </option>
                                                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                        ?>
                                                        <option value="<?php echo e($WebmasterSection->id); ?>"><?php echo trans('backLang.'.$WebmasterSection->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="file_title_ar"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.relatedTopics'); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <div id="r_topics"
                                                     style="max-height: 200px;overflow-y: scroll;padding: 5px;background: #f5f5f5;border: 1px solid #eee">
                                                    <i class="material-icons">&#xe8fd;</i> <?php echo trans('backLang.relatedTopicsSelect'); ?>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row m-t-md">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary m-t"><i
                                                            class="material-icons">
                                                        &#xe31b;</i> <?php echo trans('backLang.add'); ?></button>
                                                <a href="<?php echo e(route('topicsRelated',[$WebmasterSection->id,$Topics->id])); ?>"
                                                   class="btn btn-default m-t"><i class="material-icons">
                                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                            </div>
                                        </div>

                                        <?php echo e(Form::close()); ?>

                                    </div>

                                <?php endif; ?>

                            <?php else: ?>

                                <?php if(count($Topics->relatedTopics)>0): ?>
                                    <div class="row p-a">
                                        <div class="col-sm-12">
                                            <a class="btn btn-fw primary"
                                               href="<?php echo e(route("topicsRelatedCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                                <i class="material-icons">&#xe02e;</i>
                                                &nbsp; <?php echo e(trans('backLang.relatedTopicsAdd')); ?>

                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(count($Topics->relatedTopics) == 0): ?>
                                    <div class="row p-a">
                                        <div class="col-sm-12">
                                            <div class=" p-a text-center light ">
                                                <?php echo e(trans('backLang.noData')); ?>

                                                <br>
                                                <br>
                                                <a class="btn btn-fw primary"
                                                   href="<?php echo e(route("topicsRelatedCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                                    <i class="material-icons">&#xe02e;</i>
                                                    &nbsp; <?php echo e(trans('backLang.relatedTopicsAdd')); ?>

                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(count($Topics->relatedTopics)>0): ?>
                                    <?php echo e(Form::open(['route'=>['topicsRelatedUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                                    <div class="row">
                                        <table class="table table-striped  b-t">
                                            <thead>
                                            <tr>
                                                <th style="width:20px;">
                                                    <label class="ui-check m-a-0">
                                                        <input id="checkAll4" type="checkbox"><i></i>
                                                    </label>
                                                </th>
                                                <th><?php echo e(trans('backLang.topicName')); ?></th>
                                                <th class="text-center"
                                                    style="width:200px;"><?php echo e(trans('backLang.options')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $title_var = "title_" . trans('backLang.boxCode');
                                            $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                            ?>
                                            <?php $__currentLoopData = $Topics->relatedTopics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedTopic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php


                                                if ($relatedTopic->topic->$title_var != "") {
                                                $relatedTopic_title = $relatedTopic->topic->$title_var;
                                                } else {
                                                $relatedTopic_title = $relatedTopic->topic->$title_var2;
                                                }

                                                ?>
                                                <tr>
                                                    <td><label class="ui-check m-a-0">
                                                            <input type="checkbox" name="ids[]"
                                                                   value="<?php echo e($relatedTopic->id); ?>"><i
                                                                    class="dark-white"></i>
                                                            <?php echo Form::hidden('row_ids[]',$relatedTopic->id, array('class' => 'form-control row_no')); ?>

                                                        </label>
                                                    </td>
                                                    <td> <?php echo Form::text('row_no_'.$relatedTopic->id,$relatedTopic->row_no, array('class' => 'pull-left form-control row_no')); ?>

                                                        <small>
                                                            <?php echo $relatedTopic_title; ?>

                                                        </small>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                            <button class="btn btn-sm warning" data-toggle="modal"
                                                                    data-target="#mf-<?php echo e($relatedTopic->id); ?>"
                                                                    ui-toggle-class="bounce"
                                                                    ui-target="#animate">
                                                                <small><i class="material-icons">
                                                                        &#xe872;</i> <?php echo e(trans('backLang.delete')); ?>

                                                                </small>
                                                            </button>
                                                        <?php endif; ?>

                                                    </td>
                                                </tr>
                                                <!-- .modal -->
                                                <div id="mf-<?php echo e($relatedTopic->id); ?>" class="modal fade"
                                                     data-backdrop="true">
                                                    <div class="modal-dialog" id="animate">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                            </div>
                                                            <div class="modal-body text-center p-lg">
                                                                <p>
                                                                    <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                    <br>
                                                                    <strong>[ <?php echo $relatedTopic_title; ?> ]</strong>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn dark-white p-x-md"
                                                                        data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                <a href="<?php echo e(route("topicsRelatedDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"related_id"=>$relatedTopic->id])); ?>"
                                                                   class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div>
                                                </div>
                                                <!-- / .modal -->
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs">
                                            <!-- .modal -->
                                            <div id="mf-all" class="modal fade" data-backdrop="true">
                                                <div class="modal-dialog" id="animate">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                        </div>
                                                        <div class="modal-body text-center p-lg">
                                                            <p>
                                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark-white p-x-md"
                                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                            <button type="submit"
                                                                    class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div>
                                            </div>
                                            <!-- / .modal -->

                                            <select name="action" id="action4"
                                                    class="input-sm form-control w-sm inline v-middle" required>
                                                <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                                <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                    <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                                                <?php endif; ?>
                                            </select>
                                            <button type="submit" id="submit_all4"
                                                    class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                                            <button id="submit_show_msg4" class="btn btn-sm white" data-toggle="modal"
                                                    style="display: none"
                                                    data-target="#mf-all" ui-toggle-class="bounce"
                                                    ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                                            </button>
                                        </div>
                                    </div>
                                    <?php echo e(Form::close()); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                

                <?php if($WebmasterSection->maps_status): ?>
                    <div class="tab-pane  <?php echo e($tab_5); ?>" id="tab_maps">

                        <div class="box-body">

                            <div class="row">
                                <?php if(Session::has('mapST')): ?>

                                    <?php if(Session::get('mapST') == "edit"): ?>
                                        <div class="col-sm-offset-2 col-sm-8">
                                            <br>
                                            <?php echo e(Form::open(['route'=>['topicsMapsUpdate',$WebmasterSection->id,$Topics->id,Session::get('Map')->id],'method'=>'POST', 'files' => true ])); ?>



                                            <div class="form-group row">
                                                <label for="longitude"
                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapLocation'); ?>

                                                </label>
                                                <div class="col-sm-5">
                                                    <?php echo Form::text('longitude',Session::get('Map')->longitude, array('placeholder' => '','class' => 'form-control','id'=>'longitude','required'=>'')); ?>

                                                </div>
                                                <div class="col-sm-4">
                                                    <?php echo Form::text('latitude',Session::get('Map')->latitude, array('placeholder' => '','class' => 'form-control','id'=>'latitude','required'=>'')); ?>

                                                </div>
                                            </div>


                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                <div class="form-group row">
                                                    <label for="title_ar"
                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapTitle'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <?php echo Form::text('title_ar',Session::get('Map')->title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar', 'dir'=>trans('backLang.rtl'))); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                <div class="form-group row">
                                                    <label for="title_en"
                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapTitle'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <?php echo Form::text('title_en',Session::get('Map')->title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en', 'dir'=>trans('backLang.ltr'))); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                <div class="form-group row">
                                                    <label for="details_ar"
                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapDetails'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <?php echo Form::textarea('details_ar',Session::get('Map')->details_ar, array('placeholder' => '','class' => 'form-control','id'=>'details_ar','rows'=>'3', 'dir'=>trans('backLang.rtl'))); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                <div class="form-group row">
                                                    <label for="details_en"
                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapDetails'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <?php echo Form::textarea('details_en',Session::get('Map')->details_en, array('placeholder' => '','class' => 'form-control','id'=>'details_en','rows'=>'3', 'dir'=>trans('backLang.ltr'))); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="form-group row">
                                                <label for="link_status"
                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapIcon'); ?></label>
                                                <div class="col-sm-9">
                                                    <div class="radio">
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','0',true, array('id' => 'status1','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_0.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','1',(Session::get('Map')->icon==1) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_1.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','2',(Session::get('Map')->icon==2) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_2.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','3',(Session::get('Map')->icon==3) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_3.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','4',(Session::get('Map')->icon==4) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_4.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','5',(Session::get('Map')->icon==5) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_5.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','6',(Session::get('Map')->icon==6) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_6.png')); ?>"
                                                                 style="width: 25px;">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="link_status"
                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.status'); ?></label>
                                                <div class="col-sm-9">
                                                    <div class="radio">
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('status','1',(Session::get('Map')->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <?php echo e(trans('backLang.active')); ?>

                                                        </label>
                                                        &nbsp; &nbsp;
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('status','0',(Session::get('Map')->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <?php echo e(trans('backLang.notActive')); ?>

                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row m-t-md">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-primary m-t"><i
                                                                class="material-icons">
                                                            &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                                    <a href="<?php echo e(route('topicsMaps',[$WebmasterSection->id,$Topics->id])); ?>"
                                                       class="btn btn-default m-t"><i class="material-icons">
                                                            &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                                </div>
                                            </div>

                                            <?php echo e(Form::close()); ?>

                                        </div>
                                    <?php endif; ?>

                                <?php else: ?>
                                    <div>
                                        <div id="mmn-<?php echo e($Topics->id); ?>" class="modal fade"
                                             data-backdrop="true">
                                            <div class="modal-dialog" id="animate">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><?php echo e(trans('backLang.topicNewMap')); ?></h5>
                                                    </div>
                                                    <?php echo e(Form::open(['route'=>['topicsMapsStore',$WebmasterSection->id,$Topics->id],'method'=>'POST', 'files' => true ])); ?>

                                                    <div class="modal-body p-lg">
                                                        <div>

                                                            <div class="form-group row">
                                                                <label for="longitude"
                                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapLocation'); ?>

                                                                </label>
                                                                <div class="col-sm-5">
                                                                    <?php echo Form::text('longitude','', array('placeholder' => '','class' => 'form-control','id'=>'longitude','required'=>'')); ?>

                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <?php echo Form::text('latitude','', array('placeholder' => '','class' => 'form-control','id'=>'latitude','required'=>'')); ?>

                                                                </div>
                                                            </div>


                                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                                <div class="form-group row">
                                                                    <label for="title_ar"
                                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapTitle'); ?>

                                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <?php echo Form::text('title_ar','', array('placeholder' => '','class' => 'form-control','id'=>'title_ar', 'dir'=>trans('backLang.rtl'))); ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                                <div class="form-group row">
                                                                    <label for="title_en"
                                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapTitle'); ?>

                                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <?php echo Form::text('title_en','', array('placeholder' => '','class' => 'form-control','id'=>'title_en', 'dir'=>trans('backLang.ltr'))); ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                                <div class="form-group row">
                                                                    <label for="details_ar"
                                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapDetails'); ?>

                                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <?php echo Form::textarea('details_ar','', array('placeholder' => '','class' => 'form-control','id'=>'details_ar','rows'=>'3', 'dir'=>trans('backLang.rtl'))); ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                                <div class="form-group row">
                                                                    <label for="details_en"
                                                                           class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapDetails'); ?>

                                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <?php echo Form::textarea('details_en','', array('placeholder' => '','class' => 'form-control','id'=>'details_en','rows'=>'3', 'dir'=>trans('backLang.ltr'))); ?>

                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>


                                                            <div class="form-group row">
                                                                <label for="link_status"
                                                                       class="col-sm-3 form-control-label"><?php echo trans('backLang.topicMapIcon'); ?></label>
                                                                <div class="col-sm-9">
                                                                    <div class="radio">
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','0',true, array('id' => 'status1','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_0.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','1',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_1.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','2',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_2.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','3',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_3.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','4',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_4.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','5',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_5.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                        <label class="ui-check ui-check-md">
                                                                            <?php echo Form::radio('icon','6',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                                            <i class="dark-white"></i>
                                                                            <img src="<?php echo e(URL::to('backEnd/assets/images/marker_6.png')); ?>"
                                                                                 style="width: 25px;">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="btn dark-white p-x-md"
                                                                data-dismiss="modal"><?php echo e(trans('backLang.cancel')); ?></button>
                                                        <button type="submit"
                                                                class="btn btn-primary p-x-md"><?php echo e(trans('backLang.add')); ?></button>
                                                    </div>
                                                    <?php echo e(Form::close()); ?>

                                                </div><!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <div class="row p-a" style="display: none">
                                            <div class="col-sm-12">
                                                <button class="btn btn-fw primary" data-toggle="modal"
                                                        data-target="#mmn-<?php echo e($Topics->id); ?>"
                                                        ui-toggle-class="bounce" id="mapNew"
                                                        ui-target="#animate">
                                                    <i class="material-icons">&#xe02e;</i>
                                                    &nbsp; <?php echo e(trans('backLang.topicNewMap')); ?>

                                                </button>
                                            </div>
                                        </div>
                                        <?php if(count($Topics->maps) == 0): ?>
                                            <div class="row p-a" id="mapDivBtns">
                                                <div class="col-sm-12">
                                                    <div class=" p-a text-center light ">
                                                        <?php echo e(trans('backLang.noData')); ?>

                                                        <br>
                                                        <br>
                                                        <a class="btn btn-fw primary" id="mapDivNew">
                                                            <i class="material-icons">&#xe02e;</i>
                                                            &nbsp; <?php echo e(trans('backLang.topicNewMap')); ?>

                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-sm-5">
                                            <?php if(count($Topics->maps)>0): ?>
                                                <?php echo e(Form::open(['route'=>['topicsMapsUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                                                <div class="row">
                                                    <table class="table table-striped  b-t">
                                                        <thead>
                                                        <tr>
                                                            <th style="width:20px;">
                                                                <label class="ui-check m-a-0">
                                                                    <input id="checkAll3" type="checkbox"><i></i>
                                                                </label>
                                                            </th>
                                                            <th><?php echo e(trans('backLang.topicCommentName')); ?></th>
                                                            <th class="text-center"
                                                                style="width:30px;"><?php echo e(trans('backLang.status')); ?></th>
                                                            <th class="text-center"
                                                                style="width:110px;"><?php echo e(trans('backLang.options')); ?></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $title_var = "title_" . trans('backLang.boxCode');
                                                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                                        ?>
                                                        <?php $__currentLoopData = $Topics->maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                            if ($map->$title_var != "") {
                                                            $title = $map->$title_var;
                                                            } else {
                                                            $title = $map->$title_var2;
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td><label class="ui-check m-a-0">
                                                                        <input type="checkbox" name="ids[]"
                                                                               value="<?php echo e($map->id); ?>"><i
                                                                                class="dark-white"></i>
                                                                        <?php echo Form::hidden('row_ids[]',$map->id, array('class' => 'form-control row_no')); ?>

                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <?php echo Form::text('row_no_'.$map->id,$map->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no3')); ?>

                                                                    <img src="<?php echo e(URL::to('backEnd/assets/images/marker_').$map->icon.".png"); ?>"
                                                                         style="width: 20px;">
                                                                    <?php if($title !=""): ?>
                                                                        <small><?php echo $title; ?></small>
                                                                    <?php else: ?>
                                                                        <small>
                                                                            <?php echo $map->longitude; ?>

                                                                        </small>
                                                                    <?php endif; ?>
                                                                </td>

                                                                <td class="text-center">
                                                                    <i class="fa <?php echo e(($map->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                                                </td>
                                                                <td class="text-center">
                                                                    <a class="btn btn-sm success"
                                                                       href="<?php echo e(route("topicsMapsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"map_id"=>$map->id])); ?>">
                                                                        <small><i class="material-icons">
                                                                                &#xe3c9;</i></small>
                                                                    </a>
                                                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                                        <button class="btn btn-sm warning"
                                                                                data-toggle="modal"
                                                                                data-target="#mm-<?php echo e($map->id); ?>"
                                                                                ui-toggle-class="bounce"
                                                                                ui-target="#animate">
                                                                            <small><i class="material-icons">
                                                                                    &#xe872;</i></small>
                                                                        </button>
                                                                    <?php endif; ?>

                                                                </td>
                                                            </tr>
                                                            <!-- .modal -->
                                                            <div id="mm-<?php echo e($map->id); ?>" class="modal fade"
                                                                 data-backdrop="true">
                                                                <div class="modal-dialog" id="animate">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                                        </div>
                                                                        <div class="modal-body text-center p-lg">
                                                                            <p>
                                                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                                <br>
                                                                                <strong><?php echo $title; ?></strong>
                                                                                <br>
                                                                                <small>[
                                                                                    <?php echo $map->longitude; ?>

                                                                                    , <?php echo $map->latitude; ?>

                                                                                    ]
                                                                                </small>

                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                    class="btn dark-white p-x-md"
                                                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                            <a href="<?php echo e(route("topicsMapsDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"map_id"=>$map->id])); ?>"
                                                                               class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></a>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div>
                                                            </div>
                                                            <!-- / .modal -->
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 hidden-xs">
                                                        <!-- .modal -->
                                                        <div id="mm-all" class="modal fade" data-backdrop="true">
                                                            <div class="modal-dialog" id="animate">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                                    </div>
                                                                    <div class="modal-body text-center p-lg">
                                                                        <p>
                                                                            <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                                class="btn dark-white p-x-md"
                                                                                data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                                        <button type="submit"
                                                                                class="btn danger p-x-md"><?php echo e(trans('backLang.yes')); ?></button>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div>
                                                        </div>
                                                        <!-- / .modal -->

                                                        <select name="action" id="action3"
                                                                class="input-sm form-control w-sm inline v-middle"
                                                                required>
                                                            <option value=""><?php echo e(trans('backLang.bulkAction')); ?></option>
                                                            <option value="order"><?php echo e(trans('backLang.saveOrder')); ?></option>
                                                            <option value="activate"><?php echo e(trans('backLang.activeSelected')); ?></option>
                                                            <option value="block"><?php echo e(trans('backLang.blockSelected')); ?></option>
                                                            <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                                <option value="delete"><?php echo e(trans('backLang.deleteSelected')); ?></option>
                                                            <?php endif; ?>
                                                        </select>
                                                        <button type="submit" id="submit_all3"
                                                                class="btn btn-sm white"><?php echo e(trans('backLang.apply')); ?></button>
                                                        <button id="submit_show_msg3" class="btn btn-sm white"
                                                                data-toggle="modal"
                                                                style="display: none"
                                                                data-target="#mm-all" ui-toggle-class="bounce"
                                                                ui-target="#animate"><?php echo e(trans('backLang.apply')); ?>

                                                        </button>
                                                    </div>
                                                </div>
                                                <?php echo e(Form::close()); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php
                                    $map_dsp = "style='display:none'";
                                    $map_wds = "12";
                                    if (count($Topics->maps) > 0) {
                                    $map_dsp = "";
                                    $map_wds = "7";
                                    }
                                    ?>
                                    <div id="mapDiv" class="col-sm-<?php echo e($map_wds); ?>" <?php echo $map_dsp; ?>>

                                        <br>
                                        <div style="margin-bottom: 3px;">
                                            <small>
                                                <?php echo trans('backLang.topicMapClick'); ?> ,
                                                <a data-toggle="modal"
                                                   data-target="#mmn-<?php echo e($Topics->id); ?>"
                                                   ui-toggle-class="bounce"
                                                   ui-target="#animate">
                                                    <u>
                                                        <?php echo trans('backLang.topicMapORClick'); ?>

                                                    </u>
                                                </a>
                                            </small>
                                        </div>
                                        <div id="map" style="height: 400px"></div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                <?php endif; ?>

                <?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
                    <div class="tab-pane  <?php echo e($tab_2); ?>" id="tab_seo">

                        <div class="box-body">
                            <?php echo e(Form::open(['route'=>['topicsSEOUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id],'method'=>'POST'])); ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEOTitle'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.arabicBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::text('seo_title_ar',$Topics->seo_title_ar, array('class' => 'form-control','id'=>'seo_title_ar','maxlength'=>'65', 'dir'=>trans('backLang.rtl'))); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.friendlyURL'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.arabicBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::text('seo_url_slug_ar',$Topics->seo_url_slug_ar, array('class' => 'form-control','id'=>'seo_url_slug_ar', 'dir'=>trans('backLang.rtl'))); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEODesc'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.arabicBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::textarea('seo_description_ar',$Topics->seo_description_ar, array('class' => 'form-control','id'=>'seo_description_ar','maxlength'=>'165', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEOKeywords'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.arabicBox'); ?></small><?php endif; ?>

                                                <?php echo Form::textarea('seo_keywords_ar',$Topics->seo_keywords_ar, array('class' => 'form-control','id'=>'seo_keywords_ar', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-6">

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <?php
                                        $seo_example_title = $Topics->title_ar;
                                        $seo_example_desc = Helper::GeneralSiteSettings("site_desc_ar");
                                        if ($Topics->seo_title_ar != "") {
                                        $seo_example_title = $Topics->seo_title_ar;
                                        }
                                        if ($Topics->seo_description_ar != "") {
                                        $seo_example_desc = $Topics->seo_description_ar;
                                        }
                                        if ($Topics->seo_url_slug_ar != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                        $seo_example_url = url($Topics->seo_url_slug_ar);
                                        } else {
                                        $seo_example_url = route('FrontendTopic', ["section" => $Topics->webmasterSection->name, "id" => $Topics->id]);
                                        }
                                        ?>
                                        <div class="form-group">
                                            <div>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.arabicBox'); ?></small> <?php endif; ?>
                                                &nbsp;
                                                <div class="search-example" dir="rtl">
                                                    <a id="title_in_engines_ar" href="<?php echo e($seo_example_url); ?>"
                                                       target="_blank"><?php echo e($seo_example_title); ?></a>
                                                    <span id="url_in_engines_ar"><?php echo e($seo_example_url); ?></span>
                                                    <div id="desc_in_engines_ar"><?php echo e($seo_example_desc); ?> ...</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <i class="material-icons">&#xe8fd;</i>
                                                <small><?php echo trans('backLang.seoTabSettings'); ?></small>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                    <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEOTitle'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.englishBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::text('seo_title_en',$Topics->seo_title_en, array('class' => 'form-control','id'=>'seo_title_en','maxlength'=>'65', 'dir'=>trans('backLang.ltr'))); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.friendlyURL'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.englishBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::text('seo_url_slug_en',$Topics->seo_url_slug_en, array('class' => 'form-control','id'=>'seo_url_slug_en', 'dir'=>trans('backLang.ltr'))); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEODesc'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.englishBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::textarea('seo_description_en',$Topics->seo_description_en, array('class' => 'form-control','id'=>'seo_description_en','maxlength'=>'165', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEOKeywords'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.englishBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::textarea('seo_keywords_en',$Topics->seo_keywords_en, array('class' => 'form-control','id'=>'seo_keywords_en', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>


                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                                    &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                            <a href="<?php echo e(route('topics',$WebmasterSection->id)); ?>"
                                               class="btn btn-default m-t"><i class="material-icons">
                                                    &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                </div>

                                <div class="col-sm-6">
                                    <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                        <?php
                                        $seo_example_title = $Topics->title_en;
                                        $seo_example_desc = Helper::GeneralSiteSettings("site_desc_en");
                                        if ($Topics->seo_title_en != "") {
                                        $seo_example_title = $Topics->seo_title_en;
                                        }
                                        if ($Topics->seo_description_en != "") {
                                        $seo_example_desc = $Topics->seo_description_en;
                                        }
                                        if ($Topics->seo_url_slug_en != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                        $seo_example_url = url($Topics->seo_url_slug_en);
                                        } else {
                                        $seo_example_url = route('FrontendTopic', ["section" => $Topics->webmasterSection->name, "id" => $Topics->id]);
                                        }
                                        ?>
                                        <div class="form-group">
                                            <div>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.englishBox'); ?></small> <?php endif; ?>
                                                &nbsp;
                                                <div class="search-example" dir="ltr">
                                                    <a id="title_in_engines_en" href="<?php echo e($seo_example_url); ?>"
                                                       target="_blank"><?php echo e($seo_example_title); ?></a>
                                                    <span id="url_in_engines_en"><?php echo e($seo_example_url); ?></span>
                                                    <div id="desc_in_engines_en"><?php echo e($seo_example_desc); ?> ...</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <i class="material-icons">&#xe8fd;</i>
                                                <small><?php echo trans('backLang.seoTabSettings'); ?></small>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <?php echo e(Form::close()); ?>

                        </div>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footerInclude'); ?>
    <script type="text/javascript">
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action").change(function () {
            if (this.value == "delete") {
                $("#submit_all").css("display", "none");
                $("#submit_show_msg").css("display", "inline-block");
            } else {
                $("#submit_all").css("display", "inline-block");
                $("#submit_show_msg").css("display", "none");
            }
        });

        $("#checkAll2").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#checkAll4").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action2").change(function () {
            if (this.value == "delete") {
                $("#submit_all2").css("display", "none");
                $("#submit_show_msg2").css("display", "inline-block");
            } else {
                $("#submit_all2").css("display", "inline-block");
                $("#submit_show_msg2").css("display", "none");
            }
        });

        $("#action4").change(function () {
            if (this.value == "delete") {
                $("#submit_all4").css("display", "none");
                $("#submit_show_msg4").css("display", "inline-block");
            } else {
                $("#submit_all4").css("display", "inline-block");
                $("#submit_show_msg4").css("display", "none");
            }
        });

        $("#checkAll3").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action3").change(function () {
            if (this.value == "delete") {
                $("#submit_all3").css("display", "none");
                $("#submit_show_msg3").css("display", "inline-block");
            } else {
                $("#submit_all3").css("display", "inline-block");
                $("#submit_show_msg3").css("display", "none");
            }
        });

        $("#mapDivNew").click(function () {
            $("#mapDiv").css("display", "block");
            $("#mapDivBtns").css("display", "none");
        });

    </script>
    <?php if($WebmasterSection->maps_status): ?>
        <script type="text/javascript"
                src="http://maps.google.com/maps/api/js?key=AIzaSyAgzruFTTvea0LEmw_jAqknqskKDuJK7dM&language=<?php echo e(App::getLocale()); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
                var iconURLPrefix = "<?php echo e(URL::to('backEnd/assets/images/')."/"); ?>";
                var icons = [
                    iconURLPrefix + 'marker_0.png',
                    iconURLPrefix + 'marker_1.png',
                    iconURLPrefix + 'marker_2.png',
                    iconURLPrefix + 'marker_3.png',
                    iconURLPrefix + 'marker_4.png',
                    iconURLPrefix + 'marker_5.png',
                    iconURLPrefix + 'marker_6.png'
                ]

                var map = new google.maps.Map($('#map')[0], {
                    zoom: 7,
                    <?php
                        if(count($Topics->maps) > 0){
                        ?>
                    center: new google.maps.LatLng(<?php echo $Topics->maps[0]->longitude; ?>, <?php echo $Topics->maps[0]->latitude; ?>),
                    <?php
                        }else{
                        ?>
                    center: new google.maps.LatLng(31.012773903012743, 30.208982467651367),
                    <?php
                        }
                        ?>
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                    <?php
                    $title_var = "title_" . trans('backLang.boxCode');
                    $title_var2 = "title_" . trans('backLang.boxCodeOther');
                    if(count($Topics->maps) > 0){
                    foreach($Topics->maps as $map){
                    if ($map->$title_var != "") {
                    $title = $map->$title_var;
                    } else {
                    $title = $map->$title_var2;
                    }
                    ?>
                var latlng1 = new google.maps.LatLng(<?php echo $map->longitude; ?>, <?php echo $map->latitude; ?>);
                var marker = new google.maps.Marker({
                    position: latlng1,
                    icon: icons[<?php echo $map->icon; ?>],
                    title: "<?php echo $title; ?>"
                });
                marker.setMap(map);

                    <?php
                    }
                    }
                    ?>
                var geocoder = new google.maps.Geocoder();
                google.maps.event.addListener(map, 'click', function (e) {
                    var marker = new google.maps.Marker({
                        position: e["latLng"],
                        icon: icons[Math.floor(Math.random() * (6 - 0 + 1) + 0)],
                        title: "New Map"
                    });

                    geocoder.geocode({
                        'latLng': e.latLng
                    }, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                $("#details_ar").val(results[0].formatted_address);
                                <?php endif; ?>
                                <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                $("#details_en").val(results[0].formatted_address);
                                <?php endif; ?>

                            }
                        }
                    });

                    marker.setMap(map);
                    $("#longitude").val(e.latLng.lat());
                    $("#latitude").val(e.latLng.lng());
                    $("#mapNew").click()
                });


                $("#mapTabLink").click(function () {
                    setTimeout(function () {
                        google.maps.event.trigger(map, 'resize');
                    }, 1000);
                });
                $("#mapDivNew").click(function () {
                    google.maps.event.trigger(map, 'resize');
                });


            });
        </script>
    <?php endif; ?>
    <script src="<?php echo e(URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.js")); ?>"></script>
    <script>
        $(function () {
            $('.icp-auto').iconpicker({placement: '<?php echo e((trans('backLang.direction')=="rtl")?"topLeft":"topRight"); ?>'});
        });

        // Js Slug
        function slugify(string) {
            return string
                .toString()
                .trim()
                .toLowerCase()
                .replace(/\s+/g, "-")
                .replace(/[^\w\-]+/g, "")
                .replace(/\-\-+/g, "-")
                .replace(/^-+/, "")
                .replace(/-+$/, "");
        }

        <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
        $("#seo_title_ar").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#title_in_engines_ar").text($(this).val());
            } else {
                $("#title_in_engines_ar").text("<?php echo $Topics->title_ar; ?>");
            }
        });
        $("#seo_description_ar").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#desc_in_engines_ar").text($(this).val());
            } else {
                $("#desc_in_engines_ar").text("<?php echo Helper::GeneralSiteSettings("site_desc_ar"); ?>");
            }
        });
        $("#seo_url_slug_ar").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#url_in_engines_ar").text("<?php echo url(''); ?>/" + slugify($(this).val()));
            } else {
                $("#url_in_engines_ar").text("<?php echo route('FrontendTopic', ["section" => $Topics->webmasterSection->name, "id" => $Topics->id]); ?>");
            }
        });
        <?php endif; ?>
        <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
        $("#seo_title_en").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#title_in_engines_en").text($(this).val());
            } else {
                $("#title_in_engines_en").text("<?php echo $Topics->title_en; ?>");
            }
        });
        $("#seo_description_en").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#desc_in_engines_en").text($(this).val());
            } else {
                $("#desc_in_engines_en").text("<?php echo Helper::GeneralSiteSettings("site_desc_en"); ?>");
            }
        });
        $("#seo_url_slug_en").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#url_in_engines_en").text("<?php echo url(''); ?>/" + slugify($(this).val()));
            } else {
                $("#url_in_engines_en").text("<?php echo route('FrontendTopic', ["section" => $Topics->webmasterSection->name, "id" => $Topics->id]); ?>");
            }
        });
        <?php endif; ?>
    </script>
    <?php
    if (Session::has('relatedST')){
    if (Session::get('relatedST') == "create"){
    ?>
    <script type="text/javascript">
        $('#related_section_id').change(function () {

            var fid = $(this).val();
            $(document).ready(function () {
                $.ajax({
                    url: '<?php echo url(env('BACKEND_PATH', 'admin')."/relatedLoad"); ?>/' + fid,
                    data: {},
                    success: function (data) {
                        $('#r_topics').html(data)
                    }
                }); //End of Ajax
            });

        });
    </script>
    <?php
    }
    }
    ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>