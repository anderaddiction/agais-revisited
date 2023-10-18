@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Enter name') }}" name="name" id="name"
                value="{{ old('name', $currency->name) }}">
            <div class="pristine-error text-danger">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="symbol">{{ __('Symbol') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Enter symbol') }}" name="symbol" id="symbol"
                value="{{ old('symbol', $currency->symbol) }}">
            <div class="pristine-error text-danger">{{ $errors->first('symbol') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="iso">{{ __('ISO') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Enter ISO') }}" name="iso" id="iso"
                value="{{ old('iso', $currency->iso) }}">
            <div class="pristine-error text-danger">{{ $errors->first('iso') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="country_id">{{ __('Country') }}</label>
            <select class="form-select" id="country_id" data-trigger name="country_id[]"  placeholder="{{ __('Select an option') }}" multiple>
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($countries as $id => $name)
                <option {{ collect(old('country_id', $currency->countries->pluck('id')))->contains($id) ?
                    'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" style="margin-top: -4%">{{ $errors->first('country_id') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Status') }}</label>
            <select class="form-select" name="status">
                <option value=" ">{{ __('Select an option') }}</option>
                <option value="1" {{ old('status', $currency->status) == '1' ? 'selected' : '' }}>@lang('Active')
                </option>
                <option value="0" {{ old('status', $currency->status) == '0' ? 'selected' : '' }}>@lang('Inactive')
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
                rows="5">{{ old('note', $currency->note) }}</textarea>
        </div>
    </div>
</div>

<div class="mt-4">
    <button type="submit" class="btn btn-primary w-md">{{ $btnText }}</button>
</div>
