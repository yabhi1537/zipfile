<?php $page = 'staff-leave'; ?>
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
                    Leave Request
                @endslot
            @endcomponent
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table show-entire">
                        <div class="card-body">
                            <!-- Table Header -->
                            @component('components.table-header')
                                @slot('title')
                                    Leave Request
                                @endslot
                                @slot('li_1')
                                    {{ url('add-leave') }}
                                @endslot
                            @endcomponent
                            <!-- /Table Header -->
                            <div class="staff-search-table">
                                <form action="javascript:;">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="form-group local-forms">
                                                <label>Employee Name </label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="form-group local-forms">
                                                <label>Leave Type </label>
                                                @livewire('select-leave')
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="form-group local-forms">
                                                <label>Leave Status </label>
                                                @livewire('select-staff-leave')
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="form-group local-forms cal-icon">
                                                <label>From </label>
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="form-group local-forms cal-icon">
                                                <label>To </label>
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="doctor-submit">
                                                <button type="submit"
                                                    class="btn btn-primary submit-list-form me-2">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table datatable mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </th>
                                            <th>Employee Name</th>
                                            <th>Leave Type</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>No of days</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $json = file_get_contents(public_path('../public/assets/json/staff-leave.json'));
                                            $staffs = json_decode($json, true);
                                        @endphp
                                        @foreach ($staffs as $staff)
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td class="profile-image"><a href="{{ url('profile') }}"><img width="28"
                                                            height="28"
                                                            src="{{ URL::asset('/assets/img/profiles/' . $staff['Image']) }}"
                                                            class="rounded-circle m-r-5" alt="">
                                                        {{ $staff['EmployeeName'] }}</a></td>
                                                <td>{{ $staff['LeaveType'] }}</td>
                                                <td>{{ $staff['From'] }}</td>
                                                <td>{{ $staff['To'] }}</td>
                                                <td>{{ $staff['Noofdays'] }}</td>
                                                <td>{{ $staff['Reason'] }}</td>
                                                <td>
                                                    <div class="dropdown action-label">
                                                        <a class="{{ $staff['Class'] }} dropdown-toggle" href="javascript:;"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $staff['Status'] }}
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end status-staff">
                                                            <a class="dropdown-item" href="javascript:;">New</a>
                                                            <a class="dropdown-item" href="javascript:;">Pending</a>
                                                            <a class="dropdown-item" href="javascript:;">Approved</a>
                                                            <a class="dropdown-item" href="javascript:;">Declined</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="javascript:;" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{ url('edit-leave') }}"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                                                                data-bs-target="#delete_patient"><i
                                                                    class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
