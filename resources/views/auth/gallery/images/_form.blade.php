@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter Name') }}" name="name"
                id="name" value="{{ old('name', $image->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="image">{{ __('Image') }} <span class="text-danger">*</span></label>
            <input type="file" class="form-control required" placeholder="{{ __('Enter Image') }}" name="image"
                id="image" value="{{ old('image', $image->image) }}">
            <div class="pristine-error text-danger" id="imageError">{{ $errors->first('image') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="width">{{ __('Width') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Enter width') }}" name="width"
                id="width" value="{{ old('width', $image->width) }}">
            <div class="pristine-error text-danger" id="widthError">{{ $errors->first('width') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="height">{{ __('Height') }} </label>
            <input type="text" class="form-control" placeholder="{{ __('Enter height') }}" name="height"
                id="height" value="{{ old('height', $image->height) }}">
            <div class="pristine-error text-danger" id="heightError">{{ $errors->first('height') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="category_id">{{ __('Category') }} <span class="text-danger">*</span></label>
            <select class="form-select required" id="category_id" data-trigger name="category_id[]"
                placeholder="{{ __('Select an option') }}" multiple>
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($categories as $id => $name)
                    <option
                        {{ collect(old('category_id', $image->categories->pluck('id')))->contains($id) ? 'selected' : '' }}
                        value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="category_idError">{{ $errors->first('category_id') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
            <select class="form-select required" name="status" id="status">
                <option value="1" {{ old('status', $image->status) == '1' ? 'selected' : '' }}>
                    @lang('Active')
                </option>
                <option value="0" {{ old('status', $image->status) == '0' ? 'selected' : '' }}>
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
            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ old('note', $image->note) }}</textarea>
        </div>
    </div>
</div>
