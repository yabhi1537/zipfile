<div class="table-responsive">
    <table class="table border-0 custom-table attent-table datatable mb-0">
        <thead>
            <tr>
                <th>September</th>
                <th>01</th>
                <th>02</th>
                <th>03</th>
                <th>04</th>
                <th>05</th>
                <th class="week-days">06</th>
                <th class="week-days">07</th>
                <th>08</th>
                <th>09</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th class="week-days">13</th>
                <th class="week-days">14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th class="week-days">20</th>
                <th class="week-days">21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th class="week-days">27</th>
                <th class="week-days">28</th>
                <th>29</th>
                <th>30</th>
                <th>31</th>
            </tr>
        </thead>
        <tbody>
            @php
                $json = file_get_contents(public_path('../public/assets/json/staff-attendance.json'));
                $staffs = json_decode($json, true);
            @endphp
            @foreach ($staffs as $staff)
                <tr>
                    <td class="month-table">
                        <h5>{{ $staff['Name'] }}</h5>
                    </td>
                    <td>
                        @if ($staff['Class10'] === 'present-table')
                            <span class="{{ $staff['Class10'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class10'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class11'] === 'present-table')
                            <span class="{{ $staff['Class11'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class11'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class12'] === 'present-table')
                            <span class="{{ $staff['Class12'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class12'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class13'] === 'present-table')
                            <span class="{{ $staff['Class13'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class13'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class14'] === 'present-table')
                            <span class="{{ $staff['Class14'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class14'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        @if ($staff['Class17'] === 'present-table')
                            <span class="{{ $staff['Class17'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class17'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class18'] === 'present-table')
                            <span class="{{ $staff['Class18'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class18'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class19'] === 'present-table')
                            <span class="{{ $staff['Class19'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class19'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class20'] === 'present-table')
                            <span class="{{ $staff['Class20'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class20'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class21'] === 'present-table')
                            <span class="{{ $staff['Class21'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class21'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        @if ($staff['Class24'] === 'present-table')
                            <span class="{{ $staff['Class24'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class24'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class25'] === 'present-table')
                            <span class="{{ $staff['Class25'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class25'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class26'] === 'present-table')
                            <span class="{{ $staff['Class26'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class26'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class27'] === 'present-table')
                            <span class="{{ $staff['Class27'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class27'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class28'] === 'present-table')
                            <span class="{{ $staff['Class28'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class28'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        @if ($staff['Class31'] === 'present-table')
                            <span class="{{ $staff['Class31'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class31'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class01'] === 'present-table')
                            <span class="{{ $staff['Class01'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class01'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class02'] === 'present-table')
                            <span class="{{ $staff['Class02'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class02'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class05'] === 'present-table')
                            <span class="{{ $staff['Class05'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class05'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class06'] === 'present-table')
                            <span class="{{ $staff['Class06'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class06'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        @if ($staff['Class07'] === 'present-table')
                            <span class="{{ $staff['Class07'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class07'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class08'] === 'present-table')
                            <span class="{{ $staff['Class08'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class08'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                    <td>
                        @if ($staff['Class09'] === 'present-table')
                            <span class="{{ $staff['Class09'] }} attent-status"><i
                                    class="feather-check"></i></span>
                        @else
                            <span class="{{ $staff['Class09'] }} attent-status"><i
                                    class="feather-x"></i></span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>