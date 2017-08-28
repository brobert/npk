@extends('layouts.blank')

@section('content')

<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <!-- Brand -->
        <div class="text-center" style="margin-bottom:40px;">
            <span class="logo-figure inverse"></span>
            <span class="logo-text inverse"></span>
            <h5 class="semibold text-muted mt-5">{{trans('auth.form.title')}}</h5>
        </div>
        <!--/ Brand -->

        <!-- Social button -->
        @if(0)
        <ul class="list-table">
            <li><button type="button" class="btn btn-block btn-facebook">Connect with <i class="ico-facebook2 ml5"></i></button></li>
            <li><button type="button" class="btn btn-block btn-twitter">Connect with <i class="ico-twitter2 ml5"></i></button></li>
        </ul>
        @endif
        <!-- Social button -->

        <hr><!-- horizontal line -->

        <!-- Login form -->
        <form class="panel" name="form-login" action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <div class="panel-body">
                <div class="form-group">
                    <div class="form-stack has-icon pull-left">
                        <input name="email" type="text" class="form-control input-lg" placeholder="{{trans('auth.form.fields.email')}}" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your username / email" data-parsley-required>
                        <i class="ico-user2 form-control-icon"></i>
                    </div>
                    <div class="form-stack has-icon pull-left">
                        <input name="password" type="password" class="form-control input-lg" placeholder="{{trans('auth.form.fields.password')}}" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                        <i class="ico-lock2 form-control-icon"></i>
                    </div>
                </div>

                <!-- Error container -->
                <div id="error-container"class="mb15"></div>
                <!--/ Error container -->

                <div class="form-group">
                    <div class="row">
                    	@if(0)
                        <div class="col-xs-6">
                            <div class="checkbox custom-checkbox">
                                <input type="checkbox" name="remember" id="remember" value="1">
                                <label for="remember">&nbsp;&nbsp;Remember me</label>
                            </div>
                        </div>
                        @endif
                        <div class="col-xs-6 text-right pull-right">
                            <a href="{{ route('password.request') }}">{{trans('auth.form.forgot_pass')}}</a>
                        </div>
                    </div>
                </div>
                <div class="form-group nm">
                    <button type="submit" class="btn btn-block btn-success"><span class="semibold">{{trans('auth.form.login')}}</span></button>
                </div>
            </div>
        </form>
        <!-- Login form -->

        <hr><!-- horizontal line -->

    </div>
</div>
<!--/ END row -->

@endsection
