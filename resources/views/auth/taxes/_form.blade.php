@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter Name') }}" name="name"
                id="name" value="{{ old('name', $tax->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="acronym">{{ __('Acronym') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter Acronym') }}" name="acronym"
                id="acronym" value="{{ old('acronym', $tax->acronym) }}">
            <div class="pristine-error text-danger" id="acronymError">{{ $errors->first('acronym') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="percent">{{ __('Percent') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter percent') }}" name="percent"
                id="percent" value="{{ old('percent', $tax->percent) }}">
            <div class="pristine-error text-danger" id="percentError">{{ $errors->first('percent') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="country_id">{{ __('Country') }} <span class="text-danger">*</span></label>
            <select class="form-select required" id="country_id" name="country_id">
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($countries as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('country_id', $tax->country_id) ? 'selected' : '' }}>{{ $name }}
                    </option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="country_idError">{{ $errors->first('country_id') }}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
            <select class="form-select required" name="status" id="status">
                <option value="1" {{ old('status', $tax->status) == '1' ? 'selected' : '' }}>
                    @lang('Active')
                </option>
                <option value="0" {{ old('status', $tax->status) == '0' ? 'selected' : '' }}>
                    @lang('Inactive')
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
            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ old('note', $tax->note) }}</textarea>
        </div>
    </div>
</div>
