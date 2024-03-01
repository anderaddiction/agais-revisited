@csrf
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter name') }}" name="name"
                id="name" value="{{ old('name', $state->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="iso">{{ __('ISO') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter ISO') }}" name="iso"
                id="iso" value="{{ old('iso', $state->iso) }}">
            <div class="pristine-error text-danger" id="isoError">{{ $errors->first('iso') }}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label" for="country_id">{{ __('Country') }} <span class="text-danger">*</span></label>
            <select class="form-select required" data-show-subtext="true" data-live-search="true" id="country_id"
                name="country_id">
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($countries as $id => $name)
                    <option value="{{ $id }}"
                        {{ $id == old('country_id', $state->country_id) ? 'selected' : '' }}>{{ $name }}
                    </option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="country_idError">{{ $errors->first('country_id') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="note">{{ __('Note') }}</label>
            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ old('note', $state->note) }}</textarea>
        </div>
    </div>
</div>
