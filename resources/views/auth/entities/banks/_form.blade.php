@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Enter name') }}" name="name" id="name"
                value="{{ old('name', $bank->name) }}">
            <div class="pristine-error text-danger">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="country_id">{{ __('Country') }}</label>
            <select class="form-select" id="country_id" data-trigger name="country_id[]"  placeholder="{{ __('Select an option') }}" multiple>
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($countries as $id => $name)
                {{-- <option value="{{ $id }}" {{ $id==old('country_id',$bank->country_id) ? 'selected' : '' }}
                    >{{ $name }}</option> --}}
                <option {{ collect(old('country_id', $bank->countries->pluck('id')))->contains($id) ?
                    'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger">{{ $errors->first('country_id') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="capital_type">{{ __('Capital type') }}</label>
            <select class="form-select" id="capital_type" name="capital_type">
                <option value="">{{ __('Select an option') }}</option>
                <option value="1" {{ old('capital_type', $bank->capital_type) == '1' ? 'selected' : '' }}>@lang('Public')
                </option>
                <option value="0" {{ old('capital_type', $bank->capital_type) == '0' ? 'selected' : '' }}>@lang('Private')
                </option>
            </select>
            <div class="pristine-error text-danger">{{ $errors->first('capital_type') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="bank_type">{{ __('Bank Type') }}</label>
            <select class="form-select" id="bank_type" name="bank_type">
                <option value="">{{ __('Select an option') }}</option>
                <option value="1" {{ old('bank_type', $bank->bank_type) == '1' ? 'selected' : '' }}>@lang('Universal')
                </option>
                <option value="2" {{ old('bank_type', $bank->bank_type) == '2' ? 'selected' : '' }}>@lang('Microfinance')
                </option>
                <option value="3" {{ old('bank_type', $bank->bank_type) == '3' ? 'selected' : '' }}>@lang('Municipal Credit Institute')
                </option>
            </select>
            <div class="pristine-error text-danger">{{ $errors->first('bank_type') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Status') }}</label>
            <select class="form-select" name="status">
                <option value=" ">{{ __('Select an option') }}</option>
                <option value="1" {{ old('status', $bank->status) == '1' ? 'selected' : '' }}>@lang('Active')
                </option>
                <option value="0" {{ old('status', $bank->status) == '0' ? 'selected' : '' }}>@lang('Inactive')
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
                rows="5">{{ old('note', $bank->note) }}</textarea>
        </div>
    </div>
</div>

<div class="mt-4">
    <button type="submit" class="btn btn-primary w-md">{{ $btnText }}</button>
</div>
