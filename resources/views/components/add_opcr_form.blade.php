<form method="POST" action="{{ route('opcr.store') }}" class="card text-bg-dark px-5 py-2 mx-auto my-3">
    @csrf
    <div class="card-header">Add OPCR</div>
    <div class="card-body">
        <div class="row mb-3">
            <label for="OPCR" class="col-form-label text-md-start">{{ __('Add OPCR') }}</label>

            <div>
                <input type="input" id="OPCR" class="form-control @error('opcr') is-invalid @enderror" name="opcr"
                    value="{{ old('OPCR') }}" required autofocus>
                @error('opcr')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="d-grid col-10 mx-auto my-3">
            <button class="btn btn-primary" type="submit">{{ __('Add OPCR') }}</button>
        </div>
    </div>
</form>