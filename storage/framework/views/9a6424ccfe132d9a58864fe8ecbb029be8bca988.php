<div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
        <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
            <i class="fa fa-gear"></i>
        </a>
        <div class="box-header">
            <h2><?php echo e(trans('backLang.themeSwitcher')); ?></h2>
        </div>
        <div class="box-divider"></div>
        <div class="box-body">
            <p class="hidden-md-down">
                <label class="md-check m-y-xs" data-target="folded">
                    <input type="checkbox">
                    <i class="green"></i>
                    <span class="hidden-folded"><?php echo e(trans('backLang.foldedAside')); ?></span>
                </label>
                <label class="md-check m-y-xs" data-target="boxed">
                    <input type="checkbox">
                    <i class="green"></i>
                    <span class="hidden-folded"><?php echo e(trans('backLang.boxedLayout')); ?></span>
                </label>
            </p>


            <p><?php echo e(trans('backLang.themes')); ?>:</p>
            <div data-target="bg" class="text-u-c text-center _600 clearfix">
                <label class="p-a col-xs-6 light pointer m-a-0">
                    <input type="radio" name="theme" value="" hidden>
                    <?php echo e(trans('backLang.themes1')); ?>

                </label>
                <label class="p-a col-xs-6 grey pointer m-a-0">
                    <input type="radio" name="theme" value="grey" hidden>
                    <?php echo e(trans('backLang.themes2')); ?>

                </label>
                <label class="p-a col-xs-6 dark pointer m-a-0">
                    <input type="radio" name="theme" value="dark" hidden>
                    <?php echo e(trans('backLang.themes3')); ?>

                </label>
                <label class="p-a col-xs-6 black pointer m-a-0">
                    <input type="radio" name="theme" value="black" hidden>
                    <?php echo e(trans('backLang.themes4')); ?>

                </label>
            </div>
            <br>

            <?php if(Helper::GeneralWebmasterSettings("ar_box_status") || Helper::GeneralWebmasterSettings("en_box_status")): ?>
                <p><?php echo e(trans('backLang.language')); ?>:</p>

                <?php echo e(Form::open(['route'=>'lang','method'=>'post'])); ?>


                <div class="form-group">
                    <select name="locale" id="locale" class="form-control c-select">
                        <?php if(Helper::GeneralWebmasterSettings("ar_box_status")): ?>
                            <option value="ar" <?php echo e((App::getLocale()=="ar")?"selected='selected'":""); ?>><?php echo e(strip_tags(trans('backLang.arabicBox'))); ?></option>
                        <?php endif; ?>
                        <?php if(Helper::GeneralWebmasterSettings("en_box_status")): ?>
                            <option value="en" <?php echo e((App::getLocale()=="en")?"selected='selected'":""); ?>><?php echo e(strip_tags(trans('backLang.englishBox'))); ?></option>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <?php echo Form::submit(trans('backLang.change'), array('class' => 'btn btn-success btn-sm')); ?>

                </div>

                <?php echo e(Form::close()); ?>

            <?php endif; ?>
        </div>
    </div>

</div>