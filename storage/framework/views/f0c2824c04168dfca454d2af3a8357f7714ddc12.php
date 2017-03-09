<?php $__env->startSection('content'); ?>
<div class="admin-form theme-info mw500" style="margin-top: 10%;" id="login1">
    <div class="row mb15 table-layout">

        <div class="col-xs-6 center-block text-center va-m pln">
            <a href="dashboard.html" title="Return to Dashboard">
                <img src="/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
            </a>
        </div>

        <div class="col-xs-6 text-right va-b pr5">
            <div class="login-links">
                <a href="/password/reset" class="active" title="You are already here!"><b>Password Reset</b></a> | 
                <a href="/login" class="" title="Login">Sign in</a>
            </div>
        </div>
    </div>

    <div class="panel panel-info mv10 heading-border br-n">

        <!-- end .form-header section -->
        <form method="post" id="contact" action="<?php echo e(route('password.request')); ?>">
            <?php echo e(csrf_field()); ?>


        <input type="hidden" name="token" value="<?php echo e($token); ?>">

            <div class="panel-body bg-white p15 pt25">

                <?php if(session('status')): ?>
                    <div class="alert alert-micro alert-border-left alert-success light alert-dismissable mn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-check pr10"></i>
                        <?php echo e(session('status')); ?>

                    </div>
                
                <?php elseif($errors->has('email')): ?>
                    <div class="alert alert-micro alert-border-left alert-danger light alert-dismissable mn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-info pr10"></i>
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </div>
                <?php elseif($errors->has('password')): ?>
                    <div class="alert alert-micro alert-border-left alert-danger light alert-dismissable mn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-info pr10"></i>
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </div>
                <?php elseif($errors->has('password_confirmation')): ?>
                    <div class="alert alert-micro alert-border-left alert-danger light alert-dismissable mn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-info pr10"></i>
                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                    </div>
                <?php elseif($token): ?>
                    <div class="alert alert-micro alert-border-left alert-info pastel alert-dismissable mn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-info pr10"></i> Enter your <b>email</b> and your <b>new password</b> !
                    </div>
                <?php else: ?>
                    <div class="alert alert-micro alert-border-left alert-info pastel alert-dismissable mn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-info pr10"></i> Enter your <b>Email</b> and instructions will be sent to you!
                    </div>
                <?php endif; ?>

            </div>
            <!-- end .form-body section -->
            <div class="panel-footer p25 pv15">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section mn">
                            <label for="email" class="field prepend-icon">
                                <input type="email" name="email" id="email" class="gui-input" placeholder="Enter email" autocomplete="off">
                                <label for="password" class="field-icon"><i class="fa fa-user"></i>
                                </label>
                            </label>
                            <label for="password" class="field prepend-icon mt10">
                                <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password" autocomplete="off">
                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                </label>
                            </label>
                            <label for="password-confirm" class="field prepend-icon mt10">
                                <input type="password" name="password_confirmation" id="password-confirm" class="gui-input" placeholder="Confirm password" autocomplete="off">
                                <label for="password-confirm" class="field-icon"><i class="fa fa-lock"></i>
                                </label>
                            </label>
                            <!-- end .smart-widget section -->
                        </div>
                        <!-- end section -->
                    </div>

                </div>

            </div>
            <div class="panel-footer clearfix p10 ph15">
                <input type="submit" class="button btn-primary mr10 pull-right" value="Reset">
            </div>
            <!-- end .form-footer section -->
        </form>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>