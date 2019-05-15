<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box m-b-0">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe3c9;</i> <?php echo e(trans('backLang.sectionEdit')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(trans('backLang.home')); ?></a> /
                    <?php echo e(trans('backLang.webmasterTools')); ?> /
                    <a href=""><?php echo e(trans('backLang.siteSectionsSettings')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route("WebmasterSections")); ?>">
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
        if (Session::has('activeTab')) {
            if (Session::get('activeTab') == "fields") {
                $tab_1 = "";
                $tab_2 = "active";
                $tab_3 = "";
            }
            if (Session::get('activeTab') == "seo") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "active";
            }
        }
        ?>
        <div class="box nav-active-border b-info">
            <ul class="nav nav-md">
                <li class="nav-item inline">
                    <a class="nav-link <?php echo e($tab_1); ?>" href data-toggle="tab" data-target="#tab_details">
                        <span class="text-md"><i class="material-icons">
                                &#xe31e;</i> <?php echo e(trans('backLang.topicTabSection')); ?></span>
                    </a>
                </li>
                <li class="nav-item inline">
                    <a class="nav-link  <?php echo e($tab_2); ?>" href data-toggle="tab" data-target="#tab_custom">
                    <span class="text-md"><i class="material-icons">
                            &#xe30d;</i> <?php echo e(trans('backLang.customFields')); ?></span>
                    </a>
                </li>
                <?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_3); ?>" href data-toggle="tab" data-target="#tab_seo">
                    <span class="text-md"><i class="material-icons">
                            &#xe8e5;</i> <?php echo e(trans('backLang.seoTabTitle')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="tab-content clear b-t">
                <div class="tab-pane  <?php echo e($tab_1); ?>" id="tab_details">
                    <div class="box-body">
                        <?php echo e(Form::open(['route'=>['WebmasterSectionsUpdate',$WebmasterSections->id],'method'=>'POST'])); ?>


                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionName'); ?></label>
                            <div class="col-sm-10">
                                <?php echo Form::text('name',$WebmasterSections->name, array('placeholder' => trans('backLang.langVar'),'class' => 'form-control','id'=>'name','required'=>'')); ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionType'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <div style="margin-bottom: 5px;">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('type','0',($WebmasterSections->type==0) ? true : false, array('id' => 'site_status1','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.typeTextPages')); ?>

                                        </label>
                                    </div>
                                    <div style="margin-bottom: 5px;">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('type','1',($WebmasterSections->type==1) ? true : false, array('id' => 'site_status2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.typePhotos')); ?>

                                        </label>
                                    </div>
                                    <div style="margin-bottom: 5px;">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('type','2',($WebmasterSections->type==2) ? true : false, array('id' => 'site_status3','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.typeVideos')); ?>

                                        </label>
                                    </div>
                                    <div style="margin-bottom: 5px;">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('type','3',($WebmasterSections->type==3) ? true : false, array('id' => 'site_status4','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.typeSounds')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sections_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.hasCategories'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <div style="margin-bottom: 5px;">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('sections_status','0',($WebmasterSections->sections_status==0) ? true : false, array('id' => 'sections_status1','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.withoutCategories')); ?>

                                        </label>
                                    </div>
                                    <div style="margin-bottom: 5px;">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('sections_status','1',($WebmasterSections->sections_status==1) ? true : false, array('id' => 'sections_status2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.mainCategoriesOnly')); ?>

                                        </label>
                                    </div>
                                    <div style="margin-bottom: 5px;">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('sections_status','2',($WebmasterSections->sections_status==2) ? true : false, array('id' => 'sections_status3','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(trans('backLang.mainAndSubCategories')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <br/>
                            <label><h5><i class="material-icons">&#xe1db;</i> <?php echo e(trans('backLang.optionalFields')); ?>

                                </h5></label>
                            <hr>
                        </div>

                        <div class="form-group row">
                            <label for="date_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.dateField'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('date_status','1',($WebmasterSections->date_status==1) ? true : false, array('id' => 'date_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('date_status','0',($WebmasterSections->date_status==0) ? true : false, array('id' => 'date_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="expire_date_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.expireDateField'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('expire_date_status','1',($WebmasterSections->expire_date_status==1) ? true : false, array('id' => 'expire_date_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('expire_date_status','0',($WebmasterSections->expire_date_status==0) ? true : false, array('id' => 'expire_date_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="longtext_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.longTextField'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('longtext_status','1',($WebmasterSections->longtext_status==1) ? true : false, array('id' => 'longtext_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('longtext_status','0',($WebmasterSections->longtext_status==0) ? true : false, array('id' => 'longtext_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="editor_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.allowEditor'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('editor_status','1',($WebmasterSections->editor_status==1) ? true : false, array('id' => 'editor_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('editor_status','0',($WebmasterSections->editor_status==0) ? true : false, array('id' => 'editor_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="attach_file_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.attachFileField'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('attach_file_status','1',($WebmasterSections->attach_file_status==1) ? true : false, array('id' => 'attach_file_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('attach_file_status','0',($WebmasterSections->attach_file_status==0) ? true : false, array('id' => 'attach_file_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="section_icon_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.sectionIconPicker'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('section_icon_status','1',($WebmasterSections->section_icon_status==1) ? true : false, array('id' => 'section_icon_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('section_icon_status','0',($WebmasterSections->section_icon_status==0) ? true : false, array('id' => 'section_icon_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="icon_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicsIconPicker'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('icon_status','1',($WebmasterSections->icon_status==1) ? true : false, array('id' => 'icon_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('icon_status','0',($WebmasterSections->icon_status==0) ? true : false, array('id' => 'icon_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <br/>
                            <label><h5><i class="material-icons">&#xe8d8;</i> <?php echo e(trans('backLang.additionalTabs')); ?>

                                </h5></label>
                            <hr>
                        </div>
                        <div class="form-group row">
                            <label for="multi_images_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.additionalImages'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('multi_images_status','1',($WebmasterSections->multi_images_status==1) ? true : false, array('id' => 'multi_images_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('multi_images_status','0',($WebmasterSections->multi_images_status==0) ? true : false, array('id' => 'multi_images_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="extra_attach_file_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.additionalFiles'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('extra_attach_file_status','1',($WebmasterSections->extra_attach_file_status==1) ? true : false, array('id' => 'extra_attach_file_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('extra_attach_file_status','0',($WebmasterSections->extra_attach_file_status==0) ? true : false, array('id' => 'extra_attach_file_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="maps_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.attachGoogleMaps'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('maps_status','1',($WebmasterSections->maps_status==1) ? true : false, array('id' => 'maps_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('maps_status','0',($WebmasterSections->maps_status==0) ? true : false, array('id' => 'maps_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="order_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.attachOrderForm'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('order_status','1',($WebmasterSections->order_status==1) ? true : false, array('id' => 'order_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('order_status','0',($WebmasterSections->order_status==0) ? true : false, array('id' => 'order_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="comments_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.reviewsAvailable'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('comments_status','1',($WebmasterSections->comments_status==1) ? true : false, array('id' => 'comments_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('comments_status','0',($WebmasterSections->comments_status==0) ? true : false, array('id' => 'comments_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="related_status1"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.relatedTopics'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('related_status','1',($WebmasterSections->related_status==1) ? true : false, array('id' => 'related_status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.yes')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('related_status','0',($WebmasterSections->related_status==0) ? true : false, array('id' => 'related_status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.no')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <br/>
                            <label><h5><i class="material-icons">&#xe8ac;</i> <?php echo e(trans('backLang.active_disable')); ?>

                                </h5></label>
                            <hr>
                        </div>
                        <div class="form-group row">
                            <label for="link_status"
                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.status'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','1',($WebmasterSections->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(trans('backLang.active')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','0',($WebmasterSections->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

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
                                <a href="<?php echo e(route("WebmasterSections")); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>
                </div>


                

                <div class="tab-pane  <?php echo e($tab_2); ?>" id="tab_custom">

                    <div class="box-body">
                        <?php if(Session::has('fieldST')): ?>
                            <?php if(Session::get('fieldST') == "create"): ?>

                                <div>
                                    <?php echo e(Form::open(['route'=>['webmasterFieldsStore',$WebmasterSections->id],'method'=>'POST'])); ?>


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
                                        <label for="type0"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.customFieldsType'); ?></label>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','0',true, array('id' => 'type0','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType0')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','1',false, array('id' => 'type1','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType1')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','2',false, array('id' => 'type2','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType2')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','3',false, array('id' => 'type3','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType3')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','4',false, array('id' => 'type4','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType4')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','5',false, array('id' => 'type5','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType5')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','6',false, array('id' => 'type6','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType6')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','7',false, array('id' => 'type7','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType7')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','8',false, array('id' => 'type8','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType8')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','9',false, array('id' => 'type9','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType9')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','10',false, array('id' => 'type10','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType10')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','11',false, array('id' => 'type11','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType11')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','12',false, array('id' => 'type12','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType12')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="options" style="display: none">
                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                <div class="col-sm-3 col-xs-5">
                                                    <div>
                                                        <?php echo trans('backLang.customFieldsOptions'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                        :
                                                    </div>
                                                    <?php echo Form::textarea('details_ar','', array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.rtl'),'rows'=>'12','style'=>'white-space: nowrap;')); ?>

                                                    <small>
                                                        <i class="material-icons">&#xe8fd;</i> <?php echo trans('backLang.customFieldsOptionsHelp'); ?>

                                                    </small>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") || Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                <div class="col-sm-1 col-xs-1 text-center"
                                                     style="width: 30px !important;padding: 0;">
                                                    <br>
                                                    <?php
                                                    $i2 = 0;
                                                    ?>
                                                    <?php for($i=1;$i<=12;$i++): ?>
                                                        <?php
                                                        $i2++;
                                                        $bg_volor = "#f0f0f0";
                                                        if ($i2 == 2) {
                                                            $i2 = 0;
                                                            $bg_volor = "#f9f9f9";
                                                        }
                                                        ?>
                                                        <div style="font-size: 1rem;line-height: 1.62;background: <?php echo e($bg_volor); ?>">
                                                            <small>
                                                                <small><?php echo e($i); ?></small>
                                                            </small>
                                                        </div>
                                                    <?php endfor; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                <div class="col-sm-3 col-xs-5">
                                                    <div>
                                                        <?php echo trans('backLang.customFieldsOptions'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                        :
                                                    </div>
                                                    <?php echo Form::textarea('details_en','', array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'rows'=>'12','style'=>'white-space: nowrap;')); ?>

                                                    <small>
                                                        <i class="material-icons">&#xe8fd;</i> <?php echo trans('backLang.customFieldsOptionsHelp'); ?>

                                                    </small>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="required1"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.customFieldsRequired'); ?></label>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label class="ui-check ui-check-md">
                                                    <?php echo Form::radio('required','0',true, array('id' => 'required2','class'=>'has-value')); ?>

                                                    <i class="dark-white"></i>
                                                    <?php echo e(trans('backLang.customFieldsOptional')); ?>

                                                </label>
                                                &nbsp; &nbsp;
                                                <label class="ui-check ui-check-md">
                                                    <?php echo Form::radio('required','1',false, array('id' => 'required1','class'=>'has-value')); ?>

                                                    <i class="dark-white"></i>
                                                    <?php echo e(trans('backLang.customFieldsRequired')); ?> (*)
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="default_val">
                                        <label for="default_value"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.customFieldsDefault'); ?>

                                        </label>
                                        <div class="col-sm-10">
                                            <?php echo Form::text('default_value','', array('placeholder' => '','class' => 'form-control','id'=>'default_value')); ?>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="default_value"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.language'); ?>

                                        </label>
                                        <div class="col-sm-10">
                                            <select name="lang_code" id="lang_code" class="form-control c-select">
                                                <option value="all"><?php echo e(trans('backLang.customFieldsForAllLang')); ?></option>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                    <option value="ar">العربية</option>
                                                <?php endif; ?>
                                                <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <option value="en">English</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row m-t-md">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary m-t"><i
                                                        class="material-icons">
                                                    &#xe31b;</i> <?php echo trans('backLang.add'); ?></button>
                                            <a href="<?php echo e(route('webmasterFields',[$WebmasterSections->id])); ?>"
                                               class="btn btn-default m-t"><i class="material-icons">
                                                    &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                        </div>
                                    </div>

                                    <?php echo e(Form::close()); ?>

                                </div>

                            <?php endif; ?>

                            <?php if(Session::get('fieldST') == "edit"): ?>
                                <div>
                                    <?php echo e(Form::open(['route'=>['webmasterFieldsUpdate',$WebmasterSections->id,Session::get('WebmasterSectionField')->id],'method'=>'POST'])); ?>



                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <div class="form-group row">
                                            <label for="file_title_ar"
                                                   class="col-sm-2 form-control-label"><?php echo trans('backLang.topicName'); ?>

                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('title_ar',Session::get('WebmasterSectionField')->title_ar, array('placeholder' => '','class' => 'form-control','id'=>'file_title_ar','required'=>'', 'dir'=>trans('backLang.rtl'))); ?>

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
                                                <?php echo Form::text('title_en',Session::get('WebmasterSectionField')->title_en, array('placeholder' => '','class' => 'form-control','id'=>'file_title_en','required'=>'', 'dir'=>trans('backLang.ltr'))); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group row">
                                        <label for="type0"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.customFieldsType'); ?></label>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','0',(Session::get('WebmasterSectionField')->type==0) ? true : false, array('id' => 'type0','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType0')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','1',(Session::get('WebmasterSectionField')->type==1) ? true : false, array('id' => 'type1','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType1')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','2',(Session::get('WebmasterSectionField')->type==2) ? true : false, array('id' => 'type2','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType2')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','3',(Session::get('WebmasterSectionField')->type==3) ? true : false, array('id' => 'type3','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType3')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','4',(Session::get('WebmasterSectionField')->type==4) ? true : false, array('id' => 'type4','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType4')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','5',(Session::get('WebmasterSectionField')->type==5) ? true : false, array('id' => 'type5','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType5')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','6',(Session::get('WebmasterSectionField')->type==6) ? true : false, array('id' => 'type6','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType6')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','7',(Session::get('WebmasterSectionField')->type==7) ? true : false, array('id' => 'type7','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType7')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','8',(Session::get('WebmasterSectionField')->type==8) ? true : false, array('id' => 'type8','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType8')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','9',(Session::get('WebmasterSectionField')->type==9) ? true : false, array('id' => 'type9','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType9')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','10',(Session::get('WebmasterSectionField')->type==10) ? true : false, array('id' => 'type10','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType10')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','11',(Session::get('WebmasterSectionField')->type==11) ? true : false, array('id' => 'type11','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType11')); ?>

                                                    </label>
                                                </div>
                                                <div style="margin-bottom: 5px;">
                                                    <label class="ui-check ui-check-md">
                                                        <?php echo Form::radio('type','12',(Session::get('WebmasterSectionField')->type==12) ? true : false, array('id' => 'type12','class'=>'has-value')); ?>

                                                        <i class="dark-white"></i>
                                                        <?php echo e(trans('backLang.customFieldsType12')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="options"
                                             style="display: <?php echo e((Session::get('WebmasterSectionField')->type==6 || Session::get('WebmasterSectionField')->type==7) ? "inline" : "none"); ?>">
                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                <div class="col-sm-3 col-xs-5">
                                                    <div>
                                                        <?php echo trans('backLang.customFieldsOptions'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.arabicBox'); ?><?php endif; ?>
                                                        :
                                                    </div>
                                                    <?php echo Form::textarea('details_ar',Session::get('WebmasterSectionField')->details_ar, array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.rtl'),'rows'=>'12','style'=>'white-space: nowrap;')); ?>

                                                    <small>
                                                        <i class="material-icons">&#xe8fd;</i> <?php echo trans('backLang.customFieldsOptionsHelp'); ?>

                                                    </small>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") || Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                <div class="col-sm-1 col-xs-1 text-center"
                                                     style="width: 30px !important;padding: 0;">
                                                    <br>
                                                    <?php
                                                    $i2 = 0;
                                                    ?>
                                                    <?php for($i=1;$i<=12;$i++): ?>
                                                        <?php
                                                        $i2++;
                                                        $bg_volor = "#f0f0f0";
                                                        if ($i2 == 2) {
                                                            $i2 = 0;
                                                            $bg_volor = "#f9f9f9";
                                                        }
                                                        ?>
                                                        <div style="font-size: 1rem;line-height: 1.62;background: <?php echo e($bg_volor); ?>">
                                                            <small>
                                                                <small><?php echo e($i); ?></small>
                                                            </small>
                                                        </div>
                                                    <?php endfor; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                <div class="col-sm-3 col-xs-5">
                                                    <div>
                                                        <?php echo trans('backLang.customFieldsOptions'); ?>

                                                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?><?php echo trans('backLang.englishBox'); ?><?php endif; ?>
                                                        :
                                                    </div>
                                                    <?php echo Form::textarea('details_en',Session::get('WebmasterSectionField')->details_en, array('placeholder' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'),'rows'=>'12','style'=>'white-space: nowrap;')); ?>

                                                    <small>
                                                        <i class="material-icons">&#xe8fd;</i> <?php echo trans('backLang.customFieldsOptionsHelp'); ?>

                                                    </small>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="required1"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.customFieldsRequired'); ?></label>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label class="ui-check ui-check-md">
                                                    <?php echo Form::radio('required','0',(Session::get('WebmasterSectionField')->required==0) ? true : false, array('id' => 'required2','class'=>'has-value')); ?>

                                                    <i class="dark-white"></i>
                                                    <?php echo e(trans('backLang.customFieldsOptional')); ?>

                                                </label>
                                                &nbsp; &nbsp;
                                                <label class="ui-check ui-check-md">
                                                    <?php echo Form::radio('required','1',(Session::get('WebmasterSectionField')->required==1) ? true : false, array('id' => 'required1','class'=>'has-value')); ?>

                                                    <i class="dark-white"></i>
                                                    <?php echo e(trans('backLang.customFieldsRequired')); ?> (*)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="default_val"
                                         style="display: <?php echo e((Session::get('WebmasterSectionField')->type==8 || Session::get('WebmasterSectionField')->type==9 || Session::get('WebmasterSectionField')->type==10) ? "none" : "block"); ?>">
                                        <label for="default_value"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.customFieldsDefault'); ?>

                                        </label>
                                        <div class="col-sm-10">
                                            <?php echo Form::text('default_value',Session::get('WebmasterSectionField')->default_value, array('placeholder' => '','class' => 'form-control','id'=>'default_value')); ?>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="default_value"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.language'); ?>

                                        </label>
                                        <div class="col-sm-10">
                                            <select name="lang_code" id="lang_code" class="form-control c-select">
                                                <option value="all" <?php echo e((Session::get('WebmasterSectionField')->lang_code=="all")?"selected='selected'":""); ?>><?php echo e(trans('backLang.customFieldsForAllLang')); ?></option>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                                    <option value="ar" <?php echo e((Session::get('WebmasterSectionField')->lang_code=="ar")?"selected='selected'":""); ?>>
                                                        العربية
                                                    </option>
                                                <?php endif; ?>
                                                <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <option value="en" <?php echo e((Session::get('WebmasterSectionField')->lang_code=="en")?"selected='selected'":""); ?>>
                                                        English
                                                    </option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="link_status"
                                               class="col-sm-2 form-control-label"><?php echo trans('backLang.status'); ?></label>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label class="ui-check ui-check-md">
                                                    <?php echo Form::radio('status','1',(Session::get('WebmasterSectionField')->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                                    <i class="dark-white"></i>
                                                    <?php echo e(trans('backLang.active')); ?>

                                                </label>
                                                &nbsp; &nbsp;
                                                <label class="ui-check ui-check-md">
                                                    <?php echo Form::radio('status','0',(Session::get('WebmasterSectionField')->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

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
                                            <a href="<?php echo e(route('webmasterFields',[$WebmasterSections->id])); ?>"
                                               class="btn btn-default m-t"><i class="material-icons">
                                                    &#xe5cd;</i> <?php echo trans('backLang.cancel'); ?></a>
                                        </div>
                                    </div>

                                    <?php echo e(Form::close()); ?>

                                </div>
                            <?php endif; ?>
                        <?php else: ?>

                            <?php if(count($WebmasterSections->customFields)>0): ?>
                                <div class="row p-a">
                                    <a class="btn btn-fw primary"
                                       href="<?php echo e(route("webmasterFieldsCreate",[$WebmasterSections->id])); ?>">
                                        <i class="material-icons">&#xe02e;</i>
                                        &nbsp; <?php echo e(trans('backLang.customFieldsNewField')); ?>

                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if(count($WebmasterSections->customFields) == 0): ?>
                                <div class="row p-a">
                                    <div class="col-sm-12">
                                        <div class=" p-a text-center light ">
                                            <?php echo e(trans('backLang.noData')); ?>

                                            <br>
                                            <br>
                                            <a class="btn btn-fw primary"
                                               href="<?php echo e(route("webmasterFieldsCreate",[$WebmasterSections->id])); ?>">
                                                <i class="material-icons">&#xe02e;</i>
                                                &nbsp; <?php echo e(trans('backLang.customFieldsNewField')); ?>

                                            </a>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(count($WebmasterSections->customFields)>0): ?>
                                <?php echo e(Form::open(['route'=>['webmasterFieldsUpdateAll',$WebmasterSections->id],'method'=>'post'])); ?>

                                <div class="row">
                                    <table class="table table-striped  b-t">
                                        <thead>
                                        <tr>
                                            <th style="width:20px;">
                                                <label class="ui-check m-a-0">
                                                    <input id="checkAll4" type="checkbox"><i></i>
                                                </label>
                                            </th>
                                            <th><?php echo e(trans('backLang.customFieldsTitle')); ?></th>
                                            <th><?php echo e(trans('backLang.customFieldsType')); ?></th>
                                            <th class="text-center"
                                                style="width:120px;"><?php echo e(trans('backLang.customFieldsRequired')); ?></th>
                                            <th class="text-center"
                                                style="width:100px;"><?php echo e(trans('backLang.language')); ?></th>
                                            <th class="text-center"
                                                style="width:120px;"><?php echo e(trans('backLang.customFieldsStatus')); ?></th>
                                            <th class="text-center"
                                                style="width:200px;"><?php echo e(trans('backLang.options')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $title_var = "title_" . trans('backLang.boxCode');
                                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                        ?>
                                        <?php $__currentLoopData = $WebmasterSections->customFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($customField->$title_var != "") {
                                                $field_title = $customField->$title_var;
                                            } else {
                                                $field_title = $customField->$title_var2;
                                            }

                                            $type_var = "customFieldsType" . $customField->type;
                                            ?>
                                            <tr>
                                                <td><label class="ui-check m-a-0">
                                                        <input type="checkbox" name="ids[]"
                                                               value="<?php echo e($customField->id); ?>"><i
                                                                class="dark-white"></i>
                                                        <?php echo Form::hidden('row_ids[]',$customField->id, array('class' => 'form-control row_no')); ?>

                                                    </label>
                                                </td>
                                                <td>
                                                    <?php echo Form::text('row_no_'.$customField->id,$customField->row_no, array('class' => 'pull-left form-control row_no')); ?>

                                                    <small>
                                                        <?php echo $field_title; ?>

                                                    </small>
                                                </td>
                                                <td>
                                                    <small>
                                                        <?php echo e(trans('backLang.'.$type_var)); ?>

                                                    </small>
                                                </td>
                                                <td class="text-center">
                                                    <small>
                                                        <?php echo e(($customField->required==1) ? trans('backLang.customFieldsRequired')."(*)":trans('backLang.customFieldsOptional')); ?>

                                                    </small>
                                                </td>

                                                <td class="text-center">
                                                    <small>
                                                        <?php echo e($customField->lang_code); ?>

                                                    </small>
                                                </td>
                                                <td class="text-center">
                                                    <i class="fa <?php echo e(($customField->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-sm success"
                                                       href="<?php echo e(route("webmasterFieldsEdit",["webmasterId"=>$WebmasterSections->id,"field_id"=>$customField->id])); ?>">
                                                        <small><i class="material-icons">
                                                                &#xe3c9;</i> <?php echo e(trans('backLang.edit')); ?></small>
                                                    </a>
                                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                        <button class="btn btn-sm warning" data-toggle="modal"
                                                                data-target="#mf-<?php echo e($customField->id); ?>"
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
                                            <div id="mf-<?php echo e($customField->id); ?>" class="modal fade" data-backdrop="true">
                                                <div class="modal-dialog" id="animate">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><?php echo e(trans('backLang.confirmation')); ?></h5>
                                                        </div>
                                                        <div class="modal-body text-center p-lg">
                                                            <p>
                                                                <?php echo e(trans('backLang.confirmationDeleteMsg')); ?>

                                                                <br>
                                                                <strong>[ <?php echo $field_title; ?> ]</strong>
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark-white p-x-md"
                                                                    data-dismiss="modal"><?php echo e(trans('backLang.no')); ?></button>
                                                            <a href="<?php echo e(route("webmasterFieldsDestroy",["webmasterId"=>$WebmasterSections->id,"file_id"=>$customField->id])); ?>"
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
                                            <option value="activate"><?php echo e(trans('backLang.activeSelected')); ?></option>
                                            <option value="block"><?php echo e(trans('backLang.blockSelected')); ?></option>
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
                


                <?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
                    <div class="tab-pane  <?php echo e($tab_3); ?>" id="tab_seo">

                        <div class="box-body">
                            <?php echo e(Form::open(['route'=>['WebmasterSectionsSEOUpdate',$WebmasterSections->id],'method'=>'POST'])); ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEOTitle'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.arabicBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::text('seo_title_ar',$WebmasterSections->seo_title_ar, array('class' => 'form-control','id'=>'seo_title_ar','maxlength'=>'65', 'dir'=>trans('backLang.rtl'))); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.friendlyURL'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.arabicBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::text('seo_url_slug_ar',$WebmasterSections->seo_url_slug_ar, array('class' => 'form-control','id'=>'seo_url_slug_ar', 'dir'=>trans('backLang.rtl'))); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEODesc'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.arabicBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::textarea('seo_description_ar',$WebmasterSections->seo_description_ar, array('class' => 'form-control','id'=>'seo_description_ar','maxlength'=>'165', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEOKeywords'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.arabicBox'); ?></small><?php endif; ?>

                                                <?php echo Form::textarea('seo_keywords_ar',$WebmasterSections->seo_keywords_ar, array('class' => 'form-control','id'=>'seo_keywords_ar', 'dir'=>trans('backLang.rtl'),'rows'=>'2')); ?>

                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-6">

                                    <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                                        <?php
                                        $seo_example_title = str_replace("backLang.", "", trans('backLang.' . $WebmasterSections->name));
                                        $seo_example_desc = Helper::GeneralSiteSettings("site_desc_ar");
                                        if ($WebmasterSections->seo_title_ar != "") {
                                            $seo_example_title = $WebmasterSections->seo_title_ar;
                                        }
                                        if ($WebmasterSections->seo_description_ar != "") {
                                            $seo_example_desc = $WebmasterSections->seo_description_ar;
                                        }
                                        if ($WebmasterSections->seo_url_slug_ar != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            $seo_example_url = url($WebmasterSections->seo_url_slug_ar);
                                        } else {
                                            $seo_example_url = url($WebmasterSections->name);
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

                                                <?php echo Form::text('seo_title_en',$WebmasterSections->seo_title_en, array('class' => 'form-control','id'=>'seo_title_en','maxlength'=>'65', 'dir'=>trans('backLang.ltr'))); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.friendlyURL'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.englishBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::text('seo_url_slug_en',$WebmasterSections->seo_url_slug_en, array('class' => 'form-control','id'=>'seo_url_slug_en', 'dir'=>trans('backLang.ltr'))); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEODesc'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.englishBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::textarea('seo_description_en',$WebmasterSections->seo_description_en, array('class' => 'form-control','id'=>'seo_description_en','maxlength'=>'165', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                        <div class="form-group">
                                            <div>
                                                <small><?php echo trans('backLang.topicSEOKeywords'); ?></small>
                                                <?php if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")): ?>
                                                    <small><?php echo trans('backLang.englishBox'); ?></small> <?php endif; ?>

                                                <?php echo Form::textarea('seo_keywords_en',$WebmasterSections->seo_keywords_en, array('class' => 'form-control','id'=>'seo_keywords_en', 'dir'=>trans('backLang.ltr'),'rows'=>'2')); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>


                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                                    &#xe31b;</i> <?php echo trans('backLang.update'); ?></button>
                                            <a href="<?php echo e(route('WebmasterSectionsEdit',$WebmasterSections->id)); ?>"
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
                                        $seo_example_title = str_replace("backLang.", "", trans('backLang.' . $WebmasterSections->name));
                                        $seo_example_desc = Helper::GeneralSiteSettings("site_desc_en");
                                        if ($WebmasterSections->seo_title_en != "") {
                                            $seo_example_title = $WebmasterSections->seo_title_en;
                                        }
                                        if ($WebmasterSections->seo_description_en != "") {
                                            $seo_example_desc = $WebmasterSections->seo_description_en;
                                        }
                                        if ($WebmasterSections->seo_url_slug_en != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            $seo_example_url = url($WebmasterSections->seo_url_slug_en);
                                        } else {
                                            $seo_example_url = url($WebmasterSections->name);
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
        $("#checkAll4").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
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
        $("input:radio[name=type]").click(function () {
            if ($(this).val() == 6 || $(this).val() == 7) {
                $("#options").css("display", "inline");
            } else {
                $("#options").css("display", "none");
            }
            if ($(this).val() == 8 || $(this).val() == 9 || $(this).val() == 10) {
                $("#default_val").css("display", "none");
            } else {
                $("#default_val").css("display", "block");
            }
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
                $("#title_in_engines_ar").text("<?php echo str_replace("backLang.", "", trans('backLang.' . $WebmasterSections->name)); ?>");
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
                $("#url_in_engines_ar").text("<?php echo url($WebmasterSections->name); ?>");
            }
        });
        <?php endif; ?>
        <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
        $("#seo_title_en").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#title_in_engines_en").text($(this).val());
            } else {
                $("#title_in_engines_en").text("<?php echo str_replace("backLang.", "", trans('backLang.' . $WebmasterSections->name)); ?>");
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
                $("#url_in_engines_en").text("<?php echo str_replace("backLang.", "", trans('backLang.' . $WebmasterSections->name)); ?>");
            }
        });
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>