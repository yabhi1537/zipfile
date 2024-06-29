<?php $page = 'patients'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            @component('components.page-header')
                @slot('title')
                    Patients
                @endslot
                @slot('li_1')
                    Patient List
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
                                    Patient List
                                @endslot
                                @slot('li_1')
                                    {{ url('add-patient') }}
                                @endslot
                            @endcomponent
                            <!-- /Table Header -->

                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table datatable mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Specialization</th>
                                            <th>Degree</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Joining Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $json = file_get_contents(public_path('../public/assets/json/patients.json'));
                                            $patients = json_decode($json, true);
                                        @endphp
                                        @foreach ($patients as $patient)
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td class="profile-image"><a href="{{ url('profile') }}"><img width="28"
                                                            height="28"
                                                            src="{{ URL::asset('/assets/img/profiles/' . $patient['Image']) }}"
                                                            class="rounded-circle m-r-5" alt="">
                                                        {{ $patient['Name'] }}</a>
                                                </td>
                                                <td>{{ $patient['Department'] }}</td>
                                                <td>{{ $patient['Specialization'] }}</td>
                                                <td>{{ $patient['Degree'] }}</td>
                                                <td><a href="javascript:;">{{ $patient['Mobile'] }}</a></td>
                                                <td>{{ $patient['Email'] }}</td>
                                                <td>{{ $patient['JoiningDate'] }}</td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="javascript:;" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{ url('edit-patient') }}"><i
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
