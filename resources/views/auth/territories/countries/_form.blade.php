@csrf
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter name') }}" name="name"
                id="name" value="{{ old('name', $country->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="iso2">{{ __('ISO2') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter ISO2') }}" name="iso2"
                id="iso2" value="{{ old('iso2', $country->iso2) }}">
            <div class="pristine-error text-danger" id="iso2Error">{{ $errors->first('iso2') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="iso3">{{ __('ISO3') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter ISO3') }}" name="iso3"
                id="iso3" value="{{ old('iso3', $country->iso3) }}">
            <div class="pristine-error text-danger" id="iso3Error">{{ $errors->first('iso3') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="continent_id">{{ __('Continent') }} <span
                    class="text-danger">*</span></label>
            <select class="form-select required" id="continent_id" name="continent_id">
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($continents as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('continent_id', $country->continent_id) ? 'selected' : '' }}>{{ $name }}
                    </option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="continent_idError">{{ $errors->first('continent_id') }}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="note">{{ __('Note') }}</label>
            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ old('note', $country->note) }}</textarea>
        </div>
    </div>
</div>
