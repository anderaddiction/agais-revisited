@csrf
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter name') }}" name="name" id="name"
                value="{{ old('name', $municipality->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="state_id">{{ __('State') }}</label>
            <select class="form-select required" id="state_id" name="state_id">
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($states as $id => $name)
                <option value="{{ $id }}" {{ $id==old('state_id',$municipality->state_id) ? 'selected' : '' }}
                    >{{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger" id="state_idError">{{ $errors->first('state_id') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="note">{{ __('Note') }}</label>
            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ old('note', $municipality->note) }}</textarea>
        </div>
    </div>
</div>


