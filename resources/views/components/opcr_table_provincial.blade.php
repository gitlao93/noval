@props(['objectivesact', 'measures', 'provinces', 'annual_targets'])
<h1>This part is for the Provincial Level View</h1>
{{-- BDD --}}
<h2>BDD</h2>
<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th rowspan="2" class="text-center align-middle">Objectives</th>
            <th rowspan="2" class="text-center align-middle">Measure</th>
            <th rowspan="2" class="text-center align-middle">Div</th>
            <th colspan="{{ $provinces->count() }}" class="text-center align-middle">Annual Target</th>
        </tr>
        <tr>
            @foreach ($provinces as $province)
                <th class="text-center align-middle">{{ $province->province }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($objectivesact as $objective)
            @php
                $measures = $objective->measures->where('division.division', 'BDD');
                $measure_count = $measures->count();
            @endphp
            @if ($measure_count > 0)
                <tr>
                    <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">{{ $objective->objective }}
                    </td>
                </tr>
                @foreach ($measures as $measure)
                    <tr>
                        <td class="text-center align-middle">{{ $measure->measure }}</td>
                        <td class="text-center align-middle">{{ $measure->division->division }}</td>
                        @foreach ($provinces as $province)
                            <td class="text-center align-middle">
                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            @endif
        @endforeach
    </tbody>
</table>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Bukidnon</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Bukidnon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Bukidnun')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h3>Lanao Del Norte</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Lanao Del Norte</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Lanao Del Norte')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Misamis Oriental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Oriental</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Oriental')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h3>Misamis Occidental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Occidental</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Occidental')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <h3>Camiguin</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Camiguin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'BDD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Camiguin')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>

{{-- end of BDD --}}



<h2>CPD</h2>
<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th rowspan="2" class="text-center align-middle">Objectives</th>
            <th rowspan="2" class="text-center align-middle">Measure</th>
            <th rowspan="2" class="text-center align-middle">Div</th>
            <th colspan="{{ $provinces->count() }}" class="text-center align-middle">Annual Target</th>
        </tr>
        <tr>
            @foreach ($provinces as $province)
                <th class="text-center align-middle">{{ $province->province }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($objectivesact as $objective)
            @php
                $measures = $objective->measures->where('division.division', 'CPD');
                $measure_count = $measures->count();
            @endphp
            @if ($measure_count > 0)
                <tr>
                    <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                        {{ $objective->objective }}</td>
                </tr>
                @foreach ($measures as $measure)
                    <tr>
                        <td class="text-center align-middle">{{ $measure->measure }}</td>
                        <td class="text-center align-middle">{{ $measure->division->division }}</td>
                        @foreach ($provinces as $province)
                            <td class="text-center align-middle">
                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            @endif
        @endforeach
    </tbody>
</table>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Bukidnon</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Bukidnon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Bukidnun')
                                            <td class="text-center align-middle">

                                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h3>Lanao Del Norte</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Lanao Del Norte</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Lanao Del Norte')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Misamis Oriental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Oriental</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Oriental')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h3>Misamis Occidental</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Misamis Occidental</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Misamis Occidental')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <h3>Camiguin</h3>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
                        <th rowspan="2" class="text-center align-middle">Measure</th>
                        <th rowspan="2" class="text-center align-middle">Div</th>
                        <th colspan="1" class="text-center align-middle">Annual Target</th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle">Camiguin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objectivesact as $objective)
                        @php
                            $measures = $objective->measures->where('division.division', 'CPD');
                            $measure_count = $measures->count();
                        @endphp
                        @if ($measure_count > 0)
                            <tr>
                                <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                                    {{ $objective->objective }}</td>
                            </tr>
                            @foreach ($measures as $measure)
                                <tr>
                                    <td class="text-center align-middle">{{ $measure->measure }}</td>
                                    <td class="text-center align-middle">{{ $measure->division->division }}</td>
                                    @foreach ($provinces as $province)
                                        @if ($province->province == 'Camiguin')
                                            <td class="text-center align-middle">

                                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
















<h2>FAD</h2>
<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th rowspan="2" class="text-center align-middle">Objectives</th>
            <th rowspan="2" class="text-center align-middle">Measure</th>
            <th rowspan="2" class="text-center align-middle">Div</th>
            <th colspan="{{ $provinces->count() }}" class="text-center align-middle">Annual Target</th>
        </tr>
        <tr>
            @foreach ($provinces as $province)
                <th class="text-center align-middle">{{ $province->province }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($objectivesact as $objective)
            @php
                $measures = $objective->measures->where('division.division', 'FAD');
                $measure_count = $measures->count();
            @endphp
            @if ($measure_count > 0)
                <tr>
                    <td rowspan="{{ $measure_count + 1 }}" class="text-center align-middle">
                        {{ $objective->objective }}</td>
                </tr>
                @foreach ($measures as $measure)
                    <tr>
                        <td class="text-center align-middle">{{ $measure->measure }}</td>
                        <td class="text-center align-middle">{{ $measure->division->division }}</td>
                        @foreach ($provinces as $province)
                            <td class="text-center align-middle">
                               @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                                    <p class="text-success">{{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}</p>
                                                @else
                                                    <p class="text-danger">N/A</p>
                                                    
                                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            @endif
        @endforeach
    </tbody>
</table>
