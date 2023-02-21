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

                        <div class="row mb-3">
                            <label for="division" class="col-form-label text-md-start">{{ __('Division') }}</label>
                            <select id="division" class="form-select mb-3" name="division_ID">

                                <option selected>select a Divison</option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->division_ID }}">{{ $division->division }}
                                    </option>
                                @endforeach
                            </select>
                            @error('division_ID')
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


        </div>



        <div class="col align-self-stretch px-5 py-3 mx-auto">
            <x-opcr_table :provinces=$provinces :objectives=$objectives :measures=$measures :annual_targets=$annual_targets/>

        </div>

    </div>
</body>

</html>
