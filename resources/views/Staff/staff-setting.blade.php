<?php $page = 'staff-setting'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Staffs
                @endslot
                @slot('li_1')
                    Staffs Profile
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    @livewire('staff-head')
                    <div class="row">
                        @livewire('staff-setting-about')
                        @livewire('staff-setting-details')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.notification-box')
    @endcomponent
    </div>
@endsection
