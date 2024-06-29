<?php $page = 'change-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Dashboard
                @endslot
                @slot('li_1')
                    Settings
                @endslot
            @endcomponent
            <!-- /Page Header -->

            @component('components.settings-header')
            @endcomponent

            <div class="row">
                <div class="col-lg-8">
                   @if($errors->any())
                    {!! implode('', $errors->all('<div  style="color:red">:message</div>')) !!}
                    @endif
                    @if(Session::get('error') && Session::get('error') != null)
                    <div  style="color:red">{{ Session::get('error') }}</div>
                        @php
                        Session::put('error', null)
                        @endphp
                        @endif
                        @if(Session::get('success') && Session::get('success') != null)
                        <div class="alert alert-success" >{{ Session::get('success') }}</div>
                        @php
                        Session::put('success', null)
                        @endphp
                        @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('passwordupdate',$passwordchange->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <h4 class="page-title">Change Password</h4>
                                    <div class="col-12 col-md-6 col-xl-12">
                                        <div class="form-group local-forms">
                                            <label>Old password <span class="login-danger">*</span></label>
                                            <input class="form-control" name="old_password" value="" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>New password <span class="login-danger">*</span></label>
                                            <input class="form-control" name="password" value="" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Confirm password <span class="login-danger">*</span></label>
                                            <input class="form-control" name="password_confirmation" value="" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
