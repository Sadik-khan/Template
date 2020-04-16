@extends('multiauth::layouts.main') 
@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="{{ route('admin.login') }}" id="content_form" class="md-float-material form-material">
                <div class="text-center">
                    <img src="{{ asset('assets/backend/auth/images/main.png')}}" alt="logo.png">
                </div>
                @csrf
                
                <div class="auth-box card">
                    <div class="card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">{{ ucfirst(config('multiauth.prefix')) }} Sign In</h3>
                            </div>
                        </div>
                        <div class="row m-b-20">
                            <div class="col-md-6">
                                <button type="button" id="loginwithgoogle" data-url="{{ url('admin/login/google') }}" class="btn btn-danger m-b-20 btn-block"><i class="fa fa-google"></i>Google</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" id="loginwithlinkedin" data-url="{{ url('admin/login/linkedin') }}" class="btn btn-info m-b-20 btn-block"><i class="fa fa-linkedin-square"></i>linkedin</button>
                            </div>
                        </div>
                        <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                        <div class="form-group form-primary">
                            <input type="text" name="email_or_username" id="email_or_username" class="form-control" required="1" placeholder="Enter Your Email Or Username Here">
                            <span class="form-bar"></span>
                        </div>
                        <div class="form-group form-primary">
                            <input type="password" name="password" id="password" class="form-control" required="1" placeholder="Enter Your Password">
                            <span class="form-bar"></span>
                        </div>
                        <div class="row m-t-25 text-left">
                            <div class="col-12">
                                <div class="checkbox-fade fade-in-primary">
                                
                                    <label>
                                        <input  name="remember" id="remember" type="checkbox" {{ old( 'remember') ? 'checked' : '' }}>
                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span class="text-inverse">{{ __('Remember Me') }}</span>
                                    </label>

                                </div>
                                <div class="forgot-phone text-right f-right">
                                    <a href="{{ route('admin.password.request') }}" class="text-right f-w-600"> 
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button name="submit" id="submit" type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"> {{ __('Login') }}</button>
                                <button name="submiting" id="submiting" type="button" disabled style="display:none;" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"> <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i>Loading...</button>
                            </div>
                        </div>
                        {{-- <p class="text-inverse text-left">Don't have an account?<a href="auth-sign-up-social.htm"> <b class="f-w-600">Register here </b></a>for free!</p> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection