<?php $page = 'others-settings'; ?>
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Enable Google Analytics</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                               <input id="status_1" data-id="{{$other->id}}" name="option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$other->enable_google_analytic?'checked':''}}>
                               <label for="status_1" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form action="{{ route('GoogleAnalyticsSetting',$other->id) }}" method="post">
                                @csrf
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Google Analytics <span class="star-red">*</span></label>
                                        <textarea class="form-control" name="name_google_analytic" placeholder="Google Analytics">{{$other->name_google_analytic}}</textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Enable Google Adsense Code</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <input id="status_2" data-id="{{$other->id}}" name="option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$other->enable_google_adsense_code?'checked':''}}>
                                <label for="status_2" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                          <form action="{{ route('GoogleAdsenseSetting',$other->id) }}" method="post">
                                @csrf
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Google Adsense Code <span class="star-red">*</span></label>
                                        <textarea class="form-control" name="name_google_adsense_code" placeholder="Google Adsense Code">{{$other->name_google_adsense_code}}</textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Display Facebook Messenger</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                            <input id="status_3" data-id="{{$other->id}}" name="option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$other->enable_facebook_messenger?'checked':''}}>
                                <label for="status_3" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                        <form action="{{ route('FacebookMessengerSetting',$other->id) }}" method="post">
                                @csrf
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Facebook Messenger <span class="star-red">*</span></label>
                                        <textarea class="form-control" name="name_facebook_messenger" placeholder="Facebook Messenger">{{$other->name_facebook_messenger}}</textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Display Facebook Pixel</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                            <input id="status_4" data-id="{{$other->id}}" name="option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$other->enable_facebook_pixel?'checked':''}}>
                                <label for="status_4" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                        <form action="{{ route('FacebookPixelSetting',$other->id) }}" method="post">
                                @csrf
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Google Adsense Code <span class="star-red">*</span></label>
                                        <textarea class="form-control" name="name_facebook_pixel" placeholder="Google Adsense Code">{{$other->name_facebook_pixel}}</textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card w-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Display Google Recaptcha</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                            <input id="status_5" data-id="{{$other->id}}" name="enable_google_recaptcha" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$other->enable_google_recaptcha?'checked':''}}>
                                <label for="status_5" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                        <form action="{{ route('GoogleRechaptchaSetting',$other->id) }}" method="post">
                                @csrf
                                <div class="settings-form">
                                    <div class="form-group form-placeholder">
                                        <label>Google Rechaptcha Site Key <span class="star-red">*</span></label>
                                        <input type="text" name="google_rechaptcha_site_key" value="{{$other->google_rechaptcha_site_key}}" class="form-control"
                                            placeholder="">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Google Rechaptcha Secret Key <span class="star-red">*</span></label>
                                        <input type="text" name="google_rechaptcha_secret_key" value="{{$other->google_rechaptcha_secret_key}}" class="form-control"
                                            placeholder="">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card w-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Cookies Agreement</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                            <input id="status_6" data-id="{{$other->id}}" name="enable_cookies_agreement" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$other->enable_cookies_agreement?'checked':''}}>
                                <label for="status_6" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                        <form action="{{ route('CookieSetting',$other->id) }}" method="post">
                                @csrf
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Cookies Agreement Text <span class="star-red">*</span></label>
                                        
                                        <textarea id="editor" name="name_cookies_agreement">{{$other->name_cookies_agreement}}</textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>
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
    <script>
    $('#status_1').change(function() {

        var option = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        $.ajax({

            type: "POST",
            dataType: "json",
            url: "{{ route('googleanalyticstatus') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'option': option,
                'id': id
            },

            success: function(data) {
                console.log(data.success)
          
            }
        });
    })

    $('#status_2').change(function() {

            var option = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({

                type: "POST",
                dataType: "json",
                url: "{{ route('enablegoogleadsensestatus') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'option': option,
                    'id': id
                },

                success: function(data) {
                    console.log(data.success)
            
                }
            });
            })

     $('#status_3').change(function() {

        var option = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        $.ajax({

            type: "POST",
            dataType: "json",
            url: "{{ route('facebookmessengerstatus') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'option': option,
                'id': id
            },

            success: function(data) {
                console.log(data.success)
        
            }
        });
        })

   $('#status_4').change(function() {
            var option = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({

                type: "POST",
                dataType: "json",
                url: "{{ route('facebookpixelstatus') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'option': option,
                    'id': id
                },

                success: function(data) {
                    console.log(data.success)
            
                }
            });
            })

 $('#status_5').change(function() {
        var option = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        $.ajax({

            type: "POST",
            dataType: "json",
            url: "{{ route('googlerecaptchastatus') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'option': option,
                'id': id
            },

            success: function(data) {
                console.log(data.success)

            }
        });
        })

$('#status_6').change(function() {

        var option = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        $.ajax({

        type: "POST",
        dataType: "json",
        url: "{{ route('cookieagreementstatus') }}",
        data: {
            "_token": "{{ csrf_token() }}",
            'option': option,
            'id': id
        },

        success: function(data) {
            console.log(data.success)

        }
        });
        })
    </script>
@endsection
