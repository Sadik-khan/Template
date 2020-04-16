@extends('multiauth::layouts.main') 
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="{{ route('admin.password.email') }}" id="content_form" class="md-float-material form-material">
                <div class="text-center">
                    <img src="{{ asset('assets/backend/auth/images/main.png')}}" alt="logo.png">
                </div>
                @csrf
                        
                <div class="auth-box card">
                    <div class="card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-left">Recover your password</h3>
                            </div>
                        </div>
                        
                        <div class="form-group form-primary">
                            <input type="email" id="email" name="email" class="form-control" required="" placeholder="Enter Your Email Address">
                            <span class="form-bar"></span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submiy" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"> {{ __('Send Password Reset Link') }}</button>
                            </div>
                        </div>
                        <p class="f-w-600 text-right">Back to <a href="{{ route('admin.login') }}">Login.</a></p>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="text-inverse text-left m-b-0">Thank you.</p>
                                <p class="text-inverse text-left"><a href="{{ route('index') }}"><b class="f-w-600">Back to website</b></a></p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('assets/backend/auth/images/main.png')}}" alt="logo.png">

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection