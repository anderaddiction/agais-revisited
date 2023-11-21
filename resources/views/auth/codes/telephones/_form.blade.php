@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="phone_code">{{ __('Phone Code') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Enter phone code') }}" name="phone_code" id="phone_code"
                value="{{ old('phone_code', $phone_code->phone_code) }}">
            <div class="pristine-error text-danger">{{ $errors->first('phone_code') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="country_id">{{ __('Country') }}</label>
            <select class="form-select" id="country_id" data-trigger name="country_id[]"  placeholder="{{ __('Select an option') }}" multiple>
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($countries as $id => $name)
                <option {{ collect(old('country_id', $phone_code->countries->pluck('id')))->contains($id) ?
                    'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" style="margin-top: -6%">{{ $errors->first('country_id') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Status') }}</label>
            <select class="form-select" name="status">
                <option value=" ">{{ __('Select an option') }}</option>
                <option value="1" {{ old('status', $phone_code->status) == '1' ? 'selected' : '' }}>@lang('Active')
                </option>
                <option value="0" {{ old('status', $phone_code->status) == '0' ? 'selected' : '' }}>@lang('Inactive')
                </option>
            </select>
            <div class="pristine-error text-danger">{{ $errors->first('status') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="note">{{ __('Note') }}</label>
            <textarea class="form-control" name="note" id="note" cols="30"
                rows="5">{{ old('note', $phone_code->note) }}</textarea>
        </div>
    </div>
</div>

<div class="mt-4">
    <button type="submit" class="btn btn-primary w-md">{{ $btnText }}</button>
</div>
