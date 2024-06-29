<?php $page = 'email-settings'; ?>
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
                            <h5 class="card-title">PHP Mail</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <!-- <input type="checkbox" id="status_1" class="check"> -->
                                <input id="status_1" data-id="{{$emails->id}}" name="option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$emails->option?'checked':''}}>
                                <label for="status_1" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form action="{{ route('emailsettingsupdate',$emails->id) }}" method="post" enctype="multipart/form-data">
                               @csrf
                            <div class="settings-form">
                                  <div class="form-group form-placeholder">
                                        <label>Emails From Name <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" name="name" value="{{$emails->name}}">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Email From Address <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" name="address" value="{{$emails->address}}">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Email Password <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" name="password" value="{{$emails->password}}">
                                    </div>
                               
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-secondary btn-rounded">Cancel</button>
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
                            <h5 class="card-title">SMTP</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <!-- <input type="checkbox" id="status_2" class="check" checked=""> -->
                                <input id="status_2" data-id="{{$emailssetting2->id}}" name="option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$emailssetting2->option?'checked':''}}>
                                <label for="status_2" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form action="{{ route('emailsettingsupdate2',$emailssetting2->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="settings-form">
                                    <div class="form-group form-placeholder">
                                        <label>Email From Address<span class="star-red">*</span></label>
                                        <input type="text" name="address" value="{{ $emailssetting2->address }}" class="form-control">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Email Password <span class="star-red">*</span></label>
                                        <input type="text" value="{{ $emailssetting2->password }}" name="password" class="form-control">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Email Host <span class="star-red">*</span></label>
                                        <input type="text" value="{{ $emailssetting2->host }}" name="host" class="form-control">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Email Port <span class="star-red">*</span></label>
                                        <input type="text" name="port" value="{{ $emailssetting2->port }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-secondary btn-rounded">Cancel</button>
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
            url: "{{ route('settingoptionemail') }}",
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
    url: "{{ route('settingoptionemail2') }}",
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
