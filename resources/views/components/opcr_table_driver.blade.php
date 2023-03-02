@props(['driversact', 'measures', 'provinces', 'annual_targets', 'monthly_targets'])
<h1>This part is for the division Level View</h1>
{{-- <table class="table table-bordered border-primary">
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

                @endforeach
            </tr>
        @endforeach
        </tr>
        @endforeach
    </tbody>
</table> --}}
{{-- {{var_dump($monthly_targets)}} --}}
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
                                                @else
                                                    <p>N/A</p>
                                                @endif
                                            </td>
                                            {{-- jan --}}
                                            @if (isset($monthly_targets) == null))

                                                <td class="text-center align-middle"></td>
                                            @else
                                                <td class="text-center align-middle">
                                                    <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#jan<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                    id="#jan<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                        N/A
                                                    </a>
                                                </td>
                                                <x-update_monthly_target_modal :month="'jan'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- feb --}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#feb<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#feb<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'feb'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- mar --}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#mar<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#mar<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'mar'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- apr --}}
                                            @if (isset($monthly_targets) == null) 
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#apr<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#apr<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'apr'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- may --}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#may<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#may<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'may'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- jun --}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#jun<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#jun<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'jun'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- jul--}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#jul<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#jul<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'jul'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- aug --}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#aug<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#aug<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'aug'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- sep --}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#sep<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#sep<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'sep'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- oct--}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#oct<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#oct<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'oct'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- nov--}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#nov<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#nov<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'nov'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                            {{-- dec --}}
                                            @if (isset($monthly_targets) == null)
                                                <td class="text-center align-middle"></td>
                                            @else
                                            <td class="text-center align-middle">
                                                <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#dec<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>"
                                                id="#dec<?='_' . $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID ?>" class="text-danger">
                                                    N/A
                                                </a>
                                            </td>
                                            <x-update_monthly_target_modal :month="'dec'" :division_ID="1" :annual_target="$annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target_ID" />
                                            @endif
                                        @endif
                                    @endforeach
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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





{{-- 
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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

</div> --}}



{{-- <div class="container">
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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
                                                    <p>{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                                    </p>
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

</div> --}}



