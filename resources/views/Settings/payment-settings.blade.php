<?php $page = 'payment-settings'; ?>
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
                @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        @endif
                @if($Payment)
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Paypal</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <!-- <input type="checkbox" id="status_1" value="{{ $Payment->option }}" name="option" class="check"> -->
                                <input id="status_1" data-id="{{$Payment->id}}" name="option" class="check" type="checkbox" data-onstyle="danger"        
                                    data-offstyle="info" data-toggle="toggle" 
                                    data-on="Pending" data-off="Approved" {{$Payment->option?'checked':''}}>
                                <label for="status_1" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                        <form action="{{ route('updatepayment',$Payment->id) }}" method="post">
                         @csrf
                                <div class="settings-form">
                                    <div class="form-group">
                                        <p class="pay-cont">Paypal Option</p>
                                        <label class="custom_radio me-4">
                                            <input type="radio" name="livesandbox_key" value="1" @if($Payment->livesandbox_key == 1) checked="" @endif>
                                            <span class="checkmark"></span> Sandbox
                                        </label>
                                        <label class="custom_radio">
                                            <input type="radio" name="livesandbox_key" value="0" @if($Payment->livesandbox_key == 0) checked="" @endif>
                                            <span class="checkmark"></span> Live
                                        </label>
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Braintree Tokenization key <span class="star-red">*</span></label>
                                        <input type="text" name="tokenization_key" value="{{$Payment->tokenization_key}}" class="form-control"
                                            placeholder="Enter Tokenization key">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Braintree Merchant ID <span class="star-red">*</span></label>
                                        <input type="text" name="merchant_id" value="{{$Payment->merchant_id}}" class="form-control" placeholder="Enter Merchant Id">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Braintree Public key <span class="star-red">*</span></label>
                                        <input type="text" name="public_key" value="{{$Payment->public_key}}" class="form-control" placeholder="Enter Public key">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Braintree Private key <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" name="private_key" value="{{$Payment->private_key}}"
                                            placeholder="Enter Private key">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Paypal APP ID <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" name="app_id" value="{{$Payment->app_id}}" placeholder="Enter App Id">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Paypal Secret Key <span class="star-red">*</span></label>
                                        <input type="text" name="secret_key" value="{{$Payment->secret_key}}" class="form-control" placeholder="Enter Secret Key">
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
                    </form>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Stripe</h5>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                <!-- <input type="checkbox" id="status_2" name="option" class="check" checked=""> -->
                                <input id="status_2" data-id="{{$Payment2->id}}" name="option" class="check" type="checkbox" data-onstyle="danger"        
                 data-offstyle="info" data-toggle="toggle" 
                data-on="Pending" data-off="Approved" {{$Payment->option?'checked':''}}>
                                <label for="status_2" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                        <form action="{{ route('updatepayment2',$Payment2->id) }}" method="post">
                         @csrf
                                <div class="settings-form">
                                    <div class="form-group">
                                        <p class="pay-cont">Stripe Option</p>
                                        <label class="custom_radio me-4">
                                            <input type="radio" name="livesandbox_key" value="1" @if($Payment2->livesandbox_key == 1) checked="" @endif>
                                            <span class="checkmark"></span> Sandbox
                                        </label>
                                        <label class="custom_radio">
                                            <input type="radio" name="livesandbox_key" value="0" @if($Payment2->livesandbox_key == 0) checked="" @endif>
                                            <span class="checkmark"></span> Live
                                        </label>
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Gateway Name <span class="star-red">*</span></label>
                                        <input type="text" name="gatewayname" value="{{$Payment2->gatewayname}}" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>API Key <span class="star-red">*</span></label>
                                        <input type="text" name="api_key" value="{{$Payment2->api_key}}" class="form-control"
                                            placeholder="">
                                    </div>
                                    <div class="form-group form-placeholder">
                                        <label>Rest Key <span class="star-red">*</span></label>
                                        <input type="text" name="restkey" value="{{$Payment2->restkey}}"  class="form-control"
                                            placeholder="">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-secondary btn-rounded">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        @component('components.notification-box')
        @endcomponent
    </div>
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <script>
    $('#status_1').change(function() {

        var option = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        $.ajax({

            type: "POST",
            dataType: "json",
            url: "{{ route('changestatusoption') }}",
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
                    url: "{{ route('changestatusoption2') }}",
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

