@props(['opcrs'])



<form method="POST" action="{{ route('drivers.store') }}" class="card text-bg-dark px-5 py-2 mx-auto my-3">
    @csrf
    <div class="card-header">Drivers</div>
    <div class="card-body">
        <div class="row mb-3">
            <label for="driver" class="col-form-label text-md-start">{{ __('Drivers') }}</label>

            <div>
                <textarea id="driver" class="form-control @error('objectives') is-invalid @enderror" name="driver"
                    value="{{ old('driver') }}" required autofocus>
                                </textarea>
                @error('driver')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="opcr" class="col-form-label text-md-start">{{ __('OPCR') }}</label>
            <select id="opcr" class="form-select mb-3" name="opcr_ID">

                <option selected>select a OPCR</option>
                @foreach ($opcrs as $opcr)
                    <option value="{{ $opcr->opcr_ID }}">{{ $opcr->opcr }}
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
            <button class="btn btn-primary" type="submit">{{ __('Add Driver') }}</button>
        </div>
    </div>
</form>