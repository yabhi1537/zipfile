<?php $page = 'salary-view'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Payroll
                @endslot
                @slot('li_1')
                    Payslip
                @endslot
            @endcomponent
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="Payslip-head">
                                <div class="payrolss-counts">
                                    <h5>Payslip for the Month of October 2023</h4>
                                        <ul class="nav">
                                            <li><a href="javascript:;" class=" me-2"><img
                                                        src="{{ URL::asset('/assets/img/icons/pdf-icon-01.svg') }}"
                                                        alt=""></a></li>
                                            <li><a href="javascript:;" class=" me-2"><img
                                                        src="{{ URL::asset('/assets/img/icons/pdf-icon-02.svg') }}"
                                                        alt=""></a></li>
                                        </ul>
                                </div>
                            </div>
                            <div class="payroll-head-clinic">
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="invoice-counts">
                                            <h4>Invoice#345766 <br><span> Salary Month: July, 2023</span></h4>
                                            <h4>Status: <a href="javascript:;" class="status-green">Success</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row custom-invoice">
                                <div class="col-12 col-md-6 m-b-20">
                                    <img src="{{ URL::asset('/assets/img/logo.png') }}" width="35" height="35"
                                        alt=""> <span>Pre Clinic</span>
                                    <ul class="list-unstyled invoice-clinic mt-2">
                                        <li>3864 Quiet Valley Lane,
                                        <li>Sherman Oaks, CA, 91403</li>
                                        <li>GST No:2914035</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6 m-b-20">
                                    <div class="invoice-details">
                                        <h3>Andrea Lalema:</h3>
                                        <h3>Nurse</h3>
                                        <ul class="list-unstyled invoice-clinic">
                                            <li>Employee ID: NS-0001</li>
                                            <li>oining Date: 7 May 2023</li>
                                            <li>barrycuda@example.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="payslip-head-roll">
                                        <h5>Earnings</h5>
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>Basic Salary </label>
                                        <input class="form-control" type="text" value="$1000">
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>House Rent Allowance (H.R.A) </label>
                                        <input class="form-control" type="text" value="$800">
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>Conveyance </label>
                                        <input class="form-control" type="text" value="$600">
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>Other Allowance </label>
                                        <input class="form-control" type="text" value="$50">
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>Total Earnings </label>
                                        <input class="form-control" type="text" value="$16000">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="payslip-head-roll">
                                        <h5>Deductions</h5>
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>Tax Deducted at Source (T.D.S.) </label>
                                        <input class="form-control" type="text" value="$600">
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>Provident Fund </label>
                                        <input class="form-control" type="text" value="$500">
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>ESI </label>
                                        <input class="form-control" type="text" value="$60">
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>Loan</label>
                                        <input class="form-control" type="text" value="$40">
                                    </div>
                                    <div class="form-group local-forms">
                                        <label>Total Deductions </label>
                                        <input class="form-control" type="text" value="$300">
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-info">
                                <h5>Net Salary: $59698 (Fifty Nine Thousand Six Hundred and Ninety Eight Only)</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed
                                    dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut
                                    a ex. Maecenas sed vehicula dui, ac suscipit lacus.</p>
                            </div>
                            <div class="col-12">
                                <div class="doctor-submit text-end">
                                    <a href="javascript:;" class="btn btn-primary submit-form me-2">Send Payslip</a>
                                    <a href="javascript:;" class="btn btn-primary cancel-form"><i
                                            class="feather-printer me-2"></i>Print</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('components.notification-box')
        @endcomponent
    </div>
@endsection