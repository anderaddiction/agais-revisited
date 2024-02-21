<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" name="errors" id="errors" value="{{ count($errors) }}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="name">{{ __('Name') }}</label>
                            <input type="text" class="form-control required" placeholder="{{ __('Enter name') }}" name="name" id="name"
                                value="{{ old('name', $country->name) }}">
                            <div class="pristine-error text-danger" id="nameError">{{ $errors->first('name') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="iso2">{{ __('ISO2') }}</label>
                            <input type="text" class="form-control required" placeholder="{{ __('Enter ISO2') }}" name="iso2" id="iso2"
                                value="{{ old('iso2', $country->iso2) }}">
                            <div class="pristine-error text-danger" id="Error">{{ $errors->first('iso2') }}</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="iso3">{{ __('ISO3') }}</label>
                            <input type="text" class="form-control required" placeholder="{{ __('Enter ISO3') }}" name="iso3" id="iso3"
                                value="{{ old('iso3', $country->iso3) }}">
                            <div class="pristine-error text-danger" id="Error">{{ $errors->first('iso3') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="continent_id">{{ __('Continent') }}</label>
                            <select class="form-select required" id="continent_id" name="continent_id">
                                <option value="">{{ __('Select an option') }}</option>
                                @foreach ($continents as $id => $name)
                                <option value="{{ $id }}" {{ $id==old('continent_id',$country->continent_id) ? 'selected' : '' }}
                                    >{{ $name }}</option>
                                @endforeach
                            </select>
                            <div class="pristine-error text-danger" id="Error">{{ ($errors->first('continent_id') )}}</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label" for="note">{{ __('Note') }}</label>
                            <textarea class="form-control required" name="note" id="note" cols="30"
                                rows="5">{{ old('note', $country->note) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary w-md btn-save">{{ $btnText }}</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
