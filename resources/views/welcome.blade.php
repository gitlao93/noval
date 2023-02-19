<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container-fluid d-flex flex-row flex-nowrap justify-content-center">

        <div class="align-self-stretch">
            <div>
                <form method="POST" action="{{ route('objectives.store') }}"
                    class="card text-bg-dark px-5 py-2 mx-auto my-3">
                    @csrf
                    <div class="card-header">Strategic Objectives</div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="objectives"
                                class="col-form-label text-md-start">{{ __('Strategic Objectives') }}</label>

                            <div>
                                <textarea id="objectives" class="form-control @error('objectives') is-invalid @enderror" name="objective"
                                    value="{{ old('objectives') }}" required autofocus>
                                </textarea>
                                @error('objectives')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-grid col-10 mx-auto my-3">
                            <button class="btn btn-primary" type="submit">{{ __('Add Objective') }}</button>
                        </div>
                    </div>
                </form>
            </div>


            <div>
                <form method="POST" action="{{ route('measures.store') }}"
                    class="card text-bg-dark px-5 py-2 mx-auto my-3">
                    @csrf
                    <div class="card-header">{{ __('Strategic Measure') }}</div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="measure"
                                class="col-form-label text-md-start">{{ __('Strategic Measure') }}</label>

                            <div>
                                <textarea id="measure" class="form-control @error('measure') is-invalid @enderror" name="measure"
                                    value="{{ old('measure') }}" required autofocus>
                                </textarea>

                                @error('measure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="objective" class="col-form-label text-md-start">{{ __('Objective') }}</label>
                            <select id="objective" class="form-select mb-3" name="objective_ID">

                                <option selected>select a Objective</option>
                                @foreach ($objectives as $objective)
                                    <option value="{{ $objective->objective_ID }}">{{ $objective->objective }}
                                    </option>
                                @endforeach
                            </select>
                            @error('objective_ID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="d-grid col-10 mx-auto my-3">
                            <button class="btn btn-primary" type="submit">{{ __('Add Measure') }}</button>
                        </div>
                    </div>
                </form>
            </div>

            <div>
                <form method="POST" action="{{ route('annual_targets.store') }}"
                    class="card text-bg-dark px-5 py-2 mx-auto my-3">
                    @csrf
                    <div class="card-header">{{ __('Strategic Measure') }}</div>
                    <div class="card-body">




                        <div class="row">
                            <label for="measure" class="col-form-label text-md-start">{{ __('Measure') }}</label>
                            <select class="form-select mb-3" name="measure_ID">

                                <option selected>select a measure</option>
                                @foreach ($measures as $measure)
                                    <option value="{{ $measure->measure_ID }}">{{ $measure->measure }}
                                    </option>
                                @endforeach
                            </select>
                            @error('measure_ID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <label for="province" class="col-form-label text-md-start">{{ __('Province') }}</label>
                            <select id="province" class="form-select mb-3" name="province_ID">

                                <option selected>select a province</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->province_ID }}">{{ $province->province }}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="row">
                            <label for="annual_target"
                                class="col-form-label text-md-start">{{ __('Annual Target') }}</label>

                            <div>
                                <input type="text" id="annual_target"
                                    class="form-control @error('annual_target') is-invalid @enderror"
                                    name="annual_target" value="{{ old('annual_target') }}" required autofocus />


                                @error('annual_target')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                        </div>


                        <div class="d-grid col-10 mx-auto my-3">
                            <button class="btn btn-primary" type="submit">{{ __('Add Annual Target') }}</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>



        <div class="col align-self-stretch px-5 py-3 mx-auto">

            {{-- <table class="table">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
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
                    @foreach ($measures->groupBy('objective_ID') as $objectiveID => $measures)
                        <tr>
                            <td>{{ $measures->first()->objective->objective }}</td>
                            <td>
                                <ul>
                                    @foreach ($measures as $measure)
                                        <li>{{ $measure->measure }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            @foreach ($provinces as $province)
                                <td>
                                    @php
                                        $targetValue = 'N/A';
                                        foreach ($measures as $measure) {
                                            $target = $targets
                                                ->where('province_ID', $province->province_ID)
                                                ->where('measure_ID', $measure->measure_ID)
                                                ->first();
                                            if ($target) {
                                                $targetValue = $target->annual_target;
                                                break;
                                            }
                                        }
                                    @endphp
                                    {{ $targetValue }}
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table> --}}




            <table class="table">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Objectives</th>
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
                    @foreach ($objectives as $objective)
                    <tr>
                        <td rowspan="{{ $objective->measures->count() + 1 }}">{{ $objective->objective }}</td>
                        @foreach ($objective->measures as $measure)
                        <tr>
                            <td>{{ $measure->measure }}</td>
                            @foreach ($provinces as $province)
                            <td>
                                @if (isset($annual_targets[$measure->measure_ID][$province->province_ID]))
                                {{ $annual_targets[$measure->measure_ID][$province->province_ID]->first()->annual_target }}
                                @else
                                N/A
                                @endif
                            </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>











        </div>

    </div>
</body>

</html>
