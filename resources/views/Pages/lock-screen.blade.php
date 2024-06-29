<?php $page = 'lock-screen'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="container-fluid px-0">
        <div class="row">
            <!-- Login logo -->
            <div class="col-lg-6 login-wrap">
                <div class="login-sec">
                    <div class="log-img">
                        <img class="img-fluid" src="{{ URL::asset('/assets/img/login-02.png') }}" alt="Logo">
                    </div>
                </div>
            </div>
            <!-- /Login logo -->

            <!-- Login Content -->
            <div class="col-lg-6 login-wrap-bg">
                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <div class="account-logo">
                                    <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/login-logo.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="user-lock-screen">
                                    <h2>Hi, Williams</h2>
                                    <p>Enter your password to unlock the account</p>
                                </div>
                                <!-- Form -->
                                <form action="{{ url('login') }}">
                                    <div class="form-group">
                                        <label>Password <span class="login-danger">*</span></label>
                                        <input class="form-control pass-input" type="password">
                                        <span class="profile-views feather-eye-off toggle-password"></span>
                                    </div>
                                    <div class="form-group login-btn">
                                        <button class="btn btn-primary btn-block" type="submit">Unlock</button>
                                    </div>
                                </form>
                                <!-- /Form -->

                                <div class="next-sign">
                                    <p class="account-subtitle">Sign in as a different user? <a
                                            href="{{ url('register') }}">Login</a></p>

                                    <!-- Social Login -->
                                    <div class="social-login">
                                        <a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/login-icon-01.svg') }}"
                                                alt=""></a>
                                        <a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/login-icon-02.svg') }}"
                                                alt=""></a>
                                        <a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/login-icon-03.svg') }}"
                                                alt=""></a>
                                    </div>
                                    <!-- /Social Login -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Login Content -->

        </div>
    </div>
@endsection