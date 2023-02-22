@props(['objectives', 'divisions'])
<form method="POST" action="{{ route('measures.store') }}" class="card text-bg-dark px-5 py-2 mx-auto my-3">
    @csrf
    <div class="card-header">{{ __('Strategic Measure') }}</div>
    <div class="card-body">
        <div class="row mb-3">
            <label for="measure" class="col-form-label text-md-start">{{ __('Strategic Measure') }}</label>

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
