<?php $page = 'localization-details'; ?>
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
                        <div class="card-header">
                            <h5 class="card-title">Localization Details</h5>
                        </div>
                        @if($Localization)
                        <div class="card-body pt-0">
                            <form action="{{ route('updatelocalization',$Localization->id) }}" method="post">
                              @csrf
                            <div class="settings-form">
                                    <div class="form-group">
                                        <label>Time Zone</label>
                                        @livewire('select-time-zone',['timezonedata' => $Localization->timezone])
                                    </div>
                                    <div class="form-group">
                                        <label>Date Format</label>
                                        @livewire('select-date-format',['dateformatdata' => $Localization->dateformat])
                                    </div>
                                    <div class="form-group">
                                        <label>Time Format</label>
                                        @livewire('select-time-format',['timeformatdata' => $Localization->timeformat])
                                    </div>
                                    <div class="form-group">
                                        <label>Currency Symbol</label>
                                        @livewire('select-currency-symbol',['currencysymboldata' => $Localization->currencysymbol])
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit"
                                                class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection
