@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Enter name') }}" name="name" id="name"
                value="{{ old('name', $state->name) }}">
            <div class="pristine-error text-danger">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="iso">{{ __('ISO') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Enter ISO') }}" name="iso" id="iso"
                value="{{ old('iso', $state->iso) }}">
            <div class="pristine-error text-danger">{{ $errors->first('iso') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="country_id">{{ __('Country') }}</label>
            <select class="form-select" data-show-subtext="true" data-live-search="true" id="country_id" name="country_id">
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($countries as $id => $name)
                <option value="{{ $id }}" {{ $id==old('country_id',$state->country_id) ? 'selected' : '' }}
                    >{{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger">{{ $errors->first('country_id') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="note">{{ __('Note') }}</label>
            <textarea class="form-control" name="note" id="note" cols="30"
                rows="5">{{ old('note', $state->note) }}</textarea>
        </div>
    </div>
</div>

<div class="mt-4">
    <button type="submit" class="btn btn-primary w-md">{{ $btnText }}</button>
</div>
