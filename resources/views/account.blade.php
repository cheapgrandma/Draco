@extends('layouts.app')
@section('title') Account @endsection
@section('breadcrumb') <a href="/account">Account</a> @endsection
@section('body-attr') data-spy="scroll" data-target="#nav-spy" data-offset="300" @endsection

@section('content')
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

                                <div class="panel-body bg-light">
                                    <form method="post" action="" id="form-ui">
                                        <div class="section-divider mb40" id="spy1">
                                            <span>Personal Details</span>
                                        </div>
                                        <!-- .section-divider -->

                                        <!-- Basic Inputs -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="section">
                                                    <label class="field">
                                                        <input type="text" name="from" id="from" class="gui-input" placeholder="Input no icon">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field">
                                                        <input type="text" name="from" id="from" class="gui-input" placeholder="Disabled no icon" disabled>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Input Icons -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Input icon left">
                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field append-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Input icon right">
                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Disabled with icon" disabled>
                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Input Formats -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="url" name="website" id="website" class="gui-input" placeholder="URL input">
                                                        <label for="website" class="field-icon"><i class="fa fa-globe"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="email" name="email" id="email" class="gui-input" placeholder="Email input">
                                                        <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 hidden">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="Telephone input">
                                                        <label for="mobile" class="field-icon"><i class="fa fa-phone-square"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="search" name="s" id="s" class="gui-input" placeholder="Disabled Search input" disabled>
                                                        <label for="s" class="field-icon"><i class="fa fa-search"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                                <b> Created at:</b> {{Auth::user()->created_at }}

                            </li>
                            <li>
                                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                                <b> Updated at:</b> {{Auth::user()->updated_at }}
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
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- end: .tray-right -->

            </section>
            <!-- End: Content -->


            
@endsection

@section('scripts')
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
                buttons.removeClass().addClass('button btn-' + btnData);
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
                buttons.removeClass().addClass('button btn-primary');
            }, 2200);

</script>
@endsection