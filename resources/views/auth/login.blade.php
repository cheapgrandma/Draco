@extends('layouts.auth')

@section('content')
<div class="admin-form theme-info" id="login1">
    <div class="row mb15 table-layout">

        <div class="col-xs-6 va-m pln">
            <img src="img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
        </div>

        <div class="col-xs-6 text-right va-b pr5">
            <div class="login-links">
                <a href="/login" class="active" title="Sign In">Sign In</a>
            </div>

        </div>

    </div>

    <div class="panel panel-info mt10 br-n">
        <!-- end .form-header section -->
        <form role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="panel-body bg-light p30">
                <div class="row">
                    <div class="col-sm-7 pr30">
                        <div class="section">
                            <label for="email" class="field-label text-muted fs18 mb10">Email</label>
                             @if ($errors->has('email'))
                                     <div class="alert alert-sm alert-border-left alert-danger light alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <i class="fa fa-info pr10"></i>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            <label for="email" class="field prepend-icon">
                                <input type="email" name="email" id="email" class="gui-input" placeholder="Enter email" value="{{ old('email') }}" autocomplete="off">
                                <label for="email" class="field-icon"><i class="fa fa-user"></i>
                                </label>
                            </label>
                        </div>
                        <!-- end section -->

                        <div class="section">
                            <label for="password" class="field-label text-muted fs18 mb10">Password</label>
                            @if ($errors->has('password'))
                                   <div class="alert alert-sm alert-border-left alert-danger light alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <i class="fa fa-info pr10"></i>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            <label for="password" class="field prepend-icon">
                                <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password" autocomplete="off">
                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                </label>
                            </label>
                        </div>
                        <!-- end section -->

                    </div>
                    <div class="col-sm-5 br-l br-grey pl30">
                        <h3 class="mb25"> You'll Have Access To Your:</h3>
                        <p class="mb15">
                            <span class="fa fa-check text-success pr5"></span> Books Inventory</p>
                        <p class="mb15">
                            <span class="fa fa-check text-success pr5"></span> Readers list</p>
                        <p class="mb15">
                            <span class="fa fa-check text-success pr5"></span> Circulation management</p>
                        <p class="mb15">
                            <span class="fa fa-check text-success pr5"></span> Reports</p>
                    </div>
                </div>
            </div>
            <!-- end .form-body section -->
            <div class="panel-footer clearfix p10 ph15">
                <input type="submit" class="button btn-primary mr10 pull-right" value="Sign in">
                <a href="/password/reset" class="pull-right mt10 mr10">Forgot password ?</a>
                <label class="switch block switch-primary pull-left input-align mt10">
                    <input type="checkbox" name="remember" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" data-on="YES" data-off="NO"></label>
                    <span>Remember me</span>
                </label>
            </div>
            <!-- end .form-footer section -->
        </form>
    </div>
</div>
@endsection
