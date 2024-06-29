<?php $page = 'social-links'; ?>
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
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Social Link Settings</h5>
                        </div>
                        <div class="card-body pt-0">
                            <form action="{{ route('sociallinkupdate',$sociallink->id) }}" method="post">
                                @csrf
                                <div class="settings-form">
                                    <div class="links-info">
                                        <div class="row form-row links-cont">
                                            <div class="form-group form-placeholder d-flex">
                                                <button class="btn social-icon">
                                                    <i class="feather-facebook"></i>
                                                </button>
                                                <input type="text" name="facebook_url" value="{{$sociallink->facebook_url}}" class="form-control"
                                                    placeholder="https://www.facebook.com">
                                                <a href="javascript:;" class="btn trash">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="links-info">
                                        <div class="row form-row links-cont">
                                            <div class="form-group form-placeholder d-flex">
                                                <button class="btn social-icon">
                                                    <i class="feather-twitter"></i>
                                                </button>
                                                <input type="text" name="twitter_url" value="{{ $sociallink->twitter_url }}" class="form-control"
                                                    placeholder="https://www.twitter.com">
                                                <a href="javascript:;" class="btn trash">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="links-info">
                                        <div class="row form-row links-cont">
                                            <div class="form-group form-placeholder d-flex">
                                                <button class="btn social-icon">
                                                    <i class="feather-youtube"></i>
                                                </button>
                                                <input type="text" name="youtube_url" value="{{ $sociallink->youtube_url }}" class="form-control"
                                                    placeholder="https://www.youtube.com">
                                                <a href="javascript:;" class="btn trash"> 
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="links-info">
                                        <div class="row form-row links-cont">
                                            <div class="form-group form-placeholder d-flex">
                                                <button class="btn social-icon">
                                                    <i class="feather-linkedin"></i>
                                                </button>
                                                <input type="text" name="linkedin_url" data-id="{{$sociallink->id}}" value="{{ $sociallink->linkedin_url }}" class="form-control"
                                                    placeholder="https://www.linkedin.com">
                                                <a href="javascript:;" class="btn trash">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                   @if($allurl)
                                   @foreach($allurl as $url)
                                       <div class="links-info">
                                        <div class="row form-row links-cont">
                                            <div class="form-group form-placeholder d-flex">
                                                <button class="btn social-icon">
                                                    <i class="feather-github"></i>
                                                </button>
                                                <input type="text" name="url"  value="{{ $url }}" class="form-control"
                                                    placeholder="https://www.linkedin.com">
                                                <a href="javascript:;" class="btn trash">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="form-group text-end">
                                    <a href="javascript:void(0);" class="btn add-links">
                                        <i class="fa fa-plus me-1"></i> Add More
                                    </a>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="settings-btns">
                                        <button type="submit"
                                            class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Submit</button>
                                        <a href="#" class="btn btn-secondary btn-rounded">Cancel</a>
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
</script>
@endsection
