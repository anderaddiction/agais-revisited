@csrf
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter name') }}" name="name" id="name"
                value="{{ old('name', $permission->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="role_id">{{ __('Role') }} <span class="text-danger">*</span></label>
            <select class="form-select required" id="role_id" data-trigger name="role_id[]"
                placeholder="{{ __('Select an option') }}" multiple>
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($roles as $id => $name)
                <option {{ collect(old('role_id', $permission->roles->pluck('id')))->contains($id) ? 'selected'
                    :
                    ''
                    }}
                    value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="role_idError">{{ $errors->first('role_id') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="level">{{ __('Level') }} <span class="text-danger">*</span></label>
            <select class="form-select required" name="level" id="level">
                <option value=" ">{{ __('Select an option') }}</option>
                <option value="1" {{ old('level', $permission->level) == '1' ? 'selected' : '' }}>@lang('Low')
                </option>
                <option value="2" {{ old('level', $permission->level) == '2' ? 'selected' : '' }}>@lang('Medium')
                </option>
                <option value="3" {{ old('level', $permission->level) == '3' ? 'selected' : '' }}>@lang('High')
                </option>
            </select>
            <div class="pristine-error text-danger" id="levelError">{{ $errors->first('level') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
            <select class="form-select required" name="status" id="status">
                <option value=" ">{{ __('Select an option') }}</option>
                <option value="1" {{ old('status', $permission->status) == '1' ? 'selected' : '' }}>@lang('Active')
                </option>
                <option value="0" {{ old('status', $permission->status) == '0' ? 'selected' : '' }}>@lang('Inactive')
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
                rows="5">{{ old('note', $permission->note) }}</textarea>
        </div>
    </div>
</div>