@props(['driversact', 'measures', 'provinces', 'annual_targets'])
<h1>This part is for the division Level View</h1>
<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th rowspan="2" class="text-center align-middle">Drivers</th>
            <th rowspan="2" class="text-center align-middle">Measure</th>
            <th colspan="{{ $provinces->count() }}" class="text-center align-middle">Annual Target</th>
        </tr>
        <tr>
            @foreach ($provinces as $province)
                <th class="text-center align-middle">{{ $province->province }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($driversact as $driver)
            <tr>
                <td rowspan="{{ $driver->measures->count() + 1 }}" class="text-center align-middle">
                    {{ $driver->driver }}</td>
                @foreach ($driver->measures as $measure)
            <tr>
                <td class="text-center align-middle">{{ $measure->measure }}</td>
                @foreach ($provinces as $province)
                    <td class="text-center align-middle">
                        @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                            <p>
                                {{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                            </p>
                        @else
                            <p>N/A</p>
                        @endif
                    </td>

                    {{--  --}}
                @endforeach
            </tr>
        @endforeach
        </tr>
        @endforeach
    </tbody>
</table>

<div class="container">
    <h2>BDD division level per Province</h2>
    <div class="row">
        <div class="col-md-12">
            <h3>Bukidnon</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Drivers</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Bukidnon</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Bukidnun')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <h3>Lanao Del Norte</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Driver</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Lanao Del Norte</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Lanao Del Norte')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Misamis Oriental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Drivers</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Oriental</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Oriental')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <h3>Misamis Occidental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Driver</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Occidental</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Occidental')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mx-auto">
            <h3>Camiguin</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Drivers</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Camiguin</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Camiguin')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>






<div class="container">
    <h2>CPD division level per Province</h2>
    <div class="row">
        <div class="col-md-12">
            <h3>Bukidnon</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Drivers</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Bukidnon</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Bukidnun')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <h3>Lanao Del Norte</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Driver</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Lanao Del Norte</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Lanao Del Norte')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Misamis Oriental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Drivers</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Oriental</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Oriental')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <h3>Misamis Occidental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Driver</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Occidental</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Occidental')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mx-auto">
            <h3>Camiguin</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Drivers</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Camiguin</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Camiguin')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>



<div class="container">
    <h2>FAD division level per Province</h2>
    <div class="row">
        <div class="col-md-12">
            <h3>Bukidnon</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Drivers</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Bukidnon</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>

                    </tr>
                  
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'FAD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Bukidnun')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <h3>Lanao Del Norte</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Driver</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Lanao Del Norte</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'FAD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Lanao Del Norte')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Misamis Oriental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Drivers</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Oriental</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'FAD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Oriental')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <h3>Misamis Occidental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Driver</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Occidental</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'FAD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Occidental')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mx-auto">
            <h3>Camiguin</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Drivers</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                        <th colspan="12" class="text-center align-middle">Month</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Camiguin</th>
                        <th class="text-center align-middle">Jan</th>
                        <th class="text-center align-middle">Feb</th>
                        <th class="text-center align-middle">Mar</th>
                        <th class="text-center align-middle">Apr</th>
                        <th class="text-center align-middle">May</th>
                        <th class="text-center align-middle">Jun</th>
                        <th class="text-center align-middle">Jul</th>
                        <th class="text-center align-middle">Aug</th>
                        <th class="text-center align-middle">Sep</th>
                        <th class="text-center align-middle">Oct</th>
                        <th class="text-center align-middle">Nov</th>
                        <th class="text-center align-middle">Dec</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driversact as $driver)
                        @php
                            $measures = $driver->measures->where('division.division', 'FAD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $driver->driver }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Camiguin')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p>N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                    <td class="text-center align-middle">N/A</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
