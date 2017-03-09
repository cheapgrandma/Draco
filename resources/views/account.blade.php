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

                        <h2 class="lh30 mt10 text-center">With <b class="text-primary">Admin Forms</b> you have everything you need.</h2>
                        <p class="lead mb35 text-center">We even included dozens of prebuilt form layouts so you can leave work early .
                        </p>

                        <!-- begin: .admin-form -->
                        <div class="admin-form">

                            <div id="p1" class="panel heading-border">

                                <div class="panel-body bg-light">
                                    <form method="post" action="" id="form-ui">
                                        <div class="section-divider mb40" id="spy1">
                                            <span>Form UI Elements</span>
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

                                        <!-- Multi Selects -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field select">
                                                        <select id="country" name="country">
                                                            <option value="">Select with single arrow</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field select">
                                                        <select id="location" name="location">
                                                            <option value="">Select with double arrows</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                        </select>
                                                        <i class="arrow double"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field select">
                                                        <select id="location" name="location" disabled>
                                                            <option value="">Select with double arrows</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                        </select>
                                                        <i class="arrow double"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text Areas -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <textarea class="gui-textarea" id="comment" name="comment" placeholder="Text area"></textarea>
                                                        <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                                        </label>
                                                        <span class="input-footer">
                                                            <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <textarea class="gui-textarea" id="comment" name="comment" placeholder="Disabled Text area" disabled></textarea>
                                                        <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                                        </label>
                                                        <span class="input-footer">
                                                            <strong>Hint:</strong>Don't be negative or off topic!</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section-divider mv40" id="spy2">
                                            <span>File Uploaders</span>
                                        </div>
                                        <!-- .section-divider -->

                                        <!-- File Uploaders -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <label class="field prepend-icon append-button file">
                                                        <span class="button">Choose File</span>
                                                        <input type="file" class="gui-file" name="file1" id="file1" onChange="document.getElementById('uploader1').value = this.value;">
                                                        <input type="text" class="gui-input" id="uploader1" placeholder="Please Select A File">
                                                        <label class="field-icon"><i class="fa fa-upload"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <label class="field prepend-icon file">
                                                        <span class="button">Choose File</span>
                                                        <input type="file" class="gui-file" name="file2" id="file2" onChange="document.getElementById('uploader2').value = this.value;">
                                                        <input type="text" class="gui-input" id="uploader2" placeholder="Please Select A File">
                                                        <label class="field-icon"><i class="fa fa-upload"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- File Uploaders2 -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <label class="field prepend-icon append-button file">
                                                        <span class="button" disabled>Choose File</span>
                                                        <input type="file" class="gui-file" name="file3" id="file3" onChange="document.getElementById('uploader3').value = this.value;" disabled>
                                                        <input type="text" class="gui-input" id="uploader3" placeholder="Disabled File Select">
                                                        <label class="field-icon"><i class="fa fa-upload"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <label class="field prepend-icon file">
                                                        <span class="button" disabled>Choose File</span>
                                                        <input type="file" class="gui-file" name="file4" id="file4" onChange="document.getElementById('uploader4').value = this.value;" disabled>
                                                        <input type="text" class="gui-input" id="uploader4" placeholder="Disabled File Select">
                                                        <label class="field-icon"><i class="fa fa-upload"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- File Uploaders2 -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
                                                    <label class="field prepend-icon append-button file">
                                                        <span class="button btn-primary">Choose File</span>
                                                        <input type="file" class="gui-file" name="file3" id="file3" onChange="document.getElementById('uploader3').value = this.value;">
                                                        <input type="text" class="gui-input" id="uploader3" placeholder="Disabled File Select">
                                                        <label class="field-icon"><i class="fa fa-upload"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="section">
                                                    <label class="field prepend-icon append-button file disabled">
                                                        <span class="button btn-primary" disabled>Choose File</span>
                                                        <input type="file" class="gui-file" name="file4" id="file4" onChange="document.getElementById('uploader4').value = this.value;" disabled>
                                                        <input type="text" class="gui-input" id="uploader4" placeholder="Disabled File Select">
                                                        <label class="field-icon"><i class="fa fa-upload"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section-divider mv40" id="spy3">
                                            <span>Form Addons</span>
                                        </div>
                                        <!-- .section-divider -->

                                        <!-- Form Addons -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <div class="smart-widget sm-right smr-50">
                                                        <label class="field">
                                                            <input type="text" name="sub" id="sub" class="gui-input" placeholder="Smart widget right 50">
                                                        </label>
                                                        <button type="submit" class="button"> <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                    <!-- end .smart-widget section -->
                                                </div>
                                                <!-- end section -->
                                                <div class="section">
                                                    <div class="smart-widget sm-right smr-80">
                                                        <label class="field prepend-icon">
                                                            <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="Smart widget right 80">
                                                            <label for="s" class="field-icon"><i class="fa fa-search"></i>
                                                            </label>
                                                        </label>
                                                        <button type="submit" class="button">Search</button>
                                                    </div>
                                                    <!-- end .smart-widget section -->
                                                </div>
                                                <!-- end section -->
                                                <div class="section">
                                                    <div class="smart-widget sm-right smr-120">
                                                        <label class="field">
                                                            <input type="text" name="sub3" id="sub3" class="gui-input" placeholder="Smart widget right 120">
                                                        </label>
                                                        <button type="submit" class="button">Subscribe</button>
                                                    </div>
                                                    <!-- end .smart-widget section -->
                                                </div>
                                                <!-- end section -->
                                                <div class="section">
                                                    <div class="smart-widget sm-right smr-160">
                                                        <label class="field">
                                                            <input type="text" name="sub3" id="sub3" class="gui-input" placeholder="Smart widget right 160">
                                                        </label>
                                                        <button type="submit" class="button">Join Mailing List</button>
                                                    </div>
                                                    <!-- end .smart-widget section -->
                                                </div>
                                                <!-- end section -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <div class="smart-widget sm-left sml-50">
                                                        <label class="field">
                                                            <input type="text" name="sm3" id="sm3" class="gui-input" placeholder="Smart widget left 50">
                                                        </label>
                                                        <label for="sm3" class="button"> <i class="fa fa-search"></i>
                                                        </label>
                                                    </div>
                                                    <!-- end .smart-widget section -->
                                                </div>
                                                <div class="section">
                                                    <div class="smart-widget sm-left sml-80">
                                                        <label class="field">
                                                            <input type="text" name="sm2" id="sm2" class="gui-input" placeholder="Smart widget left 80">
                                                        </label>
                                                        <label for="sm2" class="button">Search</label>
                                                    </div>
                                                    <!-- end .smart-widget section -->
                                                </div>
                                                <!-- end section -->
                                                <div class="section">
                                                    <div class="smart-widget sm-left sml-120">
                                                        <label class="field">
                                                            <input type="text" name="sm" id="sm" class="gui-input" placeholder="Smart widget left 120">
                                                        </label>
                                                        <label for="sm" class="button">Subscribe</label>
                                                    </div>
                                                    <!-- end .smart-widget section -->
                                                </div>
                                                <!-- end section -->
                                                <div class="section">
                                                    <div class="smart-widget sm-left sml-160">
                                                        <label class="field">
                                                            <input type="text" name="sm" id="sm" class="gui-input" placeholder="Smart widget left 160">
                                                        </label>
                                                        <label for="sm" class="button">Join Mailing List</label>
                                                    </div>
                                                    <!-- end .smart-widget section -->
                                                </div>
                                                <!-- end section -->
                                            </div>
                                        </div>

                                        <!-- Radios and Checkboxes -->
                                        <div class="section-divider mt40 mb25" id="spy4">
                                            <span>Radios and Checkboxes</span>
                                        </div>
                                        <!-- .section-divider -->

                                        <div class="section row">
                                            <div class="col-md-6 pl20 prn">
                                                <div class="section mv15">
                                                    <div class="option-group field">
                                                        <label class="option">
                                                            <input type="checkbox" name="checked" value="checked" checked>
                                                            <span class="checkbox"></span>Check</label>
                                                        <label class="option">
                                                            <input type="checkbox" name="disabled" value="disabled" disabled>
                                                            <span class="checkbox"></span>Disable</label>
                                                        <label class="option">
                                                            <input type="checkbox" name="mobileos" value="CH">
                                                            <span class="checkbox"></span>Empty</label>
                                                    </div>
                                                    <!-- end .option-group section -->
                                                </div>
                                                <div class="section mb15">
                                                    <div class="option-group field">
                                                        <label class="option">
                                                            <input type="radio" name="payment" checked>
                                                            <span class="radio"></span>Check</label>
                                                        <label class="option">
                                                            <input type="radio" name="disabled" disabled>
                                                            <span class="radio"></span>Disable</label>
                                                        <label class="option">
                                                            <input type="radio" name="payment">
                                                            <span class="radio"></span>Empty</label>
                                                    </div>
                                                    <!-- end .option-group section -->
                                                </div>
                                                <!-- end section -->

                                                <div class="mb15">
                                                    <label class="field option block">
                                                        <input type="checkbox" name="terms">
                                                        <span class="checkbox"></span>Please agree to our
                                                        <a href="javascript:;" class="smart-link"> terms </a>
                                                    </label>
                                                </div>
                                                <div class="section">
                                                    <label class="field option block">
                                                        <input type="radio" name="terms">
                                                        <span class="radio"></span> Please agree to our
                                                        <a href="javascript:;" class="smart-link"> terms </a>
                                                    </label>
                                                </div>
                                                <!-- end section -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <div class="option-group field section">
                                                            <label for="disabled" class="option block mt15">
                                                                <input type="radio" name="disabled" id="disabled" value="disabled" disabled>
                                                                <span class="radio"></span>Disabled</label>
                                                            <label for="female" class="option block mt15">
                                                                <input type="radio" name="gender" id="female" value="female">
                                                                <span class="radio"></span>Radio</label>
                                                            <label for="other" class="option block mt15">
                                                                <input type="radio" name="gender" id="other" value="other">
                                                                <span class="radio"></span>Other</label>
                                                            <label for="checked" class="option block mt15">
                                                                <input type="radio" name="gender" id="checked" value="checked" checked>
                                                                <span class="radio"></span>Checked</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <!-- end .option-group section -->
                                                        <div class="option-group field section">
                                                            <label class="option block mt15">
                                                                <input type="checkbox" name="disabled" value="disabled" disabled>
                                                                <span class="checkbox"></span>Disabled</label>
                                                            <label class="option block mt15">
                                                                <input type="checkbox" name="mobileos" value="FR">
                                                                <span class="checkbox"></span>Android Kitkat</label>
                                                            <label class="option block mt15">
                                                                <input type="checkbox" name="mobileos" value="CH">
                                                                <span class="checkbox"></span>Apple IOS 7</label>
                                                            <label class="option block mt15">
                                                                <input type="checkbox" name="checked" value="checked" checked>
                                                                <span class="checkbox"></span>Checked</label>
                                                        </div>
                                                        <!-- end .option-group section -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end .colm section -->
                                        </div>
                                        <!-- end .section row section -->

                                        <div class="section-divider mt40 mb25" id="spy5">
                                            <span>Toggle Switches</span>
                                        </div>
                                        <!-- .section-divider -->

                                        <div class="section row">
                                            <div class="col-xs-6 col-md-3">
                                                <label class="switch block mt15">
                                                    <input type="checkbox" name="features" id="f1" value="javascript">
                                                    <label for="f1" data-on="ON" data-off="OFF"></label>
                                                    <span>Javascript</span>
                                                </label>
                                                <label class="switch block mt15">
                                                    <input type="checkbox" name="features" id="f2" value="downloads">
                                                    <label for="f2" data-on="ON" data-off="OFF"></label>
                                                    <span>Downloads</span>
                                                </label>
                                                <label class="switch block mt15">
                                                    <input type="checkbox" name="features" id="f3" value="cookies">
                                                    <label for="f3" data-on="ON" data-off="OFF"></label>
                                                    <span>Cookies</span>
                                                </label>
                                                <label class="switch block mt15">
                                                    <input type="checkbox" name="features" id="f4" value="popups" checked>
                                                    <label for="f4" data-on="ON" data-off="OFF"></label>
                                                    <span>Popups</span>
                                                </label>
                                            </div>
                                            <!-- end .colm section -->

                                            <div class="hidden-xs col-md-3">
                                                <label class="switch block mt15">
                                                    <input type="checkbox" name="tools" id="t1" value="analytics">
                                                    <label for="t1" data-on="YES" data-off="NO"></label>
                                                    <span>Analytics</span>
                                                </label>
                                                <label class="switch block mt15">
                                                    <input type="checkbox" name="tools" id="t2" value="reports">
                                                    <label for="t2" data-on="YES" data-off="NO"></label>
                                                    <span>Reports</span>
                                                </label>
                                                <label class="switch block mt15">
                                                    <input type="checkbox" name="tools" id="t3" value="social">
                                                    <label for="t3" data-on="YES" data-off="NO"></label>
                                                    <span>Social</span>
                                                </label>
                                                <label class="switch block mt15">
                                                    <input type="checkbox" name="tools" id="t4" value="admin" checked>
                                                    <label for="t4" data-on="YES" data-off="NO"></label>
                                                    <span>Access</span>
                                                </label>
                                            </div>
                                            <!-- end .colm section -->

                                            <div class="col-xs-6 col-md-3">
                                                <label class="switch switch-round block mt15">
                                                    <input type="radio" name="framework" id="fr1" value="mootols">
                                                    <label for="fr1" data-on="ON" data-off="OFF"></label>
                                                    <span>MooTools</span>
                                                </label>
                                                <label class="switch switch-round block mt15">
                                                    <input type="radio" name="framework" id="fr2" value="angular">
                                                    <label for="fr2" data-on="ON" data-off="OFF"></label>
                                                    <span>Angular JS</span>
                                                </label>
                                                <label class="switch switch-round block mt15">
                                                    <input type="radio" name="framework" id="fr3" value="jquery">
                                                    <label for="fr3" data-on="ON" data-off="OFF"></label>
                                                    <span>jQuery</span>
                                                </label>
                                                <label class="switch switch-round block mt15">
                                                    <input type="radio" name="framework" id="fr4" value="dojo" checked>
                                                    <label for="fr4" data-on="ON" data-off="OFF"></label>
                                                    <span>Dojo</span>
                                                </label>
                                            </div>
                                            <!-- end .colm section -->

                                            <div class="hidden-xs col-md-3">
                                                <label class="switch switch-round block mt15">
                                                    <input type="radio" name="framework2" id="fr5" value="mootols">
                                                    <label for="fr5" data-on="YES" data-off="NO"></label>
                                                    <span>MooTools</span>
                                                </label>
                                                <label class="switch switch-round block mt15">
                                                    <input type="radio" name="framework2" id="fr6" value="angular">
                                                    <label for="fr6" data-on="YES" data-off="NO"></label>
                                                    <span>Angular JS</span>
                                                </label>
                                                <label class="switch switch-round block mt15">
                                                    <input type="radio" name="framework2" id="fr7" value="jquery">
                                                    <label for="fr7" data-on="YES" data-off="NO"></label>
                                                    <span>jQuery</span>
                                                </label>
                                                <label class="switch switch-round block mt15">
                                                    <input type="radio" name="framework2" id="fr8" value="dojo" checked>
                                                    <label for="fr8" data-on="YES" data-off="NO"></label>
                                                    <span>Dojo</span>
                                                </label>
                                            </div>
                                            <!-- end .colm section -->
                                        </div>
                                        <!-- end .section row section -->

                                        <!-- Ratings Widget -->
                                        <div class="section-divider mb40" style="margin-top: 60px;" id="spy6">
                                            <span>Review &amp; Rating Widget</span>
                                        </div>
                                        <div class="section row">
                                            <div class="col-xs-6 pr40 border-right">
                                                <span class="rating block">
                                                    <span class="lbl-text">Customization</span>
                                                    <input class="rating-input" id="r5" type="radio" name="custom" checked>
                                                    <label class="rating-star" for="r5"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="r4" type="radio" name="custom">
                                                    <label class="rating-star" for="r4"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="r3" type="radio" name="custom">
                                                    <label class="rating-star" for="r3"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="r2" type="radio" name="custom">
                                                    <label class="rating-star" for="r2"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="r1" type="radio" name="custom">
                                                    <label class="rating-star" for="r1"><i class="fa fa-star"></i>
                                                    </label>
                                                </span>
                                                <span class="rating block">
                                                    <span class="lbl-text">Reliability</span>
                                                    <input class="rating-input" id="rr5" type="radio" name="reliable">
                                                    <label class="rating-star" for="rr5"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="rr4" type="radio" name="reliable" checked>
                                                    <label class="rating-star" for="rr4"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="rr3" type="radio" name="reliable">
                                                    <label class="rating-star" for="rr3"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="rr2" type="radio" name="reliable">
                                                    <label class="rating-star" for="rr2"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="rr1" type="radio" name="reliable">
                                                    <label class="rating-star" for="rr1"><i class="fa fa-star"></i>
                                                    </label>
                                                </span>
                                                <span class="rating block">
                                                    <span class="lbl-text">Relevance</span>
                                                    <input class="rating-input" id="rx5" type="radio" name="relevance">
                                                    <label class="rating-star" for="rx5"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="rx4" type="radio" name="relevance">
                                                    <label class="rating-star" for="rx4"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="rx3" type="radio" name="relevance" checked>
                                                    <label class="rating-star" for="rx3"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="rx2" type="radio" name="relevance">
                                                    <label class="rating-star" for="rx2"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="rx1" type="radio" name="relevance">
                                                    <label class="rating-star" for="rx1"><i class="fa fa-star"></i>
                                                    </label>
                                                </span>
                                            </div>
                                            <!-- end  section -->

                                            <div class="col-xs-6 pl40">
                                                <span class="rating block">
                                                    <span class="lbl-text">Our products</span>
                                                    <input class="rating-input" id="five-stars" type="radio" name="product-rate">
                                                    <label class="rating-star" for="five-stars"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="four-stars" type="radio" name="product-rate">
                                                    <label class="rating-star" for="four-stars"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="three-stars" type="radio" name="product-rate" checked>
                                                    <label class="rating-star" for="three-stars"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="two-stars" type="radio" name="product-rate">
                                                    <label class="rating-star" for="two-stars"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="one-star" type="radio" name="product-rate">
                                                    <label class="rating-star" for="one-star"><i class="fa fa-star"></i>
                                                    </label>
                                                </span>
                                                <span class="rating block">
                                                    <span class="lbl-text">Support team</span>
                                                    <input class="rating-input" id="5stars" type="radio" name="support-rate">
                                                    <label class="rating-star" for="5stars"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="4stars" type="radio" name="support-rate">
                                                    <label class="rating-star" for="4stars"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="3stars" type="radio" name="support-rate">
                                                    <label class="rating-star" for="3stars"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="2stars" type="radio" name="support-rate" checked>
                                                    <label class="rating-star" for="2stars"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="1star" type="radio" name="support-rate">
                                                    <label class="rating-star" for="1star"><i class="fa fa-star"></i>
                                                    </label>
                                                </span>
                                                <span class="rating block">
                                                    <span class="lbl-text">Response time</span>
                                                    <input class="rating-input" id="5s" type="radio" name="response-rate">
                                                    <label class="rating-star" for="5s"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="4s" type="radio" name="response-rate">
                                                    <label class="rating-star" for="4s"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="3s" type="radio" name="response-rate">
                                                    <label class="rating-star" for="3s"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="2s" type="radio" name="response-rate">
                                                    <label class="rating-star" for="2s"><i class="fa fa-star"></i>
                                                    </label>
                                                    <input class="rating-input" id="1s" type="radio" name="response-rate" checked>
                                                    <label class="rating-star" for="1s"><i class="fa fa-star"></i>
                                                    </label>
                                                </span>
                                            </div>
                                            <!-- end  section -->
                                        </div>
                                        <!-- end .section row  section -->

                                        <div class="section-divider mv40 hidden">
                                            <span class="bg-light">Buttons</span>
                                        </div>
                                        <!-- .tagline -->

                                        <div class="section button-list hidden">
                                            <button class="button"> <i class="fa fa-align-left"></i>
                                            </button>
                                            <button class="button"> <i class="fa fa-align-justify"></i>
                                            </button>
                                            <a href="javascript:;" class="button"><i class="fa fa-align-center"></i>
                                            </a>
                                            <a href="javascript:;" class="button"><i class="fa fa-align-right"></i>
                                            </a>
                                            <a href="javascript:;" class="button"><i class="fa fa-align-center"></i>
                                            </a>
                                            <a href="javascript:;" class="button btn-primary"><i class="fa fa-align-right"></i>
                                            </a>
                                            <button class="button btn-primary"> <i class="fa fa-align-left"></i>
                                            </button>
                                            <button class="button btn-primary"> <i class="fa fa-align-justify"></i>
                                            </button>
                                            <a href="javascript:;" class="button btn-primary"><i class="fa fa-align-center"></i>
                                            </a>
                                            <a href="javascript:;" class="button btn-primary"><i class="fa fa-align-right"></i>
                                            </a>
                                        </div>
                                        <!-- end section -->

                                        <div class="section button-list hidden">
                                            <input type="submit" value="Button normal" class="button">
                                            <button class="button btn-primary">Button primary</button>
                                            <a href="javascript:;" class="button btn-rounded">Button rounded</a>
                                            <a href="javascript:;" class="button btn-primary btn-rounded">Primary rounded</a>
                                        </div>
                                        <!-- end section -->

                                        <div class="section button-list hidden">
                                            <input type="submit" value="Pushed normal" class="button pushed">
                                            <button class="button pushed btn-primary">Pushed primary</button>
                                            <a href="javascript:;" class="button pushed btn-rounded">Pushed round</a>
                                            <a href="javascript:;" class="button pushed btn-primary btn-rounded">Pushed round</a>
                                        </div>
                                        <!-- end section -->

                                        <div class="section button-list hidden">
                                            <button class="button button-left">Button Left</button>
                                            <button class="button button-right">Button right</button>
                                            <a href="javascript:;" class="button btn-primary button-left">Primary Left</a>
                                            <a href="javascript:;" class="button btn-primary button-right">Primary Right</a>
                                        </div>
                                        <!-- end section -->

                                        <div class="section button-list hidden">
                                            <button class="button btn-pointed button-left">Pointed Left</button>
                                            <button class="button btn-pointed button-right">Pointed right</button>
                                            <a href="javascript:;" class="button btn-pointed btn-primary button-left">Pointed Left</a>
                                            <a href="javascript:;" class="button btn-pointed  btn-primary button-right">Pointed Right</a>
                                        </div>
                                        <!-- end section -->

                                        <div class="section-divider hidden">
                                            <span class="bg-light">Simple Pricing Grid</span>
                                        </div>
                                        <!-- .tagline -->

                                        <!-- Pricing Tables -->
                                        <div class="section row hidden">
                                            <div class="col-md-6">
                                                <div class="section">
                                                    <div class="price-box">
                                                        <h4><sup>$</sup>29
                                                    <span class="per-month">/month</span>
                                                </h4>
                                                        <h5>Starter</h5>
                                                        <div class="spacer mt20 mb20"></div>
                                                        <p>For those looking for something simple to get started.</p>
                                                        <div class="spacer mt20 mb20"></div>
                                                        <a href="#" class="button block pushed expand"> Learn more </a>
                                                    </div>
                                                    <!-- end .price-box section -->

                                                </div>
                                                <!-- end .section section -->
                                            </div>
                                            <!-- end .colm section -->

                                            <div class="col-md-6">
                                                <div class="section">
                                                    <div class="price-box selected-box">
                                                        <div class="ribbon-large">
                                                            <div class="ribbon-inner">POPULAR</div>
                                                        </div>
                                                        <h4><sup>$</sup>179
                                                    <span class="per-month">/month</span>
                                                </h4>
                                                        <h5>Professional</h5>
                                                        <div class="spacer mt20 mb20"></div>
                                                        <p>For large enterprises selling over one million plus a year.</p>
                                                        <div class="spacer mt20 mb20"></div>
                                                        <a href="#" class="button btn-primary block pushed expand"> Learn more </a>
                                                    </div>
                                                    <!-- end .price-box section -->

                                                </div>
                                                <!-- end .section section -->
                                            </div>
                                            <!-- end .colm section -->

                                        </div>
                                        <!-- end section row section -->

                                        <div class="section-divider mv40 hidden">
                                            <span class="bg-light">Google Map</span>
                                        </div>
                                        <!-- .tagline -->

                                        <!-- Google Map -->
                                        <div class="section hidden">
                                            <div class="map-container">
                                                <div id="map_canvas"></div>
                                            </div>
                                            <!-- end .map-container -->
                                        </div>
                                        <!-- end .section -->

                                        <!-- Notifications + Progress Bars -->
                                        <div class="section-divider mv40 hidden">
                                            <span class="bg-light">Notifications + Progress Bars</span>
                                        </div>
                                        <div class="section hidden">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">×</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>Well done!</strong>You successfully read this important alert message.</div>
                                            <div class="alert alert-info alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">×</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>Heads up!</strong>This alert needs your attention, but it's not super important.</div>
                                            <div class="alert alert-warning alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">×</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>Warning!</strong>Better check yourself, you're not looking too good.</div>
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <span aria-hidden="true">×</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>Oh snap!</strong>Change a few things up and try submitting again.</div>
                                        </div>
                                        <!-- end .section section -->

                                        <!-- end .form-body section -->
                                        <div class="panel-footer hidden">
                                            <button type="submit" class="button btn-primary">Proceed to confirm</button>
                                        </div>
                                        <!-- end .form-footer section -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end: .admin-form -->

                    </div>
                </div>
                <!-- end: .tray-center -->

                <!-- begin: .tray-right -->
                <aside class="tray tray-right tray290 va-t pn" data-tray-height="match">
                    <div class="animated-delay p20 pb15" data-animate='["300","fadeIn"]'>
                        <h4 class="mt5 mb20"> Admin Panels - <span class="fs14 fw400 text-muted">A Theme Exclusive</span></h4>

                        <ul class="fs14 list-unstyled list-spacing-10 mb10 pl5">
                            <li>
                                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                                <b> Author:</b> Admin Designs
                            </li>
                            <li>
                                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                                <b> License:</b> CC - Commercial 3.0
                            </li>
                            <li>
                                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                                <b> Info:</b>
                                <a href="http://www.themeforest.net/user/AdminDesigns"> www.admindesigns.com </a>
                            </li>
                        </ul>
                    </div>

                    <div class="affix-pane" data-spy="affix" data-offset-top="200" style="width:100%;">
                        <div id="nav-spy">
                            <ul class="nav tray-nav custom-nav-animation">
                                <li class="active">
                                    <a href="#spy1">
                                        <span class="fa fa-edit fa-lg"></span> Form UI Elements</a>
                                </li>
                                <li>
                                    <a href="#spy2">
                                        <span class="fa fa-files-o fa-lg"></span> File Uploaders</a>
                                </li>
                                <li>
                                    <a href="#spy3">
                                        <span class="fa fa-caret-square-o-right fa-lg"></span> Form Input Addons</a>
                                </li>
                                <li>
                                    <a href="#spy4">
                                        <span class="fa fa-check-square-o fa-lg"></span> Radios & Checkboxes</a>
                                </li>
                                <li>
                                    <a href="#spy5">
                                        <span class="fa fa-toggle-off fa-lg"></span> Input Switches</a>
                                </li>
                                <li>
                                    <a href="#spy6">
                                        <span class="fa fa-star-o fa-lg"></span> Review & Rating Widgets</a>
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