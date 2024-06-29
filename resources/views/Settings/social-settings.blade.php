<?php $page = 'social-settings'; ?>
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
                            <h5 class="card-title">Google Login Credential</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <!-- <input type="checkbox" id="status_1" class="check" checked=""> -->
                                <input id="status_1" data-id="{{$social->id}}" name="option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$social->google_option?'checked':''}}>
                                <label for="status_1" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">

                            <form action="{{ route('googleupdate',$social->id) }}" method="post">
                                @csrf
                                <div class="settings-form">
                                    <div class="form-group form-placeholder">
                                        <label>Client ID <span class="star-red">*</span></label>
                                        <input type="text" name="google_client_id" value="{{ $social->google_client_id }}" class="form-control">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Client Secret <span class="star-red">*</span></label>
                                        <input type="text" name="google_client_secret" value="{{ $social->google_client_secret }}" class="form-control">
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
                            <h5 class="card-title">Facebook</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <!-- <input type="checkbox" id="status_2" class="check" checked=""> -->
                                <input id="status_2" data-id="{{$social->id}}" name="facebook_option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$social->facebook_option?'checked':''}}>
                                <label for="status_2" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                          <form action="{{ route('facebookupdate',$social->id) }}" method="post">
                            @csrf
                                <div class="settings-form">
                                    <div class="form-group form-placeholder">
                                        <label>App ID <span class="star-red">*</span></label>
                                        <input type="text" name="facebook_app_id" value="{{ $social->facebook_app_id }}" class="form-control">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>App Secret <span class="star-red">*</span></label>
                                        <input type="text" name="facebook_app_secret" value="{{ $social->facebook_app_secret }}" class="form-control">
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
                            <h5 class="card-title">Twiter Login Credential</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <!-- <input type="checkbox" id="status_3" class="check"> -->
                                <input id="status_3" data-id="{{$social->id}}" name="twiter_option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$social->twiter_option?'checked':''}}>
                                <label for="status_3" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                             <form action="{{ route('twiterupdate',$social->id) }}" method="post">
                                @csrf
                                <div class="settings-form">
                                    <div class="form-group form-placeholder">
                                        <label>Client ID <span class="star-red">*</span></label>
                                        <input type="text" name="twiter_client_id" value="{{ $social->twiter_client_id }}" class="form-control">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Client Secret <span class="star-red">*</span></label>
                                        <input type="text" name="twiter_client_secret" value="{{ $social->twiter_client_secret }}" class="form-control">
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
            url: "{{ route('settingoptionsocial') }}",
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
    url: "{{ route('settingoptionfacebook') }}",
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
    url: "{{ route('settingoptiontwiter') }}",
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
