@csrf
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter name') }}" name="name" id="name" value="{{ old('name', $category->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Status') }}</label>
            <select class="form-select required" name="status">
                <option value=" ">{{ __('Select an option') }}</option>
                <option value="1" {{ old('status', $category->status) == '1' ? 'selected' : '' }}>@lang('Active')
                </option>
                <option value="0" {{ old('status', $category->status) == '0' ? 'selected' : '' }}>@lang('Inactive')
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
            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ old('note', $category->note) }}</textarea>
        </div>
    </div>
</div>


