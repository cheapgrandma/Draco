<?php $__env->startSection('title'); ?> Account <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="/account">Account</a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('body-attr'); ?> data-spy="scroll" data-target="#nav-spy" data-offset="300" <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin: Content -->
            <section id="content" class="table-layout">

                <!-- begin: .tray-center -->
                <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>
                    <div class="mw1100 center-block">

                        <h2 class="lh30 mt10 text-center">Configure <b class="text-primary">your account</b> the way you want.</h2>
                        <p class="lead mb35 text-center">Everything is secure so you can leave work carefree.</p>

                        <!-- begin: .admin-form -->
                        <div class="admin-form">

                            <div id="p1" class="panel heading-border">

                                 <form method="post" action="" id="form-personal">
                                    <div class="panel-body bg-light">
                                        <div class="section-divider mb40" id="spy1">
                                            <span>Personal Details</span>
                                        </div>
                                        <!-- .section-divider -->

                                        <!-- Basic Inputs -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
                                                <label for="name" class="field-label">Full name</label>
                                                    <label class="field">
                                                        <input type="text" name="name" id="name" class="gui-input" value="<?php echo e(Auth::user()->name); ?>">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
                                                <label for="email" class="field-label">Email</label>
                                                    <label class="field">
                                                        <input type="email" name="email" id="email" class="gui-input" value="<?php echo e(Auth::user()->email); ?>">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>    
                                        <button type="submit" class="button btn-primary">Update</button>                  
                                    </div>  
                                    </form>

                                    <form method="post" action="" id="form-password">
                                        <div class="panel-body bg-light">
                                            <div class="section-divider mb40" id="spy2">
                                                <span>Password</span>
                                            </div>
                                            <!-- .section-divider -->

                                            <!-- Basic Inputs -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="section">
                                                    <label for="name" class="field-label">Password</label>
                                                        <label class="field">
                                                            <input type="password" name="password" id="password" class="gui-input">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="section">
                                                    <label for="email" class="field-label">Password confirmation</label>
                                                        <label class="field">
                                                            <input type="password" name="password-confirmation" id="password-confirmation" class="gui-input">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>            
                                            <button type="submit" class="button btn-primary">Update</button>          
                                        </div>
                                        
                                    </form>
                            </div>
                        </div>
                        <!-- end: .admin-form -->

                    </div>
                </div>
                <!-- end: .tray-center -->

                <!-- begin: .tray-right -->
                <aside class="tray tray-right tray320 va-t pn" data-tray-height="match">
                    <div class="animated-delay p20 pb15" data-animate='["300","fadeIn"]'>
                        <h4 class="mt5 mb20"> Your account - <span class="fs14 fw400 text-muted">You are the chief !</span></h4>

                        <ul class="fs14 list-unstyled list-spacing-10 mb10 pl5">
                            <li>
                                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                                <b> Created at:</b> <?php echo e(Auth::user()->created_at); ?>


                            </li>
                            <li>
                                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                                <b> Updated at:</b> <?php echo e(Auth::user()->updated_at); ?>

                            </li>
                        </ul>
                    </div>

                    <div class="affix-pane" data-spy="affix" data-offset-top="200" style="width:100%;">
                        <div id="nav-spy">
                            <ul class="nav tray-nav custom-nav-animation">
                                <li class="active">
                                    <a href="#spy1">
                                        <span class="fa fa-user fa-lg"></span> Personal Details</a>
                                </li>
                                <li class="">
                                    <a href="#spy2">
                                        <span class="fa fa-key fa-lg"></span> Password</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- end: .tray-right -->

            </section>
            <!-- End: Content -->


            
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

 // Init custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated animated-short zoomIn');
                    }, 50 * i);
                });
            }, 500);

            // Init tray navigation smooth scroll
            $('.tray-nav a').smoothScroll({
                offset: -145
            });

            // Form Switcher
            $('#form-switcher > button').on('click', function() {
                var btnData = $(this).data('form-layout');
                var btnActive = $('#form-elements-pane .admin-form.active');

                // Remove any existing animations and then fade current form out
                btnActive.removeClass('slideInUp').addClass('animated fadeOutRight animated-shorter');
                // When above exit animation ends remove leftover classes and animate the new form in
                btnActive.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                    btnActive.removeClass('active fadeOutRight animated-shorter');
                    $('#' + btnData).addClass('active animated slideInUp animated-shorter')
                });
            });

            // Cache some dom elements
            var adminForm = $('.admin-form');
            var options = adminForm.find('.option');
            var switches = adminForm.find('.switch');
            var buttons = adminForm.find('.button');

            var Panel = $('#p1');

            // Form Skin Switcher
            $('#skin-switcher a').on('click', function() {
                var btnData = $(this).data('form-skin');

                $('#skin-switcher a').removeClass('item-active');
                $(this).addClass('item-active')

                adminForm.each(function(i, e) {
                    var skins = 'theme-primary theme-info theme-success theme-warning theme-danger theme-alert theme-system theme-dark'
                    var panelSkins = 'panel-primary panel-info panel-success panel-warning panel-danger panel-alert panel-system panel-dark'
                    $(e).removeClass(skins).addClass('theme-' + btnData);
                    Panel.removeClass(panelSkins).addClass('panel-' + btnData);
                });

                $(options).each(function(i, e) {
                    if ($(e).hasClass('block')) {
                        $(e).removeClass().addClass('block mt15 option option-' + btnData);
                    } else {
                        $(e).removeClass().addClass('option option-' + btnData);
                    }
                });
                $(switches).each(function(i, ele) {
                    if ($(ele).hasClass('switch-round')) {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-round switch-' + btnData);
                        } else {
                            $(ele).removeClass().addClass('switch switch-round switch-' + btnData);
                        }
                    } else {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-' + btnData);
                        } else {
                            $(ele).removeClass().addClass('switch switch-' + btnData);
                        }
                    }

                });
            });


            setTimeout(function() {
                adminForm.addClass('theme-primary');
                Panel.addClass('panel-primary');

                $(options).each(function(i, e) {
                    if ($(e).hasClass('block')) {
                        $(e).removeClass().addClass('block mt15 option option-primary');
                    } else {
                        $(e).removeClass().addClass('option option-primary');
                    }
                });
                $(switches).each(function(i, ele) {

                    if ($(ele).hasClass('switch-round')) {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');
                        } else {
                            $(ele).removeClass().addClass('switch switch-round switch-primary');
                        }
                    } else {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-primary');
                        } else {
                            $(ele).removeClass().addClass('switch switch-primary');
                        }
                    }
                });
            }, 2200);

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>