<?php if(Helper::GeneralWebmasterSettings("register_status")): ?>
        <!DOCTYPE html>
<html lang="<?php echo e(trans('backLang.code')); ?>" dir="<?php echo e(trans('backLang.direction')); ?>">
<head>
    <?php echo $__env->make('backEnd.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div>
                    <a class="navbar-brand"><img src="<?php echo e(URL::to('backEnd/assets/images/logo.png')); ?>" alt="."> <span
                                class="hidden-folded inline"><?php echo e(trans('backLang.control')); ?></span></a>
                </div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                <?php echo e(trans('backLang.newUser')); ?>

            </div>
            <form role="form" method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo e(csrf_field()); ?>


                <?php if($errors->has('name')): ?>
                    <div class="alert alert-warning">
                        <?php echo e($errors->first('name')); ?>

                    </div>
                <?php endif; ?>
                <?php if($errors->has('email')): ?>
                    <div class="alert alert-warning">
                        <?php echo e($errors->first('email')); ?>

                    </div>
                <?php endif; ?>
                <?php if($errors->has('password')): ?>
                    <div class="alert alert-warning">
                        <?php echo e($errors->first('password')); ?>

                    </div>
                <?php endif; ?>
                <div class="md-form-group">
                    <input id="name" type="text" class="md-input" name="name" value="<?php echo e(old('name')); ?>" required
                           autofocus>
                    <label><?php echo e(trans('backLang.fullName')); ?></label>
                </div>
                <div class="md-form-group">
                    <input id="email" type="email" class="md-input" name="email" value="<?php echo e(old('email')); ?>" required>

                    <label><?php echo e(trans('backLang.connectEmail')); ?></label>
                </div>
                <div class="md-form-group">
                    <input id="password" type="password" class="md-input" name="password" required>
                    <label><?php echo e(trans('backLang.connectPassword')); ?></label>
                </div>
                <div class="md-form-group">
                    <input id="password-confirm" type="password" class="md-input" name="password_confirmation" required>
                    <label><?php echo e(trans('backLang.confirmPassword')); ?></label>
                </div>

                <button type="submit" class="btn primary btn-block p-x-md"><i
                            class="material-icons">&#xe7fe;</i> <?php echo e(trans('backLang.createNewAccount')); ?></button>
            </form>
        </div>

        <div class="p-v-lg text-center">
            <div><?php echo e(trans('backLang.signedInToControl')); ?> <a href="<?php echo e(url('/login')); ?>"
                                                              class="text-primary _600"><?php echo e(trans('backLang.signIn')); ?></a>
            </div>
        </div>
    </div>

    <!-- ############ LAYOUT END-->


</div>
<?php echo $__env->make('backEnd.includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
<?php else: ?>
    <script>
        window.location.href = '<?php echo e(url("/login")); ?>';
    </script>
<?php endif; ?>

