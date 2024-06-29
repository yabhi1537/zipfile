<?php $page = 'theme-settings'; ?>
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
            @if (session('success'))
                        <div class="alert alert-success">
                        <strong>{{ session('success') }}</strong>
                        </div>
                    @endif     
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                          <form action="{{ route('themeupdate',$theme->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h4 class="page-title">Theme Settings</h4>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Website Name</label>
                                    <div class="col-lg-9">
                                        <input name="name"  class="form-control" value="{{ $theme->name }}" type="text">
                                    </div>
                                </div>
                                <div class="form-group theme-set row">
                                    <label class="col-lg-3 col-form-label">Light Logo</label>
                                    <div class="col-lg-7">
                                        <input type="hidden" name="oldlogo" value="{{ $theme->logo }}">
                                        <input class="form-control" type="file" name="logo">
                                        <span class="form-text text-muted">Recommended image size is 40px x 40px</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="img-thumbnail float-end"><img
                                                src="{{ asset('uploads/themesettinglogo/'.$theme->logo) }}" alt=""
                                                width="40" height="40"></div>
                                    </div>
                                </div>
                                <div class="form-group theme-set row">
                                    <label class="col-lg-3 col-form-label">Favicon</label>
                                    <div class="col-lg-7">
                                    <input type="hidden" name="oldfavicon" value="{{ $theme->favicon }}">
                                        <input class="form-control" type="file" name="favicon">
                                        <span class="form-text text-muted">Recommended image size is 16px x 16px</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="settings-image img-thumbnail float-end"><img
                                                src="{{ asset('uploads/themesettingfavicon/'.$theme->favicon) }}" class="img-fluid"
                                                width="16" height="16" alt=""></div>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary submit-btn">Save</button>
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
