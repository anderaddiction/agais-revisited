@csrf
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" placeholder="{{ __('Enter name') }}" name="name" id="name"
                value="{{ old('name', $parish->name) }}">
            <div class="pristine-error text-danger">{{ $errors->first('name') }}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="municipality_id">{{ __('Municipality') }}</label>
            <select class="form-select" id="municipality_id" name="municipality_id">
                <option value="">{{ __('Select an option') }}</option>
                @foreach ($municipalities as $id => $name)
                <option value="{{ $id }}" {{ $id==old('municipality_id',$parish->municipality_id) ? 'selected' : '' }}
                    >{{ $name }}</option>
                @endforeach
            </select>
            <div class="pristine-error text-danger">{{ $errors->first('municipality_id') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="note">{{ __('Note') }}</label>
            <textarea class="form-control" name="note" id="note" cols="30"
                rows="5">{{ old('note', $parish->note) }}</textarea>
        </div>
    </div>
</div>

<div class="mt-4">
    <button type="submit" class="btn btn-primary w-md">{{ $btnText }}</button>
</div>
