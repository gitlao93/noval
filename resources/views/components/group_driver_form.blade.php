@props(['drivers', 'measures'])



<form method="POST" action="{{ route('measures.update') }}" class="card text-bg-dark px-5 py-2 mx-auto my-3">
    @csrf
    <div class="card-header">Group byDrivers</div>
    <div class="card-body">

        <div class="row mb-3">
            <label for="driver" class="col-form-label text-md-start">{{ __('Driver') }}</label>
            <select id="driver" class="form-select mb-3" name="driver_ID">

                <option selected>select a Driver</option>
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->driver_ID }}">{{ $driver->driver }}
                    </option>
                @endforeach
            </select>
            @error('driver_ID')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="row mb-3">
            <label for="measure" class="col-form-label text-md-start">{{ __('Measure') }}</label>
            <select id="measure" class="form-select mb-3" name="measure_ID">

                <option selected>select a measure</option>
                @foreach ($measures as $measure)
                    @if(isset($measure->driver_ID) == null)
                    <option value="{{ $measure->measure_ID }}">{{ $measure->measure }}
                    </option>
                    @endif
                @endforeach
            </select>
            @error('driver_ID')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-grid col-10 mx-auto my-3">
            <button class="btn btn-primary" type="submit">{{ __('Add Groups') }}</button>
        </div>
    </div>
</form>
