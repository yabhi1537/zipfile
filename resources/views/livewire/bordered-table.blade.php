<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <div class="card-block">
                <h5 class="text-bold card-title">Bordered Table</h5>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $json = file_get_contents(public_path('../public/assets/json/tables-basic.json'));
                                $basics = json_decode($json, true);
                            @endphp
                            @foreach ($basics as $basic)
                                <tr>
                                    <td>{{ $basic['Firstname'] }}</td>
                                    <td>{{ $basic['Lastname'] }}</td>
                                    <td>{{ $basic['Email'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card-box">
            <div class="card-block">
                <h4 class="card-title">Hover Rows</h4>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $json = file_get_contents(public_path('../public/assets/json/tables-basic.json'));
                                $basics = json_decode($json, true);
                            @endphp
                            @foreach ($basics as $basic)
                                <tr>
                                    <td>{{ $basic['Firstname'] }}</td>
                                    <td>{{ $basic['Lastname'] }}</td>
                                    <td>{{ $basic['Email'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>