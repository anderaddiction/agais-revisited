@csrf
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="name">{{ __('name') }}</label>
            <input type="text" class="form-control required" placeholder="{{ __('Enter name') }}" name="name" id="name" value="{{ old('name', $continent->name) }}">
            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="note">{{ __('Note') }}</label>
            <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ old('note', $continent->note) }}</textarea>
        </div>
    </div>
</div>


