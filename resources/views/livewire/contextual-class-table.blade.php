<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <div class="card-block">
                <h4 class="card-title">Contextual Classes</h4>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $json = file_get_contents(public_path('../public/assets/json/basic-tables.json'));
                                $basics = json_decode($json, true);
                            @endphp
                            @foreach ($basics as $basic)
                                <tr class="{{ $basic['Class'] }}">
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
                <h4 class="card-title">Responsive Tables</h4>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Age</th>
                                <th>City</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $json = file_get_contents(public_path('../public/assets/json/tables-responsive.json'));
                                $basics = json_decode($json, true);
                            @endphp
                            @foreach ($basics as $basic)
                                <tr>
                                    <td>{{ $basic['#'] }}</td>
                                    <td>{{ $basic['Firstname'] }}</td>
                                    <td>{{ $basic['Lastname'] }}</td>
                                    <td>{{ $basic['Age'] }}</td>
                                    <td>{{ $basic['City'] }}</td>
                                    <td>{{ $basic['Country'] }}</td>
                                </tr>
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>