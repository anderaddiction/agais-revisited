@csrf
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter name') }}" name="name" id="name"
                value="{{ old('name', $payment_gateway->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="country_id">{{ __('Country') }} <span class="text-danger">*</span></label>
            <select class="form-select required" id="country_id" data-trigger name="country_id[]"
                placeholder="{{ __('Select an option') }}" multiple>
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($countries as $id => $name)
                {{-- <option value="{{ $id }}" {{ $id==old('country_id',$payment_gateway->country_id) ? 'selected' : ''
                    }}
                    >{{ $name }}</option> --}}
                <option {{ collect(old('country_id', $payment_gateway->countries->pluck('id')))->contains($id) ?
                    'selected' : '' }}
                    value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="country_idError">{{ $errors->first('country_id') }}</div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="platform">{{ __('Platform') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter platform') }}" name="platform"
                id="platform" value="{{ old('platform', $payment_gateway->platform) }}">
            <div class="pristine-error text-danger" id="platformError">{{ $errors->first('platform') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
            <select class="form-select required" name="status" id="status">
                <option value=" ">{{ __('Select an option') }}</option>
                <option value="1" {{ old('status', $payment_gateway->status) == '1' ? 'selected' : '' }}>@lang('Active')
                </option>
                <option value="0" {{ old('status', $payment_gateway->status) == '0' ? 'selected' : ''
                    }}>@lang('Inactive')
                </option>
            </select>
            <div class="pristine-error text-danger" id="statusError">{{ $errors->first('status') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="note">{{ __('Note') }}</label>
            <textarea class="form-control" name="note" id="note" cols="30"
                rows="5">{{ old('note', $payment_gateway->note) }}</textarea>
        </div>
    </div>
</div>