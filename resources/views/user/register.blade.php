@extends('user/layouts/master1')
@section('title','All Post - Index')
@section('content')
<div class="form-wrapper">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
        <div class="logo-header pt-3 pb-3">
            <a href=""><img src="{{asset('layout_user/img/logo.fbfe575.svg')}}" alt="logo"></a>
        </div>
        <div class="form-container--center">
            <div class="form-title">
                <h1>Login to Viblo</h1>
                <p>Welcome to <b>Viblo platform!</b> Join us to find useful information required to improve your skills.
                    Please fill your info into the form below to continue. </p>
            </div>
            <form action="{{URL::asset('update_register') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="displayname" placeholder="Your name">
                    <p class="form-item__error">... is require</p>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="" name="email" placeholder="Email">
                        <p class="form-item__error">... is require</p>
                    </div>

                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="" name="username" placeholder="User Name">
                        <p class="form-item__error">... is require</p>
                    </div>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="" placeholder="Password">
                    <p class="form-item__error">... is require</p>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="" id="" placeholder="Confirm your password">
                    <p class="form-item__error">... is require</p>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="" id="agree-chk">
                    <label class="form-check-label" for="agree-chk">
                        I agree to <a href="">Viblo of Service</a>
                      </label>
                </div>
            <button id="login-btn"type="submit" class="btn btn-primary btn-md btn-block">Sign up</button>
            <div class="d-flex justify-content-between mt-3 mb-3">
                <a href="">Forgot your password?</a>
                <a href="{{asset('login')}}">Sign In</a>
            </div>
            </form>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-4">
                <hr class="flex-fill m-0">
                <span class="ml-3 mr-3">Or login with</span>
                <hr class="flex-fill m-0">
            </div>
            <div class="form-social d-flex justify-content-between">
                <button class="el-button social-login__button facebook el-button--default el-button--medium">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </button>
                <button class="el-button social-login__button facebook el-button--default el-button--medium">
                    <i class="fab fa-google"></i>
                    <span>Google</span>
                </button>
                <button class="el-button social-login__button facebook el-button--default el-button--medium">
                    <i class="fab fa-github"></i>
                    <span>Github</span>
                </button>
            </div>
        </div>
    </div>
@endsection